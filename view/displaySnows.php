<?php
ob_start();
$title = "RentASnow - DisplaySnows";
?>


<!-- ________ NEWS _____________-->

<h1 style="text-align: center">news</h1>
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
    <?php foreach ($snows as $snow) { ?>
        <tr>
            <td rowspan="2"><?= $snow['name'] ?></td>
            <td></td>
            <td><?= $snow['Type'] ?></td>
            <td><?= $snow['Color'] ?></td>

        </tr>
    <?php } ?>
    </tbody>
</table>



<?php
$content = ob_get_clean();
require "gabarit.php";
?>
