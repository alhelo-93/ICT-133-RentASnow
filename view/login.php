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
$title = "RentASnow - LOGIN";
?>

<h1> LOGIN </h1>
<form action="?action=verifylogin" method="post">

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
    </div>

</form>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>

