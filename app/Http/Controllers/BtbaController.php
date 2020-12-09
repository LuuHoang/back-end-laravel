<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
class BtbaController extends Controller
{
    //
    public function validate(Request $request, array $rules, array $messages = [], array $customAttributes = [])
    {
        if($request->input('slug') == null){
            return view('post.bt3');
        }else if($request->input('title') == null){
            return view('post.bt3');
        }else if($request->input('description') == null){
            return view('post.bt3');
        }else{
            return $request->input('slug') .' '. $request->input('title') .' '.$request->input('description');
        }
    }
    public function insert(Request $request)
    {
        if($request->input('slug') == null){
            return view('post.bt6');
        }else if($request->input('title') == null){
            return view('post.bt6');
        }else if($request->input('description') == null){
            return view('post.bt6');
        }else{
            // insert data;
            $post= new Post();
            $post->title=$request->input('title');
            $post->save();
            $allposts= DB::table('posts')->paginate(20);
        //dd($userfirst);
        return view('post.btbuoibon',compact('allposts'));
        }
    }
    public function beforeUpdate(Request $request){
        $id=$_POST['valueUpdate'];
        $post=Post::find($id);
        return view('post.edit',compact('post'));
    }
    public function update(Request $request)
    {
        if($request->input('slug') == null){
            return view('post.bt6');
        }else if($request->input('title') == null){
            return redirect()->back();
        }else if($request->input('description') == null){
            return view('post.bt6');
        }else{
            // update data;
            $id=$_POST['valueUpdate'];
            $title=$_POST['title'];
            $post = Post::query()->find($id);
            $post->update(['title' => $title]);
            $allposts= DB::table('posts')->paginate(20);
            //dd($userfirst);
            return view('post.btbuoibon',compact('allposts'));
        }
    }
    public function delete(Request $request)
    {
        // delete data;
        $id=$_POST['valueDelete'];
        Post::where('id',$id)->delete();
        $allposts= DB::table('posts')->paginate(20);
        //dd($userfirst);
        return view('post.btbuoibon',compact('allposts'));
    }
}
