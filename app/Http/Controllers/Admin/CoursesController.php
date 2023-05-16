<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
class CoursesController extends Controller
{
    public function courses(){
        $courses = Courses::where("status","0");
        return view("admin.courses.courses", compact("courses"));
    }

    public function create(){
        return view("admin.courses.create");
    }
}
