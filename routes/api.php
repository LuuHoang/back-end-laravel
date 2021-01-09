<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BtbaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReceiptController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::resource('btba', 'BtbaController');
Route::post('/post/create', [BtbaController::class,'store']);
Route::get('/post/edit/{id}', [BtbaController::class,'edit']);
Route::post('/post/update/{id}', [BtbaController::class,'updatepost']);
Route::delete('/post/delete/{id}', [BtbaController::class,'deletepost']);
Route::get('/posts', [BtbaController::class,'index']);

// JWT
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');

    Route::post('receipt/create', 'App\Http\Controllers\ReceiptController@store');
    Route::get('receipt/index/{number}', 'App\Http\Controllers\ReceiptController@index');
    Route::get('receipt/edit/{id}', 'App\Http\Controllers\ReceiptController@edit');
    Route::put('receipt/update/{id}', 'App\Http\Controllers\ReceiptController@update');
    Route::delete('receipt/delete/{id}', 'App\Http\Controllers\ReceiptController@delete');
    Route::get('receipt/get/{offset}/{limit}', 'App\Http\Controllers\ReceiptController@limit');
    Route::get('receipt/get_payment/{offset}/{limit}', 'App\Http\Controllers\ReceiptController@getPayments');
    Route::get('receipt/get_receipt/{offset}/{limit}', 'App\Http\Controllers\ReceiptController@getReceipts');

    Route::get('receipt/total', 'App\Http\Controllers\ReceiptController@totalPage');
    Route::get('receipt/total_page_receipt', 'App\Http\Controllers\ReceiptController@totalPageReceipt');
    Route::get('receipt/total_page_payment', 'App\Http\Controllers\ReceiptController@totalPagePayment');

    Route::get('receipt/total_money_receipt', 'App\Http\Controllers\ReceiptController@getTotalMoneyReceipt');
    Route::get('receipt/total_money_payment', 'App\Http\Controllers\ReceiptController@getTotalMoneyPayment');

    Route::get('receipt/search_by_string/{text}', 'App\Http\Controllers\ReceiptController@searchByString');
    Route::get('receipt/search_by_string_receipt/{text}', 'App\Http\Controllers\ReceiptController@searchByStringReceipt');
    Route::get('receipt/search_by_string_payment/{text}', 'App\Http\Controllers\ReceiptController@searchByStringPayment');

    Route::get('user/info','App\Http\Controllers\UserController@getInfo');  
});