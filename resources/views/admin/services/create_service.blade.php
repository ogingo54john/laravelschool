@extends("layouts.admin")
@section("content")


<div class="content-wrapper">
<div class="page-header">
<h3 class="page-title"> Create Service Form </h3>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ route("services") }}">Services</a></li>
<li class="breadcrumb-item active" aria-current="page">Create Service</li>
</ol>
</nav>
</div>
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Add New Service Here</h4>
<form  autocomplete="off" id="simple_form"
{{-- action="{{ route("save_service") }}" --}}
novalidate="novalidate"
{{-- method="POST" --}}
enctype="multipart/form-data">
@csrf

<div class="control-group">
<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" id="name" onkeyup="clearInput()" onblur="Exists();" class="form-control  text-light" placeholder="Name" required="required" data-validation-required-message="Please enter service name." />
<p class="text-danger help-block"></p>
<span id="name-availability-status" style="font-size:12px;"></span>
</div>
</div>


<div class="control-group">
<div class="form-group">
<label for="description">Description</label>
<textarea rows="4" type="text" id="editor" class="form-control text-light" id="description" name="description" placeholder="Description"    required="required" data-validation-required-message="Please enter description."></textarea>
<p class="text-danger help-block"></p>
</div>
</div>

{{-- <div class="control-group">
<div class="form-group">
<label for="slug">Slug</label>
<input type="text" class="form-control text-light" value="Web design and development" id="slug" name="slug" placeholder="Slug" required="required" data-validation-required-message="Please enter slug.">
<p class="text-danger help-block"></p>
</div>
</div> --}}


<div class="control-group">
<div class="form-group">
<label for="status">Status</label>
<select class="form-control text-light" id="status" name="status" required="required" data-validation-required-message="Please select status.">
{{-- <option value="">Select</option> --}}
<option value="0" >Visible</option>
<option value="1">Hidden</option>
</select>
<p class="text-danger help-block"></p>
</div>
</div>

{{-- <div class="control-group">
<div class="form-group">
<label>Image</label>
<input type="file" name="image" id="image" class="form-control" required="required" data-validation-required-message="Please select image file." accept="image/png, image/jpeg, image/jpg,"
>
<p class="text-danger help-block"></p>
</div>
</div> --}}
{{--
<div class="form-group">
<div class="col-md-6">
<img id="frame" src="" width="100px" height="100px"/>
</div>
</div> --}}


<div class="form-froup"><p class="text-danger">Meta Tags</p></div>

<div class="control-group">
<div class="form-group">
<label for="meta_title">Meta Title</label>
<input type="text" class="form-control text-light" id="meta_title" name="meta_title" placeholder="Meta Title" required="required" data-validation-required-message="Please Enter Meta Title">
<p class="text-danger help-block"></p>
</div>
</div>

<div class="control-group">
<div class="form-group">
<label for="meta_keyword">Meta Keyword</label>
<textarea class="form-control text-light" id="meta_keyword"  name="meta_keyword"  rows="4" required="required" data-validation-required-message="Please Enter Meta Keywords"></textarea>
<p class="text-danger help-block"></p>
</div>
</div>

<div class="control-group">
<div class="form-group">
<label for="meta_description">Meta Description</label>
<textarea class="form-control text-light"  id="meta_description" name="meta_description" rows="4" required="required" data-validation-required-message="Please Enter Meta Description"></textarea>
<p class="text-danger help-block"></p>
</div>
</div>


<button type="submit" id="submit" class="btn btn-primary me-2">Submit</button>
<button class="btn btn-dark me-2" type="reset">Cancel</button>
<div id="success" class="mt-3">

</div>
</form>

</div>
</div>
</div>


@endsection

@section("scripts")

<script src="{{ asset("admin/assets/js/jqBootstrapValidation.min.js") }}"></script>
<script src="{{ asset("admin/assets/js/axios.js") }}"></script>
<script src="{{ asset("admin/assets/js/contact.js") }}"></script>


<script src="{{ asset("admin/ckeditor/ckeditor.js") }}"></script>

<script>
 CKEDITOR.replace('editor');
CKEDITOR.replace('meta_description');
</script>

<script src="{{ asset("admin/assets/js/exists.js") }}"></script>
@endsection
