<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;


class AuthController extends Controller
{

    public function index(){
        return view('auth.login');
    }

    public function showRegister(){
        return view('auth.register');
    }

     public function dashboard(){
        return view('dashboard');
    }

    public function register(Request $request){

        $validator = Validator::make($request->all(), [
      'name'=>'required',
      'email'=>'required|email|unique:users',
      'mobile'=>'required|unique:users',
      'password'=>'required'

     ]);

     $user=user::create(
        [
        'name'=>$request->name,
        'email'=>$request->email,
        'mobile'=>$request->mobile,
        'password' => Hash::make($request->password)
        ]);

        $token=JWTAuth::fromUser($user);
        return response()->json(['message'=>'register successsfully','token'=>$token]);

    }


    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        
       
        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        return redirect('/dashboard')->with('token', $token);
        
        
    
    }

   





   
}
