@extends("layouts.app")
@section("styles")

@endsection


@section("content")
<div class="container-fluid bg-gradient-light">
    <div class="container py-4 product-data">
    <a href="/shop" class="btn btn-warning mb-3 rounded-pill d-lg-none">Back to Shop</a>
    <div class="row py-4">
        <div class="col-md-6">
                  <img
                style="max-height: 192px; max-width: 100%;object-fit:cover;"
                class="d-none d-lg-block" src="/products/{{$product->image }}" alt="{{$product->name}}"/>
          <div class="d-lg-none d-sm-block">	<img src="/products/{{$product->image}}" class='w-100' alt="{{ $product->name }}"></div>

          <div class="box-element product-data">
            <h6 class='mt-2'><strong>{{$product->name}}</strong></h6>
            <hr>

            @if($product -> older_price)
            <strong ><del class="text-muted">Ksh.{{number_format($product->older_price,2)}}</del></strong>

            @endif
            <strong>Ksh.{{number_format($product->price,2)}}</strong>

          </div>
          <div class="d-flex align-items-center mb-4 pt-2">
            <div class="input-group quantity mr-3" style="width: 130px;">
                <div class="input-group-btn">
                    <button class="btn btn-primary btn-minus btn-sm">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
                {{-- <input type="hidden" id="productId"  value="{{ $product->id }}" > --}}
                <input type="text" id="quantity" class="form-control bg-secondary btn-sm border-0 text-center" value="1">
                <div class="input-group-btn">
                    <button class="btn btn-primary btn-plus btn-sm">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
            <button data-id="{{ $product->id }}" class="btn btn-primary btn-sm px-3 addToCart"><i class="fa fa-shopping-cart mr-1"></i> Add To
                Cart</button>
        </div>

        </div>
        <div class="col-md-6 mt-3">

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item mb-2">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Description
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{{$product->description }}</div>
                  </div>
                </div>
                <div class="accordion-item mb-2">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Features
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{{ $product->features }}</div>
                  </div>
                </div>
                <div class="accordion-item mb-2">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                FAQs
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{{ $product->faq }}</div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class='row d-lg-none px-10'>
        <div class='col-sm-12'>
            <a href='#' class='btn btn-primary btn-lg w-100'>Go to Cart</a>
        </div>
    </div>
    </div>
</div>
@endsection

@section("scripts")
<script>
$(document).ready(function(){

// $(".addToCart").on("click", function(e){
//     e.preventDefault();
//     var productId = $(this).data("id");
//     var productQuantity = $("#quantity").val();
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
//         }
//     });

//     jQuery.ajax({
//             url: "/add-to-cart" ,
//             method: "POST",
//             data: {productId,productQuantity},
//             success: function (response) {
//                 alert(response.message)

//             },
//             error: function (error) {
//                 alert(error.responseJSON.message)

//             },
//         });
// });

//     $(".btn-plus").on("click", function(e){
//         e.preventDefault();
//         var quantity = $("#quantity").val();
//         var q = parseInt(quantity,10);
//         q =isNaN(q) ? 0 : q;
//         if(q<10){
//             q++;
//             $("#quantity").val(q);
//         }
//     });
//     $(".btn-minus").on("click", function(e){
//         e.preventDefault();
//         var decQuantity = $("#quantity").val();
//         var q = parseInt(decQuantity,10);
//         q =isNaN(q) ? 0 : q;
//         if(q > 1){
//             q--;
//             $("#quantity").val(q);
//         }
//     });
// });

$(".addToCart").on("click", function(e){
    e.preventDefault();
    var productId = $(this).data("id");
    var productQuantity = $("#quantity").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });

    jQuery.ajax({
            url: "/add-to-cart" ,
            method: "POST",
            data: {productId,productQuantity},
            success: function (response) {
                alert(response.message)

            },
            error: function (error) {
                alert(error.responseJSON.message)

            },
        });
});

    $(".btn-plus").on("click", function(e){
        e.preventDefault();
        var quantity = $(this).closest(".product-data").find("#quantity").val();
        var q = parseInt(quantity,10);
        q =isNaN(q) ? 0 : q;
        if(q<10){
            q++;
            $(this).closest(".product-data").find("#quantity").val(q);
        }
    });
    $(".btn-minus").on("click", function(e){
        e.preventDefault();
        var decQuantity = $(this).closest(".product-data").find("#quantity").val();
        var q = parseInt(decQuantity,10);
        q =isNaN(q) ? 0 : q;
        if(q > 1){
            q--;
            $(this).closest(".product-data").find("#quantity").val(q);
        }
    });
});

</script>
@endsection
