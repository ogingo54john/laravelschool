@extends("layouts.app")

@section("styles")
<link rel="stylesheet" href="{{ asset("assets/css/blog.css") }}">
@endsection
@section("content")
<!-- Breadcrumb Start -->
<div class="container-fluid pt-4 ">
<div class="container">
<nav class="breadcrumb bg-transparent m-0 p-0">
<a class="breadcrumb-item" href="#">Home</a>
<span class="breadcrumb-item active">Blog</span>
</nav>
</div>
</div>
<!-- Breadcrumb End -->
 <!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
<div class="container" data-aos="fade-up">

<div class="row">
<div class="col-lg-8 ">
<div class="row">
@forelse ($posts as $post )
<div class="col-lg-6 mb-3">

<div class="d-flex mb-3">
<img src="/posts/{{ $post->image }}" style="width: 140px; height: 140px; object-fit: cover;">
<div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 150px;">
<div class="mb-1 mt-3" style="font-size: 15px;">
<a href="" class="text-dark " style="text-decoration:none;cursor:pointer">{{ $post->category->name }}</a>
<span class="px-1">/</span>
<span>{{ $post->created_at }}</span>
</div>

<div class="mb-md-1" style="font-size: 13px;">
@if ($post->user)
<a href="" style="text-decoration:none;cursor:pointer"  class="text-success">{{ $post->user->name }}</a>
@endif


<div class="d-flex py-0.5">
<a class="mb-2 text-dark" href="/blog/{{ $post->slug }}" style="text-decoration:none">{{ $post->title }}</a>
</div>
</div>

</div>

</div>
</div>
@empty
<div class="text-center text-warning">Keep checking our company is working to bring you amazing content</div>
@endforelse
</div>


{{-- pagination --}}
<div class="row">
<div class="col-12 mt-3">
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center">
<li class="page-item disabled">
<a class="page-link" href="#" aria-label="Previous">
<span class="fa fa-angle-double-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
</li>
<li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item">
<a class="page-link" href="#" aria-label="Next">
<span class="fa fa-angle-double-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</li>
</ul>
</nav>
</div>
</div>

{{-- pagination --}}
</div><!-- End blog entries list -->

<div class="col-lg-4">
<div class="sidebar">

<h3 class="sidebar-title">Search</h3>
<div class="sidebar-item search-form">
<form action="">
<input type="text">
<button type="button"><i class="fa fa-search"></i></button>
</form>
</div><!-- End sidebar search formn-->

<h3 class="sidebar-title">Categories</h3>
<div class="sidebar-item categories">
<ul>

@forelse ($categories as $category )
<li><a href="/blog/category/{{ $category->slug }}">{{ $category->name }} <span> (25) </span></a></li>
@empty
<li><a href="#">Website Design and davelopment</a></li>
@endforelse
</ul>
</div><!-- End sidebar categories-->

<h3 class="sidebar-title">Recent Posts</h3>
<div class="sidebar-item recent-posts">


<div class="post-item clearfix">
<img src="assets/img/blog/blog-recent-2.jpg" alt="">
<h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
<time datetime="2020-01-01">Jan 1, 2020</time>
</div>


</div><!-- End sidebar recent posts-->

<h3 class="sidebar-title">Tags</h3>
<div class="sidebar-item tags">
<ul>
<li><a href="#">App</a></li>
<li><a href="#">IT</a></li>
<li><a href="#">Business</a></li>
<li><a href="#">Mac</a></li>
<li><a href="#">Design</a></li>
<li><a href="#">Office</a></li>
<li><a href="#">Creative</a></li>
<li><a href="#">Studio</a></li>
<li><a href="#">Smart</a></li>
<li><a href="#">Tips</a></li>
<li><a href="#">Marketing</a></li>
</ul>
</div><!-- End sidebar tags-->

</div><!-- End sidebar -->

</div><!-- End blog sidebar -->

</div>

</div>
</section><!-- End Blog Section -->
@endsection


