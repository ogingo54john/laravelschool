<?php

namespace App\Models;

use App\Models\User;
use App\Models\Branches;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;
    protected $table = "staff";
    protected $fillable = [
        "user_id",
        "phone",
        "staff_number",
        "experience",
        "qualification",
        "date_joined",
        "branch_id",
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
    public function branch(){
        return $this->belongsTo(Branches::class, "branch_id","id");
    }
}
