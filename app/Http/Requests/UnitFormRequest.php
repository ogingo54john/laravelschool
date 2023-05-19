<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UnitFormRequest extends FormRequest
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
            "unit_code"=> ["required", "string"],
            "courses_id"=> ["required", "integer"],

        ];

        if($this->getMethod() == "POST"){
            $rules += [
                "title" =>["required", "string","unique:units,title",],
            ];
        }

        // if($this->getMethod() == "PUT"){
        //     $rules += [
        //         "title" =>
        //         [
        //         "required",
        //         "string",
        //         Rule::unique("courses")->ignore($this->id),
        //     ],
        //     ];
        // }
        return $rules;
    }
}
