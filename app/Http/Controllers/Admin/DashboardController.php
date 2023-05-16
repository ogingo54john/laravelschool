<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Services;
// use App\Models\Category;
// use App\Models\Post;
// use App\Models\Booking;
// use App\Models\Subscribers;
// use App\Models\User;
// use App\Models\Pricing;
class DashboardController extends Controller
{
public function index(){
//     $totalServices = Services::count();
//     $totalCategory = Category::count();
//     $totalPackages = Pricing::count();
//     $totalBookings = Booking::count();
//     $totalSubscribers = Subscribers ::count();
//     $totalPosts = Post::count();
//     $totalUsers = User::count();
//     return view("admin.dashboard.dashboard", compact("totalServices","totalCategory","totalPackages","totalBookings",
// "totalSubscribers", "totalPosts","totalUsers"));

return view("admin.dashboard.index");
}


}
