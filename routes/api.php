<?php

use App\Http\Controllers\Api\AnnouncementController;
use App\Http\Controllers\Api\BannerController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\CurrencyController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\LanguageController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\MenuItemController;
use App\Http\Controllers\Api\MetroController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\OptionController;
use App\Http\Controllers\Api\PageController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\PromoCodeController;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\StatusController;
use App\Http\Controllers\Api\TargetController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VillageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


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
