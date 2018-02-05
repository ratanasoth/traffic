<?php

//header('Access-Control-Allow-Headers: X-Requested-With, origin, content-type');

Route::get('/admin', function () {
    return redirect('/login');
});

// user route
Route::get('/user', "UserController@index");
Route::get('/user/profile', "UserController@load_profile");
Route::get('/user/reset-password', "UserController@reset_password");
Route::post('/user/change-password', "UserController@change_password");
Route::get('/user/finish', "UserController@finish_page");
Route::post('/user/update-profile', "UserController@update_profile");
Route::get('/user/delete/{id}', "UserController@delete");
Route::get('/user/create', "UserController@create");
Route::post('/user/save', "UserController@save");
Route::get('/user/edit/{id}', "UserController@edit");
Route::post('/user/update', "UserController@update");
Route::get('/user/update-password/{id}', "UserController@load_password");
Route::post('/user/save-password', "UserController@update_password");
Route::get('/user/branch/{id}', "UserController@branch");
Route::post('/user/branch/save', "UserController@add_branch");
Route::get('/user/branch/delete/{id}', "UserController@delete_branch");
// role
Route::get("/role", "RoleController@index");
Route::get("/role/create", "RoleController@create");
Route::get("/role/edit/{id}", "RoleController@edit");
Route::get("/role/delete/{id}", "RoleController@delete");
Route::post("/role/save", "RoleController@save");
Route::post("/role/update", "RoleController@update");
Route::auth();
Route::get('/home', 'HomeController@index')->name('home');
// settings
Route::get('/setting', "SettingController@index");

// mgmt
Route::get("/management" ,"ManagementController@index");
// category
Route::get('/admin/category', "CategoryController@index");
