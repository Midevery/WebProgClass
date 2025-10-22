<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class FrontController extends Controller
{
    //
    public function index(){
        return view('app.welcome');
    }
    public function about(){
        return view('app.about');
    }
    
    public function dummySave(){
        $portofolio = new Portfolio();
        $portofolio->title = "Portfolio";    
        $portofolio->description = "Deskripsi portofolio";
        $portofolio->image_url = "image1.jpg";
        $portofolio->link = "https://youtube.com";
        $portofolio->save();

        dump($portofolio);
    }

    public function dummyUpdate($id){
        $portofolio = Portfolio::find($id);
        if($portofolio){
            $portofolio->title = "Portfolio Pertama";
            $portofolio->save();
            dump($portofolio);
        }else{
            return "Data tidak ditemukan";
        }
    }

    public function dummyDelete($id){
        $portofolio = Portfolio::find($id);
        if($portofolio){
            $portofolio->delete();
            dump($portofolio);
        }else{
            return "Data tidak ditemukan";
        }
    }
}
