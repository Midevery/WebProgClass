
@extends('layouts.front')

@section('title', 'Portofolio Client Kami')
@section('content')

<div class="container col-lg-12 px-4 py-5">
    <div class="row align-items-center g-5 py-5">
        <div class = "col-lg-6">
            <h1 class="display-5 mb-5">Portofolio Client Kami</h1>
            <p class = "lead">Kami Bangga telah bekerja dengan berbagai industri.berikut adalah beberapa project terbaru kami</p>
        </div>
        <div class = "col-lg-6">
            <img src="{{asset('images/teamMeeting.jpg')}}" alt="Projek kami" width="500" height="300">
        </div>
    </div>
    <div class = "container px-4 py-5">
        <h2 class= "text-center mb-5">Portofolio Proyek Kami</h2>
        <div class = "row">
            @foreach ($portfolio as $p)
                <div class= "col-lg-4 col-md-4">
                    <div class = "card border-0 shadow-sm h-100">
                        <img src="{{asset('images/image1.jpg')}}" alt="Projek kami" class = "card-img-top">
                        <div class = "card-body">
                            <h3 class = "card-title"> {{$p->title}}</h3>
                            <p class="card-text"> {{$p->description}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection