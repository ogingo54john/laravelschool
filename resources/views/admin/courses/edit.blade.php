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
            <h1>Edit Course Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Course Form</li>
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
                <h3 class="card-title">Edit Course Form</h3>
              </div>
              <!-- /.card-header -->

            @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <form class="mt-3" id="simple_form" autocomplete="off" novalidate="novalidate" >

        @csrf
        {{-- card-body --}}
        <div class="card-body">

            <div class="row">

                <div class="control-group col-md-6">
                <div class="form-group mb-0 pb-2">
                <input type="text" name="name"
                value="{{ $course -> title }}"
                id="name" class="form-control" placeholder="Course Title" required="required" data-validation-required-message="Course Title is required." />
                <p class="text-danger help-block"></p>
                <span id="name-availability-status" style="font-size:12px;"></span>
                </div>
                </div>

                <div class="control-group col-md-6">
                <div class="form-group">
                <select name="status" id="status" class="form-control">
                <option value="{{ $course -> status == "0" ? "selected" : "" }}" selected> Visible </option>

                <option value="{{ $course -> status == "1" ? "selected" : "" }}" selected>Hidden</option>
                </select>
                <p class="text-danger help-block"></p>

                </div>
                </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
        <button type="submit" id="submit" data-id="{{ $course->id}}" class="btn btn-primary">Update Course</button>
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
<script src="{{ asset("admin/assets/js/actions/updatecourse.js")}}"></script>

@endsection
