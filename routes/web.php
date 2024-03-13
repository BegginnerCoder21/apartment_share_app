<?php

use App\Http\Controllers\AppartementSharingContoller;
use App\Http\Controllers\MainRoommatePostController;
use App\Http\Controllers\MainSearchPostController;
use App\Http\Controllers\Posts\MyPostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchPostController;
use App\Http\Controllers\SearchRoommateController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AppartementSharingContoller::class, 'index'])->name('accueil');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(MainRoommatePostController::class)->group(function () {
    Route::get('/get-post-roommate', 'allPostRoommate');
    Route::get('/details-post-roommate/{id}', 'detailsPostRoommate');
});

Route::controller(MainSearchPostController::class)->group(function () {
    Route::get('/get-search-post', 'allSearchPost');
    Route::get('/details-search-post/{id}', 'detailsSearchPost');
});

Route::middleware('auth')->group(function () {

    Route::controller(SearchRoommateController::class)->group(function () {
        Route::get('/search-roommate', 'index')->name('post.search.roommate');
        Route::middleware('is_furnished')->post('/search-store-roommate', 'creatingSearchRoommate')->name('post.store.search.roommate');
    });

    Route::controller(SearchPostController::class)->group(function () {
        Route::get('/search-appartment', 'index')->name('post.search.appartment');
        Route::post('/search-store-appartment', 'creatingSearchPost')->name('post.store.search.appartment');
    });
    Route::controller(MyPostsController::class)->group(function () {
        Route::get('post-list', 'index')->name('post.list');
        Route::get('edit-post-roommate/{id}', 'editRoommate')->name('edit.post.roommate');
        Route::get('edit-post-sharing/{id}', 'editSharing')->name('edit.post.sharing');
        Route::get('update-post-roommate','updatedPostRoommate')->name('update.post.roommate');
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});

require __DIR__ . '/auth.php';
