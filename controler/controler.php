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

    // to read all users from json
    $users = getUsers();

    if (isset($username) && isset($password)) {
        // to check each user psw and uname
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

// its work
function dropSnow($snow_id)
{

    $snows = removeSnow($snow_id);


    require_once 'view/displaySnows.php';
}
//work in progress
function createnewitem()
{

    require_once 'view/newsnow.php';
}
//work in progress
//
function createsnow($name,$Type,$Color,$Brand,$image)
{
    if(isset($_FILES['image'])){
        $tmp_name = $_FILES['image']['tmp_name'];
        $image =  $_FILES['image']['name'];
        $destination = "view/images/";
        $contentFormat = array('.jpg','.JPG','.png','.PNG');
        $format = strchr($_FILES['image']['name'], '.' ) ;
       if( in_array($format,$contentFormat)){
           if(  move_uploaded_file($tmp_name,$destination)){
               require "view/displaySnows.php";
           }

       }

    }
    $snows = getSnows();
    if (isset($name)&& isset($Type)&& isset($Color)&& isset($Brand)){

        newsnow( $name, $Type, $Color, $Brand);

    }

    require_once 'view/displaySnows.php';
}



?>
