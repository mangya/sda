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

// Note : below middleware we will be using for authentication 

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('test',function () {

	//Note : use http://local.vsmsda.co.in/api/test to check output 

	$test = array('name' => 'swaroop', 'surname' => 'Bhagwat');
	return json_encode($test);
});
