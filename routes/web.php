<?php

use App\Jobs\SendPushNotification;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;
// use App\Models\taxi\Settings;
// use App\Models\taxi\Requests\Request as RequestModel;

use App\Http\Controllers\Taxi\Web\Request\ShareTripController;

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

// Route::get('/login', function () {
//     return view('welcome');
// });


require __DIR__.'/auth.php';
require __DIR__.'/web/product.php';