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
       $users = User::all();
       $friends = $users->filter(function ($potential_friend) {
         $current_user = Auth::user();
         if ($potential_friend->id !=  $current_user->id) {
            if ($current_user->friends()->where('id', $potential_friend->id)->count() == 0) {
              return $potential_friend;//filter
            }
         }
       })->values();


       $posts = Post::orderBy('created_at', 'desc')->get()->filter(function ($post) {
         $current_user = Auth::user();
         if (($post->user->id == $current_user->id) ||
             ($current_user->friends()->where('id', $post->user->id)->count() != 0)) {
           return $post;
         }
       });
       return view('home', ['posts' => $posts, 'friends' => $friends]);
     }
}
