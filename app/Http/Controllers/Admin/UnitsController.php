<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Units,App\Models\Courses;
use App\Http\Requests\UnitFormRequest;
use Illuminate\Support\Facades\Response;

class UnitsController extends Controller
{
    //
    public function units(){
        $units = Units::all();

      return view("admin.units.units",compact("units"));
    }

    public function create(){
      $courses = Courses::where("status","0")->get();
      return view("admin.units.create",compact("courses"));
    }

    public function store(UnitFormRequest $request){
        $data = $request->validated();
        $courseId = $data["courses_id"];
        $course = Courses::find(intval($courseId));
        if($course){
            Units::create([
                "title"=>$data["title"],
                "unit_code"=>$data["unit_code"],
                "status"=>$data["status"],
                "courses_id"=>$course -> id,
            ]);

            return Response::json([
                "status" => 200,
                "message" => "Unit added Successfully",
                ]);

        }else{
        return Response::json([
        "status" => 404,
        "message" => "Course Not Found"
        ]);
        }
    }
}
