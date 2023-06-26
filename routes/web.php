<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

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

    // Pig
    Route::delete('pigs/destroy', 'PigController@massDestroy')->name('pigs.massDestroy');
    Route::resource('pigs', 'PigController');

    // Management
    Route::delete('managements/destroy', 'ManagementController@massDestroy')->name('managements.massDestroy');
    Route::resource('managements', 'ManagementController');

    // Report An Abnormal Event
    Route::delete('report-an-abnormal-events/destroy', 'ReportAnAbnormalEventController@massDestroy')->name('report-an-abnormal-events.massDestroy');
    Route::resource('report-an-abnormal-events', 'ReportAnAbnormalEventController');

    // Information Per Coop
    Route::delete('information-per-coops/destroy', 'InformationPerCoopController@massDestroy')->name('information-per-coops.massDestroy');
    Route::resource('information-per-coops', 'InformationPerCoopController');

    // Type Of Food
    Route::delete('type-of-foods/destroy', 'TypeOfFoodController@massDestroy')->name('type-of-foods.massDestroy');
    Route::resource('type-of-foods', 'TypeOfFoodController');

    // Report
    Route::delete('reports/destroy', 'ReportController@massDestroy')->name('reports.massDestroy');
    Route::resource('reports', 'ReportController');

    // Car
    Route::delete('cars/destroy', 'CarController@massDestroy')->name('cars.massDestroy');
    Route::resource('cars', 'CarController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
