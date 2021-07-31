<?php

use App\Http\Controllers\PayOrderController;
use App\Models\User;
use App\Services\UserData;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function (UserData $user) {
    dd($user->getUserData());
    return view('welcome');
});
Route::get('/user/{user:email}', function (User $user) {
    return $user;
});
// Route::redirect('/here', '/there');
Route::redirect('/here', '/there', 301);

Route::get('/user/{name}', function ($name) {
    echo $name;
})->where('name', '[A-Za-z]+');

Route::get('/test', function () {
    echo Str::preFIxTest('haha') . '<br>';
    echo Str::preFIxTestOne('haha') . '<br>';
    echo Str::preFIxTestTwo('haha') . '<br>';
});

Route::get('/pay', [PayOrderController::class, 'store1']);
