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
function snowsModel()
{

    $snows = getSnowsModele();

    require_once 'view/snowsModel.php.php';
}


// it works!!!
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
function createsnow($name,$Type,$Color,$Brand,$imageName,$tmp_name,$image)
{
    if(!empty(isset($image))){
//
        $destination = "view/images/".$imageName;
        $contentFormat = array('.jpg','.JPG','.png','.PNG');
        $format = strchr($imageName, '.' ) ;
       if(in_array($format,$contentFormat)){
             move_uploaded_file($tmp_name,$destination);



       }
        getdisplaySnows();
    }
    if (isset($name)&& isset($Type)&& isset($Color)&& isset($Brand)){
        newsnow( $name, $Type, $Color, $Brand,$imageName);
    }

    getdisplaySnows();
}



?>
