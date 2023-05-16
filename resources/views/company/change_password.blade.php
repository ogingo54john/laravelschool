@extends('layouts.app')

@section('content')

<!-- Breadcrumb Start -->
<div class="container-fluid pt-4 d-lg-none">
    <div class="container">
    <nav class="breadcrumb bg-transparent m-0 p-0">
    <a class="breadcrumb-item" href="#">Home</a>
    <span class="breadcrumb-item active">Profile/Change Password</span>
    </nav>
    </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-faded py-3">
    <div class="container">

    <div class="row justify-content-center">


    <div class="col-md-12">
    <div class="contact-form bg-light mb-3" style="padding: 30px;">
        <div class="bg-faded py-2 px-4 mb-3">
            <h3 class="m-0">Update Passsword</h3>
            </div>
    <form  autocomplete="off" method="POST" action="{{ url("changePassword") }}">
     @csrf
    <div class="row">

    <div class="col-md-6">
    <div class="control-group">
    <label for="current_password">Your Current Password</label>
    <input type="password"
    id="current_password"
    name="current_password"
    placeholder="Your Current Password" class="form-control"  />
    <p class="help-block text-danger"></p>
    </div>
    </div>


    <div class="col-md-6">
    <div class="control-group">
    <label for="new_password" class="mb-1">Your New Password</label>
    <input type="password" id="password"
    name="password"
    placeholder="Your New Password"
    class="form-control"
    />
    </div>
    </div>
    </div>

<div class="row">
 <div class="col-md-6">
    <div class="control-group">
    <label for="password_confirmation">Confirm Password</label>
    <input type="password"
    id="password_confirmation"
    name="password_confirmation"
    placeholder="Confirm Password" class="form-control"  />
    <p class="help-block text-danger"></p>
    </div>
    </div>

 <div class="col-md-6">
    <div class="control-group float-end">
    <button class="btn btn-success form-control mt-2" type="submit"   id="submit">Update Password</button>
    </div>
    </div>
    </div>

    </div>
{{-- error --}}

<div class="row">
<div class="col-md-12">

@if (session("message"))
<h2 class="alert alert-success"> {{ session("message") }} </h2>
@endif

@if ($errors->any())
<ul class="px-4 alert alert-danger">

@foreach ($errors ->all() as $error )
<li class="text-danger">{{ $error }}</li>
@endforeach
</ul>

@endif
</div>
</div>

{{-- error --}}
    </div>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Contact End -->

@endsection


@section("scripts")
{{-- <script src="{{ asset ("assets/js/axios.js") }}"></script> --}}
{{-- <script src="{{ asset ("assets/js/jqBootstrapValidation.min.js") }}"></script> --}}
{{-- <script src="{{ asset("assets/js/profile.js") }}"></script> --}}

@endsection
