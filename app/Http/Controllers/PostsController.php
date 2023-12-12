<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function indexAction(){
        $posts = Post::orderBy("created_at","desc")->paginate(10);
        return view('blog.index',['posts' => $posts]);
    }
    public function createAction(){
        return view('blog.create');
    }
    public function storeAction(Request $request){
        // dd($request);
        $validationdata = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['required', 'mimes:jpg,bmp,png', 'max:5048']
        ]);
        $slug=Str::slug($request->title,"-");
        $extension = $request->file('image')->extension();
        $newImageName=uniqid()."-".$slug.".".$extension;
        $request->image->move(public_path("images"), $newImageName);
        $post=Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $slug,
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('blog.index');
    }
    public function showAction($post){
        $post = Post::findOrFail($post);
        return view('blog.show',['post'=> $post]);
    }
    public function editAction($post){
        $post = Post::findOrFail($post);
        return view('blog.edit',['post'=> $post]);
    }
    public function updateAction(Request $request, $post){
        $post = Post::findOrFail($post);
        $validationdata = $request->validate([
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);
        $slug=Str::slug($request->title,"-");
        $newPost = $post->update([
            "title" => $request->input("title"),
            "description" => $request->input("description"),
            "slug" => $slug,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('blog.index')->with('message',"edited successfully");
    }
    public function destroyAction($post){
        $post = Post::where('id',$post)->delete();
        return redirect()->route("blog.index")->with("message","deleted successfully");
    }
}