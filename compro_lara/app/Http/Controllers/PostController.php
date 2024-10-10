<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //


    public function index(){
        return view('');
    }   

    public function add(){
        $postblog = Post::create([
            'title' => $req->title,
            'slug' => $req->slug,
            'content' => $req->content,
            'author' => $req->author,
            'category' => $req->category,
            'status' => $req->status,
            'published_at' => $req->published_at

        ]);
        return view('');
    }

    public function edit(){
        $editblog = Post::where('post_id', $req->id)->update([
            'title' => $req->title,
            'slug' => $req->slug,
            'content' => $req->content,
            'author' => $req->author,
            'category' => $req->category,
            'status' => $req->status,
            'published_at' => $req->published_at
        ]);
        return view('');
    }   

    public function delete(){
        $deleteblog = Post::where('post_id', $req->id)->delete();
        return view('');
    }   


}
