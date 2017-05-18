<?php
Route::get('/', [
    'uses' => 'HomeController@Home',
    'as' => 'home'
]);
