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
function greatenewitem($newsnow_color)
{

    $snows = newsnows($newsnow_color);

    require_once 'view/displaySnows.php';
}
//work in progress
function greatesnow($id,$name,$Type,$Color,$Brand,$disponible)
{
    $snows = getSnows();
    if (isset($id) && isset($name)&& isset($Type)&& isset($Color)&& isset($Brand)&& isset($disponible)){

        foreach ($snows as $snow) {
            if ($snow["id"] == $id && $snow["name"] == $name&& $snow["Type"]==$Type&&$snow["Color"] ==$Color&&$snow["Brand"]==$Brand&&$snow["disponible"]==$disponible){

                $snows = addsnow($id,$name,$Type,$Color,$Brand,$disponible);
                            $message="vous avez bien ajouté ce snow ";
            }
        }

    }



    require_once 'view/displaySnows.php';
}



?>
