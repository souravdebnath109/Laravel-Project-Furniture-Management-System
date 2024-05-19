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
                        <th scope="col">Price</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getFurniture as $item)


                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td><span class="alert alert-secondary solid">{{$item->price}}</span></td>
                        <td><img src="{{asset('Furnixure/furniture/'.$item->photo_path)}}" alt=""
                                style="width:80px;height:80px;"></td>
                        <td><span><a href="{{url('/_admin/edit_furniture/'.$item->id)}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                        class="fa fa-pencil color-muted"></i> </a><a href="{{url('/_admin/delete_furniture/'.$item->id)}}" data-toggle="tooltip"
                                    data-placement="top" title="Close"><i
                                        class="fa fa-close color-danger"></i></a></span>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection