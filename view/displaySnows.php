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


<!-- ________ NEWS _____________-->

<h1 style="text-align: center">Products</h1>
<br>
<div class="row">
    <div class="navbar">
        <ul class="nav nav-pills">
            <!-- On commence par afficher les boutons qui s'afficheront, peu importe les événements-->
            <li><a href="index.php?action=home">Home</a></li>
            <li><a href="index.php?action=displaySnows">Snows</a></li>
            <?php
            if(isset($_SESSION['username']) == false){

                echo '<li><a href="index.php?action=login">Login</a></li>';
            }else
                echo '<li><a href="index.php?action=logout">Logout</a></li>';
            ?>

        </ul>
    </div>
</div>
<br>
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
        <tr >

            <td><button  type="button" onclick=""><a href="index.php?action=showdetails&product=<?= $snow['id']?>" style="color: azure"  >Détails</button></td>

            <?php if($snow['disponible'] == false){

                echo '<td class="align-middle "> '. date("d.m.Y", strtotime($snow['dateretour'])).'</td>' ;

            }else


             ?>

        </tr>
            <tr>
                <td><button  type="button" onclick=""><a href="index.php?action=showdetails&product=<?= $snow['id']?>" style="color: azure"  >Détails</button></td>
                <td><button  type="button" onclick=""><a href="index.php?action=showdetails&product=<?= $snow['id']?>" style="color: azure"  >Détails</button></td>

            </tr>

    <?php } ?>
    </tbody>
</table>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
