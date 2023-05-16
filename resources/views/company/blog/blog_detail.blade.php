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
<span class="breadcrumb-item active">Blog Detail</span>
</nav>
</div>
</div>
<!-- Breadcrumb End -->
 <!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
<div class="container" data-aos="fade-up">

<div class="row">
<div class="col-lg-8" >

{{-- blog single --}}
<div class="position-relative mb-3" >
<img class="img-fluid w-100" src="/posts/{{ $post->image }}" style="object-fit: cover;">
<div class="overlay position-relative bg-light">
<div class="mb-2" style="font-size: 14px;">
<a href="" style="text-decoration:none;cursor:pointer">{{ $post->category->name }}</a>
<span class="px-1">/</span>
<span>{{ $post->created_at }}</span>
</div>
<p class="h4">{{ $post->title }}</p>
<p class="m-0">{{ $post->body }}</p>
</div>
</div>

{{-- Blog single --}}

{{-- author bio --}}

@if ($post->user)
<div class="blog-author d-flex align-items-center">
<img src="/userprofiles/" class="rounded-circle float-left" alt="">
<div>
<h4>{{ $post->user->name }}</h4>
<div class="social-links" style="font-size:20px">
<a href="https://twitters.com/#"><i class="fa-brands fa-twitter text-primary"></i></a>
<a href="https://facebook.com/#"><i class="fa-brands fa-facebook text-primary"></i></a>
<a href="https://instagram.com/#"><i class="fa-brands fa-instagram text-primary"></i></a>
</div>
<p>
{{ $post->user->userProfile->bio ?? "No author bio" }}
</p>
</div>
</div>
@endif

<!-- End blog author bio -->

</div>
<!-- End blog entries list -->

<div class="col-lg-4">
<div class="sidebar">

<h3 class="sidebar-title">Search</h3>
<div class="sidebar-item search-form">
<form action="">
<input type="text">
<button type="submit"><i class="bi bi-search"></i></button>
</form>
</div><!-- End sidebar search formn-->

<h3 class="sidebar-title">Categories</h3>
<div class="sidebar-item categories">
<ul>
<li><a href="#">General <span>(25)</span></a></li>
<li><a href="#">Lifestyle <span>(12)</span></a></li>
<li><a href="#">Travel <span>(5)</span></a></li>
<li><a href="#">Design <span>(22)</span></a></li>
<li><a href="#">Creative <span>(8)</span></a></li>
<li><a href="#">Educaion <span>(14)</span></a></li>
</ul>
</div><!-- End sidebar categories-->

<h3 class="sidebar-title">Recent Posts</h3>
<div class="sidebar-item recent-posts">
<div class="post-item clearfix">
<img src="assets/img/blog/blog-recent-1.jpg" alt="">
<h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
<time datetime="2020-01-01">Jan 1, 2020</time>
</div>

<div class="post-item clearfix">
<img src="assets/img/blog/blog-recent-2.jpg" alt="">
<h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
<time datetime="2020-01-01">Jan 1, 2020</time>
</div>

<div class="post-item clearfix">
<img src="assets/img/blog/blog-recent-3.jpg" alt="">
<h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
<time datetime="2020-01-01">Jan 1, 2020</time>
</div>

<div class="post-item clearfix">
<img src="assets/img/blog/blog-recent-4.jpg" alt="">
<h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
<time datetime="2020-01-01">Jan 1, 2020</time>
</div>

<div class="post-item clearfix">
<img src="assets/img/blog/blog-recent-5.jpg" alt="">
<h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
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


