<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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

        $rules =[
            "name"=>["required", "string","max:60"],
            "gender" =>["required",  "string", ],
            "dob"=>["date","nullable",],
            "father_name"=>["string","max:60","nullable"],
            "father_occupation"=>["string","max:60","nullable"],
            "father_phone_number"=>["string", "max:15", "min:10", "nullable"],
            "mother_name"=>["string","max:60","nullable"],
            "mother_occupation"=>["string","max:60","nullable"],
            "mother_phone_number"=>["string", "max:15", "min:10", "nullable"],
            "county"=>["string","max:60","nullable"],
            "district"=>["string","max:60","nullable"],
            "division"=> ["string","max:60","nullable"],
            "location"=>["string","max:60","nullable"],
            "sub_location"=>["string","max:60","nullable"],



        ];
        if($this->getMethod() =="POST"){
            $rules += [
                "email" =>[
                    "required",
                    "email","max:60","unique:users,email,"],
                "phone" =>[
                    "required",
                    "string","max:15",
                    Rule::unique('students')
                       ->where('phone', $this->phone),
                 ],
                 "admission_number"=>["required", "integer",
                 Rule::unique('students')
                 ->where('admission_number', $this->admission_number)
                ],


                 "password" =>[
                    "required",
                    "string",
                    "min:8"],
                "image"=>["mimes:png,jpg,jpeg","max:2048","required"],

            ];
        }

        return $rules;
    }
    public function messages()
    {
        return [
            "name.required"=>"Student Name is required",
            "email.email"=>"Please provide a valid email",
            "email.required"=>"Student Email is required",
            "email.unique"=>"Student with given email already exists",
            "email.max"=>"Email should be upto 60 characters",
            "name.max"=>"Name should be upto 60 characters",
            "phone.required"=>"Student Phone is required",
            "phone.unique"=>"The phone number is already taken",
            "phone.max"=>"Phone should be upto 15 characters",
            "password.required"=>"Student Password is required",
            "password.min"=>"Password should be at least 8 characters",
            "gender.required"=>"Student Gender is required",
            "image.required"=>"Student Photo is required",



        ];
    }
}
