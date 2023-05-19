<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;

class ServicesController extends Controller
{
/**
     * Sevices Page.
     *
     * @return void
     */
    public function index(){
        $services = Services::all();
        return view('admin.services.services', compact('services'));

    }

    /**
     * Create Sevices Page.
     *
     * @return void
     */
    public function create_service(){
        return view("admin.services.create_service");
     }

      /**
     * Save Sevice function.
     *
     * @return void
     */


public function store(Request $request){

   $name = $request->name;
   $description = $request->description;
   $meta_keyword = $request->meta_keyword;
   $meta_title = $request->meta_title;
   $meta_description = $request->meta_description;
   $status = $request->status;
   $slug = Str::slug($name);
  $newService = [
  "name"=>$name,
  "description"=>$description,
  "meta_keyword" =>$meta_keyword,
  "meta_description" =>$meta_description,
  "meta_title" =>$meta_title,
  "status" =>$status,
  "slug" =>$slug,
  ];
  Services::create($newService);
  return Response::json(["status" =>200]);

}


public function exists(Request $request){
    $name = $request->name;
    if (Services::where('name', $name)->exists()) {
            // return Response::json("Service with the same name already exists");
            return response()->json(["status"=>400, "message"=> "Service with the same name already exists"]);
     }
     else{
            // return Response::json("Service available");
            return response()->json(["status"=>200, "message"=> "Service Available"]);
     }
}

public function update_service(int $id){
        $service = Services::findOrFail($id);
        return view('admin.services.update_service', compact('service'));

}


 public function update(Request $request, $id){
        $request->validate(
        [
        "name" => "required|unique:services,name," . $id],
        [
        "name.required" =>"Name is required",
        "name.unique" =>"That service name exists"
        ],
    );

       $slug = Str::slug($request->name);
        Services::where("id", $id) -> update([
            "name" => $request ->name,
            "slug" => $slug,
            "meta_title" => $request ->meta_title,
            "meta_description" => $request ->meta_description,
            "meta_keyword" => $request ->meta_keyword,
            "status" => $request ->status,
            "description" => $request ->description


        ]);

        return response()->json([
             "Update success"
        ]);
    }


    public function deleteService(Request $request, $id){
        $service = Services::find($id);
        if($service){
        // $path = public_path("products/" . $product->image);
        // if (File::exists($path)) {
        //         File::delete($path);
        //     }
        $service->delete();
        return Response::json([
                    "status"=>200,
                    "message"=>"Service deleted"
        ]);
        }
        else{
            return Response::json([
                "status"=> 404,
                "message"=>"Service not Found"
       ]);
        }

    }


}
