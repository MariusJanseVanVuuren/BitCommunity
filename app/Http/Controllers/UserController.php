<?php
namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller {
   public function befriend(Request $request) {
     $users = User::all();
     $friend_id = $request['requested_friend_id'];
     $friend = $users->filter(function ($user) use($friend_id) {
       if ($user->id == $friend_id) {
         return $user;
       }
     })->values()->first();

     Auth::user()->addFriend($friend);
     return redirect()->route('home');
   }

   public function dropFriend(Request $request) {
     $users = User::all();
     $friend_id = $request['requested_friend_id'];
     $friend = $users->filter(function ($user) use($friend_id) {
       if ($user->id == $friend_id) {
         return $user;
       }
     })->values()->first();

     Auth::user()->removeFriend($friend);
     return redirect()->route('home');
   }

   public function viewFriends() {

     $users = User::all();
     $potential_friends = $users->filter(function ($potential_friend) {
       $current_user = Auth::user();
       if ($potential_friend->id !=  $current_user->id) {
          if ($current_user->friends()->where('id', $potential_friend->id)->count() == 0) {
            return $potential_friend;//filter
          }
       }
     })->values();


     $friends = Auth::user()->friends;
     return view('friends', ['friends' => $friends, 'potential_friends' => $potential_friends]);
   }

}
