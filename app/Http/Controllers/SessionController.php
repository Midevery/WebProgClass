<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //set session jika tidak ada maka tidak perlu
    public function index(){
        return view('app.indexSession');
    }
    public function getSession(){
        $name = session()->get('nama', 'Random nama');
        return view('app.viewSession', ["name" => $name]);
        // return 'value of name is: '.$name;
    }
    public function deleteSession(){

    }
    public function storeSession(Request $request){
        dd($request);
        //ingin store data ke session tapi belum ke database
       
        session()->put(
            [
                "nama" => $request->nama,
                "alamat" => $request->alamat,
                "telepon" => $request->telepon
            ]
        );
        dd(session());
        
        return 'data stored';
    }
}
