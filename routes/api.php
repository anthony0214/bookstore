<?php
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CurrencyController;
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

Route::get('/test', function(Request $request){
    return 'Authenticated';
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->group(function(){
    Route::get('/user', function(Request $request){
        return $request->user();
    });

    //Route::get('/authors/{author}', [AuthorsController::class, 'show']);

    // Route::get('/authors/{author}', [AuthorsController::class, 'show']);

    // Route::get('/authors', [AuthorsController::class, 'index']);

    Route::apiResource('/authors', AuthorsController::class);

    Route::apiResource('/books', BooksController::class);

    Route::apiResource('/currency', CurrencyController::class);

});

//Route::get('/currency', [CurrencyController::class, 'index']);


// Route::group(['middleware' => 'auth:api'], function(){
//     Route::get('/currency', [CurrencyController::class, 'index']);
//  });

// Route::middleware('auth:api')->group(function(){
//     Route::get('/user', function(Request $request){
//         return $request->user();
//     });
//     Route::get('/currency', [CurrencyController::class, 'index']);
//     //Route::apiResource('/currency', CurrencyController::class);
//     Route::apiResource('/books', BooksController::class);

// });


 
