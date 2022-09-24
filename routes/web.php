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

// #### Overview ####
Route::get('/', [App\Http\Controllers\OverviewController::class, 'index'])->name('overview');

// #### Test ####
Route::view('/test', 'test')->name('test');



/*
 * Routs below relate to template features
 */

// #### Language ####
Route::get('lang/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang-switch');

// #### Layout ####
Route::get('/setlayout', [App\Http\Controllers\FeatureController::class, 'setLayoutCookie'])->name('set-layout');
Route::get('/forgetlayout', [App\Http\Controllers\FeatureController::class, 'destroyLayoutCookie'])->name('forget-layout');

// #### Cookie explanation ####
Route::get('/setexplanation', [App\Http\Controllers\FeatureController::class, 'setExplanationCookie'])->name('set-explanation');
Route::get('/forgetexplanation', [App\Http\Controllers\FeatureController::class, 'destroyExplanationCookie'])->name('forget-explanation');
