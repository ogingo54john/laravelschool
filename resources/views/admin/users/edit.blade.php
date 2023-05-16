@extends("layouts.admin")

@section("content")

<div class="content-wrapper">
<div class="page-header">
<h3 class="page-title"> Users Form </h3>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Users</a></li>
<li class="breadcrumb-item active" aria-current="page">Edit User</li>
</ol>
</nav>
</div>



<div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h4 class="card-title">Edit User Form</h4>
<form id="simple_form" class="forms-sample" novalidate="novalidate" autocomplete="off">
<div class="row">

<div class="control-group col-md-6">
<div class="form-group mb-0 pb-2">
<input type="text" name="name"
id="name" class="form-control text-light" placeholder="User's Full Name" value="{{ $user->name ?? "" }}" required="required" data-validation-required-message="User's Name is required." />
<p class="text-danger help-block"></p>
</div>
</div>

<div class="control-group col-md-6">
<div class="form-group">
<select name="role_as" id="role_as" class="form-control text-light" required="required" data-validation-required-message="Select User Role.">

<option value="1" {{ $user-> role_as === "1" ? "selected" : "" }}>Admin</option>
<option value="0" {{ $user-> role_as === "0" ? "selected" : "" }}>Staff</option>

</select>
<p class="text-danger help-block"></p>
</div>
</div>


<div class="control-group col-md-6">
<div class="form-group mb-0 pb-2">
<input type="email" name="email"
onkeyup="clearInput()" onblur="Exists();"
id="email" class="form-control text-light" placeholder="User's Email" value="{{ $user->email }}" required="required" data-validation-required-message="User's Email is required." maxlength="40" data-validation-maxlength-message="This email exceeds max length" />
<p class="text-danger help-block"></p>
<span id="email-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="control-group col-md-6">
<div class="form-group">
<input name="password" id="password" type="password" placeholder="Password" class="form-control text-light" >
<p class="text-danger help-block"></p>
</div>
</div>

<div class="control-group col-md-6">
<div class="form-group">
<input name="password_confirmation" id="password_confirmation"  placeholder="Confirm Password"  type="password" class="form-control text-light" >
<p class="text-danger help-block"></p>
</div>
</div>


<br>
<div id="success"></div>
<div class="form-group">
<button type="submit" class="btn btn-primary" id="submit">Update User</button>
</div>

</div>
</form>
</div>
</div>
</div>



@endsection

@section("scripts")
<script src="{{ asset("admin/assets/js/jqBootstrapValidation.min.js") }}"></script>
<script src="{{ asset("admin/assets/js/actions/updateuser.js") }}">  </script>
{{-- <script src="{{ asset("admin/assets/js/actions/email-availability.js") }}"></script> --}}

@endsection
