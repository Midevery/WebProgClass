@extends('layouts.front')

@section('content')

<div>
    @if(session('success'))
    <div class = "alert alert-info mb-5">
        Data berhasil dimasukkan
    </div>
    @endif

    <form action="{{route('session.store')}}" method="POST">
        @csrf

        <div>
            <p>Nama:</p>
            <input type="text" name="nama" class="form-control">
        </div>

        <div>
            <p>Alamat:</p>
            <input type="text" name="alamat" class="form-control">
        </div>

        <div>
            <p>Telepon:</p>
            <input type="text" name="telpon" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Submit data</button>
        </div>
    </form>
</div>

@endsection
