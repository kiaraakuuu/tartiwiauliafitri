<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AngkaController;

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

Route::get('/', function () {
    return view ('home',[
        "title"=> "Home"
    ]
);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
    ]);
});


Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{slug}', [PostController::class, 'show']);
Route::get('/contact', function (){
    return view ('contact', []);
});

// angka
Route::get('angka',[AngkaController::class,'index'])->name('angka.index');


