@extends("layouts.admin")
@section("styles")

@endsection


@section("content")
<div class="content-wrapper">
<div class="page-header">
<h3 class="page-title"> Create Post Form </h3>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ route("posts") }}">Manage Posts</a></li>
<li class="breadcrumb-item active" aria-current="page">Create Post</li>
</ol>
</nav>
</div>
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Add New Post Here</h4>
<form  autocomplete="off" id="simple_form"
novalidate="novalidate"
enctype="multipart/form-data">
@csrf
<div class="row">

<div class="control-group col-lg-6">
<div class="form-group ">
<label for="title">Title</label>
<input type="text" name="title" id="title"
class="form-control  text-light" placeholder="Post Title" required="required" data-validation-required-message="Please enter post title." />
<p class="text-danger help-block"></p>
</div>
</div>

<div class="control-group col-lg-6">
<div class="form-group">
<label for="category">Category</label>
<select  name="category" id="category"
class="form-control  text-light"  required="required" data-validation-required-message="Select Post Category">

<option value="">Select Category</option>

@foreach ($categories as  $category )
<option value="{{ $category->id }}">{{ $category->name }}</option>

@endforeach

</select>
<p class="text-danger help-block"></p>
</div>
</div>

</div>
{{--
<div class="row">
<div class="control-group col-lg-6">
<div class="form-group ">
<label for="older_price">Older Price</label>
<input type="number" name="older_price" step="0.01" min="0.00" max="" id="older_price"
class="form-control  text-light" placeholder="Older Price" required="required" data-validation-required-message="Product  older price is required." />
<p class="text-danger help-block"></p>
</div>
</div>

<div class="control-group col-lg-6">
<div class="form-group">
<label for="quantity">Quantity</label>
<input type="number" step="0" min="0" max="" name="quantity" id="quantity"
class="form-control  text-light" placeholder="Product Quantity" required="required"
 data-validation-required-message="Product quantity is required"
 data-validation-regex-regex="^[+]?\d+$"
 data-validation-regex-message="Whole number required"

 />
<p class="text-danger help-block"></p>
</div>
</div>
</div> --}}


<div class="control-group">
<div class="form-group">
<label for="body">Content</label>
<textarea rows="4" class="form-control text-light" id="body" name="body" placeholder="Post Content"    required="required" data-validation-required-message="Post Content is required."></textarea>
<p class="text-danger help-block"></p>
</div>
</div>

<div class="row">
<div class="control-group col-md-6">
<div class="form-group">
<label for="status">Status</label>
<select class="form-control text-light" id="status" name="status" required="required" data-validation-required-message="Please select post status.">
<option value="">Select Status</option>
<option value="0" >Visible</option>
<option value="1">Hidden</option>
</select>
<p class="text-danger help-block"></p>
</div>
</div>

<div class="control-group col-md-6">
<div class="form-group">
<label>Image</label>
<input type="file" name="image" id="image" class="form-control text-light" required="required" data-validation-required-message="Please select image file." accept="image/png, image/jpeg, image/jpg,"
>
<p class="text-danger help-block"></p>
</div>
</div>
{{--
<div class="form-group">
<div class="col-md-6">
<img id="frame" src="" width="100px" height="100px"/>
</div>
</div> --}}
</div>

{{--
<div class="row">
    <div class="control-group col-md-6">
    <div class="form-group">
    <label for="features">Features</label>
    <textarea  name="features" id="features" class="form-control text-light" placeholder="Product Features" required="required" data-validation-required-message="Product features required"
    ></textarea>
    <p class="text-danger help-block"></p>
    </div>
    </div>

    <div class="control-group col-md-6">
    <div class="form-group">
    <label>FAQs</label>
    <textarea  name="faq" id="faq" class="form-control text-light" placeholder="FAQs" required="required" data-validation-required-message="Please provide product faqs."
    ></textarea>
    <p class="text-danger help-block"></p>
    </div>
    </div>
    </div> --}}

<div class="form-froup"><p class="text-success">Meta Tags</p></div>

<div class="control-group">
<div class="form-group">
<label for="meta_title">Meta Title</label>
<input type="text" class="form-control text-light" id="meta_title" name="meta_title"  placeholder="Meta Title" required="required" data-validation-required-message="Please Enter Meta Title">
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


<button type="submit" id="submit" class="btn btn-primary me-2">Add Post</button>
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
<script src="{{ asset("admin/assets/js/actions/create_post.js") }}"></script>
{{-- <script src="{{ asset("admin/ckeditor/ckeditor.js") }}"></script> --}}
{{-- <script>
 CKEDITOR.replace('editor');
CKEDITOR.replace('meta_description');
</script> --}}


@endsection
