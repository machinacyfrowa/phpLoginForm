<?php

require_once('class/Route.php');

use Steampixel\Route;

Route::add('/', function() {
    echo "Hello world!";
});
Route::add('/login', function() {
    echo "strona logowania";
});
Route::add('/register', function() {
    echo "strona rejestracji";
});
Route::add('/logout', function() {
    echo "wylogowano";
});

Route::run('/phploginform');
?>