<?php

use App\Http\Controllers\AppartementSharingContoller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchPostController;
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
//     return view('accueil');
// });

Route::get('/',[AppartementSharingContoller::class,'index'])->name('accueil');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/search-appartment',[SearchPostController::class,'index'])->name('post.search.appartment');
    Route::post('/search-store-appartment',[SearchPostController::class,'creatingSearchPost'])->name('post.store.search.appartment');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
