@extends('dashboard.layout.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Table Stripped</h4>
    </div>
    <div class="card-body">
        @include('auth.message')
        <div class="table-responsive">
            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Website Link</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getblog as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>{{ $blog->website_link }}</td>
                        <td><img src="{{ asset('Blogs/' . $blog->photo_path) }}" alt="" style="width: 80px; height: 80px;"></td>
                        <td>
                            <a href="{{ url('/_admin/edit_blog/' . $blog->id) }}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="fa fa-pencil color-muted"></i>
                            </a>
                            <a href="{{ url('/_admin/delete_blog/' . $blog->id) }}" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="fa fa-close color-danger"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</div>
@endsection