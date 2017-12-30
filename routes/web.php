<?php

Route::get('/', function () {
    return view('landing-page');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('register', function () {
    return view('auth.register');
});
