@include('frontend.header')
<!-- Start Hero Section -->
<div class="hero">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>Cart</h1>
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
          <h4 class="card-title">Edit</h4>
        </div>
        <div class="card-body">
          @include('auth.message')
          <div class="basic-form">
            <form action="{{url('_user/edit_cart/'.$getCart->id)}}" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label style="font-weight: bold">Image</label>

                  <img src="{{asset('Furnixure/furniture/'.$getFurniture->photo_path)}}" style="width:90px;height:90px">
                  {{-- <input type="file" class="form-control" placeholder="imagepath"> --}}
                </div>
                <div class="form-group col-md-6">
                  <label style="font-weight: bold">Product</label>
                  <input type="text" class="form-control" placeholder="product" value="{{$getFurniture->title}}" readonly>
                </div>
                <div class="form-group col-md-6">
                  <label style="font-weight: bold">Price</label>
                  <input type="text" class="form-control" placeholder="price" value="{{$getFurniture->price}}" readonly>
                </div>
                <div class="form-group col-md-6">
                  <label style="font-weight: bold">Quantity</label>
                  <div class="input-group mb-2 d-flex align-items-center quantity-container" style="max-width: 100px;">
                    <input type="number" class="form-control text-center quantity-amount" value="{{$getCart->quantity}}" placeholder=""
                      aria-label="Example text with button addon" aria-describedby="button-addon1" name="quantity">

                  </div>
                </div>

              </div>
              <button type="submit" class="btn btn-primary" style="margin-top:30px">submit</a>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@include('frontend.footer')