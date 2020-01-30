<?php

function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"), true);
}

function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"), true);
}

function getUsers()
{
    return json_decode(file_get_contents("model/dataStorage/users.json"), true);
}

function newsnows($id, $name, $Type, $Color, $Brand, $disponible)
{
    $snows = getSnows();
    $mysnow =
        [
            "id" => 1,
            "name" => "B101",
            "Type" => "Snowboard Freeride",
            "Color" => "brown",
            "Brand" => "Burton",
            "image" => "B101_small.jpg",
            "bigimage" => "B101.jpg",
            "description" => "Une planche de caractère : Le Nidecker Megalight possède l'une des formes les plus innovantes de l'industrie du sport. Les caractéristiques de surf équilibrées de cette planche de freeride vous convaincront, quelle que soit la pente de la montagne ou la difficulté de votre surf.",
            "dateretour" => "",
            "disponible" => true


        ];

    $snows[]=$mysnow;
    file_put_contents('snows.json', json_encode($snows));
    return $snows;
}

function removeSnow($snow_id)
{
    $snows = getSnows();
    foreach ($snows as $key => $snow) {
        if ($snow['id'] == $snow_id) {
            unset($snows[$key]);
        }
    }
    file_put_contents('snows.json', json_encode($snows));
    return $snows;
}

function addsnow($id, $name, $Type, $Color, $Brand, $disponible)
{
    $snows = getSnows();
    foreach ($snows as $key => $snow) {
        if ($snow["id"] == $id && $snow["name"] == $name && $snow["Type"] == $Type && $snow["Color"] == $Color && $snow["Brand"] == $Brand && $snow["disponible"] == $disponible) {
            $snows[] = ["id" => $id, "name" => $name, "Type" => $Type, "Color" => $Color, "Brand" => $Brand, "disponible" => true];

        }
    }
    file_put_contents('snows.json', json_encode($snows));
    return $snows;
}

?>


?>


