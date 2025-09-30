@extends('layouts.front')

@section('title', 'Welcome')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
  <div class ="container-fluid">
    <h1 class="display-4 fw-bold">Selamat datang di it consultant kami</h1>
    <p class="lead col-lg-8 mx-auto">Kami hadir untuk membantu anda menyelesaikan permasalahan seputar software 
      development. produk yang bisa kami tawarkan adalah konsultasi seputar mobile dan web application
    </p>
    <p>
      <a class="btn btn-primary" href="#" >Mulai sekarang</a>
      <a href="#" class="btn btn-outline-danger"> pelajari lebih lanjut</a>
    </p>
  </div>

  <div class="container py-5">
    <div class="row">
      <div class="col text-center">
        <h1>Kenapa memilih kami?</h1>
      </div>
    </div>

  </div>
  <div class="row text-center">
    <div class="col-md-4">
      <h3>Clean UI phylosophy</h3>
      <p>Semua aplikasi yang kami kembangkan memiliki UI yang bersih dan intuitif, dirancang agar anda dapat bisa 
        langsung menggunakan tanpa perlu panduan yang rumut
    </div>

    <div class="col-md-4">
      <h3>Fitur Lengkap</h3>
      <p>Aplikasi yang kami kemabngkan berdasarkan kebutuhan anda secara menyeluruh. tidak ada fitu yang sengaja kamu lewatkan</p>
    </div>

    <div class="col-md-4">
      <h3>Dukungan Terbaik untuk Anda</h3>
      <p>Clien merupakan pihak yang selalu kami junjung. tinggi . tim kami sellau siap membantu jika anda mengalami kendala setelah proses </p>
    </div>
  </div>
</div>
  
@endsection
