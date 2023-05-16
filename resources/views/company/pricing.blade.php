@extends("layouts.app")

@section("content")

<!-- Breadcrumb Start -->
<div class="container-fluid pt-4 d-lg-none">
<div class="container">
<nav class="breadcrumb bg-transparent m-0 p-0">
<a class="breadcrumb-item" href="#">Home</a>
<span class="breadcrumb-item active">Pricing</span>
</nav>
</div>
</div>


<!-- Breadcrumb End -->


<!-- packages -->

<div class="container-fluid bg-faded py-3">
<div class="container">
<h4 class="m-0 text-uppercase fw-bold p-3">How much does our web development service cost?</h4>
<div class="row">
<div class="col-lg-12">
<div class="row">
<!-- <div class="col-12">
<div class="d-flex align-items-center justify-content-center bg-light py-2 px-4 mb-3">

</div>
</div> -->

<!-- start of single package -->


@forelse ($packages as $package )
<div class="col-lg-4 d-flex align-items-stretch mb-4">
<div class="card mb-lg-0">
<div class="card-body">
<h5 class="card-title text-dark text-uppercase text-center">{{$package->name }}</h5>
<h6 class="card-text text-center" style="font-size:20px; color:green;font-weight:900">Ksh.{{ number_format($package->price, 2) }}<span class="period"></span></h6>
<hr>
<ul>
<li>{{ $package->description }}</li>
</ul>
<div class="d-grid">
<a href="/pricing/detail/{{ $package->slug }}"  class="text-light text-center" style="background-color:green; padding:10px; border-color:none;text-decoration:none;" >Order Package</a>
</div>
</div>
</div>
</div>
@empty

<div class="col-lg-4 d-flex align-items-stretch mb-4">
<div class="card mb-lg-0">
<div class="card-body">

<ul>
<li>Ooops! </li>
<li>Ooops! Keep checking our team will bring you amazing content soon</li>
</ul>
</div>
</div>
</div>
@endforelse

<!--  end of single package -->

</div>
</div>
</div>
</div>
</div>

<!-- packages -->

@endsection

