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

function verifyloginform()
{
    //$_SESSION['out']= false;


    $users = getusers();


    if (isset($_POST['uname']) && isset($_POST['psw'])) {
        foreach ($users as  $user) {
            if ($user['user'] == $_POST['user'] && $user['password'] == $_POST['password']) {

                $_SESSION['user'] = $_POST['user'];

                $message = "hello there" . $_POST['user'];
            }
        }

    }


    require_once 'view/loginsuccess.php';
}

function getdisplaySnows()
{

    $snows = getSnows();
    require_once 'view/displaySnows.php';
}

function distalisSnows()
{

    $snows = getSnows();

    require_once 'view/showditalis.php';
}


?>

