<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pricing;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\PackageOrder;
use Illuminate\Support\Facades\Response;
class PackageController extends Controller
{
    public function pricing(){
        $packages = Pricing::where("status", "0")->get();
        return view("company.pricing" , compact("packages"));
    }



public function pricingPackageDetail(Request $request, string $slug){
    $package = Pricing::where("slug", $slug)->first();
    if($package){
        return view("company.package_detail", compact("package"));
    }
    else{
        return redirect()->back();
    }

}

public function bookPackage(Request $request, $id){

$package = Pricing::findOrFail(intval($id));
if(!$package){
return response()->json([
    "Package not found"
]);
}
else

{

try{
    $n = $request->name;
    $e =$request->email;
    $p =$request -> phone;
    $m =$request->message;
    $name = strip_tags(htmlspecialchars($n));
    $email = strip_tags(htmlspecialchars($e));
    $phone = strip_tags(htmlspecialchars($p));
    $body = strip_tags(htmlspecialchars($m));

    $booking = $package -> bookings()->create([
        "pricing_id"=>$package->id,
        "name"=>$name,
        "email"=>$email,
        "phone"=>$phone,
        "message"=>$body,
    ]);

    if($booking){
     $sent =  Mail::to("$email")->send(new PackageOrder($body, $bname = $booking->name));
     if($sent){
        return response()->json([
            "message"=> "Mail sent successfully"],
        );
     }

    }
  }
  catch(Exception $e){

}

}

}


}
