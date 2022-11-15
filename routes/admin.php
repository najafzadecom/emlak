<?php

use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FavoriteController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MenuItemController;
use App\Http\Controllers\Admin\MetroController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PromoCodeController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\TargetController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VillageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::resource('announcement', AnnouncementController::class);
Route::resource('banner', BannerController::class);
Route::resource('category', CategoryController::class);
Route::resource('city', CityController::class);
Route::resource('comment', CommentController::class);
Route::resource('company', CompanyController::class);
Route::resource('country', CountryController::class);
Route::resource('currency', CurrencyController::class);
Route::resource('customer', CustomerController::class);
Route::resource('district', DistrictController::class);
Route::resource('faq', FaqController::class);
Route::resource('favorite', FavoriteController::class);
Route::resource('language', LanguageController::class);
Route::resource('menu', MenuController::class);
Route::resource('menu_item', MenuItemController::class);
Route::resource('metro', MetroController::class);
Route::resource('news', NewsController::class);
Route::resource('option', OptionController::class);
Route::resource('page', PageController::class);
Route::resource('permission', PermissionController::class);
Route::resource('promo_code', PromoCodeController::class);
Route::resource('region', RegionController::class);
Route::resource('role', RoleController::class);
Route::resource('setting', SettingController::class);
Route::resource('status', StatusController::class);
Route::resource('target', TargetController::class);
Route::resource('transaction', TransactionController::class);
Route::resource('user', UserController::class);
Route::resource('village', VillageController::class);

