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
    <h3 class="page-title">Manage Posts </h3>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Posts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Manage Posts</li>
      </ol>
    </nav>
  </div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">
            <a href="/admin/posts/create" class="btn btn-primary"><i class="mdi mdi-plus"></i> Post</a>
        </h4>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                 <th>Category</th>
                 <th>Status</th>
                <th>Date Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                   <th>Category</th>
                   <th>Status</th>
                  <th>Date Created</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            <tbody>
                @forelse ($posts as $key => $post )
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    @if ($post->category)
                    {{ $post->category->name }}
                    @else
                    No Category
                    @endif
                </td>
                <td>{{ $post->status == "1" ? "Hidden" : "Visible" }}</td>
                <td>{{ $post->created_at }}</td>
                <td><button data-id="{{ $post->id }}"  class="btn btn-danger delete-post"><i class="mdi mdi-delete"></i></button>
                    <a href="/admin/posts/edit/{{$post->id }}" class="btn btn-succcess"><i class="mdi mdi-pencil"></i></a></td>
              </tr>
              @empty
              <tr><td>No Post Added</td></tr>
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
<script src="{{ asset("admin/assets/js/actions/delete-post.js") }}"></script>

@endsection
