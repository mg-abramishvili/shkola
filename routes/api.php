<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Photoalbums
    Route::post('photoalbums/media', 'PhotoalbumsApiController@storeMedia')->name('photoalbums.storeMedia');
    Route::apiResource('photoalbums', 'PhotoalbumsApiController');

    // Events
    Route::post('events/media', 'EventsApiController@storeMedia')->name('events.storeMedia');
    Route::apiResource('events', 'EventsApiController');

    // News
    Route::post('news/media', 'NewsApiController@storeMedia')->name('news.storeMedia');
    Route::apiResource('news', 'NewsApiController');

    // Teachers
    Route::post('teachers/media', 'TeachersApiController@storeMedia')->name('teachers.storeMedia');
    Route::apiResource('teachers', 'TeachersApiController');

    // Schedulesimples
    Route::post('schedulesimples/media', 'SchedulesimpleApiController@storeMedia')->name('schedulesimples.storeMedia');
    Route::apiResource('schedulesimples', 'SchedulesimpleApiController');

    // Marshrutes Floors
    Route::post('marshrutes-floors/media', 'MarshrutesFloorsApiController@storeMedia')->name('marshrutes-floors.storeMedia');
    Route::apiResource('marshrutes-floors', 'MarshrutesFloorsApiController');

    // Marshrutes Routes
    Route::apiResource('marshrutes-routes', 'MarshrutesRoutesApiController');

    // Marshrutes Routes Twos
    Route::apiResource('marshrutes-routes-twos', 'MarshrutesRoutesTwoApiController');
});
