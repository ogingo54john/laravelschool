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
            <h1>Manage Students Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <a href="{{ route("create_student") }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Student</a>
                </h3>
              </div>

            @if (session("message"))
            <div class="alert alert-success ms-3 mt-3"> {{ session("message") }}</div>
            @endif


              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date Registered</th>
                    <td>Status</td>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  @forelse ($students as $key => $student )
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $student->user->name }}</td>
                    <td> {{$student->user->email}}     </td>
                    <td>  {{$student->phone}} </td>
                    <td>{{ $student->created_at }}</td>
                    <td>{{ $student->status }}</td>
                    <td>

                     <button
                     data-user="{{ $student->user_id}}"
                     data-id="{{ $student->id }}"   class="btn btn-danger delete-student" ><i class="fa fa-trash"></i></button>
                    <a href="/admin/students/{{ $student -> id }}/edit" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                    </td>
                  </tr>
                  @empty
                  <tr><td colspan="6" class="text-center">No Students Found</td></tr>
                  @endforelse

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date Registered</th>
                    <td>Status</td>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->




          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section("scripts")
@include("layouts.tables")

<script src="{{ asset("admin/assets/js/actions/deletestudent.js")}}"></script>
<script src="{{ asset("admin/assets/js/swal.js")}}"></script>
@endsection
