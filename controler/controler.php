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

function verifyloginform($username, $password)
{



    $users = getusers();


foreach ($users as $i => $user) {
    if ($user["uname"] == $username && $user["psw"] == $password) {
        $_SESSION["email"] = $username;
        $_SESSION["password"] = $password;
        
        require_once 'view/loginsuccess.php';

    }
}
    if(!isset($_SESSION["email"])){
        $_SESSION["flashmessage"] = "Le nom d'utilisateur ou le mod de passe est incorrect";
            home();
    }



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