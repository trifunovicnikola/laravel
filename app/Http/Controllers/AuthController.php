<?php

namespace App\Http\Controllers;
use App\Models\User;


//use http\Cookie;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request)
    {
//        return User::create([
//            'username'=>$request->input('username'),
//            'password'=>Hash::make($request->input('password'))
//
//            ]);
        $user = new User();
        $user->username =$request->input('username');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return $user;

    }
    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('username','password')))
        {

            return response([
                'message'=>'Invalid credentials'
            ],Response::HTTP_UNAUTHORIZED);
        }
        $user= Auth::user();
        $token = $user->createToken('token')->plainTextToken;
        $cookie = cookie('jwt', $token, 60*24);
        return response([
            'message'=>$token
        ])->withCookie($cookie);
    }

    public function user()
    {
        return Auth::user();
    }
    public function logout()
    {
        $cookie = Cookie::forget('jwt');
        return response([
            'message'=>'success'
        ])->withCookie($cookie);
    }
}
