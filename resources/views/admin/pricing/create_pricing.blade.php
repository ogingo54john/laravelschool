@extends("layouts.admin")

@section("content")

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Pricing Package Form </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Pricing Package</a></li>
          <li class="breadcrumb-item active" aria-current="page">Create Pricing Package</li>
        </ol>
      </nav>
    </div>



    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create Pricing Package Form</h4>

            <form id="simple_form" class="forms-sample" novalidate="novalidate" autocomplete="off">

<div class="row">
<div class="control-group col-md-6">
<div class="form-group mb-0 pb-2">
<input type="text" name="name"
onkeyup="clearInput()" onblur="Exists();"
id="name" class="form-control text-light" placeholder="Package Name" required="required" data-validation-required-message="Package Name is required." />
<p class="text-danger help-block"></p>
<span id="name-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="control-group col-md-6">
<div class="form-group">
<select name="status" id="status" class="form-control text-light" required="required" data-validation-required-message="Select Package Status.">

<option value="">Select Status</option>
<option value="0">Visible</option>
<option value="1">Hidden</option>

</select>
<p class="text-danger help-block"></p>

</div>
</div>
</div>


<div class="row">
<div class="control-group col-md-6">
<div class="form-group mb-0 pb-2">
<input type="number" name="price"
id="price" class="form-control text-light"  min="0" max=""
placeholder="Package Price" required="required" data-validation-required-message="Package Price is required." />
<p class="text-danger help-block"></p>
</div>
</div>
</div>



<div class="row">
<div class="control-group col-md-12">
<div class="form-group">
<label for="description">Description</label>
<textarea rows="4" class="form-control text-light" id="description" name="description" placeholder="Description"    required="required" data-validation-required-message="Package Description Required."></textarea>
<p class="text-danger help-block"></p>
</div>
</div>
</div>





<div class="form-group">
<button type="submit" class="btn btn-primary" id="submit">Add Pricing Package</button>
</div>


<div id="success"></div>

</div>
</form>
</div>
</div>
</div>



@endsection

@section("scripts")
<script src="{{ asset("admin/assets/js/jqBootstrapValidation.min.js") }}"></script>
<script src="{{ asset("admin/assets/js/actions/add_package.js") }}">  </script>
<script src="{{ asset("admin/assets/js/actions/package_availability.js") }}"></script>

@endsection
