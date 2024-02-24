<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


//View dalam direktori 
Route::get('/greeting', function(){
    return view('blog.hello', ['name' => 'Galihwahyu']);
});
//View
//Route::get('/greeting', function(){
    //return view('hello', ['name' => 'Galihwahyu']);
//});

//Controller
//Route::get('article/{articleId}',[PageController::class,'articles']);
//Route::get('about',[PageController::class,'about']);
//Route::get('index',[PageController::class,'index']);



//Route::get('hello',[WelcomeController::class,'hello']);

//--OPTIONAL PARAMATERS--
//Route::get('/user/{name?}', function ($name='Jony'){
        //return 'Nama saya '.$name;
//});


//Route::get('/user/{name?}', function ($name=null){
    //return 'Nama saya '.$name;
//});


//--ROUTE PARAMATERS--
//Route::get('/artikel/{id}', function($id){
    //return 'Halaman Artikel dengan ID 1';
//});

//Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
//});

//Route::get('/user/{name}', function ($name){
    //return 'Nama Saya '.$name;
//});


//--BASIC ROUTE--
//Route::get('/about', function(){
    //return '2141762095 / Galihwahyu ';
//});

//Route::get('/', function(){
    //return 'Selamat Datang';
//});

///Route::get('/world', function(){
   // return 'World';
//});


//Route::get('/hello', function (){
    //return 'Hello World';
//});
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
    //return view('welcome');
//});
