<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Units;

class UnitsContoller extends Controller
{
    //
    public function units(){
        $units = Units::all();
      return view("admin.units.units",compact("units"));
    }
}
