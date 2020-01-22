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

    if (isset($username) && isset($password)) {
        foreach ($users as $user) {

            if ($user["user"] == $username && $user["password"] == $password) {

                $_SESSION['username'] = $username;

                $message = '<p class=\"alert alert-success\" role=\"alert\"> Welcom ' . $_SESSION["username"] . "</p>";
            }
        }
    }

    if (isset($_SESSION['username']) == false) {

        $message = '<p class="alert alert-danger" role=\"alert\"> This User dose not exist ' . $_SESSION["username"] . "</p>";

        require_once 'view/loginsuccess.php';
    } else {
        $news = getNews();
        require_once 'view/home.php';
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
