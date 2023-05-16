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
            <h1>Add Course Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Course Form</li>
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
                <h3 class="card-title">Add Course Form</h3>
              </div>
              <!-- /.card-header -->


        <form class="mt-3" autocomplete="off">


        {{-- card-body --}}
        <div class="card-body">

        <div class="row">
        <div class="form-group col-md-6">
        <label for="title">Name</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Course Title">
        </div>


        <div class="form-group col-md-6">
        <label for="status">Status</label>
        <select  class="form-control" name="status" id="status">
        <option value="">Select Status</option>
        <option value="0">Active</option>
        <option value="1">Inactive</option>
        </select>
        </div>

        </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
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

{{-- <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> --}}

<!-- Page specific script -->
<script>
{{-- $(function () {
  bsCustomFileInput.init();
}); --}}
</script>


@endsection
