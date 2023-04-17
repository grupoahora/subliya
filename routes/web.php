<?php

use App\Http\Controllers\DashboardController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/contact', function () {
    return view('welcome');
})->name('welcome');
Route::get('/disenos', function () {
    return view('web.disenos');
})->name('disenos');

/* Route::get('/diseno-detail', function () {
    return view('web.diseno-detail');
})->name('diseno.detail'); */

Route::get('get_by_name', [DashboardController::class, 'get_by_name'])->name('get.by.name');
Route::get('get_detail_design/{design}', [DashboardController::class, 'get_detail_design'])->name('get.detail.design');
Route::get('/', [DashboardController::class, 'get_detail_all'])->name('get.detail.all');
Route::get('get_designs_by_category/{category}', [DashboardController::class, 'get_designs_by_category'])->name('get.designs.by.category');
Route::get('get_designs_by_categories', [DashboardController::class, 'get_designs_by_categories'])->name('get.designsbycategory');
Route::get('get_designs_by_categories_prueba', [DashboardController::class, 'get_designs_by_categories_prueba'])->name('get.designsbycategoryprueba');
Route::get('get_subcategories_by_category_unique', [DashboardController::class, 'get_subcategories_by_category_unique'])->name('get.subcategoriesbycategoryunique');
Route::get('get_designs_by_subcategory', [DashboardController::class, 'get_designs_by_subcategory'])->name('get.designsbysubcategory');
Route::post('contactanos', [DashboardController::class, 'contactanos'])->name('contactanos');
/* Route::get('contactanos', function(){
    $correo = new ContactanosMailable;
    Mail::to('aantiinoo@gmail.com')->send($correo);
    return redirect()->route('welcome');
}); */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
