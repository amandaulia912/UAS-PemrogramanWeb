<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User;

class GoogleController extends Controller {
    public function login_google()
     {
         return view('login-google');
     }
 
     public function redirect()
     {
         return Socialite::driver('google')->redirect();
     }
 
     public function callback()
     {
         try {
             $googleUser = Socialite::driver('google')->stateless()->user();
             $user = User::where('email', $googleUser->email)->first();
 
             if(!$user) {
                 $user = User::create([
                     'name' => $googleUser->name,
                     'email' => $googleUser->email,
                     // Additional user details can be saved here
                 ]);
             }
 
             Auth::login($user);
 
             return redirect()->route('home.landing');
         } catch (\Exception $e) {
             // Log the error message
             \Log::error($e->getMessage());
 
             // Redirect back with an error message
             return redirect()->route('dashboard')->with('error', 'Failed to authenticate using Google. Please try again.');
         }
     }
}
