
@extends("layouts.app")
@section("styles")
<style>
    .gradient-custom {
    /* fallback for old browsers */
    background: #6a11cb;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
</style>
@endsection
@section("content")
<section class="h-100 gradient-custom">
    <div class="container py-5">
      <div class="row d-flex justify-content-center my-4">
        <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Cart - 2 items</h5>
            </div>
            <div class="card-body">
        @forelse ($cartItems as $item )
 <!-- Single item -->
 <div class="row product-data">
    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
      <!-- Image -->
      <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
        <img src="/products/{{ $item->products->image }}"
          class="w-100" alt="Blue Jeans Jacket" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
        </a>
      </div>
      <!-- Image -->
    </div>

    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
      <!-- Data -->
      <p><strong>{{ $item->products->name }}</strong></p>
      {{-- <p>Color: blue</p>
      <p>Size: M</p> --}}
      <button data-id="{{ $item->productId }}"   class="btn btn-primary btn-sm me-1 mb-2 delete-Cart" data-bs-toggle="tooltip"
        title="Remove item">
        <i class="fas fa-trash"></i>
      </button>
      <button type="button" class="btn btn-danger btn-sm mb-2" data-bs-toggle="tooltip"
        title="Move to the wish list">
        <i class="fas fa-heart"></i>
      </button>
      <!-- Data -->
    </div>

    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
      <!-- Quantity -->
      <div class="d-flex mb-4" style="max-width: 300px">
        <div class="d-flex align-items-center mb-4 pt-2">
            <div class="input-group quantity mr-3" style="width: 130px;">
                <div class="input-group-btn">
                    <button  class="btn btn-primary btn-minus btn-sm">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
                <input type="text" id="quantity" class="form-control bg-light btn-sm border-0 text-center" value="{{ $item->quantity}}">
                <div class="input-group-btn">
                    <button class="btn btn-primary btn-plus btn-sm">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
            <input type="hidden" value="{{ $item->productId }}" id="productId">
            <button  class="btn btn-primary btn-sm px-3 w-50 addToCart"><i class="fa fa-shopping-cart mr-1"></i> Add To
                Cart</button>
        </div>
      </div>
      <!-- Quantity -->

      <!-- Price -->
      <p class="text-start text-md-center">
        <strong>Ksh. {{ number_format($item->products->price,2) }}</strong>
      </p>
      <!-- Price -->
    </div>
  </div>
  <!-- Single item -->
  <hr class="my-4" />
                @empty
 <!-- Single item -->
 <div class="row">

    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
      <!-- Data -->
      <p><strong>You have an empty cart</strong></p>
      <a href="/shop"  class="btn btn-danger btn-sm mb-2" data-bs-toggle="tooltip">
       Continue Shopping
      </a>
      <!-- Data -->
    </div>


  </div>
  <!-- Single item -->
        @endforelse
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <p><strong>Expected shipping delivery</strong></p>
              <p class="mb-0">12.10.2020 - 14.10.2020</p>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body">
              <p><strong>We accept</strong></p>
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                alt="Visa" />
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                alt="American Express" />
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                alt="Mastercard" />
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
                alt="PayPal acceptance mark" />
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">Summary</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                  Products
                  <span>$53.98</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  Shipping
                  <span>Gratis</span>
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                  <div>
                    <strong>Total amount</strong>
                    <strong>
                      <p class="mb-0">(including VAT)</p>
                    </strong>
                  </div>
                  <span><strong>$53.98</strong></span>
                </li>
              </ul>

              <button type="button" class="btn btn-primary btn-lg btn-block">
                Go to checkout
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section("scripts")

@section("scripts")
<script>

$(document).ready(function(){

$(".addToCart").on("click", function(e){
    e.preventDefault();
    // var productId = $(this).data("id");
    // var productQuantity = $("#quantity").val();
    var productId = $(this).closest(".product-data").find("#productId").val();
    var productQuantity = $(this).closest(".product-data").find("#quantity").val();
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


var removeCartItem = document.getElementsByClassName('delete-Cart');
for (var i = 0; i < removeCartItem.length; i++){
    var button = removeCartItem[i]
    button.addEventListener('click', function () {
    let productId = this.dataset.id;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });
    jQuery.ajax({
            url: "/delete-cart-item" ,
            method: "POST",
            data: {productId},
            success: function (response) {
                alert(response.message)
                location.reload();

            },
            error: function (error) {
                alert(error.responseJSON.message);

            },
        });

    })
}
});



</script>

@endsection

