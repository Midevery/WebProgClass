@extends('layouts.front')


@section('content')

<div class ="">
<!-- ambil data nama, alamat, phone number, store ke session -->
    <div>
        <p>Nama: </p>
        <input type="text" name="name" id ="nama" class="form-control">
    </div>
    <div>
        <p>Tempat tinggal: </p>
        <input type="text" name="alamat" id ="alamat" class="form-control">
    </div>
    <div>
        <p>Tempat tinggal: </p>
        <input type="text" name="telpon" id ="telpon" class="form-control">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Submit data</button>
    </div>
</div>

@endsection