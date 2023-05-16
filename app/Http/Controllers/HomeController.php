<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Services;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(["index", "about", "contact", "pricing", "services"]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('company.index');
    }

    public function contact()
    {
        return view('company.contact');
    }

    public function about()
    {
        return view('company.about');
    }

    public function pricing()
    {
        return view('company.pricing');
    }

    public function services()
    {
        $services = Services::where("status","0")->get();
        return view('company.services', compact("services"));
    }


    public function detail($slug){
        $service = Services::where('slug', $slug)->first();
        return view('company.service_detail', compact('service'));
    }




}
