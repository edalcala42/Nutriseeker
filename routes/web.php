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

#Route::get('/', function () {
    #return view('welcome');
#});

Route::get('/laravel_example',function(){
	return view('welcome');
});
Route::get('/','App\Http\Controllers\TemplateController@index');
Route::get('/', function(){
    return view('frontend/home');
})->name('/');
Route::get('/create','App\Http\Controllers\TemplateController@create');
Route::get('/create', function(){
    return view('frontend/login_logout');
})->name('create');
Route::get('/login','App\Http\Controllers\TemplateController@login');
Route::get('/login', function(){
    return view('frontend/login');
})->name('login');

//Route::resource('/profile','App\Http\Controllers\TemplateController@profile');

Route::get('profile/', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::resource('/nutritionists','App\Http\Controllers\NutritionistController');
Route::resource('/patients','App\Http\Controllers\PatientController');
Route::post('/patients' , [App\Http\Controllers\PatientController::class, 'index'])->name('patients.index');
Route::post('/patients' , [App\Http\Controllers\PatientController::class, 'store'])->name('patients.store');

#Route::get('/mi_primer_ruta', function(){
	#return view('nombre_de_la_vista');
#}); 

#Route::get('/name/{name}/lastname/{lastname?}', function($name, $lastname = null){
	#return 'Hola soy '. $name . ' ' . $lastname;
#});

#Route::get('prueba/{variable}', 'App\Http\Controllers\PruebaController@prueba');
#Route::resource('test', 'App\Http\Controllers\TestController');
#Route::resource('nutritionist', 'App\Http\Controllers\NutritionistController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
