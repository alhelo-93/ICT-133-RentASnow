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

<h1 class="alert alert-success" role="alert"> <?= $message ?> </h1>




<?php
$content = ob_get_clean();
require "gabarit.php";
?>

