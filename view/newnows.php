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
<form >
    <div class="form-group w-50 p-3">
        <label for="formGroupExampleInput">Numéro</label>
        <input type="number" min="1" class="form-control " id="formGroupExampleInput" placeholder="numéro" required>
        <label for="formGroupExampleInput2">name</label>
        <input type="text" class="form-control " id="formGroupExampleInput2" placeholder="name" required>
        <label for="formGroupExampleInput2">Type</label>
        <input type="text" class="form-control " id="formGroupExampleInput2" placeholder="Type" required>
        <label for="formGroupExampleInput2">Color</label>
        <input type="text" class="form-control " id="formGroupExampleInput2" placeholder="Color" required>
        <label for="formGroupExampleInput2">Brand</label>
        <input type="text" class="form-control " id="formGroupExampleInput2" placeholder="Brand" required>
        <label for="formGroupExampleInput2">dateretour</label>
        <input type="date" class="form-control " id="formGroupExampleInput2" placeholder="dateretour" required>
        <label for="formGroupExampleInput2">disponible</label>
        <input type="checkbox" class="form-control " id="formGroupExampleInput2" placeholder="disponible" required>
        <button type="submit" class="btn btn-outline-dark">ajouter</button>

    </div>
</form>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
