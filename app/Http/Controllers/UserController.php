<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function login(Request $request){

        // $validator = Validator::make($request->all(),[
        //     'email' => "required|email",
        //     'password' => "required"
        // ]);
        // if($validator->fails()){
        //     return redirect('login')->withErrors($validator)->withInput();
        // }

        // $user = User::where(['email'=> $request->email])->first();
        // if(!$user || !Hash::check($request->password,$user->password)){
        //     return redirect('login')->with('error', 'Invalid email/password');
        // }else{

        //     $request->session()->put('user',$user);
        //     return redirect('/');
        // }
        $validator = Validator::make($request->all(), [
            'email' => "required|email",
            'password' => "required"
        ]);
        
        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        }
        
        $user = User::where(['email' => $request->email])->first();
        
        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect('login')->with('error', 'Invalid email/password');
        } else {
            $request->session()->put('user', $user);
            return redirect('/');
        }
        
    }

    public function logout(Request $request){
        $request->session()->forget('user'); 
        Auth::logout(); 
        return redirect('/login'); 
    }
}
