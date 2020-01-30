<?php
/**
 * Created BY PhpStorm.
 * Title: ICT-133-RentASnow
 * USER: marwan.alhelo
 * DATE: 24.01.2020
 * Time: 14:00
 */
?>
<?php
ob_start();
$title = "RentASnow - newsnows";
?>

<h1 style="text-align: center"> Add new Snowboard</h1>
<form method="post" action="index.php?action=addnewsnow" enctype="multipart/form-data">
    <div class="form-group w-50 p-3">
        <label for="formGroupExampleInput2">name</label>
        <input type="text" class="form-control " id="formGroupExampleInput2" placeholder="name" name="name" required>
        <label for="formGroupExampleInput2">Type</label>
        <input type="text" class="form-control " id="formGroupExampleInput2" placeholder="Type"  name="Type"required>
        <label for="formGroupExampleInput2">Color</label>
        <input type="text" class="form-control " id="formGroupExampleInput2" placeholder="Color" name="Color" required>
        <label for="formGroupExampleInput2">Brand</label>
        <input type="text" class="form-control " id="formGroupExampleInput2" placeholder="Brand"  name="Brand" required>
        <label for="formGroupExampleInput2">Brand</label>
        <input type="file" class="form-control " id="formGroupExampleInput2" placeholder="Brand"  name="image" required>
        <button type="submit" class="btn btn-outline-dark">ajouter</button>

    </div>
</form>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
