<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Staff;
use App\Models\Branches;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StaffFormRequest;
use Illuminate\Support\Facades\Response;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
    return view("admin.staff.index", compact("staffs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $branches = Branches::where("status","0")->get();
        return view("admin.staff.create", compact("branches"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffFormRequest $request)
    {
     $data = $request ->validated();
     if($request->hasFile("image")){
        $image = $data["image"];
        $imagename = time() .'.'.$image->getClientOriginalExtension();
        $image->move(public_path('/staff'),$imagename);
    }
    else{
        $imagename = "";
    }
    $user = User::create([
        "name"=>$data["name"],
        "email"=>$data["email"],
        "role_as"=> $data["role_as"],
        "password"=>Hash::make($data['password']),
    ]);

    if($user){
        $user->staff()->create([
            "staff_number"=>$data["staff_number"],
            "user_id"=>$user->id,
            "branch_id"=>$data['branch_id'],
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
            "date_joined"=>$data["date_joined"],
            "experience"=>$data["experience"],
            "qualification"=>$data["qualification"],
            "image"=>$imagename,

        ]);

        return redirect()->back()->with("message","Staff Saved Sucessfully");
    }



}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::find($id);
        $branches = Branches::where("status", "0")->get();
        if($staff){
            return view("admin.staff.edit", compact("staff", "branches"));
        }
        else{
            return redirect()->back()->with("error","Staff not Found");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(StaffFormRequest $request, $id)
    {
        $data = $request->validated();
$user = User::findOrFail(intval($data["userId"]));
if($user){
    $staff = $user->staff()->where("id", intval($id))->first();
    $fileName = "";
    if ($request->hasFile("image")){
    $path = public_path("staff/" . $staff->image);
    if(File::exists($path)){
    File::delete($path);
    }
    $file = $request->file("image");
    $fileName = time() . "." . $file -> getClientOriginalExtension();
    $file -> move(public_path("staff/"), $fileName);

    }else
    {
        $fileName = $staff -> image;
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
    $user->staff()->update([
            "branch_id"=>$data['branch_id'],
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
            "date_joined"=>$data["date_joined"],
            "experience"=>$data["experience"],
            "qualification"=>$data["qualification"],
            "image"=>$fileName,

    ]);

    return redirect("/admin/staff")->with("message","Staff Updated Sucessfully");
}else{
    return redirect()->back()->with("error","No matching records for given staff");
}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId, int $id){
        $user = User::findOrFail(intval($userId));
        $staff = $user->staff()->where("id", intval($id))->first();
        if($staff){
            $user->delete();
            return Response::json([
                        "status"=>200,
                        "message"=>"Staff deleted successfully"
            ]);
            }
            else{
                return Response::json([
                    "status"=> 404,
                    "message"=>"Staff not Found"
           ]);
            }
    }
}
