<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    protected $table="students";

    protected $fillable= [
        "user_id",
        "phone",
        "admission_number",
        "gender",
        "image",
        "dob",
        "father_name",
        "father_occupation",
        "father_phone_number",
        "mother_name",
        "mother_occupation",
        "mother_phone_number",
        "county",
        "district",
        "division",
        "location",
        "sub_location",

    ];

    public function user(){
        return $this->belongsTo(User::class, "user_id","id");
    }
}
