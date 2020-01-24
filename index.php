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
// parameters for login and checking login
$username = $_POST["uname"];
$password = $_POST["psw"];

// parameters for add article
$id = $_POST["id"];
$name = $_POST["name"];
$Type = $_POST["Type"];
$Color = $_POST["Color"];
$Brand = $_POST["Brand"];
$dateretour = $_POST["dateretour"];
$disponible = $_POST["disponible"];

require "controler/controler.php";

switch ($action) {
    case 'login';

        showloginform();

        break;
    case 'verifylogin';

        cklogin($username, $password);

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
    case 'deleteitem';
        $snow_id = $_GET['product'];
        dropSnow($snow_id);

        break;
    case 'newsnow';
        $newsnow_color = $_GET['product'];

        greatenewitem($newsnow_color);

        break;
    case 'addnewsnow';

        greatesnow($id,$name,$Type,$Color,$Brand,$disponible);

        break;

    default;
        home();

        break;
}

?>