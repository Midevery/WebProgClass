<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Portofolio;


class PortofolioController extends Controller
{
    //fungsi index untuk menampilkan halaman index
    //index akan ditampilkan dalam bentuk table

    public function index(){
        $portofolios = Portofolio::with('category')->latest()->paginate(10);
        return view('app.portofolios.index', ['portofolios'=>$portofolios]);
    }

    //create untuk render halaman create

    public function create(){
        // syntax untuk mendapatkan semua data dari database
        $categories = Category::all();
        return view('app.portofolios.create', ['categories'=> $categories]);
    }

    // store untuk render data yang distore
    public function store(Request $req){
        //validasi
         $req->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'description'=> 'required'
         ]);

        //pengecekan data

         //isi data
         Portofolio::create([
            'category_id' => $req->category_id,
            'title' => $req->title,
            'description' => $req->description,
            'image' => 'images/image1.jpg'
         ]);

         return redirect()->route('portofolios.index');
    }
}
