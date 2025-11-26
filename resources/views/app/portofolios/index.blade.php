@extends('layouts.front')

@section('content')
<div class="container">

    
    <div class="row">
        <div class="col-lg-12 mb-3">
            <h2>Portofolio</h2>
    
        </div>
        <div>
            <a href="{{route('portofolios.create')}}" class="btn btn-success">Bikin portofolio baru</a>
        </div>
    </div>
    <div class = "row">
        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
            @foreach($portofolios as $porto)
                <tr>
                    <td>{{$porto->title}}</td>
                    <td>{{$porto->category->name}}</td>
                    <td>
                        <a href="#" class="btn btn-info">Detail</a>
                        <a href="#" class="btn btn-primary">Update</a>
    
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $portofolios->links() !!}
    </div>
</div>
@endsection