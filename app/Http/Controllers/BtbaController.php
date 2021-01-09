<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Dotenv\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\PostCollection;
use Illuminate\Support\Facades\Gate;

class BtbaController extends Controller
{
    //
    public function all_posts(){
        $allposts= DB::table('posts')->paginate(20);
        return view('post.btbuoibon',compact('allposts'));
    }
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
            if(Gate::allows('update-post',$post)){
                $post->update(['title' => $title]);
            }else{
                dd('ban ko co quyen');
            }
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
    public function insertPostCategory(Request $request){
        if($request->input('slug') == null){
            return view('post.bt6');
        }else if($request->input('title') == null){
            return view('post.bt6');
        }else if($request->input('description') == null){
            return view('post.bt6');
        }else if($request->input('categories')==null){
            return view('post.bt6');
        } 
        else {
            $title=$request->input('title');
            $category_id=$request->input('categories');
            $user=User::query()->find(2);
            $post=$user->posts()->create(
                ['title' => $title,]
            );
            $post->categories()->attach($category_id);
            $allposts= DB::table('posts')->paginate(20);
             return view('post.btbuoibon',compact('allposts'));
        }
    }
    public function store(StorePostRequest $request){
        //$request->file('image')->store('image');
        // ben client 
        // $request->validate([
        //     'slug'=>'required',
        //     'title'=>'required|unique:posts',
        //     'image'=>'required',
        //     'description'=>'required',
        //     'categories'=>'required'
        // ]);
        // thay đổi message trong required - lang - validation 
        // ben server
        // $validator=Validator::make($request->all(),[
        //     'title'=>[
        //         'required',
        //         'max:255',
        //         function($attribute,$value,$fail){
        //             if($value==='foo'){
        //                 $fail($attribute.' is invalid.');
        //             }
        //         },
        //     ]
        // ]);
        // them anh vào file public 
        //$post=Post::query()->create()
        // $file=$request->file('image');
        // $file->move('upload', $file->getClientOriginalName());
        // dd($request->file('image'));

        // VUEJS
        $post = new Post([
            'title' => $request->get('title'),
          ]);
    
          $post->save();
    
          return response()->json('success');
    }
    public function index()
    {
        return new PostCollection(Post::all());
    }

    public function edit($id)
    {
      $post = Post::find($id);
      return response()->json($post);
    }

    public function updatepost($id, Request $request)
    {
      $post = Post::find($id);

      $post->update($request->all());

      return response()->json('successfully updated');
    }

    public function deletepost($id)
    {
      $post = Post::find($id);

      $post->delete();

      return response()->json('successfully deleted');
    }

}
