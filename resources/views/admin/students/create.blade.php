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
            <h1>Add Student Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Student Form</li>
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
                <h3 class="card-title">Add Student Form</h3>
              </div>
              <!-- /.card-header -->


        <form class="mt-3" autocomplete="off">
        <ul class="nav nav-pills mb-3 mx-2" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Student Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Parent Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
        </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        {{-- card-body --}}
        <div class="card-body">

        <div class="row">
        <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Student Email">
        </div>


        <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Student Name">
        </div>

        <div class="form-group col-md-6">
        <label for="phone">Phone</label>
        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Student Phone">
        </div>


        <div class="form-group col-md-6">
        <label for="gender">Gender</label>
        <select  class="form-control" id="gender">
        <option value="">Select </option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
        </div>

        <div class="form-group col-md-6">
        <label for="course">Course</label>
        <select  class="form-control" id="course">
        <option value="">Select </option>
        </select>
        </div>

        <div class="form-group col-md-6">
        <label for="dob">DOB</label>
        <input type="date" name="dob" class="form-control" id="dob"/>
        </div>





        </div>


        {{-- <div class="row"></div>
        <div class="row"></div> --}}

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
        <button type="submit" class="btn btn-primary float-right">Next</button>
        </div>
        </div>

        {{-- profile tab --}}
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        {{-- card-body --}}
        <div class="card-body">

        <div class="row">
        <div class="form-group col-md-6">
        <label for="father_name">Father's Name</label>
        <input type="text" name="father_name" class="form-control" id="father_name" placeholder="Enter Father's Name">
        </div>


        <div class="form-group col-md-6">
       <label for="father_occupation">Father Occupation</label>
        <input type="text" name="father_occupation" class="form-control" id="father_occupation" placeholder="Enter Father's Occupation">
          </div>

       <div class="form-group col-md-6">
        <label for="mother_name">Mother's Name</label>
        <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="Enter Mother's Name">
        </div>


        <div class="form-group col-md-6">
       <label for="mother_occupation">Mother Occupation</label>
        <input type="text" name="mother_occupation" class="form-control" id="mother_occupation" placeholder="Enter Mother's Occupation">
          </div>
        </div>

        </div>
        {{-- card-body --}}


         <div class="card-footer">
        <button type="submit" class="btn btn-primary float-right">Next</button>
        </div>

        </div>
       {{-- parent tab --}}

        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

       {{-- card-body --}}
        <div class="card-body">

        <div class="row">
        <div class="form-group col-md-6">
        <label for="county">County of Birth</label>
        <input type="text" name="county" class="form-control" id="email" placeholder="Enter Student Email">
        </div>


        <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Student Name">
        </div>

        <div class="form-group col-md-6">
        <label for="phone">Phone</label>
        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Student Phone">
        </div>


        <div class="form-group col-md-6">
        <label for="gender">Gender</label>
        <select  class="form-control" id="gender">
        <option value="">Select </option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
        </div>

        </div>

        </div>
        {{-- card-body --}}


         <div class="card-footer">
        <button type="submit" class="btn btn-primary float-right">Next</button>
        </div>



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
