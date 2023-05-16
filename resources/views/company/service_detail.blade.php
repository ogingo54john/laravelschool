@extends("layouts.app")


@section("content")

<div class="container-fluid bg-faded">
    <div class="container">
        <div class="row justify-content-center align items center">
            <div class="col-md-8 mt-3">
    <div class="row">

    <!-- service content-->
    <div class="col-lg-12 justify-content-space-between  align-items-stretch">

<div class="d-flex align-items-center justify-content-between py-2 px-4 mb-3">
    <h3 class="m-0 text-danger">{{ $service -> name }}</h3>
</div>
        <div class="position-relative mb-3">
            <div class="overlay position-relative bg-light">
                <p class="m-0">{!! $service->description !!}</p>
                <div class="px-3">
                    <a href="#" class="text-center btn-sm btn btn-dark text-light">Contact Us For {{ $service->name }}</a>
                </div>
            </div>

        </div>

    </div>
    <!-- end service -->

    </div>
    </div>

<!-- end of 8 column about -->

<!-- start of sidebar -->
<div class="col-lg-4 pt-4 mt-3  p-lg-0">
<!-- Side right news -->
<div class="row">

    <div class="col-12">

<!-- contact -->
  <div class="pb-3">
    <div class="bg-light py-2 px-4 mb-3">
        <h3 class="m-0">Contact Us</h3>
    </div>
    {{-- {% for contact in contacts %} --}}
    <div class="d-flex mb-3">
        <a href="tel:+254745566505" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
            <small class="fa fa-phone-alt mr-2"></small><small>
                0745566505
                {{-- {{contact.phone}} --}}
            </small>
        </a>
        <a href="https://wa.me/+254745566505?text=Contact%20me%20in%20whatsapp" target="_blank" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
            <small class="fab fa-whatsapp mr-2"></small><small> Whatsapp</small>
        </a>

    </div>
    <div class="d-flex mb-3">
        <a role="button" class="d-block w-100 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
            <small class="fa fa-envelope mr-2"></small><small>
                {{-- {{ contact.email }} --}}
                contact@nyagaka.com
            </small>
        </a>
    </div>
   {{-- {% endfor %} --}}
</div>
<!-- contact -->
</div>
<div class="col-12">

<!-- Products-->
<div class="pb-3">
<div class="bg-light py-2 px-4 mb-3">
<h3 class="m-0">Our Products</h3>
</div>
{{-- {% for product in product_s %} --}}
<div class="d-flex mb-3">
<img src="#" style="width: 100px; height: 100px; object-fit: cover;">
<div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
<div class="mb-1" style="font-size: 13px;">
<a role="button" class="text-primary" style="text-decoration:none;" >
    {{-- {{ product.name }} --}} Name
</a>
<span class="px-1">Price</span>
<span>$ 300
    {{-- {{product.price}} --}}
</span>
</div>
<a class="h6  btn btn-primary" href="#" style="text-decoration:none;">Read More</a>
<p></p>
</div>
</div>
</div>
{{-- {% endfor %} --}}
<!--Our Products -->
</div>
</div>
<!-- Side right news -->
</div>
</div>
</div>
</div>
@endsection
