<?php
namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller {
   public function postCreatePost(Request $request) {
      $post = new Post();
      $post->body = $request['body'];
      $request->user()->posts()->save($post);
      return redirect()->route('home');
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
     public function index()
     {
       $posts = Post::orderBy('created_at', 'desc')->get();
       return view('home', ['posts' => $posts]);
     }
}
