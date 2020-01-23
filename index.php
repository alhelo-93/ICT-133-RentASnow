<?php
/**
 * Created BY PhpStorm.
 * Title: ICT-133-RentASnow
 * USER: Marwan.ALHELO
 * DATE: 10.01.2020
 * Time: 16:02
 */

?>
<?php
session_start();
// to go home by default
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
    case 'showdetails';

        deleteSnows();

        break;

    default;
        home();

        break;
}


?>