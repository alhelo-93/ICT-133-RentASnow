<?php
ob_start();
$title = "RentASnow - DisplaySnows";
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
    <?php foreach ($snows as $snow) { ?>

        <tr class="">
            <td class="align-middle"><?= $snow['id'] ?></td>
            <td class="align-middle"><?= $snow['name'] ?></td>
            <td class="align-middle"><?= $snow['Type'] ?></td>
            <td class="align-middle"><?= $snow['Color'] ?></td>
            <td class="align-middle"><?= $snow['Brand'] ?></td>
            <td><img src="view/images/<?= $snow['image'] ?>" class="polaroid">


        </tr>
        <tr>
            <td><button  type="button" onclick=""><a href="index.php?action=showditalis&product=<?= $snow['id']?>" style="color: azure">Détailles</button></td>
            <?php if($snow['disponible'] == false) {?>
            <td colspan="2"><p class="alert alert-danger" role="alert"><?= $snow['dateretour']?> </p></td>
            <td colspan="3"> <p class="alert alert-danger" role="alert"><?= "ce n'est pas disponible" ?></p> </td>
            <?php }else{ ?>

                <td colspan="3"><p class="alert alert-success" role="alert"><?= "ce snowbord est disponible"?></p></td>


            <?php }?>
        </tr>


    <?php } ?>
    </tbody>
</table>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
