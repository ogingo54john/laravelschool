<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\SaveUserFormRequest;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function users(){
        $users = User::all();
        return view("admin.users.users" , compact("users"));
    }

    public function createUser(){
        return view("admin.users.createuser");
    }

    public function store(Request $request){

        $password = $request->password;
        $password_confirmation = $request->password_confirmation;
        if($password != $password_confirmation){
            return Response::json([
                "status"=>400,
                "message"=>"Password and confirm password not matched",

            ]);
        }
        else{
            User::create([
                'name' =>$request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_as' => $request->role_as,

            ]);

            return Response::json([
                "status"=>200,
                "message"=> "User created successfully",
            ]);
        }


    }


    public function emailAvailability(Request $request){
        $email = $request -> email;
        if (User::where('email', $email)->exists()) {
        return response()->json(["status"=>400, "message"=> "Email already exists"]);
         }
         else{
            return response()->json(["status"=>200, "message"=> "Email Available"]);
         }
    }

    public function editUser(Request $request, $id){
        $user = User::findOrFail($id);
        if($user){
            return view("admin.users.edit", compact("user"));
        }
        else{
            return redirect()->back();
        }

    }

 public  function updateUser(){



    }


    public function addStudent(){
        
    }


}
