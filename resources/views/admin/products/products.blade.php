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
      <h3 class="page-title"> Manage Products </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Products</a></li>
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>
    </div>

  <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"><a href="{{ route("create_product") }}" class="btn btn-primary"> <i class="mdi mdi-plus"></i>Add Product</a></h4>

          </p>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
              </tfoot>
              <tbody>
                @forelse ($products as $key => $product )
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $product->name }}</td>
                    <td>{{ $product -> price }}</td>
                    <td>{{ $product -> status == "1" ? "Hidden" : "Visible"}}</td>
                    <td><img width="40" src="/products/{{ $product->image }}" /></td>
                  <td><a href="{{ url("admin/edit_product/".$product->id) }}" class="badge badge-success"><i class="mdi mdi-pencil"></i></a>
                    <button   data-id = "{{ $product->id }}" class="badge badge-danger delete_prod"><i class="mdi mdi-delete"></i></button></td>
                </tr>
                @empty
                <tr><td>No Product Added</td></tr>
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
<script src="{{ asset("admin/assets/js/actions/deleteproduct.js") }}"></script>
@endsection

