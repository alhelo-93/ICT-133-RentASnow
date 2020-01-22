<?php
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}

function showloginform()
{

    require_once 'view/login.php';
}

function cklogin($username, $password)
{


    $users = getUsers();
    var_dump((isset($_POST['uname']) && isset($_POST['password'])));
    var_dump($_POST['uname']);
    var_dump($password);
    var_dump($_SESSION);
    if (isset($username) && isset($password)) {
        foreach ($users as $user) {
            var_dump($users);
            if ($user["user"] == $username && $user["password"] == $password) {

                $_SESSION['username'] = $username;

                $message = '<p class=\"alert alert-success\" role=\"alert\"> Welcom ' . $_SESSION["username"] . "</p>";
            }
        }
    }
    var_dump($_SESSION);
    var_dump(isset($_SESSION['username']));
    if (isset($_SESSION['username']) == false) {
        $message = '<p class=\"alert alert-success\" role=\"alert\"> This User dose not exist ' . $_SESSION["username"] . "</p>";
        require_once 'view/loginsuccess.php';
    } else {


    }
}
function logout(){
    unset($_SESSION['username']);
    $news = getNews();
    require_once 'view/home.php';



}


function getdisplaySnows()
{

    $snows = getSnows();
    require_once 'view/displaySnows.php';
}

function detailsSnows()
{

    $snows = getSnows();

    require_once 'view/showdetails.php';
}


?>
