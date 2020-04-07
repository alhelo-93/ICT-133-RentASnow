<?php
/**
 *Created by ICT-133-RentASnow.
 *FILE_NAME:snowsModel.php
 *USER:marwa
 *DATE:07.04.2020
 */
?>
<?php
ob_start();
$title = "RentASnow - SnowsModel";
?>

<!-- ________ Products _____________-->

<h1 style="text-align: center"><span class="badge badge-pill badge-dark">Nos Snowboards</span></h1>
<div class="container">
    <div class="row d-flex justify-content-center">

            <div class="col-lg-3 item border rounded border-dark m-3 ">

                <h3 class="text-center m-2"><span class="badge badge-pill badge-info"><</span></h3>
                <div class="border border-dark"><img src="view/images/" class=""></div>
                <p class="p-1 text-justify"> Le groupe de <b></b> Pour afficher les snowboards Cliquez le bouton au dessous :  </p>
                <div class="p-1 m-2 d-flex justify-content-center" ><div class="btn btn-outline-dark"> Tous les <b><?= $snow['model'] ?></b> </div> </div>
            </div>


    </div>

    <?php
    $content = ob_get_clean();
    require "gabarit.php";
    ?>

