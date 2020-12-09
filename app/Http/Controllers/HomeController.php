<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    //
    public function index(){
        return 'Hello HomeController';
    }
    public function nameUser($nameUser)
    {
        return 'Hello ' .$nameUser;
    }
    public function title(Request $request)
    {
        // dd($request->only(['name','id'])); // return param name , id
        //dd($request->all()); return all param in url
        //dd($request->path()); // return work
        //dd($request->url()); // return http://localhost:8000/work
        return view('post.homework', ['nameTitle'=>'NameTitle']);
    }
    public function demo()
    {
       return response('Hello World')->cookie('key','hahaha',10);
    }
    public function redirects(){
        return redirect('post/welcome');
    }
    public function callBack()
    {
        # code...
        return back()->withInput();
    }
    public function testFlashedData(){
        return view('post.homework',['nameTitle'=>'NameTitle']);
    }
    
}
