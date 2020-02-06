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


Route::get("shop-single","Goods\GoodsController@shop_single");//商品详情
Route::get("product-list","Goods\GoodsController@product_list");//商品列表

Route::get("cart","Cart\CartController@index");//加入购物车
Route::get("checkout","Cart\CartController@checkout");//购物车结算
Route::get("wishlist","Cart\CartController@wishlist");//收藏列表


Route::get("contact","Index\UserController@contact");//联系

