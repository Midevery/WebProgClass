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
        $name = session()->get('nama', 'test nama');
        $alamat = session()->get('alamat', 'test alamat');
        $telepon = session()->get('telpon', 'test telepon');
        return view('app.viewSession', ["name" => $name, 'alamat' => $alamat,
         'telpon'=> $telepon]);
        // return 'value of name is: '.$name;
    }
    public function deleteSession(){
        session()->flush();
        //kalau ingin menghapus satu data saja
        //session()->forget('key')
        return "session berhasil dikosongkan";
    }
    public function storeSession(Request $request){
        //ingin store data ke session tapi belum ke database
       
        session()->put(
            [
                "nama" => $request->nama,
                "alamat" => $request->alamat,
                "telpon" => $request->telpon
            ]
        );
        //redirect juga akan membuat sebuah session flash dengan key success
        return redirect()->route('session.set')->with('success', 'data berhasil disimpan');
    }
}
