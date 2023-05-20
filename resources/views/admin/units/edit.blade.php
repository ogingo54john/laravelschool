@extends("layouts.dashboard")

@section("styles")

@endsection

@section("content")


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Edit Unit Form</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Edit Unit Form</li>
</ol>
</div>
</div>
</div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Edit Unit  Form</h3>
</div>
<!-- /.card-header -->

<div class="m-2">
<ul  class="text-danger d-none" id="update-errors">
</div>


<form id="simple_form" novalidate="novalidate" autocomplete="off">

@csrf
{{-- card-body --}}
<div class="card-body">

<div class="row">
<div class="control-group col-md-6">
<div class="form-group mb-0 pb-2">
<label for="unit_code">Unit Code</label>
<input  name="unit_code"
id="unit_code" class="form-control" value="{{ $unit->unit_code }}" placeholder="Unit Code" required="required" data-validation-required-message="Unit Code is required." />
<p class="text-danger help-block"></p>
</div>
</div>

<div class="control-group col-md-6">
<div class="form-group">
<label for="status">Unit Status</label>
<select name="status" id="status" class="form-control"
required="required" data-validation-required-message="Select Unit Status"
>
<option value="0" {{ $unit->status == "0" ? "selected" : ""}}>Active</option>
<option value="1" {{ $unit->status == "1" ? "selected" : ""}}>Inactive</option>

</select>
<p class="text-danger help-block"></p>

</div>
</div>
<div class="control-group col-md-6">
<div class="form-group mb-0 pb-2">
<label for="title">Title</label>
<input type="text" name="title"
id="title" class="form-control" value="{{ $unit->title }}" placeholder="Unit Title" required="required" data-validation-required-message="Unit Title is required." />
<p class="text-danger help-block"></p>
</div>
</div>



<input type="hidden" value="{{ $unit->course->id }}" name="course" id="course"/>


<div class="control-group col-md-6">
<div class="form-group">
<label for="courses">Unit Course</label>
<select name="courses_id" id="courses_id" class="form-control"
required="required" data-validation-required-message="Course is required."
>

@forelse ($courses as $course)
<option value="{{ $course->id}}" {{ $unit->course->id == $course->id ? "selected" : "" }}>{{ $course->title}}</option>
@empty
<option value=""> No course available</option>
@endforelse

</select>
<p class="text-danger help-block"></p>

</div>
</div>
</div>
</div>

<!-- /.card-body -->

<div class="card-footer">
<a href='/admin/units'  class="btn btn-dark float-start">Back</a>

<button type="submit" data-id="{{ $unit->id }}" id="submit" class="btn btn-primary float-end">Update Unit</button>
</div>
</div>


</form>

</div>
<!-- /.card -->



</div>

</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection
@section("scripts")

<script src="{{ asset("admin/assets/js/jqBootstrapValidation.min.js")}}"></script>
<script src="{{ asset("admin/assets/js/axios.js")}}"></script>
<script src="{{ asset("admin/assets/js/actions/updateunit.js")}}"></script>

@endsection
