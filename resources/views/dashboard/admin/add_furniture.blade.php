@extends('dashboard.layout.main')

@section('content')
    

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Horizontal Form</h4>
    </div>
    <div class="card-body">
        @include('auth.message')
        <div class="basic-form">
            <form action="{{url('/_admin/add_furniture')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input type="text" class="form-control"  name="title">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Upload</label>
                        <input type="file" class="form-control" name="photo_path">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection