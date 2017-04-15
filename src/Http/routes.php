<?php

Route::get('testroute', function(){
    return "The Routes are loaded";
});

Route::get('testtrans', function(){
    return trans('boilerplate::example.message');
});

Route::group(['middleware' => 'web', 'namespace' => 'Ridrog\Boilerplate\Http\Controllers'], function () {
    Route::get('/controllertest', 'BoilerplateController@test')->name('test-controller');
});
