@extends('layouts.front')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1 class="text-center">Login page</h1>
<div class="mx-auto w-50">
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection