<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    private $user;
    public function __construct(UserRepository $user)
    {
       $this->user=$user;
    }
    public function getInfo(){
        if(Auth::id()!=null){
            return $this->user->getById(Auth::id());
        }else{
            return response()->json('not confirmed identity');
        }
        
    }
}
