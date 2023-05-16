@extends("layouts.admin")

@section("styles")
<link rel="stylesheet" href="{{ asset("admin/assets/css/sweetalert2.css") }}">
<link href="{{ asset("admin/datatables/dataTables.bootstrap4.min.css") }}" rel="stylesheet">
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
    <h3 class="page-title"> Pricing Packages</h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pricing</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Pricing Packages</li>
      </ol>
    </nav>
  </div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
            <a href="/admin/pricing/create" class="btn btn-primary"><i class="mdi mdi-plus"></i> Create Pricing</a>

       </h4>
        </p>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Dated Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Dated Created</th>
                <th>Action</th>
            </tfoot>
            <tbody>
                @forelse ($pricing as $key => $package )
              <tr>
                <td> {{ $key + 1 }}</td>
                <td>{{ $package->name }}</td>
                <td>{{ $package->price }}</td>

                <td> {{ $package->status == "1" ? "Hidden" : "Visible" }}</td>
                <td>{{ $package->created_at  }}</td>
                <td>
                <button data-id="{{ $package->id }}"  class="btn btn-danger" id="deletepackage"><i class="mdi mdi-delete"></i></button>
                <a href="/admin/edit_package/{{$package->id }}" class="btn btn-succcess"><i class="mdi mdi-pencil"></i></a>
                </td>
              </tr>
              @empty
              <tr><td>No Pricing Package Added</td></tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection

@section("scripts")

<script>$(document).ready(function() { $('#dataTable').DataTable();});</script>
<script src="{{ asset("admin/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset ("admin/datatables/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ asset("admin/assets/js/swal.js") }}"></script>
<script src="{{ asset("admin/assets/js/actions/deletepackage.js") }}"></script>

@endsection
