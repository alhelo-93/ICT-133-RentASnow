<?php
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}
// show loin form user uname & Psw
function showloginform()
{

    require_once 'view/login.php';
}

// function to check login with tow parameters
function cklogin($username, $password)
{


    $users = getUsers();

    if (isset($username) && isset($password)) {
        foreach ($users as $user) {

            if ($user["user"] == $username && $user["password"] == $password) {

                $_SESSION['username'] = $username;

                 $message = ' Welcome ' . $_SESSION["username"] ;

                require_once 'view/loginsuccess.php';

            }
        }
    }

    if (isset($_SESSION['username']) == false) {

        require_once 'view/loginsuccess.php';
    } else {
        $news = getNews();
        require_once 'view/home.php';
    }
    return true;
}

// to end user session
function logout(){
    unset($_SESSION['username']);
    $news = getNews();
    require_once 'view/home.php';



}

// to show all snowborad itmes
function getdisplaySnows()
{

    $snows = getSnows();
    require_once 'view/displaySnows.php';
}
// to show each details snow in row
function detailsSnows()
{

    $snows = getSnows();

    require_once 'view/showdetails.php';
}

function deleteSnows()
{

    $snows = getSnows();

    require_once 'view/displaySnows.php';
}


?>
