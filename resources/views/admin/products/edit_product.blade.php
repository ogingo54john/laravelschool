@extends("layouts.admin")
@section("content")


<div class="content-wrapper">
<div class="page-header">
<h3 class="page-title"> Update Product Form </h3>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ route("products") }}">Products</a></li>
<li class="breadcrumb-item active" aria-current="page">Update Products</li>
</ol>
</nav>
</div>
<div class="col-12 grid-margin">
<div class="card">
<div class="card-body">
<h4 class="card-title">Update Product Details </h4>
<form  autocomplete="off" id="simple_form"
novalidate="novalidate"
enctype="multipart/form-data">
@csrf

<div class="row">
<div class="control-group col-md-6">
<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" id="name" value="{{ $product-> name }}"
 class="form-control  text-light" placeholder="Name" required="required" data-validation-required-message="Please Enter product name." />
<p class="text-danger help-block"></p>
<span id="name-availability-status" class="text-light" style="font-size:12px;"></span>
</div>
</div>


<div class="control-group col-md-6">
    <div class="form-group">
    <label for="price">Current Price</label>
    <input type="number" step="0.01" min="0.00" max="" name="price" id="price"
    class="form-control  text-light" placeholder="Price" required="required" value="{{ $product->price }}" data-validation-required-message="Product price is required" />
    <p class="text-danger help-block"></p>
    <span id="name-availability-status" style="font-size:12px;"></span>
    </div>
    </div>
</div>



<div class="row">
    <div class="control-group col-lg-6">
    <div class="form-group ">
    <label for="older_price">Older Price</label>
    <input type="number" name="older_price" step="0.01" min="0.00" max="" id="older_price"

    value="{{ $product->price }}"
    class="form-control text-light" placeholder="Older Price" required="required" data-validation-required-message="Product  older price is required." />
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
     value="{{ $product->quantity }}"
     />
    <p class="text-danger help-block"></p>
    </div>
    </div>
    </div>


<div class="control-group">
<div class="form-group">
<label for="description">Description</label>
<textarea rows="4" type="text"  class="form-control text-light" id="description"
name="description" placeholder="Description"
required="required"
data-validation-required-message="Please enter description.">
{{ $product->description }}</textarea>
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

<div class="row">
<div class="control-group col-md-6">
<div class="form-group">
<label for="status">Status</label>
<select class="form-control text-light" id="status" name="status" required="required" data-validation-required-message="Please select status.">
<option value="{{ $product -> status }}" selected> {{ $product -> status == "1" ? "Hidden" : "Visible"}} </option>
<option value="0" >Visible</option>
<option value="1">Hidden</option>
</select>
<p class="text-danger help-block"></p>
</div>
</div>

<div class="control-group col-md-6">
<div class="form-group">
<label>Image</label>
<input type="file" name="image" id="image" class="form-control"
{{-- required="required" data-validation-required-message="Please select image file." --}}
accept="image/png, image/jpeg, image/jpg,"
>
<p class="text-danger help-block"></p>
</div>
</div>


{{-- <div class="form-group">
<div class="col-md-6">
<img  id="" src="/products/{{ $product->image }}" width="100px" height="100px"/>
</div>
</div> --}}
</div>


<div class="row">
    <div class="control-group col-md-6">
    <div class="form-group">
    <label for="features">Features</label>
    <textarea  name="features" id="features" class="form-control text-light" placeholder="Product Features" required="required" data-validation-required-message="Product features required"
    >{{ $product->features }}</textarea>
    <p class="text-danger help-block"></p>
    </div>
    </div>

    <div class="control-group col-md-6">
    <div class="form-group">
    <label>FAQs</label>
    <textarea  name="faq" id="faq" class="form-control text-light" placeholder="FAQs" required="required" data-validation-required-message="Please provide product faqs."
    >{{ $product->faq }}</textarea>
    <p class="text-danger help-block"></p>
    </div>
    </div>
    </div>

<div class="form-froup"><p class="text-danger">Meta Tags</p></div>

<div class="control-group">
<div class="form-group">
<label for="meta_title">Meta Title</label>
<input type="text" class="form-control text-light" id="meta_title" value="{{ $product->meta_title }}" name="meta_title" placeholder="Meta Title" required="required" data-validation-required-message="Please Enter Meta Title">
<p class="text-danger help-block"></p>
</div>
</div>

<div class="control-group">
<div class="form-group">
<label for="meta_keyword">Meta Keywords</label>
<textarea class="form-control text-light" id="meta_keyword"  name="meta_keyword"  rows="4" required="required" data-validation-required-message="Please Enter Meta Keywords"> {{ $product->meta_keyword }}</textarea>
<p class="text-danger help-block"></p>
</div>
</div>

<div class="control-group">
<div class="form-group">
<label for="meta_description">Meta Description</label>
<textarea class="form-control text-light"  id="meta_description" name="meta_description" rows="4"  required="required" data-validation-required-message="Please Enter Meta Description"> {{ $product -> meta_description }}</textarea>
<p class="text-danger help-block"></p>
</div>
</div>

<input type="hidden" value="{{ $product->id }}" name="productID" id="productID">
<button type="submit" id="submit" class="btn btn-primary me-2">Update Product</button>
<button class="btn btn-dark me-2" type="reset">Cancel</button>
<div id="success" class="mt-3">

</div>
</form>

</div>
</div>
</div>


@endsection

@section("scripts")


{{-- <script src="{{ asset("admin/ckeditor/ckeditor.js") }}"></script> --}}
<script src="{{ asset("admin/assets/js/jqBootstrapValidation.min.js") }}"></script>
<script src="{{ asset("admin/assets/js/axios.js") }}"></script>
<script src="{{ asset("admin/assets/js/actions/update_product.js") }}"></script>
{{-- <script>
 CKEDITOR.replace('description');
CKEDITOR.replace('meta_description');
</script> --}}

{{-- <script src="{{ asset("admin/assets/js/exists.js") }}"></script> --}}
@endsection
