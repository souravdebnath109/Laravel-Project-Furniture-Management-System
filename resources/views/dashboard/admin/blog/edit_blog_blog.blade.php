@extends('dashboard.layout.mainn')

@section('content')
    

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Blog</h4>
    </div>
    <div class="card-body">
        @include('auth.message')
        <div class="basic-form">
            <form action="{{ url('/_admin/edit_blog_forblogpage/' . $getbloggs->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label>Upload Image</label>
                    <img src="{{ asset('Blogs/' . $getbloggs->photo_path) }}" alt="" style="width:80px;height:80px;">
                    <input type="file" class="form-control" name="photo_path">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $getbloggs->title }}">
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <label>Description</label>
                        <textarea class="form-control" name="description" rows="4">{{ $getblog->description }}</textarea>
                    </div> --}}
                    <div class="form-group col-md-6">
                        <label>Website Link</label>
                        <input type="text" class="form-control" name="website_link" value="{{ $getbloggs->website_link }}">
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection