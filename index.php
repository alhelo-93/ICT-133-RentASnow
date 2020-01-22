<?php
session_start();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
$username = $_POST["uname"];
$password = $_POST["psw"];

require "controler/controler.php";

switch ($action) {
    case 'login';

        showloginform();

        break;
    case 'verifylogin';

        cklogin($username,$password);

        break;
    case 'logout';

        logout();

        break;

    case 'displaySnows';

        getdisplaySnows();

        break;
    case 'showdetails';

        detailsSnows();


        break;

    default;
        home();

        break;
}


?>