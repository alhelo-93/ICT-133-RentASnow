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

<h1 style="text-align: center"><span class="badge badge-pill badge-dark">Nos Snowboards</span></h1>
<div class="container">
    <div class="row d-flex justify-content-center">
        <?php foreach ($snows as $snow) { ?>
        <div class="col-lg-3 item border rounded border-dark m-3 ">

            <h3 class="text-center m-2"><span class="badge badge-pill badge-info"><?= $snow['model'] ?></span></h3>
            <div class="border border-dark"><img src="view/images/<?= $snow['photo'] ?>" class=""></div>
            <p class="p-1 text-justify"> Le groupe de <b><?= $snow['model'] ?></b> Pour afficher les snowboards Cliquez le bouton au dessous :  </p>
            <div class="p-1 m-2 d-flex justify-content-center" ><div class="btn btn-outline-dark"> Tous les <b><?= $snow['model'] ?></b> </div> </div>
        </div>
        <?php }?>

    </div>

    <?php
    $content = ob_get_clean();
    require "gabarit.php";
    ?>
