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
            <h1>Manage Users Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
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

                <a href="" class="btn btn-primary">Add New User</a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   <th>ID</th>
                    <th>Name</th>
                     <th>Email</th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  @forelse ($users as $key => $user )
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                    @if ($user->role_as == "0")
                  <label class="badge badge-danger">Staff</label>
                    @elseif ($user->role_as == "1")
                  <label class="badge badge-primary">Admin</label>
                    @else
                  <label class="badge badge-success">User</label>

                    @endif

                    </td>
                    <td>{{ $user->created_at }}</td>
                    <td><button  href="" class="btn btn-danger deleteuser" data-id="{{ $user->id }}"><i class="mdi mdi-delete"></i></button>
                        <a href="/admin/users/{{ $user -> id }}/edit" class="btn btn-primary"><i class="mdi mdi-pencil"></i></a>
                    </td>
                  </tr>
                  @empty
                  <tr><td colspan="6" class="text-center">No Users Found</td></tr>
                  @endforelse

                  </tbody>
                  <tfoot>
                  <tr>
                   <th>ID</th>
                    <th>Name</th>
                     <th>Email</th>
                    <th>Status</th>
                    <th>Date Created</th>
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
{{-- <script>
{{-- $(document).ready(function() {
  $('#dataTable').DataTable();
});
</script> --}}
{{-- <script src="{{ asset("admin/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset ("admin/datatables/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ asset("admin/assets/js/swal.js") }}"></script>
<script src="{{ asset("admin/assets/js/actions/deleteservice.js") }}"></script> --}}

@include("layouts.tables")
@endsection
