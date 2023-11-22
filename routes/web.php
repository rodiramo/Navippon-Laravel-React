<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
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



Route::get('/', [\App\Http\Controllers\HomeController::class, '__invoke'])
    ->name('home');


Route::get('about-us', [\App\Http\Controllers\AboutUsController::class, 'aboutUs'])
    ->name('about-us');


Route::get('cities/{cityId}', [\App\Http\Controllers\CityController::class, 'show'])
    ->name('city.show')
    ->whereNumber('cityId');

/*AUTH */

Route::get('login', [\App\Http\Controllers\AuthController::class, 'formLogin'])
    ->name('login');


Route::get('signup', [\App\Http\Controllers\AuthController::class, 'formSignup'])
    ->name('signup');

Route::post('signup', [\App\Http\Controllers\AuthController::class, 'processSignup'])
    ->name('auth.processSignup');



Route::post('login', [\App\Http\Controllers\AuthController::class, 'processLogin'])
    ->name('auth.processLogin');


Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->name('auth.logout');

/** PROFILE */
Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'profile'])
    ->name('profile')
    ->middleware(['auth']);


Route::get('profile/{id}/edit', [\App\Http\Controllers\ProfileController::class, 'edit'])
    ->name('profile.edit')
    ->middleware(['auth'])
    ->whereNumber('id');


Route::post('profile/{id}/edit', [\App\Http\Controllers\ProfileController::class, 'update'])
    ->name('profile.update')
    ->middleware(['auth'])
    ->whereNumber('id');

Route::get('favourites/{favouriteId}', [\App\Http\Controllers\ActivityFavouritedController::class, 'confirmDelete'])
    ->name('favourites.confirmDelete')
    ->middleware(['auth'])
    ->whereNumber('favouriteId');


Route::delete('favourites/{favouriteId}', [\App\Http\Controllers\ActivityFavouritedController::class, 'processDelete'])
    ->name('favourites.processDelete')
    ->middleware(['auth'])
    ->whereNumber('favouriteId');

/*RESERVE  */

Route::post('activities/{id}/favourite', [\App\Http\Controllers\ActivityFavouritedController::class, 'processFavourite'])
    ->name('activities.processFavourite')
    ->middleware(['auth'])
    ->whereNumber('id');

/* RATING */
Route::get('activities/{id}/confirm-age', [\App\Http\Controllers\AgeConfirmationController::class, 'formConfirmation'])
    ->name('age-confirmation.formConfirmation')
    ->middleware(['auth'])
    ->whereNumber('id');

/* CONFIRM AGE */
Route::post('activities/{id}/confirm-age', [\App\Http\Controllers\AgeConfirmationController::class, 'processConfirmation'])
    ->name('age-confirmation.processConfirmation')
    ->middleware(['auth'])
    ->whereNumber('id');


/* RESTAURANTS */
Route::get('restaurants', [\App\Http\Controllers\RestaurantController::class, 'index'])
    ->name('restaurants.index');

Route::get('restaurants/new', [\App\Http\Controllers\RestaurantController::class, 'formNew'])
    ->name('restaurants.formNew')
    ->middleware(['auth', 'checkRole']);

Route::post('restaurants/new', [\App\Http\Controllers\RestaurantController::class, 'processNew'])
    ->name('restaurants.processNew')
    ->middleware(['auth', 'checkRole']);

Route::get('restaurants/{id}', [\App\Http\Controllers\RestaurantController::class, 'view'])
    ->name('restaurants.view')
    ->whereNumber('id');

Route::get('restaurants/{id}/edit', [\App\Http\Controllers\RestaurantController::class, 'formUpdate'])
    ->name('restaurants.formUpdate')
    ->middleware(['auth', 'checkRole'])
    ->whereNumber('id');

Route::post('restaurants/{id}/edit', [\App\Http\Controllers\RestaurantController::class, 'processUpdate'])
    ->name('restaurants.processUpdate')
    ->middleware(['auth', 'checkRole'])
    ->whereNumber('id');

Route::get('restaurants/{id}/delete', [\App\Http\Controllers\RestaurantController::class, 'confirmDelete'])
    ->name('restaurants.confirmDelete')
    ->middleware(['auth', 'checkRole'])
    ->whereNumber('id');

/* ACTIVITIES */

Route::get('activities', [\App\Http\Controllers\ActivitiesController::class, 'index'])
    ->name('activities.index');

Route::get('activities/new', [\App\Http\Controllers\ActivitiesController::class, 'formNew'])
    ->name('activities.formNew')
    ->middleware(['auth', 'checkRole']);

Route::post('activities/new', [\App\Http\Controllers\ActivitiesController::class, 'processNew'])
    ->name('activities.processNew')
    ->middleware(['auth', 'checkRole']);

Route::get('activities/{id}', [\App\Http\Controllers\ActivitiesController::class, 'view'])
    ->name('activities.view')
    ->whereNumber('id');

Route::get('activities/{id}/edit', [\App\Http\Controllers\ActivitiesController::class, 'formUpdate'])
    ->name('activities.formUpdate')
    ->middleware(['auth', 'checkRole'])
    ->whereNumber('id');

Route::post('activities/{id}/edit', [\App\Http\Controllers\ActivitiesController::class, 'processUpdate'])
    ->name('activities.processUpdate')
    ->middleware(['auth', 'checkRole'])
    ->whereNumber('id');

Route::get('activities/{id}/delete', [\App\Http\Controllers\ActivitiesController::class, 'confirmDelete'])
    ->name('activities.confirmDelete')
    ->middleware(['auth', 'checkRole'])
    ->whereNumber('id');

/* ADMIN */

Route::get('admin', [\App\Http\Controllers\AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware(['auth', 'checkRole']);

Route::get('user-list', [\App\Http\Controllers\AdminController::class, 'userList'])
    ->name('userList')
    ->middleware(['auth', 'checkRole']);

Route::get('user-list/{userId}/favourites', [\App\Http\Controllers\AdminController::class, 'viewUserFavouritesActivities'])
    ->name('admin.viewUserFavouritesActivities')
    ->middleware(['auth', 'checkRole']);
