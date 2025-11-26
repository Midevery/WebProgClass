@extends('layouts.front')

@section('content')

<div>
    <form action="/session/set" method="POST">
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
