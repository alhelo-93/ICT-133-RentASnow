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
    $password = $_POST['psw'];
    if ($password == 'Bonjour') {

        $message = "Bonjour " . $_POST['uname'];
    } else {

        $messagealert = "IS not good password";
    }

    require_once 'view/loginsuccess.php';
}

function getdisplaySnows()
{

    $snows = getSnows();
    require_once 'view/displaySnows.php';
}

function distalisSnows($snowid)
{
    $snow['id'] = $snowid;
    $products = getSnows();
    if (isset($_GET['id']) == true) {
        $snowid = $_GET['id'];
    }

    require_once 'view/showditalis.php';
}


?>

