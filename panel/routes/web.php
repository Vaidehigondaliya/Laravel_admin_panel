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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/","AdminHomeController@dashboard");
Route::get("/logout", "AdminController@logout")->name("adminlogout");

Route::get("/add-product","ProductController@addProduct")->name("addproducts");
Route::get("/edit-product/{id?}","ProductController@editProduct")->name("editproducts");
Route::get("/list-product","ProductController@listProduct")->name("listroducts");

Route::get("/list-product-data","ProductController@listallProduct")->name("listallroducts");
Route::post("/save-product","ProductController@saveProduct")->name("saveproducts");
Route::post("/delete-product","ProductController@deleteProduct")->name("deleteproducts");
Route::post("/edit-product-data","ProductController@editsaveProduct")->name("editsaveproducts");