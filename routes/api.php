<?php

Route::namespace('Api\v1')->group(function () {
    Route::post('auth/login', 'Auth\LoginController@login');

    # Protected Route
    Route::middleware('auth:api')->group(function () {
        Route::get('auth/user', function () {
            return response()->json(request()->user());
        });
        Route::post('auth/logout', 'Auth\LogoutController');
    });
});
