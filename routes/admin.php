<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('designs', DesignController::class)->names('designs');
Route::resource('attributes', AttributeController::class)->names('attributes');
Route::resource('statuses', Statuscontroller::class)->names('statuses');
Route::resource('catalogs', CatalogController::class)->names('catalogs');
Route::get('get_designs_by_categories_or_subcategories', [DashboardController::class, 'get_designs_by_categories_or_subcategories'])->name('get.designsbysubcategoriesorcategory');
Route::get('get_subcategories_by_category', [DashboardController::class, 'get_subcategories_by_category'])->name('get.subcategoriesbycategory');
Route::resource('configurations', ConfigurationController::class)->names('configurations');
Route::resource('labels', LabelController::class)->names('labels');
Route::resource('subcategories', SubcategoryController::class)->names('subcategories');
Route::post('upload_image/{id}', [DashboardController::class, 'upload_image'])->name('upload.image');
Route::post('upload_image_category/{id}', [DashboardController::class, 'upload_image_category'])->name('upload.image.category');
Route::delete('categories_desactivate/{idcat}/{idsub}', [DashboardController::class, 'categories_desactivate'])->name('categories.desactivate');
Route::delete('subcategories_desactivate/{idcat}/{idsub}', [DashboardController::class, 'subcategories_desactivate'])->name('subcategories.desactivate');
Route::post('file_delete', [DashboardController::class, 'file_delete'])->name('file.delete');

route::post('user/redessociales', [DashboardController::class, 'redessociales'])->name('redessociales');
route::post('user/renewpass',[DashboardController::class, 'renewpass'])->name('renewpass');