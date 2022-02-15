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

Route::get("/", function() {
    return redirect()->route("home.index");
} );

Route::get("/home", [\App\Http\Controllers\HomeController::class, "index"])->name("home.index");

Route::get("/works", [\App\Http\Controllers\WorksController::class, "index"])->name("works.index");

Route::get("/works/{work}/{slug}", [\App\Http\Controllers\WorksController::class, "show"])
->where(['work' => '[1-9][0-9]*'])
->name("works.show");

Route::get("/moreWorks/{offset}", [\App\Http\Controllers\WorksController::class, "moreWorks"])->middleware('ajax')->name("works.moreWorks");

Route::get("/posts", [\App\Http\Controllers\PostsController::class, "index"])->name("posts.index");

Route::get("/posts/{post}/{slug}", [\App\Http\Controllers\PostsController::class, "show"])
->where(['post' => '[1-9][0-9]*'])
->name("posts.show");

Route::get("/posts/category/{category}/{slug}", [\App\Http\Controllers\PostsController::class, "indexByCategory"])
->where(['category' => '[1-9][0-9]*'])
->name("posts.category");

Route::get('/contact', function () {
    return view("contact.index");
})->name("contact.index");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
