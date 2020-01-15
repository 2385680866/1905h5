<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/","Index\IndexController@index");//首页
Route::get("/user/reg","Index\UserController@reg");//注册
Route::post("/user/reg","Index\UserController@doreg");//注册
Route::get("/user/login","Index\UserController@login");//登录
Route::post("/user/login","Index\UserController@doLogin");//登录
Route::get("/user/center","Index\UserController@center");//个人中心






Route::get("wishlist","Index\UserController@wishlist");//登录
Route::get("cart","Index\UserController@cart");//登录
Route::get("contact","Index\UserController@contact");//登录
Route::get("product_list","Index\UserController@product_list");//登录
