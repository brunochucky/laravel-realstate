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

Route::get('/', 'ListController@index');


Route::get('/home', function () { return redirect('/admin/home'); });


// Authentication Routes...
Auth::routes();

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');


Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('properties', 'Admin\PropertiesController');
    Route::post('properties_mass_destroy', ['uses' => 'Admin\PropertiesController@massDestroy', 'as' => 'properties.mass_destroy']);
    Route::post('properties_restore/{id}', ['uses' => 'Admin\PropertiesController@restore', 'as' => 'properties.restore']);
    Route::delete('properties_perma_del/{id}', ['uses' => 'Admin\PropertiesController@perma_del', 'as' => 'properties.perma_del']);



 
});

