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


// parameters for add article


require "controler/controler.php";

switch ($action) {
    case 'login';

        showloginform();

        break;
    case 'verifylogin';

        $username = $_POST["uname"];
        $password = $_POST["psw"];

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


        createnewitem();

        break;
    case 'addnewsnow';



        $name = $_POST["name"];
        $Type = $_POST["Type"];
        $Color = $_POST["Color"];
        $Brand = $_POST["Brand"];
        $image =  $_FILES['image'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $imageName =  $_FILES['image']['name'];




        createsnow($name, $Type, $Color, $Brand,$imageName,$tmp_name,$image);

        break;


    default;
        home();

        break;
}

?>