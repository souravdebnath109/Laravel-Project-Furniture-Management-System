<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[FrontendController::class,'index']);
Route::get('/shop',[FrontendController::class,'shop']);
Route::get('/about_us',[FrontendController::class,'about_us']);
Route::get('/services',[FrontendController::class,'services']);
Route::get('/blog',[FrontendController::class,'blog']);
Route::get('/contact_us',[FrontendController::class,'show']);

Route::post('/email_send',[FrontendController::class,'email_send']);


Route::get('/checkout',[FrontendController::class,'checkout']);
Route::get('/thankyou',[FrontendController::class,'thankyou']);


Route::get('/backRoute',[AuthController::class,'loadLogin']);

Route::get('/register',[AuthController::class,'loadRegister']);
Route::get('/login',[AuthController::class,'loadLogin']);
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout']);

Route::group(['prefix'=>'_admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
    Route::get('/add_furniture',[AdminController::class,'add_furniture']);
    Route::post('/add_furniture',[AdminController::class,'post_add_furniture']);
    Route::get('/view_furniture',[AdminController::class,'view_furniture']);
    Route::get('/edit_furniture/{id}',[AdminController::class,'edit_furniture']);
    Route::post('/edit_furniture/{id}',[AdminController::class,'post_edit_furniture']);
    Route::get('/delete_furniture/{id}',[AdminController::class,'delete_furniture']);

//aituku  amar kora
    Route::get('/add_blog', [AdminController::class, 'create']);
    Route::post('/add_blog', [AdminController::class, 'post_add_blog']);
    Route::get('/view_blogs', [AdminController::class, 'view_blog']);
    Route::get('/edit_blog/{id}', [AdminController::class, 'edit_blog']);
    Route::post('/edit_blog/{id}', [AdminController::class, 'post_edit_blog']);
    Route::get('/delete_blog/{id}', [AdminController::class, 'delete_blog']);




    //aituku amar kora for blog  er crud in blog page 




    Route::get('/add_blog_forblogpage', [AdminController::class, 'create_forblogpage']);//done
    Route::post('/add_blog_forblogpage', [AdminController::class, 'post_add_blog_forblogpage']);//done
    Route::get('/view_blogs_forblogpage', [AdminController::class, 'view_blog_forblogpage']);//done
    Route::get('/edit_blog_forblogpage/{id}', [AdminController::class, 'edit_blog_forblogpag']);//done
    Route::post('/edit_blog_forblogpage/{id}', [AdminController::class, 'post_edit_blog_forblogpage']);//done
    Route::get('/delete_blog_forblogpage/{id}', [AdminController::class, 'delete_blog_forblogpage']);//done

    
});

Route::group(['prefix'=>'_user','middleware'=>['web','isUser']],function(){
    Route::get('/dashboard',[UserController::class,'dashboard']);
    Route::get('/invoice',[UserController::class,'invoice']);
    Route::get('/addtocart/{id}',[UserController::class,'addtocart']);
    Route::post('/addtocart/{id}',[UserController::class,'post_addtocart']);
    Route::get('/cart',[UserController::class,'cart']);
    Route::get('/edit_cart/{id}',[UserController::class,'edit_cart']);
    Route::post('/edit_cart/{id}',[UserController::class,'post_edit_cart']);
    Route::get('/delete_cart/{id}',[UserController::class,'delete_cart']);
    Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

});


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);


Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END