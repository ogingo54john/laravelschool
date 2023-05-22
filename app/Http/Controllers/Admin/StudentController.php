<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentFormRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function students() {
        // return view("admin.students.students");
    }
    public function create(){
        return view("admin.students.create");
    }

    public function store(StudentFormRequest $request) {
        $data =$request->validated();
    }

}
