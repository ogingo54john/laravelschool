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
    <h3 class="page-title"> Categories </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Categories</a></li>
        <li class="breadcrumb-item active" aria-current="page">All Categories</li>
      </ol>
    </nav>
  </div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
            <a href="/admin/categories/create" class="btn btn-primary"><i class="mdi mdi-plus"></i> Create Category</a>

       </h4>
        </p>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Dated Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Dated Created</th>
                <th>Action</th>
            </tfoot>
            <tbody>
                @forelse ($categories as $key => $category )
              <tr>
                <td> {{ $key + 1 }}</td>
                <td>{{ $category->name }}</td>
                <td> {{ $category->status == "1" ? "Hidden" : "Visible" }}</td>
                <td>{{ $category->created_at  }}</td>
                <td><button data-id="{{ $category->id }}"  class="btn btn-danger delete-category"><i class="mdi mdi-delete"></i></button>
                <a href="/admin/edit_category/{{$category->id }}" class="btn btn-succcess"><i class="mdi mdi-pencil"></i></a>
                </td>
              </tr>
              @empty
                <tr><td colspan="5" class="text-center">No Users Found</td></tr>
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
<script src="{{ asset("admin/assets/js/actions/deletecategory.js") }}"></script>

@endsection
