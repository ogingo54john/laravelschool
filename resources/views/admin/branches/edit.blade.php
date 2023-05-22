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
            <h1>Update Branch Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Branch Form</li>
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
                <h3 class="card-title">Update Branch  Form</h3>
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
                    <label for="title">Title</label>
                <input type="text" name="title"
                value="{{ $branch->title }}"
                id="title" class="form-control" placeholder="Branch Title" required="required" data-validation-required-message="Branch Title is required." />
                <p class="text-danger help-block"></p>
                </div>
                </div>


                <div class="control-group col-md-6">
                <div class="form-group mb-0 pb-2">
                <label for="initial">Branch Initial</label>
                <input  name="initial"
                value="{{ $branch->initial }}"
                id="initial" class="form-control" placeholder="Branch Initial" required="required" data-validation-required-message="Branch Initial is required." />
                <p class="text-danger help-block"></p>
                </div>
                </div>

                <div class="control-group col-md-6">
                <div class="form-group">
                <label for="status">Branch Status</label>
                <select name="status" id="status" class="form-control"
                {{-- required="required" data-validation-required-message="Select Branch Status" --}}
                >
                <option value="0" {{ $branch->status == "0" ? "selected" : "" }}>Active</option>
                <option value="1"  {{ $branch->status == "1" ? "selected" : "" }}>Inactive</option>
                </select>
                <p class="text-danger help-block"></p>

                </div>
                </div>


                {{-- <div class="control-group col-md-6">
                <div class="form-group">
                <label for="courses">Unit Course</label>
                <select name="courses_id" id="courses_id" class="form-control"
                required="required" data-validation-required-message="Course is required."
                >
                      <option value="">Select Course</option> --}}
                    {{-- @forelse ($courses as $course)
                    <option value="{{ $course->id}}">{{ $course->title}}</option>
                    @empty
                 <option value=""> No course available</option>
                    @endforelse --}}

                {{-- </select> --}}
                {{-- <p class="text-danger help-block"></p> --}}

                {{-- </div>
                </div> --}}
            </div>
        </div>

        <!-- /.card-body -->

        <div class="card-footer">
         <a href='/admin/branches'  class="btn btn-dark float-start">Back</a>

        <button type="submit" id="submit" data-id="{{ $branch->id }}" class="btn btn-primary float-end">Update Branch</button>
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
<script src="{{ asset("admin/assets/js/actions/updatebranch.js")}}"></script>

@endsection
