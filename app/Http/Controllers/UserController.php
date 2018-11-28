<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $page = "";
        if($request->page){
          $page = $request->page;
          echo $page;
        }
        $users = User::orderBy('id', 'desc')->paginate(5);

        return view('user.index', compact('users', 'page'))
        ->with([
          'title' => 'Users',
          'subtitle' => 'Introduction CRUD'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create')
        ->with([
          'title' => 'Add User',
          'subtitle' => 'Introduction CRUD'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        User::create($request->all());
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //
        $page = $request->page;
        $user = User::find($id);
        if(empty($user)){
          abort(404);
        }
        return view('user.show',compact('user', 'page'))
        ->with([
          'title' => 'Show User Information',
          'subtitle' => 'Introduction CRUD'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        // DB::select('select * from employees where id = ?', [$id]);
        return view('user.edit',compact('user','id'))
        ->with([
          'title' => 'Edit User Information',
          'subtitle' => 'Introduction CRUD'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
