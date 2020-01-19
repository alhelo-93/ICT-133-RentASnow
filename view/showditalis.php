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


<!-- ________ NEWS _____________-->

<h1 style="text-align: center">Products</h1>
<br>
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


        <tr class="">
            <td class="align-middle click"></td>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
            <td class="align-middle"></td>
            <td><img src="view/images/" class="polaroid">


        </tr>
        <tr>
            <td><button  type="button" onclick=""><a href="index.php?action=showditalis" style="color: azure">Détailles</button></td>
        </tr>



    </tbody>
</table>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
