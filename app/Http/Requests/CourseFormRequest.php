<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class CourseFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        $rules = [
            "status"=> ["required", "integer"],
        ];

        if($this->getMethod()== "POST"){
            $rules += [
                "title" =>["required", "string","unique:courses,title",],
            ];
        }

        if($this->getMethod()== "PUT"){
            $rules += [
                "title" =>
                [
                "required",
                "string",
                Rule::unique("courses")->ignore($this->id),
            ],
            ];
        }
        return $rules;
    }



public function messages(){
    return [

        "title.required" =>"Course Title is required",
        "status.required" =>"Course Status is required",
        "title.unique" =>"The title already Exists",


    ];
}

}

