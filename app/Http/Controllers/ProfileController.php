<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    public function profile(){
        return view("company.profile");
    }

    // public function updateProfile(Request $request){
    //     $user = User::findOrFail(Auth::user()->id);

    //     $fileName = "";
    //     if ($request->hasFile("image")){
    //         $path = public_path("userprofiles/" . $user->userProfile->image);
    //         if(File::exists($path)){
    //             File::delete($path);
    //         }
    //         $file = $request->file("image");
    //         $fileName = time() . "." . $file -> getClientOriginalExtension();
    //         $file -> move(public_path("userprofiles"), $fileName);
    //     }else{
    //             $fileName = $user->userProfile->image;
    //     }

    //     $user->update([
    //         "name" => $request->name,
    //     ]);



    //     $user->userProfile()->updateOrCreate(
    //         ["userId"=>$user->id],
    //         [
    //             "phone"=>$request->phone,
    //             "zipcode"=>$request->zipcode,
    //             "address"=>$request->address,
    //             "image"=>$fileName,
    //             "dob"=>$request->dob,
    //             "bio"=>$request->bio,
    //         ],
    //     );
    //     return Response::json([
    //         "status" => 200,
    //         "message" => "Profile updated successfully"
    //     ]);

    // }


    public function changePassword(){
        return view("company.change_password");
    }

    public function updatePassword(Request $request){

        $request->validate([
            "current_password"=>["required", "string", "min:8"],
            "password"=> ["required", "string", "min:8", "confirmed"],
        ]);

        $currentPasswordStatus = Hash::check($request->current_password, Auth::user()->password);

        if($currentPasswordStatus){
            User::findOrFail(Auth::user()->id)->update([

                "password"=>Hash::make($request->password)
            ]);

            return redirect()->back()->with("message", "Password updated successfully");
        }

        else{
            return redirect()->back()->with("message", "Current Password does not match with old password");
        }
    }


    public function updateProfile(Request $request){
        $user = User::findOrFail(Auth::user()->id);

        // $fileName = "";

        // if ($request->hasFile("image")){
        //     $path = public_path("userprofiles/" . $user->userProfile->image) ?? "";
        //     if($path){
        //         if(File::exists($path)){
        //             File::delete($path);
        //         }
        //     }

        //     $file = $request->file("image");
        //     $fileName = time() . "." . $file -> getClientOriginalExtension();
        //     $file -> move(public_path("userprofiles"), $fileName);
        // }else{
        //         $fileName = $user->userProfile->image ?? $fileName ;
        // }

        $user->update([
            "name" => $request->name,
        ]);

        $user->userProfile()->updateOrCreate(
            ["userId"=>$user->id],
            [
                "phone"=>$request->phone,
                "zipcode"=>$request->zipcode,
                "address"=>$request->address,
                "facebook"=>$request->facebook,
                "github"=>$request->github,
                "instagram"=>$request->instagram,
                "linkedln"=>$request->linkedln,
                "twitter"=>$request->twitter,
                // "image"=>$fileName,
                "dob"=>$request->dob,
                "bio"=>$request->bio,
            ],
        );
        return Response::json([
            "status" => 200,
            "message" => "Profile updated successfully"
        ]);


    }













}
