<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Response;
class CategoryController extends Controller
{
 public function categories(){
        $categories = Category::all();
        return view("admin.category.categories", compact("categories"));

 }

 public function createCategory(){
    return view("admin.category.create_category");

}


public function storeCategory(Request $request){
    $catData = [
        "name" => $request->name,
        "status" => $request->status,
    ];
    Category::create($catData);
    return response()->json([
        "status"=>200,
        "message"=>"Category addded successfully"
    ]);
}

public function catAvailability(Request $request){
    $name = $request->name;
    if (Category::where('name', $name)->exists()) {
    return response()->json(["status"=>400, "message"=> "Category already exists"]);
     }
     else{
        return response()->json(["status"=>200, "message"=> "Category Available"]);
     }
}


public function deleteCategory($id){
    $category = Category::find($id);
    if($category){
    $category->delete();
    return Response::json([
                "status"=>200,
                "message"=>"Category deleted"
    ]);
    }
    else{
        return Response::json([
            "status"=> 404,
            "message"=>"Category not Found"
   ]);
    }

}


public function editCategory(int $id){
    $category = Category::find($id);
    return view('admin.category.edit_category', compact('category'));

}


public function updateCategory(Request $request, $id){
    $request->validate(
    [
    "name" => "required|unique:categories,name," . $id],
    [
    "name.required" =>"Name is required",
    "name.unique" =>"That category name exists"
    ],
    );
        if (Category::where("id", $id)-> exists()) {

            Category::where("id", $id)-> update([
                "name" => $request ->name,
                "status" => $request ->status,
            ]);

            return response()->json([
                "status"=>200,
                "message"=> "Category Updated successfully"
            ]);

        }
        else{
            return response()->json([
                "status"=>404,
                "message" => "Category Not Found"
            ]);

        }
}


}
