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
            <h1>Manage Branches Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Branches</li>
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
                <a href="{{ route("create_branch") }}" class="btn btn-primary">Add New Branch</a>
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
                    <th>Title</th>
                    <th>Initial</th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  @forelse ($branches as $key => $branch )
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $branch->title }}</td>
                    <td>{{ $branch->initial }}</td>
                    <td>
                    @if ($branch->status == "0")
                  <label class="badge badge-danger">Active</label>
                   @elseif($branch->status == "1")
                  <label class="badge badge-primary">Inactive</label>
                    @endif
                    </td>
                    <td>{{ $branch->created_at }}</td>
                    <td>

                    <button data-id="{{ $branch->id }}"  class="btn btn-danger delete-branch" ><i class="fa fa-trash"></i></button>
                    <a href="/admin/branches/edit/{{ $branch -> id }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
                    </td>
                  </tr>
                  @empty
                  <tr><td colspan="6" class="text-center">No branches Found</td></tr>
                  @endforelse

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Initial</th>
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
@include("layouts.tables")

<script src="{{ asset("admin/assets/js/actions/deletebranch.js")}}"></script>
<script src="{{ asset("admin/assets/js/swal.js")}}"></script>
@endsection
