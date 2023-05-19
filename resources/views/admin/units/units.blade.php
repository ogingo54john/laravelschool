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
            <h1>Manage Units Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Units</li>
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

                <a href="{{ route("create_unit") }}" class="btn btn-primary">Add New Unit</a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   <th>ID</th>
                   <th>Unit Code</th>
                    <th>Title</th>
                    <th>Course</th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  @forelse ($units as $key => $unit )
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{$unit->unit_code}}</td>
                    <td>{{ $unit->title }}</td>
                   <td>
                    @if ($unit->course)
                    {{ $unit->course->title }}
                    @else
                    No Course
                    @endif

                    <td>
                    @if ($unit->status == "0")
                  <label class="badge badge-danger">Active</label>
                   @elseif($unit->status == "1")
                  <label class="badge badge-primary">Inactive</label>
                    @endif
                    </td>
                    <td>{{ $unit->created_at }}</td>
                    <td>
                    {{-- <button  href="" class="btn btn-danger deleteuser" data-id="{{ $user->id }}"><i class="mdi mdi-delete"></i></button>
                        <a href="/admin/users/{{ $user -> id }}/edit" class="btn btn-primary"><i class="mdi mdi-pencil"></i></a> --}}
                    </td>
                    <td></td>

                  </tr>
                  @empty
                  <tr><td colspan="7" class="text-center">No Units Found</td></tr>
                  @endforelse

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Unit Code</th>
                     <th>Title</th>
                     <th>Course</th>
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
@endsection
