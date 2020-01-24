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

function newsnows($newsnow_color)
{
    $snows = getSnows();
    foreach ($snows as $key => $snow) {
        if ($snow['color'] == $newsnow_color) {
            $snows[$key] = $newsnow_color;
        }
    }

    file_put_contents('Snows.json');
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

function addsnow($id,$name,$Type,$Color,$Brand,$disponible)
{
    $snows = getSnows();
    foreach ($snows as $key => $snow) {
        if ($snow["id"] == $id && $snow["name"] == $name&& $snow["Type"]==$Type&&$snow["Color"] ==$Color&&$snow["Brand"]==$Brand&&$snow["disponible"]==$disponible) {
            $snows[] = ["id" => $id, "name" => $name, "Type" => $Type, "Color" => $Color,"Brand" =>$Brand , "disponible" => true];

        }
    }
    file_put_contents('snows.json', json_encode($snows));
    return $snows;
}

?>


?>


