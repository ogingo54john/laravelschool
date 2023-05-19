<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\UnitsController;
Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

// Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
// Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
// Route::get('/pricing', [App\Http\Controllers\PackageController::class, 'pricing'])->name('pricing');
// Route::get('/pricing/detail/{slug}', [App\Http\Controllers\PackageController::class, 'pricingPackageDetail']);
// Route::post('/bookPackage/{id}', [App\Http\Controllers\PackageController::class, 'bookPackage']);
// Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
// Route::post('/email', [App\Http\Controllers\EmailController::class, 'email'])->name('email');
// Route::get('/service/{slug}', [App\Http\Controllers\HomeController::class, 'detail']);
// Route::post('/subscribe', [App\Http\Controllers\SubscribersController::class, 'subscribe']);

// Route::controller(BlogController::class)->group(function () {
//     Route::get('/blog', 'posts');
//     Route::get('/blog/{slug}', 'postDetail');
//     Route::get('/blog/category/{slug}', 'categoryDetail');

// });


// ecommerce routes
// Route::get('/shop', [App\Http\Controllers\ShopController::class, 'shop']);
// Route::get('/shop/{slug}', [App\Http\Controllers\ShopController::class, 'productDetail']);


// Route::post("/add-to-cart", [App\Http\Controllers\CartController::class, 'addToCart']);
// Route::post("/delete-cart-item", [App\Http\Controllers\CartController::class, 'deleteCartItem']);

// Route::middleware(["auth"])->group(function () {
//     Route::get("/profile", [App\Http\Controllers\ProfileController::class, 'profile'])->name("profile");
//     Route::post("/profile/update", [App\Http\Controllers\ProfileController::class, 'updateProfile']);
//     Route::get("/cart", [App\Http\Controllers\CartController::class, 'cart']);
//     Route::get("/changePassword", [App\Http\Controllers\ProfileController::class, 'changePassword']);
//     Route::post("/changePassword", [App\Http\Controllers\ProfileController::class, 'updatePassword']);

// });



Route::prefix("admin")->middleware(["auth", "isAdmin"])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name("dashboard");

    // Services Routes
    // Route::get('/services', [App\Http\Controllers\Admin\ServicesController::class, 'index'])->name("services");
    // Route::get('/create_service', [App\Http\Controllers\Admin\ServicesController::class, 'create_service'])->name("create_service");
    // Route::post('/store', [App\Http\Controllers\Admin\ServicesController::class, 'store']);
    // Route::post('/exists', [App\Http\Controllers\Admin\ServicesController::class, 'exists']);
    // Route::get('/update_service/{id}', [App\Http\Controllers\Admin\ServicesController::class, 'update_service']);
    // Route::post('/update/{id}', [App\Http\Controllers\Admin\ServicesController::class, 'update']);
    // Route::post('/delete_service/{id}', [App\Http\Controllers\Admin\ServicesController::class, 'deleteService']);

    // Product routes
    // Route::get('/products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name("products");
    // Route::get('/create_product', [App\Http\Controllers\Admin\ProductController::class, 'create_product'])->name("create_product");
    // Route::post('/save_product', [App\Http\Controllers\Admin\ProductController::class, 'save_product'])->name("save_product");
    // Route::post('/product_availability', [App\Http\Controllers\Admin\ProductController::class, 'exists']);
    // Route::get('/edit_product/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit_product']);
    // Route::post('/update_product/{id}', [App\Http\Controllers\Admin\ProductController::class, 'updateProduct']);
    // Route::post('/delete_product/{id}', [App\Http\Controllers\Admin\ProductController::class, 'deleteProduct']);


    // Category routes

    // Route::controller(CategoryController::class)->group(function () {
    //     Route::get('/categories', 'categories');
    //     Route::get('/categories/create', 'createCategory');
    //     Route::post('/categories/store', 'storeCategory');
    //     Route::post('/categories/availability', 'catAvailability');
    //     Route::post('/delete_category/{id}', 'deleteCategory');
    //     Route::get('/edit_category/{id}', 'editCategory');
    //     Route::post('/update_category/{id}', 'updateCategory');
    // });


    // Route::controller(PostsController::class)->group(function () {
    //     Route::get('/posts', 'posts')->name("posts");
    //     Route::get('/posts/create', 'createPost');
    //     Route::post('/posts/store', 'storePost');
    //     Route::post('/posts/delete/{id}', 'deletePost');
    //     Route::get('/posts/edit/{id}', 'editPost');
    //     Route::post('/posts/update/{id}', 'updatePost');
    // });




    // Pricing routes
    // Route::controller(PricingController::class)->group(function () {
    //     Route::get('/pricing', 'pricingList')->name("pricingList");
    //     Route::get('/pricing/create', 'createPackage');
    //     Route::post('/pricing/store', 'storePricingPackage');
    //     Route::post('/pricing/availability', 'pricingPackageAvailability');
    //     Route::get('/edit_package/{id}', 'editPackage');
    //     Route::post('/updatepackage/{id}', 'updatePackage');
    //     Route::post('/deletepackage/{id}', 'deletePackage');
    // });


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


     //  Student routes
     Route::controller(StudentController::class)->group(function () {
        Route::get('/students', 'students')->name("students");
        Route::get('/create_student', 'create')->name("create_student");
        // Route::post('/create_user', 'store');
        // Route::post('/email-availability', 'emailAvailability');
        // Route::get('/users/{id}/edit', 'editUser');
        // Route::post('/users/{id}/edit', 'updateUser');
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
    // Route::post('/create_course', 'store');
    // Route::get('/courses/edit/{id}', 'editCourse');
    // Route::post('/users/{id}/edit', 'updateUser');
    // Route::post('/deletecourse/{id}', 'delete');
});



});
