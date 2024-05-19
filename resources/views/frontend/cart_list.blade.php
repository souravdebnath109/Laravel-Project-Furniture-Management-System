@include('frontend.header')
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Cart List</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->



<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ordered form</h4>
                </div>
                <div class="card-body">
                    @include('auth.message')
                    <div class="basic-form">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Watches</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getMyCart as $item)
                                            <tr>
                                                <th scope="row">{{$getFurniture->find($item->furniture_id)->id}}</th>
                                                <td>{{$getFurniture->find($item->furniture_id)->title}}</td>
                                                <td><img style="width:10rem;height:10rem; border-radius:1rem"
                                                        src="{{asset('Furnixure/Furniture/'.$getFurniture->find($item->furniture_id)->photo_path)}}"
                                                        alt="Watch"></td>
                                                <td>{{$getFurniture->find($item->furniture_id)->price}}</td>
                                                <td>{{$item->quantity}}</td>
                                                <td>{{$item->total}}</td>
                                                <td>
                                                    <a href="{{url('/_user/edit_cart/'.$item->id)}}"
                                                        class="btn btn-success"><i class="fas fa-edit">Edit</i></a>
                                                    <a href="{{url('/_user/delete_cart/'.$item->id)}}"
                                                        class="btn btn-danger"><i class="fas fa-trash">Delete</i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <h4 class="display-5 text-end">Total Amount: {{$total_amount}}</h4>
                                    <!-- Adding 'text-end' class to align right -->
                                    <div class="text-center">
                                        <!-- Wrapping the "Place Order" button with text-center class -->
                                        <span class="display-5"><a class="btn btn-primary"
                                                href="{{url('/_user/checkout')}}">Place Order</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('frontend.footer')