<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    return view('pages.home');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/accueil',[HomeController::class,'index'])->name('pages.home');

Route::get('/actualites',[ArticleController::class,'index'])->name('pages.actuality');
Route::get('/actualites/{slug}', [ArticleController::class, 'show'])->name('pages.articleDetail');

Route::get('/videos', [VideoController::class,'index'])->name('pages.videos');
Route::get('/videos/{slug}', [VideoController::class,'show'])->name('pages.videoDetail');

