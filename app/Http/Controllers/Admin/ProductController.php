<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view("admin.products.products", compact("products"));
    }
    public function create_product(){
        return view("admin.products.create_product");
    }

    public function save_product(Request $request){
        // print_r($_POST);
        // print_r($_FILES);
        $image = $request->file("image");
        $imagename = time() .'.'.$image->getClientOriginalExtension();
        $request->image->move(public_path('products'), $imagename);

        $productData = [
            "name" => $request->name,
            "description" => $request->description,
            "meta_description" => $request->meta_description,
            "meta_keyword" => $request->meta_keyword,
            "meta_title" => $request->meta_title,
            "status" => $request->status,
            "older_price" =>$request->older_price,
            "faq" =>$request->faq,
            "features" =>$request->features,
            "quantity" =>$request->quantity,
            "image" => $imagename,
            "price" =>$request->price,
            "slug"=>Str::slug($request->name),
        ];
        Product::create($productData);
        return response()->json([
            "status"=>200,
            "message"=>"Product addded successfully"
        ]);
    }


    public function exists(Request $request){
        $name = $request->name;
        if (Product::where('name', $name)->exists()) {
        return response()->json(["status"=>400, "message"=> "Product already exists"]);
         }
         else{
            return response()->json(["status"=>200, "message"=> "Product Available"]);
         }
    }

public function edit_product(int $id){
        $product = Product::findOrFail($id);
    return view('admin.products.edit_product', compact('product'));

}


public function updateProduct(Request $request,int $id){

    $product = Product::find($id);

    if($product){

        $request->validate(
            [
            "name" => "unique:products,name," . $id],
            [
            "name.unique" =>"That product name exists"
            ],
        );

        $fileName = "";
        if ($request->hasFile("image")){
            $path = public_path("products/" . $product->image);
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file("image");
            $fileName = time() . "." . $file -> getClientOriginalExtension();
            $file -> move(public_path("products"), $fileName);
        }else{
                $fileName = $product->image;
        }
       $productData = [
            "name"=>$request->name,
            "description" => $request->description,
            "meta_description" => $request->meta_description,
            "meta_keyword" => $request->meta_keyword,
            "meta_title" => $request->meta_title,
            "status" => $request->status,
            "older_price" =>$request->older_price,
            "faq" =>$request->faq,
            "features" =>$request->features,
            "quantity" =>$request->quantity,
            "image" => $fileName,
            "price" =>$request->price,
            "slug"=>Str::slug($request->name),
        ];
        $product -> update($productData);
        return Response::json([
            "status"=>200,
            "message"=>"Product updated successfully"
        ]);

        }

    // }
    else{
        return Response::json([
            "status"=>404,
            "message"=>"Product Not Found",
        ]
        );
    }
}

public function deleteProduct(Request $request, $id){
    $product = Product::find($id);
    if($product){
    $path = public_path("products/" . $product->image);
    if (File::exists($path)) {
            File::delete($path);
          }
    $product->delete();
    return Response::json([
                "status"=>200,
                "message"=>"Product deleted"
    ]);
    }
    else{
        return Response::json([
            "status"=> 404,
            "message"=>"Product not Found"
   ]);
    }

}



}
