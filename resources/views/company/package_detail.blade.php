@extends("layouts.app")

@section("content")

<!-- Breadcrumb Start -->
<div class="container-fluid pt-4 d-lg-none">
<div class="container">
<nav class="breadcrumb bg-transparent m-0 p-0">
<a class="breadcrumb-item" href="#">Home</a>
<span class="breadcrumb-item active">Book Pricing Package</span>
</nav>
</div>
</div>


<!-- Breadcrumb End -->


<!-- packages -->

<div class="container-fluid bg-faded py-3">
<div class="container">

<div class="row align-items-center justify-content-center">

<div class="col-md-10">
<div class="contact-form bg-light mb-3" style="padding: 30px;">

<h4 class="m-0 text-uppercase fw-bold p-3">Book Package {{ $package->name }}</h4>
<form  id="contactForm" novalidate="novalidate" autocomplete="off">

@csrf


<div class="row">
<div class="control-group col-md-6">
<div class="form-group">
<label for="name">Package Name</label>

<input type="text" class="form-control"  readonly id="name" value="{{ $package->name}}"/>

</div>
</div>

<div class="control-group col-md-6">
<div class="form-group">
<label for="price" class="mb-1">Package Price</label>
<input type="text"  id="price" class="form-control"  readonly value="{{number_format($package->price,2) }}"  />


</div>
</div>
</div>



<div class="row">
<div class="control-group col-md-6">
<div class="form-group">
<label for="name">Your Name</label>
@if(Auth::user())
<input type="text" class="form-control"  id="name" value="{{ Auth::user()->name }}"
placeholder="Your Name" required="required" data-validation-required-message="Please enter your name"
required="required" data-validation-required-message="Please enter your name"
name="name"
 />
@else
<input type="text"
id="name"
placeholder="Your Name" class="form-control" required="required"
data-validation-required-message="Please enter your name"
minlength="3"
name="name"
data-validation-minlength-message="Enter minimum of 3 characters"
maxlength="30" data-validation-maxlength-message="Enter maximum of 30 characters"/>
@endif
<p class="help-block text-danger"></p>
</div>
</div>

<div class="control-group col-md-6">
<div class="form-group">
<label for="phone" class="mb-1">Your Phone</label>
@if(Auth::user() && Auth::user()->userProfile)
<input type="text" name="phone"  id="phone" class="form-control"   required="required" value="{{Auth::user()->userProfile->phone ?? "" }}" data-validation-required-message="Please enter your mobile number" />
@else
<input type="text"  id="phone"
placeholder="Your Phone" name="phone"  required="required" class="form-control"
data-validation-required-message="Please enter your mobile number"
/>
@endif
<p class="help-block text-danger"></p>
</div>
</div>
</div>




<div class="row">
<div class="control-group col-md-12">
<div class="form-group">
<label for="email">Your Email</label>
@if(Auth::user())
<input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" placeholder="Your Email" required="required" readonly  />
@else
<input type="email" name="email" class="form-control"  id="email"  placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
@endif
<p class="help-block text-danger"></p>
</div>
</div>


<div class="control-group col-md-12">
<div class="form-group">
<label for="message" class="mb-1">Message</label>
<textarea  id="message" name="message" class="form-control" required="required" data-validation-required-message="Please enter your message"></textarea>
<p class="help-block text-danger"></p>
</div>
</div>

</div>

<div class="col-md-6">
<button class="font-weight-semi-bold" style="height: 50px;width:100%;background-color:blue;color:white;border:2px" type="submit" data-id="{{$package->id }}" id="submit">Book</button>

</div>
<div id="success" class="mt-4"></div>
</form>

</div>
</div>
</div>
</div>
</div>

<!-- packages -->

@endsection

@section("scripts")
<script src="{{ asset("assets/js/jqBootstrapValidation.min.js") }}"></script>
<script src="{{ asset("assets/js/bookpackage.js") }}"></script>
<script src="{{ asset("assets/js/axios.js") }}"></script>
@endsection
