<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class BranchFormRequest extends FormRequest
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
     "status"=> ["required", "integer"],
       ];

       if($this->getMethod() == "POST"){
        $rules += [
            "title" => ["required", "string", "unique:branches,title",],
            'initial' =>  [
                'required',
                "string",
                "max:3",
                "min:3",
                Rule::unique('branches')
                       ->where('initial', $this->initial)
               ]
        ];
       }

       if($this->getMethod() == "PUT"){
        $rules += [
            "title" => ["required", "string", Rule::unique("branches")->ignore($this->id),  ],
            'initial' =>  [
                'required',
                "string",
                "max:3",
                "min:3",
                Rule::unique("branches")->ignore($this->id),  ],
        ];
       }


    return $rules;
    }
    public function messages()
    {
        return [
            "title.required" =>"Branch Title is required",
            "status.required" =>"Branch Status is required",
            "title.unique" =>"The branch title already Exists",
            "initial.required"=>"Initial is required",
            "initial.unique"=>"Initial is already taken",
            "initial.max"=>"Initial should be upto 3 characters long"

        ];
    }
}


// 'username' =>  [
//     'required',
//     Rule::unique('users')
//            ->ignore($this->user)
//            ->where('company_id', $this->company_id)
//    ]
