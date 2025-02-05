<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once('class/User.php');

session_start(); 
use Steampixel\Route;
use Smarty\Smarty;

//smarty
$s = new Smarty();
$s->setTemplateDir('templates');
$s->setCompileDir('templates_c');
$s->setCacheDir('cache');
$s->setConfigDir('configs');

Route::add('/', function() {
    //include('templates/index.php');
    //wczytaj globalną zmienną smarty
    global $s;
    //ta zmienna przechowuje informacje czy ktokolwiek jest zalogowany
    $isUserLogged = isset($_SESSION['user']);
    if($isUserLogged){
        $s->assign('isUserLogged', true);
        $s->assign('user', $_SESSION['user']->getEmail());
    } else {
        $s->assign('isUserLogged', false);
    }
    $s->display('index.tpl');
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
    //include('templates/logout.php');
    global $s;
    //sprawdzamy czy ktoś jest zalogowany
    $isUserLogged = isset($_SESSION['user']);
    //jeśli tak to usuwamy zmienną sesyjną
    if($isUserLogged){
        session_destroy();
        //zapiszemy do smarty wiadomość o wylogowaniu
        $s->assign('message', 'Zostałeś wylogowany');
    }
    //wyświetlamy szablon
    $s->display('logout.tpl');
});
//formularz do wgrywania obrazka
Route::add('/upload', function() {
    global $s;
    $s->display('upload.tpl');
});
//przetwarzanie otrzymanego obrazu
Route::add('/upload', function() {
    echo "<pre>";
    var_dump($_FILES);
}, 'post');
Route::run('/phploginform');
?>