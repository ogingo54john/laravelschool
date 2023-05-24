<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StaffFormRequest extends FormRequest
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
             "branch_id"=>["required", "integer",],
            "name"=>["required", "string","max:60"],
            "gender" =>["required",  "string", ],
            "experience"=>["nullable", "string", "max:500"],
            "qualification"=>["nullable", "string", "max:500"],
            "dob"=> ["date", "nullable",],
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
                    "email","max:60", "unique:users,email,"],
                    "role_as"=>["required", "integer"],
                "phone" =>[
                    "required",
                    "string",
                    "min:10",
                    "max:15",
                    Rule::unique('staff')
                       ->where('phone', $this->phone),
                 ],
                "staff_number"=>["required", "integer",
                 Rule::unique('staff')
                 ->where('staff_number', $this->staff_number)
                ],
                "date_joined"=>["required", "date"],
                "password" =>["required","string","min:8","max:16"],
                'image' => ['required','image','mimes:jpg,png,jpeg','max:2048','dimensions:min_width=100,min_height=100,max_width=5000,max_height=5000',],
            ];
        }

        return $rules;
    }


    public function messages()
    {
        return [
            "name.required"=>"Staff Name is required",
            "email.email"=>"Please provide a valid email",
            "email.required"=>"Staff Email is required",
            "email.unique"=>"Staff with given email already exists",
            "email.max"=>"Email should be upto 60 characters",
            "name.max"=>"Name should be upto 60 characters",
            "phone.required"=>"Staff Phone is required",
            "phone.unique"=>"The Phone number is already taken",
            "phone.max"=>"Phone should be upto 15 characters",
            "password.required"=>"Staff Password is required",
            "password.min"=>"Password should be at least 8 characters",
            "gender.required"=>"Staff Gender is required",
            "image.required"=>"Staff Photo is required",
            "date_joined"=>"Staff Joining Date is required",
            "role_as.required" => "Staff Role is required",
            "branch_id.required" => "Staff Branch is required",

        ];
    }
}
