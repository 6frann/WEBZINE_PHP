<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('articles.searchResults');

Route::get('/actualites',[ArticleController::class,'index'])->name('articles.index');
Route::get('/actualites/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/videos', [VideoController::class,'index'])->name('videos.index');
Route::get('/videos/{slug}', [VideoController::class,'show'])->name('videos.show');

Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/email', [ContactController::class, 'send'])->name('contact.send');

Route::get('categorie/{slug}', [CategoryController::class, 'show'])->name('categories.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



