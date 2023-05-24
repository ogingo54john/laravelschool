<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\StudentFormRequest;

class StudentController extends Controller
{

    public function students() {
        $students = Student::all();
        return view("admin.students.students", compact("students"));
    }
    public function create(){
        return view("admin.students.create");
    }

    public function store(StudentFormRequest $request) {
       try{
        $data =$request->validated();
        if($request->hasFile("image")){
            $image = $data["image"];
            $imagename = time() .'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/students'),$imagename);
        }
        else{
            $imagename = "";
        }

        $user = User::create([
            "name"=>$data["name"],
            "email"=>$data["email"],
            "role_as"=> "2",
            "password"=>Hash::make($data['password']),
        ]);

        if($user){
            $user->student()->create([
                "admission_number"=>$data["admission_number"],
                "user_id"=>$user->id,
                "father_name"=>$data["father_name"],
                "father_occupation"=>$data["father_occupation"],
                "father_phone_number"=>$data["father_phone_number"],
                "mother_name"=>$data["mother_name"],
                "mother_occupation"=>$data["mother_occupation"],
                "mother_phone_number"=>$data["father_phone_number"],
                "phone"=>$data["phone"],
                "county"=>$data["county"],
                "district"=>$data["district"],
                "division"=>$data["division"],
                "location"=>$data["location"],
                "sub_location"=>$data["sub_location"],
                "gender"=>$data["gender"],
                "dob"=>$data["dob"],
                "image"=>$imagename,

            ]);

            return redirect()->back()->with("message","Student Saved Sucessfully");
        }
       }
       catch(Exception $ex){

       }



    }


    public function edit($id){
        $student = Student::find($id);
        if($student){
           return view("admin.students.edit",compact("student"));
        } else{
                return redirect()->back()->with("message","Student not Found");
            }
    }

    public function destroy($userId, int $id){
        $user = User::findOrFail(intval($userId));
        $student = $user->student()->where("id", intval($id))->first();
        if($student){
            $user->delete();
            // $student->delete();
            return Response::json([
                        "status"=>200,
                        "message"=>"Student deleted successfully"
            ]);
            }
            else{
                return Response::json([
                    "status"=> 404,
                    "message"=>"Student not Found"
           ]);
            }
    }


public function update(StudentFormRequest $request){

    try {
        $data = $request->validated();
        $userId = $data["userId"];
        $user = User::findOrFail(intval($userId));
        $student = $user->student()->where("id", intval($data["id"]))->first();
        if($user){
            // image uploading
            // $fileName = "";
            // if ($request->hasFile("image")){
            // $path = public_path("students/" . $student->image);
            // if(File::exists($path)){
            // File::delete($path);
            // }
            // $file = $request->file("image");
            // $fileName = time() . "." . $file -> getClientOriginalExtension();
            // $file -> move(public_path("students/"), $fileName);

            // }else
            // {
            //     $fileName = $student -> image;
            // }

            $user->student()->update([
                // "father_name"=>$data["father_name"],
                // "father_occupation"=>$data["father_occupation"],
                // "father_phone_number"=>$data["father_phone_number"],
                // "mother_name"=>$data["mother_name"],
                // "mother_occupation"=>$data["mother_occupation"],
                // "mother_phone_number"=>$data["father_phone_number"],
                "phone"=>$data["phone"],
                // "county"=>$data["county"],
                // "district"=>$data["district"],
                // "division"=>$data["division"],
                // "location"=>$data["location"],
                // "sub_location"=>$data["sub_location"],
                // "gender"=>$data["gender"],
                // "dob"=>$data["dob"],
                // "image"=>$fileName,

            ]);

            return redirect("/admin/students")->with("message","Student Updated Sucessfully");


            // return redirect("/admin/students")->with("message", $fileName);
        }
        else{
            return redirect()->back()->with("message", "No matching records for the given student");
        }
    }
    catch(Exception ){

    }


}

public function updateStudent(StudentFormRequest $request,$id){
$data = $request->validated();
$user = User::findOrFail(intval($data["userId"]));
if($user){
    $student = $user->student()->where("id", intval($id))->first();
    $fileName = "";
    if ($request->hasFile("image")){
    $path = public_path("students/" . $student->image);
    if(File::exists($path)){
    File::delete($path);
    }
    $file = $request->file("image");
    $fileName = time() . "." . $file -> getClientOriginalExtension();
    $file -> move(public_path("students/"), $fileName);

    }else
    {
        $fileName = $student -> image;
    }

    $password = $user->password;

    if($request->has("password")){
        $password = Hash::make($data["password"]);
    }

    $user->update([
        "name"=>$data["name"],
        "email"=>$data["email"],
        "password" =>$password,

    ]);
    $user->student()->update([
        "father_name"=>$data["father_name"],
        "father_occupation"=>$data["father_occupation"],
        "father_phone_number"=>$data["father_phone_number"],
        "mother_name"=>$data["mother_name"],
        "mother_occupation"=>$data["mother_occupation"],
        "mother_phone_number"=>$data["father_phone_number"],
        "phone"=>$data["phone"],
        "county"=>$data["county"],
        "district"=>$data["district"],
        "division"=>$data["division"],
        "location"=>$data["location"],
        "sub_location"=>$data["sub_location"],
        "gender"=>$data["gender"],
        "dob"=>$data["dob"],
        "image"=>$fileName,

    ]);

    return redirect("/admin/students")->with("message","Student Updated Sucessfully");
}else{
    return redirect()->back()->with("error","No matching records for given student");
}

}
}
