<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
require "controler/controler.php";
switch ($action) {
    case 'login';

        showloginform();

        break;
    case 'verifylogin';

        verifyloginform();

        break;

    case 'displaySnows';

        getdisplaySnows();

        break;

    default;
        home();

        break;
}


?>