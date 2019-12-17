<?php

namespace app\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{

   public function register(Request $request)
   {
   // dd($request->email);
        $validatedData = $request->validate([
            'name'=>'required|max:55',
            'email'=>'email|required|unique:users',
            'password'=>'required|confirmed'
        ]);
       // dd($request->email);
        $validatedData['password'] = bcrypt($request->password);
        $user = User::create($validatedData);
        //$accessToken = $user->createToken('authToken')->accessToken;
        return response(['user'=> $user]);
       
   }

   public function login(Request $request)
   {
       
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
       
        if(!auth()->attempt($loginData)) {
            return response(['message'=>'Invalid credentials']);
        }

        //dd(Auth::user()->name);
       // $accessToken = Auth::user()->createToken('Token')->accessToken;
        return response(['user' => auth()->user()]);

   }

}