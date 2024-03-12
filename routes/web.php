<?php

use App\Http\Controllers\AppartementSharingContoller;
use App\Http\Controllers\MainRoommatePostController;
use App\Http\Controllers\MainSearchPostController;
use App\Http\Controllers\Posts\MyPostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchPostController;
use App\Http\Controllers\SearchRoommateController;
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


Route::get('/',[AppartementSharingContoller::class,'index'])->name('accueil');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/get-post-roommate',[MainRoommatePostController::class,'allPostRoommate']);
Route::get('/get-search-post',[MainSearchPostController::class,'allSearchPost']);
Route::get('/details-post-roommate/{id}',[MainRoommatePostController::class,'detailsPostRoommate']);
Route::get('/details-search-post/{id}',[MainSearchPostController::class,'detailsSearchPost']);

Route::middleware('auth')->group(function () {
    Route::get('/search-roommate',[SearchRoommateController::class,'index'])->name('post.search.roommate');
    Route::get('/search-appartment',[SearchPostController::class,'index'])->name('post.search.appartment');
    Route::post('/search-store-appartment',[SearchPostController::class,'creatingSearchPost'])->name('post.store.search.appartment');
    Route::middleware('is_furnished')->post('/search-store-roommate',[SearchRoommateController::class,'creatingSearchRoommate'])->name('post.store.search.roommate');
    Route::get('post-list',[MyPostsController::class,'index'])->name('post.list');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
