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
            <?php if(($_SESSION["username"] ) == true){ ?>
            <td class="align-middle"><input type="text" name="FirstName" value="<?= $snow['Color'] ?>"></td>
            <?php }?>
            <td class="align-middle"><?= $snow['Brand'] ?></td>
            <td><img src="view/images/<?= $snow['image'] ?>" class="polaroid">
        </tr>
        <tr>
            <td><button  type="button"><a href="index.php?action=showdetails&product=<?= $snow['id']?>" style="color: azure"  >Détails</button>
            </td>
            <?php if(($_SESSION["username"]) == true){ ?>
            <td><button  type="button"><a href="index.php?action=deleteitem&product=<?= $snow['id']?>" style="color: azure"  >Supprimer</button>

           <?php }?>

            </td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php if($snow['disponible'] == false){
                echo '<td class="align-middle alert alert-danger h-25  d-inline-block float-right">'." Ce n'est disponible "."</td>" ;
            }else
                echo '<td class="align-middle alert alert-success h-25 d-inline-block">'." C'est disponible "."</td>" ;
            ?>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php if(isset($_SESSION["username"])){
    echo '<th class="text-center"><button  type="button" onclick=""><a href="index.php?action=newsnow" style="color: azure" >Ajouter</button></th>';
}
?>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>
