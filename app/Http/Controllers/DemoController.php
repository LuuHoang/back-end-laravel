<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
class DemoController extends Controller
{
    //
    public function redirect(){
        return redirect()->route('another');
    }
    public function flashedData(){
        return redirect()->action([HomeController::class,'testFlashedData'])->with('status','Successful');
    }
    public function index(){
        return 'Hello DemoController';
    }
    public function saveSessionUser(Request $request){
        if($request->input('email') == null){
            return view('post.login');
        }else if($request->input('password') == null){
            return view('post.login');
        }else{
            $request->session()->put('user',$request->input('email'));
            $request->session()->put('pass',$request->input('password'));
            return 'Session dang luu';
        }
    }
}
