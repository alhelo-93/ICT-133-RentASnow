<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
session_start();

require "controler/controler.php";

switch ($action) {
    case 'login';

        showloginform();

        break;
    case 'verifylogin';

        verifyloginform($email,$password);

        break;

    case 'displaySnows';

        getdisplaySnows();

        break;
    case 'showditalis';

        distalisSnows();


        break;

    default;
        home();

        break;
}


?>