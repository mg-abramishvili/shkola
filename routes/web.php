<?php

Route::get('/', function () {
    return view('welcome-nostream');
});
Route::get('t1', function () {
    return view('welcome');
});
Route::get('t2', function () {
    return view('welcome2');
});
Route::resource('front/news', 'FrontNewsController');
Route::resource('front/events', 'FrontEventsController');
Route::resource('front/photoalbums', 'FrontPhotoalbumsController');
Route::resource('front/teachers', 'FrontTeachersController');
Route::resource('front/schedulesimples', 'FrontSchedulesimpleController');
Route::resource('front/marshrutes-routes', 'FrontMarshrutesRoutesController');
Route::resource('front/marshrutes-routes-twos', 'FrontMarshrutesRoutesTwoController');
Route::get('front/teachers01', 'FrontTeachersController@index01');
Route::get('front/teachers02', 'FrontTeachersController@index02');
Route::get('front/teachers03', 'FrontTeachersController@index03');
Route::get('front/teachers04', 'FrontTeachersController@index04');
Route::get('front/teachers05', 'FrontTeachersController@index05');
Route::get('front/teachers06', 'FrontTeachersController@index06');
Route::get('front/teachers07', 'FrontTeachersController@index07');
Route::get('front/teachers08', 'FrontTeachersController@index08');
Route::get('front/teachers09', 'FrontTeachersController@index09');
Route::get('front/teachers10', 'FrontTeachersController@index10');
Route::get('front/teachers11', 'FrontTeachersController@index11');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Photoalbums
    Route::delete('photoalbums/destroy', 'PhotoalbumsController@massDestroy')->name('photoalbums.massDestroy');
    Route::post('photoalbums/media', 'PhotoalbumsController@storeMedia')->name('photoalbums.storeMedia');
    Route::post('photoalbums/ckmedia', 'PhotoalbumsController@storeCKEditorImages')->name('photoalbums.storeCKEditorImages');
    Route::resource('photoalbums', 'PhotoalbumsController');

    // Events
    Route::delete('events/destroy', 'EventsController@massDestroy')->name('events.massDestroy');
    Route::post('events/media', 'EventsController@storeMedia')->name('events.storeMedia');
    Route::post('events/ckmedia', 'EventsController@storeCKEditorImages')->name('events.storeCKEditorImages');
    Route::resource('events', 'EventsController');

    // News
    Route::delete('news/destroy', 'NewsController@massDestroy')->name('news.massDestroy');
    Route::post('news/media', 'NewsController@storeMedia')->name('news.storeMedia');
    Route::post('news/ckmedia', 'NewsController@storeCKEditorImages')->name('news.storeCKEditorImages');
    Route::resource('news', 'NewsController');

    // Teachers
    Route::delete('teachers/destroy', 'TeachersController@massDestroy')->name('teachers.massDestroy');
    Route::post('teachers/media', 'TeachersController@storeMedia')->name('teachers.storeMedia');
    Route::post('teachers/ckmedia', 'TeachersController@storeCKEditorImages')->name('teachers.storeCKEditorImages');
    Route::resource('teachers', 'TeachersController');

    // Schedulesimples
    Route::delete('schedulesimples/destroy', 'SchedulesimpleController@massDestroy')->name('schedulesimples.massDestroy');
    Route::post('schedulesimples/media', 'SchedulesimpleController@storeMedia')->name('schedulesimples.storeMedia');
    Route::post('schedulesimples/ckmedia', 'SchedulesimpleController@storeCKEditorImages')->name('schedulesimples.storeCKEditorImages');
    Route::resource('schedulesimples', 'SchedulesimpleController');

    // Marshrutes Floors
    Route::delete('marshrutes-floors/destroy', 'MarshrutesFloorsController@massDestroy')->name('marshrutes-floors.massDestroy');
    Route::post('marshrutes-floors/media', 'MarshrutesFloorsController@storeMedia')->name('marshrutes-floors.storeMedia');
    Route::post('marshrutes-floors/ckmedia', 'MarshrutesFloorsController@storeCKEditorImages')->name('marshrutes-floors.storeCKEditorImages');
    Route::resource('marshrutes-floors', 'MarshrutesFloorsController');

    // Marshrutes Routes
    Route::delete('marshrutes-routes/destroy', 'MarshrutesRoutesController@massDestroy')->name('marshrutes-routes.massDestroy');
    Route::resource('marshrutes-routes', 'MarshrutesRoutesController');

    // Marshrutes Routes Twos
    Route::delete('marshrutes-routes-twos/destroy', 'MarshrutesRoutesTwoController@massDestroy')->name('marshrutes-routes-twos.massDestroy');
    Route::resource('marshrutes-routes-twos', 'MarshrutesRoutesTwoController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});
