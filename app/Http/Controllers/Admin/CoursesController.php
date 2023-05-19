<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Http\Requests\CourseFormRequest;
use Illuminate\Support\Facades\Response;
class CoursesController extends Controller
{
    public function courses(){
        $courses = Courses::all();
        return view("admin.courses.courses", compact("courses"));
    }

    public function create(){
        return view("admin.courses.create");
    }
    public function store(CourseFormRequest $request){
        $validatedData = $request->validated();
        $course = new Courses;
        $course ->title =$validatedData["title"];
        $course ->status =$validatedData["status"];
        $course ->save();
        return redirect()->back()->with("message", "Course added successfully");
    }

    public function delete($id){

        $course = Courses::find(intval($id));
        if($course){
            $course->delete();
            return Response::json([
                "status"=>200,
                "message"=>"Course Deleted succcessfully"
            ]);
        }
        else{
            return Response::json([
                "status"=>404,
                "message"=>"Course Not Found"
            ]);
        }
    }

    public function editCourse(int $id){
        $course = Courses::find($id);
        if($course){
            return view("admin.courses.edit", compact("course"));

        }else{
            return redirect()->back()->with("message","Course Not Found");

        }
    }

public function update(){
    
}

}
