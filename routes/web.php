<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SpotifyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::post('/gallery/upload', [GalleryController::class, 'store'])->name('gallery.upload');
Route::delete('/gallery/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete');

Route::get('/spotify/login', [SpotifyController::class, 'login'])->name('spotify.login');
Route::get('/callback', [SpotifyController::class, 'callback']);
Route::get('/spotify/player', function () {
    return view('spotify');
});
Route::get('/spotify/current', [SpotifyController::class, 'getCurrentPlaying']);
Route::post('/spotify/play', [SpotifyController::class, 'playPause']);