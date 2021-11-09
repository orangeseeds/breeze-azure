<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ReviewController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ConsultancyController;
use \App\Http\Controllers\CompareController;
use \App\Http\Controllers\SearchController;


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

Route::get('/', [HomeController::class, 'landing'])->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('consultancy/index', [ConsultancyController::class, 'index'])->name('consultancy.index');
Route::get('/consultancy/{consultancy}', [ConsultancyController::class, 'show'])->name('consultancy.show');
Route::get('/consultancy/{consultancy}/json', [ConsultancyController::class, 'api'])->name('consultancy.json');
Route::get('/consultancy/{consultancy}/apply', [ConsultancyController::class, 'application_form'])->name('consultancy.apply');
Route::post('/consultancy/{consultancy}/apply/store', [ConsultancyController::class, 'application_submit'])->name('consultancy.apply.store');

Route::get('/consultancy/{consultancy}/review', [ReviewController::class, 'create'])->name('review.create');
Route::get('/consultancy/{consultancy}/review/index', [ReviewController::class, 'index'])->name('review.index');
Route::post('/consultancy/{consultancy}/review', [ReviewController::class, 'store'])->name('review.store');

Route::get('consultancy/{consultancy}/review/scorecard',[ReviewController::class, 'scorecard'])->name('review.scorecard');

Route::get('/search/name', [HomeController::class, 'searchName'])->name('search.name');
Route::get('/search/course', [HomeController::class, 'searchCourse'])->name('search.course');
Route::post('/fetch',[HomeController::class, 'fetch'])->name('search.fetch');

Route::get('search/filter', [SearchController::class, 'filter'])->name('filter.all');


Route::get('/compare', [CompareController::class, 'compare'])->name('compare');
Route::post('/compare/suggest', [CompareController::class, 'suggest'])->name('compare.suggest');
Route::get('/compare/add', [CompareController::class, 'add'])->name('compare.add');
Route::get('/compare/clear', function(){
    return view('components.compare-empty');
  })->name('compare.clear');


Route::get('/contactus',[HomeController::class, 'contactUsForm'])->name('contactUs.form');
Route::post('/contactus',[HomeController::class, 'contactUs'])->name('contactUs');
