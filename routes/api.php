<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Test;

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


Route::get('/get',function(){

    $test = Test::all();
    return $test;

});

Route::post('/post',function(){

    return Test::create([
        'name' => request('name'),
        'age' => request('age')
    ]);

});

Route::put('/post/{tes}',function(Test $Tes){

     $Tes->update([
        'name' => request('name'),
        'age' => request('age')
    ]);
return "Success";
});


Route::delete('/post/{delete}',function(Test $delete){

    $delete->delete();
return "Success";
});
