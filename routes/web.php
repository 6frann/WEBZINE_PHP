<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/articles',[HomeController::class,'index']);
// Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('test2');

// Route::get('/videos', [VideoController::class,'index']);
// Route::get('/videos/{slug}', [VideoController::class,'show'])->name('test3');

