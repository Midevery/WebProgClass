<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Portofolio;
use App\Models\Category;

class FrontController extends Controller
{
    //
    public function index(){
        return view('app.welcome');
    }
    public function about(){
        return view('app.about');
    }
    //untuk akses halaman portofolio
    public function portofolio(){
        //ambil data portofolio terbaru bersamaan dengan relasiny
        $portofolios = Portofolio::with('category')->get();
        return view('app.portofolio', ['portofolios'=>$portofolios]);
    }

    public function portofolioDetail($id){
        // menggunakan fungsi find or fail. find untuk datap row berdasarkan id, fail akan memberikan halaman 404 jika
        //tidak ditemukan
        $portofolio = Portofolio::with('category')->findOrFail($id);
        return view('app.portofolioDetail', ['portofolio'=>$portofolio]);
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
