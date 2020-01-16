<?php
/**
 * Created BY PhpStorm.
 * Title: ICT-133-RentASnow
 * USER: Marwan.ALHELO
 * DATE: 16.01.2020
 * Time: 11:44
 */
$tab = json_decode(file_get_contents(filname ), true); // lire
var_dump($tab);
$tab[3]['modele']='New K067'; // update
unset($tab[7]); // delete
$tab[]=["id" => 11 ,"modele" => "carrel", "marque" => "cpnv","bigimage" => "B101.jep",]

   ?>
