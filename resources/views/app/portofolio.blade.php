@extends('layouts.front')
@section('title', 'portofolio kami')

@section('content')

<div class="container px-4 py-5">
    <h2>
        Portofolio Kami
    </h2>
    <div class="row">
        @foreach ($portofolios as $portofolio)
            <div class="col-lg-4 col-md-6 m-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{asset($portofolio->image)}}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $portofolio->title }}
                            </h5>
                            <p class="card-text">
                                {{$portofolio->category->name}}
                            </p>
                            <p class="card-text">
                                {{ $portofolio->description }}
                            </p>
                        </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection