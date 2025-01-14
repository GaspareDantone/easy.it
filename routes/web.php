<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Session;

Route::resource('article', ArticleController::class);
Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/notice', [ArticleController::class, 'notice'])->name('notice');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/daniele', [PageController::class, 'daniele'])->name('daniele');
Route::get('/juri', [PageController::class, 'juri'])->name('juri');
Route::post('/send', [PageController::class, 'send'])->name('send');

// change language

Route::post('/lingua/{lang}', [PageController::class, 'setLanguage'])->name('setLocale');






Route::resource('article', ArticleController::class)->middleware('auth');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

// filtro scout
Route::get('/prova', [ArticleController::class, 'paginaProva'])->name('paginaProva');
Route::get('filtroscout', [ArticleController::class, 'filtroscout'])->name('filtroscout');

// socialite google
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback'])->name('handleCallback');

// revisore
Route::get('revisor/index', [RevisorController::class, 'index'])->middleware('IsRevisor')->name('revisor.index');
Route::get('lavoraconnoi', [RevisorController::class, 'lavoraconnoi'])->middleware('auth')->name('lavoraconnoi');
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');



