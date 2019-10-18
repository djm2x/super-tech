<?php

use Illuminate\Http\Request;

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

Route::middleware('api')->group(function () {
    Route::resource('chefs', 'API\ChefController');
});

// Route::get('/tests','TestController@index');

Route::middleware('api')->group(function () {
    Route::resource('tvs', 'TvController');
});

//articles

Route::get('/articles/search','ArticleController@search');
Route::get('/articles/query/{startIndex}/{pageSize}/{sortBy}/{sortDr}','ArticleController@query');

Route::get('/articles/pagination/{startIndex}/{pageSize}', 'ArticleController@pagination');

Route::middleware('api')->group(function () {
    Route::resource('articles', 'ArticleController');
});

//objet

Route::get('/objets/search','ObjetController@search');

Route::get('/objets/pagination/{startIndex}/{pageSize}', 'ObjetController@pagination');

Route::middleware('api')->group(function () {
    Route::resource('objets', 'ObjetController');
});

// Route::get('/search', function (Request $request) {
//     // dd($request);

//     return [
//         $name = $request->query('name'),
//         $function = $request->query('function'),
//         $query = $request->all()
//     ];
// });
