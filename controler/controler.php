<?php
require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}
function showloginform(){

    require_once 'view/login.php';
}

function verifyloginform(){
    $password=  $_POST['psw'];
    if($password=='Bonjour'){

        $message="Bonjour ". $_POST['uname'];
    }else{

        $message="IS not good password";
    }


    require_once 'view/loginsuccess.php';
}
?>

