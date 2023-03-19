<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AskController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\siteController;
use App\Http\Controllers\Usercontroller;
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

//Route::get('/', function () {
  //  return view('welcome');
// });
Route::get("/",[siteController::class,"hi"]);
Route::get("aboutus",[siteController::class,"aboutus"]);
Route::get("index",[siteController::class,"index"]);
Route::get("/blog/{id}",[siteController::class,"blog_id"]);
Route::get("/category/{id}",[siteController::class,"categoty"]);
Route::post("answer",[siteController::class,"answer"]);




 Route::get("login",[UserController::class,"login"])->name("login");
Route::get("logout",[UserController::class,"logout"]);
Route::post("login",[UserController::class,"loginrequest"]);
Route::get("admin",[UserController::class,"loginrequesttwo"]);



    Route::get("admin/category",[CategoryController::class,"index"]);
    Route::get("admin/category/create",[CategoryController::class,"create"]);
    Route::post("admin/category/store",[CategoryController::class,"store"]);
    Route::get("admin/category/delete/{id}",[CategoryController::class,"destroy"]);
    Route::get("admin/category/edit/{id}",[CategoryController::class,"edit"]);
    Route::post("admin/category/update",[CategoryController::class,"update"]);



    Route::get("admin/ask",[AskController::class,"index"]);
    Route::get("admin/ask/create",[AskController::class,"create"]);
    Route::post("admin/ask/store",[AskController::class,"store"]);
    Route::get("admin/ask/delete/{id}",[AskController::class,"destroy"]);
    Route::get("admin/ask/edit/{id}",[AskController::class,"edit"]);
    Route::post("admin/ask/update",[AskController::class,"update"]);




    Route::get("admin/user",[AdminController::class,"index"]);
    Route::get("admin/user/create",[AdminController::class,"create"]);
    Route::post("admin/user/store",[AdminController::class,"store"]);
    Route::get("admin/user/delete/{id}",[AdminController::class,"destroy"]);
    Route::get("admin/user/edit/{id}",[AdminController::class,"edit"]);
    Route::post("admin/user/update",[AdminController::class,"update"]);

    Route::get("user/category",[AdminController::class,"usercategort"]);
    Route::get("user/category/create",[AdminController::class,"usercategortcreate"]);
    Route::post("user/category/store",[AdminController::class,"storeusercategory"]);
    Route::get("user/category/edit/{id}",[AdminController::class,"usercategortedit"]);
    Route::post("user/category/update",[AdminController::class,"updateusercategory"]);
    Route::get("user/category/delete/{id}",[AdminController::class,"destroyusercategory"]);


    Route::get("user/ask",[AdminController::class,"userask"]);
    Route::get("user/ask/create",[AdminController::class,"useraskcreate"]);
    Route::get("user/ask/edit/{id}",[AdminController::class,"useraskedit"]);
    Route::post("user/ask/store",[AdminController::class,"storeuser"]);
    Route::post("user/ask/update",[AdminController::class,"updateuserask"]);
    Route::get("user/ask/delete/{id}",[AdminController::class,"destroyuserask"]);




