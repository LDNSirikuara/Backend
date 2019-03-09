<?php
/**
 * Application
 *
 * @author       Duminda Namal
 * @version      $Id: v1.0.0 2019-March-09 Exp $;
 * @copyright    Copyright &copy; NextDevelopers.
 */

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

Route::apiresource('/Posts', 'PostController');

Route::group(['prefix' => 'Posts'], function () {
    Route::apiResource('/{Post}/comments','CommentController');
});
 