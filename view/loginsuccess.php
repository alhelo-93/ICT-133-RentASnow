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
ob_start();
$title = "RentASnow - Welcome";
?>


<?php  if (isset($_SESSION['username']) == false) {
    echo '<strong class="alert alert-danger" role="alert">Oh snap!!</strong>';
    echo '<br>';
    echo '<br>';
    echo '<p class="alert alert-danger" role=\"alert\"> This User dose not exist ' . $_SESSION["username"] . "</p>";

    require_once 'view/loginsuccess.php';
}else{
    echo '<strong class="alert alert-success" role="alert"> Well done!</strong>';
    echo '<br>';
    echo '<br>';
    echo '<p class="alert alert-success" role=\"alert\"> '  . $message . "</p>";

}

?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>

