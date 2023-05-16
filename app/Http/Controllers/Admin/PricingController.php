<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pricing;
use Illuminate\Support\Facades\Response;

class PricingController extends Controller
{
    public function pricingList(){
        $pricing = Pricing::where("status", "0")->get();
        return view("admin.pricing.pricing", compact("pricing"));
    }
    public function createPackage(){
        return view("admin.pricing.create_pricing");
    }


    public function storePricingPackage(Request $request){
        $productData = [
            "name" => $request->name,
            "description" => $request->description,
            "status" => $request->status,
            "price" =>$request->price,
        ];
        Pricing::create($productData);
        return response()->json([
            "status"=>200,
            "message"=>"Pricing Package addded successfully"
        ]);
    }

    public function pricingPackageAvailability(Request $request){
        $name = $request->name;
        if (Pricing::where('name', $name)->exists()) {
        return response()->json(["status"=>400, "message"=> "Pricing Package already exists"]);
         }
         else{
            return response()->json(["status"=>200, "message"=> "Pricing Package Available"]);
         }

    }

    public function editPackage(int $id){
        $package = Pricing::findOrFail($id);
    return view('admin.pricing.edit_package', compact('package'));

}




public function updatePackage(Request $request, $id){
    $request->validate(
    [
    "name" => "required|unique:pricing,name," . $id],
    [
    "name.required" =>"Name is required",
    "name.unique" =>"The Pricing Package Name already exists"
    ],
);

    Pricing::where("id", $id) -> update([
        "name" => $request ->name,
        "price" => $request ->price,
        "status" => $request ->status,
        "description" => $request ->description


    ]);

    return response()->json([
        "status"=>200,
        "message" => "Pricing Package Updated Successfully"
    ]);
}


public function deletePackage(Request $request, $id){
    $package = Pricing::find($id);
    if($package){
    $package->delete();
    return Response::json([
                "status"=>200,
                "message"=>"Package Deleted Successfully"
    ]);
    }
    else{
        return Response::json([
            "status"=> 404,
            "message"=>"Package Not Found"
   ]);
    }

}

}
