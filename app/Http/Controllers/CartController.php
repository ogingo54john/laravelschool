<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response,Auth;
use App\Models\Product;
use App\Models\Cart;
class CartController extends Controller
{
    public function cart(){
        $cartItems = Cart::where("userId", Auth::user()->id)->get();
        return view("company.shop.cart", compact("cartItems") );
    }
    public function addToCart(Request $request){
        $productId = $request->productId;
        $productQuantity = $request->productQuantity;

        if(Auth::check()){
            $productCheck = Product::where("id", $productId)->first();
            if($productCheck){

                if(Cart::where("productId",$productId)->where("userId",Auth::id())->first()){
                    return Response::json([
                        "status"=>400,
                        "message"=>$productCheck->name ." already in cart"

                    ]);
                }{
                $cartItem = new Cart();
                $cartItem->productId = $productId;
                $cartItem ->quantity = $productQuantity;
                $cartItem->userId = Auth::id();
                $cartItem->save();
                return Response::json([
                    "status"=>201,
                    "message"=>$productCheck->name ." added to cart successfully"

                ]);
            }
            }

        }else{
           return Response::json([
            "status"=>401,
            "message"=>"Login to continue"
        ]);
        }
    }


    public function deleteCartItem(Request $request){
        if(Auth::check()){
            $productId = $request->productId;
            if(Cart::where("productId", $productId)->where("userId",Auth::user()->id)->exists()){
                $cartItem = Cart::where("productId", $productId)->where("userId", Auth::user()->id)->first();
                $cartItem->delete();
                 return Response::json([
                "status"=>200,
                "message"=>"Product deleted from cart successfully"
            ]);
            };
        }
        else{
            return Response::json([
             "status"=>401,
             "message"=>"Login to continue"
         ]);
         }

    }
}


// {
    // data = json.loads(request.body)
    // productId = data['productId']
    // action = data['action']
    // user = request.user
    // product = Product.objects.filter(id = productId).first()
    // if(product):
    //     cart,created = Cart.objects.get_or_create(user=user, product=product, purchased=False)
    //     if (action == 'add'):
    //         maxquantity = product.quantity
    //         cartObjects = Cart.objects.filter(product=product, user=user, purchased= False)
    //         q_in_cart = 0
    //         for item in cartObjects:
    //             q_in_cart = q_in_cart + item.quantity

    //         if q_in_cart < maxquantity:
    //             cart.quantity = (cart.quantity + 1)
    //         else:
    //             messages.error(request, "Sorry Only "+ str(product.quantity) +" available ")
    //     elif (action == 'remove'):
    //         cart.quantity = (cart.quantity - 1)
    //     cart.save()
    //     if cart.quantity <= 0 or (action == 'delete'):
    //         cart.delete()
    //         messages.success(request, 'Product removed successfully from your cart')
    // else:
    //     messages.error(request, 'No such product')
// }
