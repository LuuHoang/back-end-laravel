<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('post.login');
    }
    public function auth(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/bt3');
        }
        return back();
    }
    public function logout(){
        Auth::logout();
        return redirect('/logout');
    }
}
