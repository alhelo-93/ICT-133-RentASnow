<?php
ob_start();
$title = "RentASnow - Accueil";
?>

<!-- ________ SLIDER_____________-->
<div class="row-fluid">
    <div class="camera_full_width">
        <div id="camera_wrap">
            <div data-src="view/images/slider/5.jpg">
                <div class="camera_caption fadeFromBottom cap1">Les derniers modèles toujours à disposition.</div>
            </div>
            <div data-src="view/images/slider/1.jpg">
                <div class="camera_caption fadeFromBottom cap2">Découvrez des paysages fabuleux avec des sensations.
                </div>
            </div>
            <div data-src="view/images/slider/2.jpg"></div>
        </div>
        <br style="clear:both"/>
    </div>
</div>
<!-- ________ NEWS _____________-->
<<<<<<< HEAD

<h1>news</h1>
<br>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Title</th>
        <th>details</th>
        <th>Date</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($news as $onepieceofnews) { ?>
    <tr>
        <td><?= $onepieceofnews['title'] ?></td>
        <td><?= $onepieceofnews['details'] ?></td>
        <td><?= date('d.M.Y', strtotime($onepieceofnews['date'])) ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
=======
<div class="span12">
    <h1>Les news</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Time</th>
            <th>Details</th>
            <th>Titre</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($news as $onepieceofnews) { ?>
            <tr>
                <td><?= date('d.M.Y', strtotime($onepieceofnews['date'])) ?></td>
                <td><?= $onepieceofnews['details'] ?></td>
                <td><?= $onepieceofnews['title'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
>>>>>>> b2842ae284b735b084b7b65cacd2dfb7a492c1c9


<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
