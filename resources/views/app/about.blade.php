@extends('layouts.front')
@section('title', 'About Us')

@section('content')
<div class="container px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="{{asset('images/teamMeeting.jpg')}}" alt="team_meeting" width = "500" height="300">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold">Tentang IT Consultan</h1>
      <p class="lead">
        kami merupakan perusahaan yang berdedikasi dalam mengembangkan tingkat adopsi penggunaan software dan bidang IT bagi masyarakat. Kami memberikan solusi yang inovatif namun tetap terjangkau baik bagi kalangan menengah atas ataupun bagi pihak-pihak UMKM yang membutuhkan. Kami selalu berkomitmen untuk menjaga integritas, kualitas serta kepuasan pelanggan
      </p>
    </div>
  </div>
</div>
<div class="container">
  <h2 class="pb-2 border-bottom text-center">
    Tim Hebat di Balik Layar
  </h2>
  <div class="row g-4 row-cols-1 row-cols-lg-3 px-4 py-4">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card border-0 shadow-sm h-100">
        <img src="{{asset('images/image3.jpg')}}" alt="team_meeting" width = "400" height="300">
        <div class="card-title">
          <h2 class="card-title">Frandy </h2>
          <p class="card-text">Project Manager</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card border-0 shadow-sm h-100">
        <img src="{{asset('images/image1.jpg')}}" alt="team_meeting" width = "400" height="300">
        <div class="card-title">
          <h2 class="card-title">Frandy</h2>
          <p class="card-text">Project Manager</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card border-0 shadow-sm h-100">
        <img src="{{asset('images/image2.jpg')}}" alt="team_meeting" width = "400" height="300">
        <div class="card-title">
          <h2 class="card-title">Frandy</h2>
          <p class="card-text">Project Manager</p>
        </div>
      </div>
    </div>
  </div>
    
  </div>
</div>
@endsection     