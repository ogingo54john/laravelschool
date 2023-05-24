<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// use App\Http\Controllers\Admin\CategoryController;
// use App\Http\Controllers\Admin\PostsController;
// use App\Http\Controllers\Posts\PostsController as BlogController;
// use App\Http\Controllers\Admin\PricingController;

use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\UnitsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\BranchesController;
Auth::routes();

Route::get("/", [App\Http\Controllers\HomeController::class, 'index']);


// Route::middleware(["auth"])->group(function () {
//     Route::get("/profile", [App\Http\Controllers\ProfileController::class, 'profile'])->name("profile");
//     Route::post("/profile/update", [App\Http\Controllers\ProfileController::class, 'updateProfile']);
//     Route::get("/cart", [App\Http\Controllers\CartController::class, 'cart']);
//     Route::get("/changePassword", [App\Http\Controllers\ProfileController::class, 'changePassword']);
//     Route::post("/changePassword", [App\Http\Controllers\ProfileController::class, 'updatePassword']);

// });



Route::prefix("admin")->middleware(["auth", "isAdmin"])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name("dashboard");

    //  Users routes
     Route::controller(UsersController::class)->group(function () {
        Route::get('/users', 'users')->name("users");
        Route::get('/create_user', 'createUser')->name("create_user");
        Route::post('/create_user', 'store');
        Route::post('/email-availability', 'emailAvailability');
        Route::get('/users/{id}/edit', 'editUser');
        Route::post('/users/{id}/edit', 'updateUser');
        // Route::post('/deletepackage/{id}', 'deletePackage');
    });




// Courses Routes
Route::controller(CoursesController::class)->group(function () {
    Route::get('/courses', 'courses')->name("courses");
    Route::get('/create_course', 'create')->name("create_course");
    Route::post('/create_course', 'store');
    Route::get('/courses/edit/{id}', 'editCourse');
    Route::put('/courses/edit/{id}', 'update');
    Route::post('/deletecourse/{id}', 'delete');
});

// Units Routes
Route::controller(UnitsController::class)->group(function () {
    Route::get('/units', 'units')->name("units");
    Route::get('/create_unit', 'create')->name("create_unit");
    Route::post('/create_unit', 'store');
    Route::get('/units/edit/{id}', 'editUnit');
    Route::put('/units/edit/{id}', 'updateUnit');
    Route::post('/deleteunit/{id}', 'deleteUnit');
});

// Branches Routes
Route::controller(BranchesController::class)->group(function () {
    Route::get('/branches', 'index')->name("branches");
    Route::get('/create_branch', 'create')->name("create_branch");
    Route::post('/create_branch', 'store');
    Route::get('/branches/edit/{id}', 'edit');
    Route::put('/branches/edit/{id}', 'update');
    Route::post('/deletebranch/{id}', 'destroy');
});


    // Student routes
    Route::controller(StudentController::class)->group(function () {
    Route::get('/students', 'students')->name("students");
    Route::get('/create_student', 'create')->name("create_student");
    Route::post('/create_student', 'store');
    Route::get('/students/{id}', 'edit');
    Route::put('/students/{id}', 'updateStudent');
    Route::post('/deletestudent/{userId}/{id}', 'destroy');
    });

    // Staff routes
    Route::controller(StaffController::class)->group(function () {
        Route::get('/staff', 'index')->name("staff");
        Route::get('/create_staff', 'create')->name("create_staff");
        // Route::post('/create_student', 'store');
        // Route::get('/students/{id}', 'edit');
        // Route::put('/students/{id}', 'updateStudent');
        // Route::post('/deletestudent/{userId}/{id}', 'destroy');
        });


});
