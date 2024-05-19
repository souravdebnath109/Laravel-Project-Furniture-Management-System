{{-- @extends('dashboard.layout.main')
@section('content')
<span>
    <h3 style="background-color: aqua">Welcome to User DashBoard</h3>
</span>

@endsection --}}

@extends('dashboard.layout.main')
@section('content')
<div style="position: relative; text-align: center;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1; text-align: center;">
        <h3 style="background-color: rgba(0, 255, 255, 0.7); display: inline-block; padding: 10px;">
            Welcome to User Dashboard
        </h3>
        <br>
        <h3 style="margin-top: 10px; font-size: 16px; background-color: rgba(3, 255, 125, 0.939); display: inline-block; padding: 5px;">
            Please Check your Invoice
        </h3>
    </div>
    <img src="{{ asset('Frontend/images/background.jpg') }}" alt="Dashboard Welcome Image" style="width: 100%; height: auto;">
</div>
@endsection

