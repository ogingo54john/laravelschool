<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Staff;
use App\Models\Branches;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StaffFormRequest;

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
            "branch_id"=>1,
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
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
