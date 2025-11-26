@extends('layouts.front')


@section('content')

Test

<div class="text-center">
    <h2>Session <Data></Data></h2>
</div>

<div>
    <p>Name : {{$name}}</p>
    <p>Alamat : {{$alamat}}</p>
    <p>Telepon : {{$telpon}}</p>
</div>

@endsection