@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-12">
            <h2>Tambahkan portofolio baru</h2>
        </div>
    </div>
    <div class ="row">
        <form action="{{route('portofolios.store')}}" method="POST">
            
            @csrf
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <strong>
                        Title: 
                    </strong>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <strong>
                        Description: 
                    </strong>
                    <textarea name="description" id="description" cols="30" rows= "10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <strong>
                        Category: 
                    </strong>
                    <select name="category_id" id="category">
                        <option value="">-----Pilih Kategori-----</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
</div>

@endsection