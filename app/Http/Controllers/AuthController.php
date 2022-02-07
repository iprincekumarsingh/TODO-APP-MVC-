<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // session()->flush();
        if (session()->has('isLoggedIn')) {
            return redirect()->route('user.home');
        } else {
            return view('login');
        }
    }
    public function login(Request $request)
    {
        $uid = "";
        $name = "";
        $pass = md5($request['password']);
        $user = UserModel::select('uid', 'username', 'name')->where('username',  $request['username'])
            ->where('password', $pass)->get();
        foreach ($user as  $users) {
            $uid = $users['uid'];
            $name = $users['name'];
        }

        $num = count($user);
        if ($num == 1) {
            session()->put('isLoggedIn', 1);
            session()->put('uid', $uid);
            session()->put('name', $name);
            return 1;
        } else {
            echo "Usernot found";
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup()
    {
        return view('signup');
    }
    public function create(Request $request)
    {
        $user = UserModel::select('username', 'email')->where('username',  $request['username'])
            ->where('email', $request['email'])->get();

        $num = count($user);

        if ($num >= 1) {
            return "Username & email Already exist";
        } else {
            $newuser = new UserModel;
            $newuser->name = $request['name'];
            $newuser->username = $request['username'];
            $newuser->email = $request['email'];
            $newuser->password = md5($request['password']);
            $newuser->save();
            return "Sucessfull Registerd";
        }
    }
    public function home(Request $request)
    {
        if (session()->has('isLoggedIn')) {
            return view('dashboard.todo');
        } else {
            return redirect()->route('user.index');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
