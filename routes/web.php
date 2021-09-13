<?php

use App\Http\Controllers\linkController;
use App\Models\link;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('linkshrink');
});

Route::get('/linkshrink', function () {
    return view('linkshrink');
});

Route::get('/posts/{post}', function ($id) {
    
    return view('post',[
        
        'post' => post::findorFail($id)

    ]);   
});
Route::post('/home',[linkController::class,'addLinks']);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('home',  [
            'home' => link::where('the_user', Auth::user()->name)->get()

        ]);
    })->name('home');
});    
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
