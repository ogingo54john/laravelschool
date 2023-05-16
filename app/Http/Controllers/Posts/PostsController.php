<?php

namespace App\Http\Controllers\Posts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Response;
class PostsController extends Controller

{


    public function posts(){
        $posts = Post::where("status", "0")->get();
        $categories = Category::where("status","0")->get();
        return view("company.blog.blog", compact("posts","categories"));
    }


    public function postDetail(Request $request, string $slug){
        $post = Post::where("slug", $slug)->first();
       if($post){
            $categories = Category::where("status","0")->get();
            return view("company.blog.blog_detail", compact("post","categories"));
       }
       else{
            return redirect()->back();
       }
    }

    public function categoryDetail(Request $request,$slug){
        $category = Category::where("slug", $slug)->first();
        if($category){
          $posts = $category->posts()->where("status","0")->get();
          return view("company.blog.category", compact("posts","category"));
        }
        else{
            return redirect()->back();
        }
    }
}
