@extends("layouts.admin")

@section("content")

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Category Form </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Category</a></li>
          <li class="breadcrumb-item active" aria-current="page">Create Category</li>
        </ol>
      </nav>
    </div>



    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Category form</h4>

            <form id="simple_form" class="forms-sample" novalidate="novalidate" autocomplete="off">
<div class="row">

<div class="control-group col-md-6">
<div class="form-group mb-0 pb-2">
<input type="text" name="name"
value="{{ $category -> name }}"
id="name" class="form-control text-light" placeholder="Category Name" required="required" data-validation-required-message="Category Name is required." />
<p class="text-danger help-block"></p>
<span id="name-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="control-group col-md-6">
<div class="form-group">
<select name="status" id="status" class="form-control text-light" required="required" data-validation-required-message="Select Category Status.">
<option value="{{ $category -> status }}" selected> {{ $category -> status == "1" ? "Hidden" : "Visible"}} </option>
<option value="">Select Status</option>
<option value="0">Visible</option>
<option value="1">Hidden</option>

</select>
<p class="text-danger help-block"></p>

</div>
</div>


<br>
<div id="success"></div>
<div class="form-group">
<button type="submit" data-id="{{ $category->id }}"  class="btn btn-primary" id="submit">Edit Category</button>
</div>

</div>
</form>
</div>
</div>
</div>



@endsection

@section("scripts")
<script src="{{ asset("admin/assets/js/jqBootstrapValidation.min.js") }}"></script>
<script src="{{ asset("admin/assets/js/actions/update_category.js") }}">  </script>
@endsection
