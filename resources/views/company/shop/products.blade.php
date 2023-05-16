@extends("layouts.app")

@section("styles")
<style>
#so{
height:280px;
object-fit:cover;
object-position:center center;
}
a{
text-decoration:none;
}
</style>
@endsection

@section("content")

<div>
<div class = 'container my-4'>
<div class ='row'>
<div class="col-lg-12">
<div class="row">
@forelse ($products as $product )
{{-- { for product in products %} --}}
<div class ='col-lg-3 mb-3 align-items-stretch '>
<div class="card pr-3">
<img  id='so'  src="/products/{{ $product->image ?? "" }}" class="card-img-top" alt="{{$product->name}}">
<div class="card-body">
<p class="card-title">{{$product->name }}</p>
@if ($product->older_price )

<strong ><del class="text-muted">Ksh.{{$product->older_price }}</del></strong>
@endif
<strong>
Ksh.{{$product->price}}
</strong>
<a href="/shop/{{ $product->slug }}" class="btn btn-info btn-sm ">Read More<i class="fa fa-info-circle outline-secondary ms-2" style='font-size:20px' data-toggle="tooltip" data-placement="bottom" title='Click to Read More' aria-hidden="true"></i></a>
</div>
</div>
</div>
{{-- {% endfor %} --}}
@empty

<div class ='col-lg-3 mb-3 align-items-stretch '>
<div class="card pr-3">
<div class="card-body">
<p class="card-title">Ooops! </p>
<strong class="text-danger">No product has been added.</strong>

</div>
</div>
</div>


@endforelse

</div>
</div>

</div>
</div>

<div class="container-fluid">
<div class="row mt-10">
<div class="col-12">
{{-- pagination --}}
</div>
</div>
</div>
</div>



@endsection
