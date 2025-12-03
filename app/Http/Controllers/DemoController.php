<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index(){
        return view('app.demo.index');
    }
    public function restricted(){
        return view('app.demo.restricted');
    }
    public function login(){
        return view('app.demo.login');
    }
    public function logout(Request $req){
        $req->session()->forget('user_id');
        return redirect()->route('demo.index');
    }
    public function auth(Request $req){
        if($req->email == 'admin@gmail.com' && $req->password == 'password'){
            $req->session()->put('user_id', 1);
            return redirect()->route('demo.restricted');
        }else{
            return redirect()->route('demo.login')->withErrors([
                'invalid credentials'
            ]);
        }
    }
    public function profile(){
        return view('app.demo.profile');
    }
    public function dashboard(){
        return view('app.demo.dashboard');
    }
}
