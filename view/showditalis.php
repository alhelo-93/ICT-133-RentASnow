<?php
/**
 *Created by ICT-133-RentASnow.
 *FILE_NAME:showditalis.php
 *USER:marwa
 *DATE:19.01.2020
 */
?>
<?php
ob_start();
$title = "RentASnow - Showditalis";
?>


<?php foreach ($products as $product) {
 $product['name'];
 die("ok");

}?>
<!-- ________ NEWS _____________-->

<h1 style="text-align: center">Products</h1>
<br>

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h1 class="display-4 "><?= "hello" ?> </h1>
        <img src="view/images/<?= $product['bigimg']?> " class="ditalissnow">
        <?=var_dump($products)?>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>#°</th>
            <th class="text-center">name</th>
            <th class="text-center">Type</th>
            <th class="text-center">Color</th>
            <th class="text-center">Brand</th>



        </tr>
        </thead>
        <tbody >

        </tbody>
    </table>
</div>




<?php
$content = ob_get_clean();
require "gabarit.php";
?>
