@extends('layouts.app')

@section('content')


<!-- Breadcrumb Start -->
<div class="container-fluid pt-4 d-lg-none ">
    <div class="container">
    <nav class="breadcrumb bg-transparent m-0 p-0">
    <a class="breadcrumb-item" href="#">Home</a>
    <span class="breadcrumb-item active">Profile</span>
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
            <h3 class="m-0">Profile Page
            </h3>
            </div>
    <form name="sentMessage" id="contactForm" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">

    <div class="row">

    <div class="col-md-6">
    <div class="control-group">
    <label for="name">Your Name</label>
    <input type="text"
    value="{{ Auth::user()->name ?? "" }}"
    id="name"
    name="name"
    placeholder="Your Name" required="required"
    data-validation-required-message="Please enter your name" minlength="3"
    data-validation-minlength-message="Enter minimum of 3 characters"
    maxlength="30" data-validation-maxlength-message="Enter maximum of 30 characters" class="form-control"/>
    <p class="help-block text-danger"></p>
    </div>
    </div>


    <div class="col-md-6">
    <div class="control-group">
    <label for="phone" class="mb-1">Your Phone</label>
    <input type="text" id="phone"
    name="phone"
    placeholder="Your Phone"  required="required"
    class="form-control"
    value="{{ Auth::user()->userProfile->phone  ?? "" }}"
    data-validation-required-message="Mobile number required"
    data-validation-regex-regex="^(\+)?(\d{1,2})?[( .-]*(\d{3})[) .-]*(\d{3,4})[ .-]?(\d{4})$"
    data-validation-regex-message="Enter valid phone number"
    />
    <p class="help-block text-danger"></p>
    </div>
    </div>
    </div>

    <div class="row">
<div class="col-md-6">
    <div class="control-group">
    <label for="email">Your Email</label>
    <input type="email" disabled  value="{{ Auth::user()->email ??  "" }}" class="form-control w-100"  />
    <p class="help-block text-danger" style="font-size: 10px">You can't edit your email</p>
    </div>
</div>

    <div class="col-md-6">
    <div class="control-group">
    <label for="zipcode">Zipcode</label>
    <input type="text" class="form-control w-100 bg-light" id="zipcode"

     value="{{ Auth::user()->userProfile->zipcode  ?? "" }}" name="zipcode" required="required" data-validation-required-message="Please enter your zipcode"
    maxlength="50"
    data-validation-maxlength-message="Maximum characters is 50."
    >
    <p class="help-block text-danger"></p>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="control-group">
            <label for="image">Address</label>
            <input type="text" class="form-control" class="bg-light" id="address" name="address" required="required" data-validation-required-message="Please enter address details"
            maxlength="100"
            value="{{ Auth::user()->userProfile->address ?? "" }}"
            data-validation-maxlength-message="Maximum characters is 100."
            >
            <p class="help-block text-danger"></p>
        </div>
    </div>

<div class="col-md-6">
        <div class="control-group">
            <label for="dob">DOB</label>
            <input type="date" class="form-control" value="{{ Auth::user()->userProfile->dob ?? "" }}"  class="bg-light" id="dob" name="dob"
            >
        </div>
    </div>


    {{-- <div class="col-md-6">
        <div class="control-group">
            <label for="image">Choose Profile Image</label>
            <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" class="bg-light" id="image" name="image"
            >
            <p class="help-block text-danger"></p>
        </div>
    </div> --}}
</div>

{{-- <div class="row">
    <div class="col-md-6">
        <div class="control-group">
            <label for="dob">DOB</label>
            <input type="date" class="form-control" value="{{ Auth::user()->userProfile->dob ?? "" }}"  class="bg-light" id="dob" name="dob"
            >
        </div>
    </div>
    <div class="col-md-6">
        <div class="control-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" maxlength="500"   class="bg-light" id="bio" name="bio"
            >{{ Auth::user()->userProfile-> bio ?? "" }}</textarea>
        </div>
    </div>
</div> --}}

<div class="row">
<div class="col-md-12 m-2">
<div class="card  bg-danger">
<div class="card-header">
Social medial links
</div>
</div>
</div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="control-group">
            <label for="facebook">Facebook Link</label>
            <input type="text" class="form-control" value="{{ Auth::user()->userProfile->facebook ?? "" }}"  class="bg-light" id="facebook" name="facebook"
            >
        </div>
    </div>
    <div class="col-md-6">
        <div class="control-group">
            <label for="github">Github Link</label>
            <input class="form-control" type="text"  class="bg-light" id="github" name="github" value="{{ Auth::user()->userProfile-> github ?? "" }}"/>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-6">
        <div class="control-group">
            <label for="twitter">Twitter Link</label>
            <input type="text" class="form-control" value="{{ Auth::user()->userProfile->twitter ?? "" }}"  class="bg-light" id="twitter" name="twitter"
            />
        </div>
    </div>
    <div class="col-md-6">
        <div class="control-group">
           <label for="linkedln">Linkedln Link</label>
            <input type="text" class="form-control" value="{{ Auth::user()->userProfile->linkedln ?? "" }}"  class="bg-light" id="linkedln" name="linkedln"/>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="control-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" value="{{ Auth::user()->userProfile->instagram ?? "" }}"  class="bg-light" id="instagram" name="instagram"/>
        </div>
    </div>
    <div class="col-md-6">
        <div class="control-group">
            <label for="bio">Bio</label>
            <textarea class="form-control" maxlength="500"   class="bg-light" id="bio" name="bio"
            >{{ Auth::user()->userProfile-> bio ?? "" }}</textarea>
        </div>
    </div>
</div>







    <button class="btn btn-danger mt-2" type="submit"   id="sendMessageButton">Update Profile</button>
    </div>

    <div id="success" class="mt-4">
    </div>


    {{-- <input name="phone" type="text" id="phone1"/>  --}}



    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Contact End -->

@endsection


@section("scripts")
<script src="{{ asset ("assets/js/axios.js") }}"></script>
<script src="{{ asset ("assets/js/jqBootstrapValidation.min.js") }}"></script>
<script src="{{ asset("assets/js/profile.js") }}"></script>
{{-- <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script> --}}

@endsection
