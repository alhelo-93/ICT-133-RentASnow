<?php
/**
 *Created by ICT-133-RentASnow.
 *FILE_NAME:showdetails.php
 *USER:marwa
 *DATE:19.01.2020
 */
?>
<?php

$snows = getSnows();
$product["id"] = $_GET["product"];
?>


<?php foreach ($snows as $snow) {
    if ($snow["id"] == $product["id"]) {
        $product = [

            "name" => $snow["name"],
            "marque" => $snow["marque"],
            "Type" => $snow["Type"],
            "Brand" => $snow["Brand"],
            "image" => $snow["image"],
            "bigimage" => $snow["bigimage"],
            "description" => $snow["description"]
        ];
    }


} ?>
<?php
$title = "RentASnow - Showditalis";
ob_start();
?>
<h1 style="text-align: center">Products</h1>
<br>

<div>
    <div class="container text-center">
        <h1 class="display-4 "><?= $product['name'] ?> </h1>
        <img src="view/images/<?= $product['bigimage'] ?> " class="ditalissnow">

    </div>
</div>

<table class="table">
    <thead>
    <tr>

        <th class="text-center">Description</th>
        <th class="text-center">Type</th>


    </tr>
    </thead>
    <tbody>

    <tr>
        <td class="text-center"><?= $product['description'] ?></td>
        <td class="text-center"><?= $product['Type'] ?></td>
    </tr>
    <tr>
        <td></td>
    </tr>

    </tbody>
</table>
<button type="button" class="btn btn-outline-dark" ><a href="index.php?action=displaySnows" style="color: black">Retour</button>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
