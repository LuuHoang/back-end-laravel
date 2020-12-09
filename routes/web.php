<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\BtbaController;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Psy\CodeCleaner\FunctionContextPass;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/welcome',function(){
//     return "HelloWorld";
// });
Route::get('/welcome',function(){
    return view('welcome',['name'=>'Hoang']);
});
Route::get('/post/welcome',function(){
    return view('post.index',['name'=>'Hoang']);
});
// truy cập vào function index được viết trong Homecontroller.
Route::get('/home',[HomeController::class,'index']); 

// truyen tham so tren url 
// co cham hoi là có thể có tham số hoặc không , 
Route::get('/home/{nameUser?}',[HomeController::class,'nameUser']);

//Route::get('/work',[HomeController::class,'title']);
/**
 * Điều hướng đến 1 trang web , đường dẫn khác
 */
//Route::get('/work',[HomeController::class,'redirects']);
/**
 * Call back đường dẫn trước đấy.
 */
//Route::get('/work',[HomeController::class,'callBack']);


Route::get('/response',function(){
    return [1,2,3];
});


// Flashed Data
// gửi dữ liệu từ DemoController sang HomeController
Route::get('/post',[DemoController::class,'flashedData']);

Route::get('/testFlashedData',[HomeController::class,'testFlashedData']);



// middleware
// ten check_token giong ten đã đặc trong file Kernel.php
Route::get('/homes' ,function(){
    return 'Home Page';
})->middleware(['role:admin','after_middleware']); 

Route::get('/login', function () {
    return view('welcome',['name'=>'Hoang']);
});


// bt3
Route::get('/bt3',function(){
    return view('post.bt3');
});
Route::post('btba.php',[BtbaController::class,'validate']);

//BTVN
Route::get('/login_user',function(){
    return view('post.login');
});
Route::post('logined.php',[DemoController::class,'saveSessionUser']);

Route::get('/checkUser',function(){ 
    return 'Session dang luu';
})->middleware('check_login');


// Lấy data 
Route::get('/getdata',function(){
    // $userfirst= DB::table('users')->first();

    //$userfirst= DB::table('users')->where('name','Nettie Leuschke')->first();
    //$allposts= DB::table('posts')->get();
    $allposts= DB::table('posts')->paginate(20);
    //dd($userfirst);
    return view('post.btbuoibon',compact('allposts'));
});

// blade
Route::get('/blade',function(){
    return view('child');
});

Route::get('/extendlayout',function(){
    return view('extendlayout');
});

// Eloquent Model 

Route::get('/eloquent',function(){
    //$post=Post::query()->find(106);       // hạn chế dùng find để tránh trường hợp lỗi
    //$post=Post::query()->findOrFail(1);   // nên dùng findOrFail tránh trường hợp lỗi 
    $post=Post::query()->where('title','Miss')->first(); // lấy cái đầu tiên . với cái title là Miss
    dd($post);
});

Route::get('/eloquentAdd',function(){
    // C1
    // $post= new Post();
    // $post->title='Abc';
    // $post->save(); 

    //C2
    //$post = new Post(['title'=> 'CBA']);
    //$post->save();

    // C3
    //$post = Post::query()->create(['title'=> 'BBB']);
    //$post->save();
    return view('/getdata');
});
Route::get('/eloquentUpdate',function(){
    // C1
    // $post= new Post();
    // $post->title='Abc';
    // $post->save(); 

    //C2
    // $post = Post::query()->find(100);
    // $post->update(['title' => 'Hoang']);

    // C3
    // $post = Post::where('id'>100);
    // $post->update(['title' => 'Hoang']);
    return view('post.login');
});
Route::get('/eloquentDelete',function(){
    //C1
    // $post = Post::query()->find(103);
    // $post->delete();

    // C2
    //Post::where('id',102)->delete();

    return view('post.login');
});

Route::get('/eloquentSelect',function(){
    $post=Post::query()->whereIn('user_id',function(Builder $query){
        return $query->select('id')->from('users')->where('email','cremin.edwin@example.net');
    })->get();

    dd($post);
});

// Query Scope 

Route::get('/queryScope',function(){
    $post=Post::query()->where('title','Miss')->firstOrFail();

    //$post=Post::query()->withoutGlobalScope()->where('title','Miss'); // tắt Global 

    dd($post->toSql());
});

// CRUD 

Route::get('/bt6',function(){
    return view('post.bt6');
});
Route::post('btsau.php',[BtbaController::class,'insert']);

Route::post('edit.php',[BtbaController::class,'beforeUpdate']);
Route::post('update.php',[BtbaController::class,'update']);
Route::post('delete.php',[BtbaController::class,'delete']);