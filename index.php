<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once('class/User.php');
require_once('class/Image.php');

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
    global $s;
    $s->display('login.tpl');
});
Route::add('/login', function() {
    global $s;
    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];
    $user = new User($email, $password);
    $user->registerSession();
    //wyświetl templatke po logowaniu
    $s->assign('message', 'Zostałeś zalogowany poprawnie');
    $s->display('postlogin.tpl');
}, 'post');
Route::add('/register', function() {
    global $s;
    $s->display('register.tpl');
});
Route::add('/register', function() {
    global $s;
    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];
    User::register($email, $password);
    $s->assign('message', 'Zostałeś zarejestrowany poprawnie');
    $s->display('postregister.tpl');
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
    Image::Upload($_FILES['file']);
}, 'post');
Route::add("/profile", function(){
    global $s;
    //sprawdzamy czy ktoś jest zalogowany
    $isUserLogged = isset($_SESSION['user']);
    //jeśli nie to przekieruj na stronę logowania
    if(!$isUserLogged){
        header('Location: login');
        exit();
    }
    //dalszy kod wykona sie tylko jeśli jestesmy zalogowani
    $user = $_SESSION['user'];
    $s->assign('firstName', $user->getFirstName());
    $s->assign('lastName', $user->getLastName());
    $s->display('profile.tpl');
});
Route::add("/profile", function(){
    global $s;
    $isUserLogged = isset($_SESSION['user']);
    if(!$isUserLogged){
        header('Location: login');
        exit();
    }
    //dalszy kod wykona sie tylko jeśli jestesmy zalogowani
    $user = $_SESSION['user'];
    //TODO: zapisz faktycznie zmiany w profilu
    if(isset($_POST['firstName']) && isset($_POST['lastName'])){
        $user->updateProfile($_POST['firstName'], $_POST['lastName']);
        $s->assign('message', 'Zaktualizowano profil');
    }
    if(isset($_POST['password']) && isset($_POST['passwordRepeat'])){
        if($_POST['password'] == $_POST['passwordRepeat']){
            $user->updatePassword($_POST['password']);
            $s->assign('message', 'Zaktualizowano hasło');
        } else {
            $s->assign('message', 'Hasła nie są takie same');
        }
    }
    $s->display('postprofile.tpl');
}, 'post');
Route::run('/phploginform');
?>