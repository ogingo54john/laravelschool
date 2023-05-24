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
            <h1>Add Staff Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Staff Form</li>
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
                <h3 class="card-title">Add Staff Form</h3>
              </div>
              <!-- /.card-header -->
        @if (session("message"))
        <div class="alert alert-success ms-3 mt-3"> {{ session("message") }}</div>
        @endif

        <form class="mt-3" autocomplete="off" method="post" action="{{ route("create_staff") }}" novalidate="novalidate" enctype="multipart/form-data">
        @csrf
        <ul class="nav nav-pills mb-3 mx-2" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-basic-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Basic Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-parent-tab" data-toggle="pill" href="#pills-parent" role="tab" aria-controls="pills-parent" aria-selected="false">Parent Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-origin-tab" data-toggle="pill" href="#pills-origin" role="tab" aria-controls="pills-origin" aria-selected="false">Origin</a>
        </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-basic-tab">

        {{-- card-body --}}
        <div class="card-body">

        <div class="row">

        <div class="form-group col-md-6">
        <label for="name">Name <span style="color:red">*</span></label>
        <input type="text" class="form-control @error('name') is-invalid @enderror"
         id="name" name="name" placeholder="Enter Staff Name" value="{{ old('name') }}" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

         <div class="form-group col-md-6">
        <label for="email">Email <span style="color:red">*</span></label>
        <input type="email" name="email" value="{{ old("email") }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Staff Email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>


        <div class="form-group col-md-6">
        <label for="phone">Phone <span style="color:red">*</span></label>
        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Enter Staff Phone" value="{{ old('phone') }}">
         @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>


       <div class="form-group col-md-6">
        <label for="password">Password <span style="color:red">*</span></label>
        <input type="password" name="password"  class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter Staff Password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        </div>

        <div class="form-group col-md-6">
        <label for="staff_number">Staff No <span style="color:red">*</span></label>
        <input type="number" step="0.0" min="1"  name="staff_number" class="form-control @error('staff_number') is-invalid @enderror" id="staff_number" placeholder="Enter Staff Number">
            @error('staff_number')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div>


        <div class="form-group col-md-6">
        <label for="gender">Gender <span style="color:red">*</span></label>
        <select  class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender" >
        <option value="">Select </option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
        @error('gender')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        </div>


        <div class="form-group col-md-6">
        <label for="image">Photo <span style="color:red">*</span></label>
        <input type="file" name="image" value="{{ old("image") }}" class="form-control @error('image') is-invalid @enderror" id="image" accept="image/png, image/jpeg, image/jpg"/>
        @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror

        </div>

        <div class="form-group col-md-6">
        <label for="dob">DOB</label>
        <input type="date" value="{{ old("dob") }}"  name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob"/>
        @error('dob')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>



        </div>


        {{-- <div class="row"></div>
        <div class="row"></div> --}}

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
          <a class="btn btn-primary float-right btnNext">Next &#8594;</a>
        </div>
        </div>

        {{-- parent tab --}}
        <div class="tab-pane fade" id="pills-parent" role="tabpanel" aria-labelledby="pills-parent-tab">
        {{-- card-body --}}
        <div class="card-body">

        <div class="row">
        <div class="form-group col-md-6">
        <label for="father_name">Father's Name</label>
        <input type="text" name="father_name" value="{{ old("father_name") }}" class="form-control @error('father_name') is-invalid @enderror" id="father_name" placeholder="Enter Father's Name">
        @error('father_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>


        <div class="form-group col-md-6">
        <label for="father_occupation">Father Occupation</label>
        <input type="text" name="father_occupation" value="{{ old("father_occupation") }}" class="form-control @error('father_occupation') is-invalid @enderror" id="father_occupation" placeholder="Enter Father's Occupation">
        @error('father_occupation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>


         <div class="form-group col-md-6">
        <label for="father_phone_number">Father Phone</label>
        <input type="text" name="father_phone_number"  value="{{ old("father_phone_number") }}" class="form-control @error('father_phone_number') is-invalid @enderror" id="father_phone_number" placeholder="Enter Father's Phone Number">
         @error('father_phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>


       <div class="form-group col-md-6">
        <label for="mother_name">Mother's Name</label>
        <input type="text" name="mother_name" value="{{ old("mother_name") }}" class="form-control @error('mother_name') is-invalid @enderror" id="mother_name" placeholder="Enter Mother's Name">
        @error('mother_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>


        <div class="form-group col-md-6">
       <label for="mother_occupation">Mother Occupation</label>
        <input type="text" name="mother_occupation" value="{{ old("mother_occupation") }}" class="form-control @error('mother_occupation') is-invalid @enderror" id="mother_occupation" placeholder="Enter Mother's Occupation">
         @error('mother_occupation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
          </div>



         <div class="form-group col-md-6">
        <label for="mother_phone_number">Mother Phone</label>
        <input type="text" name="mother_phone_number" value="{{ old("mother_phone_number") }}" class="form-control @error('mother_phone_number') is-invalid @enderror" id="mother_phone_number" placeholder="Enter Mother's Phone Number">
        @error('mother_phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>

         </div>

        </div>
        {{-- card-body --}}


        <div class="card-footer">
        <a  class="btn btn-primary float-right btnNext">Next &#8594;</a>
        <a  class="btn btn-primary float-left btnPrevious">&#8592; Previous</a>

        </div>

        </div>
       {{-- parent tab --}}

        <div class="tab-pane fade" id="pills-origin" role="tabpanel" aria-labelledby="pills-origin-tab">

       {{-- card-body --}}
        <div class="card-body">

        <div class="row">
        <div class="form-group col-md-6">
        <label for="county">County of Birth</label>
        <input type="text" name="county" value="{{ old("county") }}" class="form-control @error('county') is-invalid @enderror" id="county" placeholder="Enter County of Birth">
       @error('county')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>


        <div class="form-group col-md-6">
        <label for="district">District</label>
        <input type="text" value="{{ old("district") }}" class="form-control @error('district') is-invalid @enderror" id="district" name="district" placeholder="Enter District of Birth">
       @error('district')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>

        <div class="form-group col-md-6">
        <label for="division">Division</label>
        <input type="text" value="{{ old("division") }}" class="form-control @error('division') is-invalid @enderror" id="division" name="division" placeholder="Enter Division of Birth">
        @error('division')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>


        <div class="form-group col-md-6">
        <label for="location">Location</label>
        <input type="text" name="location" value="{{ old("location") }}" class="form-control @error('location') is-invalid @enderror" id="location" placeholder="Enter Location of Birth">
       @error('location')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>
        <div class="form-group col-md-6">
        <label for="sub_location">Sub Location</label>
        <input type="text" name="sub_location" value="{{ old("sub_location") }}" class="form-control @error('sub_location') is-invalid @enderror" id="sub_location" placeholder="Enter Sub-Location of Birth">
        @error('sub_location')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        </div>


        </div>

        </div>
        {{-- card-body --}}


        <div class="card-footer">
        <a  class="btn btn-primary float-left btnPrevious">&#8592; Previous</a>
        <button type="submit" class="btn btn-primary float-right">Add Student</button>
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
$('.btnNext').click(function(e) {
  e.preventDefault();
  $('.nav-pills .active').parent().next('li').find('a').trigger('click');
});

$('.btnPrevious').click(function(e) {
  e.preventDefault();
  $('.nav-pills .active').parent().prev('li').find('a').trigger('click');
});
</script>


@endsection
