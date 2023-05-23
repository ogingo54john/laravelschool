<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;
class PostsController extends Controller
{
public function posts(){
    $posts = Post::all();
        return view("admin.posts.posts", compact("posts"));
}

public function createPost(){
        $categories = Category::where("status","0")->get();
        return view("admin.posts.add_post", compact("categories"));
}


public function storePost(Request $request){
        $category = Category::findOrFail($request->category);
        if($category){


    if($request->hasFile("image")){
        $image = $request->file("image");
        $imagename = time() .'.'.$image->getClientOriginalExtension();
        $image->move(public_path('/posts'), $imagename);
    }
    else{
        $imagename = "";
    }

      $post =  $category -> posts()->create([
            "category_id" =>$category->id,
            "title"=>$request->title,
            "user_id"=> Auth::user()->id,
            "image"=>$imagename,
            "body"=>$request->body,
            "status"=>$request->status,
            "meta_description" => $request->meta_description,
            "meta_keyword" => $request->meta_keyword,
            "meta_title" => $request->meta_title,
            ],
        );

        if($post){
                return Response::json([
                    "status" => 200,
                    "message" => "Post Created successfully",
                ]);
        }
        else{
            return Response::json([
                "status" => 500,
                "message" => "Post can't be added",
            ]);
        }

        }
        else{
            return Response::json([
                "status"=> 404,
                "message"=>"Category Not Found",
            ]);
        }
        }



        public function editPost(Request $request){
        $post = Post::findOrFail($request->id);
        $categories = Category::where("status", "0")->get();
        if($post){
            return view("admin.posts.update_post", compact("post","categories"));
        }
        else{
            return Response::json([
             "status"=>404,
             "message"=>"Post Not Found"
                      ]);
        }
        }

        public function updatePost(Request $request, $id){
        $post = Category::findOrFail($request->category)->posts()->where("id", $id)->first();
        $updatecategory = Category::findOrFail($request->cat);
        if($post && $updatecategory){

            $fileName = "";
            if ($request->hasFile("image")){
            $path = public_path("posts/" . $post->image);
            if(File::exists($path)){
            File::delete($path);
            }
            $file = $request->file("image");
            $fileName = time() . "." . $file -> getClientOriginalExtension();
            $file -> move(public_path("posts/"), $fileName);

            }else
            {
                $fileName = $post -> image;
            }

        //Update Post

        $post->update([
            "category_id" =>$request->cat,
            "title"=>$request->title,
            "user_id"=> Auth::user()->id,
            "image"=>$fileName,
            "body"=>$request->body,
            "status"=>$request->status,
            "meta_description" => $request->meta_description,
            "meta_keyword" => $request->meta_keyword,
            "meta_title" => $request->meta_title,
            ],
        );

        if($post){
                return Response::json([
                    "status" => 200,
                    "message" => "Post Updated successfully",
                ]);
        }
        else{
            return Response::json([
                "status" => 500,
                "message" => "Post can't be added",
            ]);
        }
            }

        else{
            return Response::json([
                "status" => 404,
                "message" => "Post or Category Not Found",
            ]);
        }
        }





public function deletePost(Request $request, $id){
    $post = Post::find($id);
    if($post){
    $path = public_path("posts/" . $post->image);
    if (File::exists($path)) {
            File::delete($path);
          }
    $post->delete();
    return Response::json([
                "status"=>200,
                "message"=>"Post deleted"
    ]);
    }
    else{
        return Response::json([
            "status"=> 404,
            "message"=>"Post not Found"
   ]);
    }

}
}
