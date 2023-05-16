@extends("layouts.admin")

@section("styles")
<link href="{{ asset("admin/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset("admin/assets/css/sweetalert2.css") }}">
<style>
    input[type=search]{
        background-color: #fff;
        color:black

    }
     input[type=search]:focus{
        background-color: #fff;
    }
</style>
@endsection

@section("content")

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Manage Services </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Services</a></li>
          <li class="breadcrumb-item active" aria-current="page">All Services</li>
        </ol>
      </nav>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Services</h4>
            <a href="{{ route("create_service") }}" class="card-description btn btn-sm btn-primary mb-2"> Add Service</a>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tfoot>
                <tbody>
                    @forelse ($services as $key => $service )
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service -> status == "1" ? "Hidden" : "Visible"}}</td>
                    <td>{{ $service->created_at }}</td>
                    <td><button  href="" class="btn btn-danger deleteservice" data-id="{{ $service->id }}"><i class="mdi mdi-delete"></i></button>
                        <a href="{{ url("/admin/update_service", $service -> id) }}" class="btn btn-primary"><i class="mdi mdi-pencil"></i></a>
                    </td>
                  </tr>
                  @empty
                  <tr><td>No Service Added</td></tr>
                  @endforelse

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@endsection
@section("scripts")
<script>
$(document).ready(function() {
  $('#dataTable').DataTable();
});

</script>
<script src="{{ asset("admin/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset ("admin/datatables/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ asset("admin/assets/js/swal.js") }}"></script>
<script src="{{ asset("admin/assets/js/actions/deleteservice.js") }}"></script>
@endsection
