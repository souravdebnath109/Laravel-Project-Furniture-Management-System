@extends('dashboard.layout.main')

@section('content')
    

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Horizontal Form</h4>
    </div>
    <div class="card-body">
        @include('auth.message')
        <div class="basic-form">
            <form action="{{url('/_admin/edit_furniture/'.$getFurniture->id)}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input type="text" class="form-control"  name="title" value="{{$getFurniture->title}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" value="{{$getFurniture->price}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Upload</label>
                        <img src="{{asset('Furnixure/furniture/'.$getFurniture->photo_path)}}" alt=""
                                style="width:80px;height:80px;">
                        <input type="file" class="form-control" name="photo_path" value="{{$getFurniture->photo_path}}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection