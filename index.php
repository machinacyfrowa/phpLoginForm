<?php
require_once('class/User.php');
require_once('class/Route.php');
session_start(); 
use Steampixel\Route;

Route::add('/', function() {
    include('templates/index.php');
});
Route::add('/login', function() {
    include('templates/login.php');
});
Route::add('/login', function() {
    include('templates/login.php');
}, 'post');
Route::add('/register', function() {
    include('templates/register.php');
});
Route::add('/register', function() {
    include('templates/register.php');
}, 'post');
Route::add('/logout', function() {
    include('templates/logout.php');
});

Route::run('/phploginform');
?>