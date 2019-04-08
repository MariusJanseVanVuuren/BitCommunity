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

class ProfileController extends Controller {
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
     public function view() {
       if (Auth::user() == null) {
          return view('home');
       }
       return view('profile');
     }

     public function edit() {
       if (Auth::user() == null) {
          return view('home');
       }
       return view('edit_profile');
     }

     public function changePassword() {
       if (Auth::user() == null) {
          return view('home');
       }
       return view('reset_password');
     }

     public function update(Request $request) {
        $user = Auth::user();
        if ($request['name'] != null && $request['name'] != '') {
            $user->name = $request['name'];
        }
        if ($request['email'] != null && $request['email'] != '') {
            $user->email = $request['email'];
        }

        $user->save();
        return view('/profile');
     }

     /**
      * Get a validator for an incoming registration request.
      *
      * @param  array  $data
      * @return \Illuminate\Contracts\Validation\Validator
      */
     protected function validator(array $data)
     {
         return Validator::make($data, [
             'name' => ['required', 'string', 'max:255'],
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
             'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
         ]);
     }

     public function updatePassword(Request $request) {
        $user = Auth::user();
        $user->password = Hash::make($request['password']);
        $user->save();
        return view('/profile');
     }
}
