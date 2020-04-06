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
$title = "RentASnow - DisplaySnows";
?>

<!-- ________ Products _____________-->

<h1 style="text-align: center">Products</h1>
<div class="container">
    <div class="row">

        <div class="col-lg-4 item">
            <h3>Item 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>

    </div>


    <?php
    $content = ob_get_clean();
    require "gabarit.php";
    ?>
