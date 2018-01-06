<?php

Route::get('/', function () {
    return view('pages.landing-page.index');
});

<<<<<<< HEAD
Route::get('admin', function () {
    return view('admin');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('register', function () {
    return view('auth.register');
=======
Route::get('/admin', function () {
    return view('pages.admin-page.home.index');
});

Route::get('/register', function () {
    return view('pages.auth-page.register');
});

Route::get('/login', function () {
    return view('pages.auth-page.login');
>>>>>>> e8ba71dcc01b70ba51cb3acc9663662f06c8c522
});

Route::get('/3-column-example', function () {
    return view('pages.3-column-example.index');
});
