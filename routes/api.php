<?php

Route::apiResource('/class','Api\ClassController');
Route::apiResource('/subject','Api\SubjectController');
Route::apiResource('/student','Api\StudentController');
Route::group([

    'prefix' => 'auth'

], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
