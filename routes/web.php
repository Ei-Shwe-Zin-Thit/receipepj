<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/','RecipeController@main');


Auth::routes();
Route::group(['middleware'=>'auth'],function(){ 

Route::get('/home', 'HomeController@index');
Route::get('newsletter','NewsletterController@index');
Route::post('/create','NewsletterController@create');
Route::get('view_newsletter','NewsletterController@show');
Route::get('delnewsletter/{id}','NewsletterController@destroy');
Route::get('dashboard','NewsletterController@dashboard');

// <!-- Category -->
Route::get('category','CategoryController@index');
Route::post('catcreate','CategoryController@store');
Route::get('catshow','CategoryController@show');
Route::get('catedit/{id}','CategoryController@edit');
Route::post('catupdate/{id}','CategoryController@update');
Route::get('catdelete/{id}','CategoryController@destroy');

// <!-- Receipe -->
Route::get('recipe','RecipeController@index');
Route::post('createrecipe','RecipeController@create');
Route::post('storerecipe','RecipeController@store');
Route::get('showrecipe','RecipeController@show');
Route::get('editrecipe/{id}','RecipeController@edit');
Route::post('updaterecipe/{id}','RecipeController@update');
Route::get('deleterecipe/{id}','RecipeController@destroy');

// <!-- Search & Cook -->
Route::get('cook','CookController@index');
Route::get('cooking/{id}','CookController@indexcook');
Route::post('cooking/{id}','CookController@indexcook');
Route::post('favourite','CookController@favourite');
Route::get('cook/search','CookController@search');

}); 

Route::get('/usermanagement', 'UsermanagementController@index');
Route::get('deleteuser/{id}', 'UsermanagementController@destroy');
