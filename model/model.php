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

function newsnow( $name, $Type, $Color, $Brand, $imageName)
{
    $snows = getSnows();
    // generate ID
    foreach ($snows as $snow){
        $id = $snow['id'];
    }
    $id++;
    $mysnow =
        [
            'id'=> $id,
            "name" => $name,
            "Type" => $Type,
            "Color" => $Color,
            "Brand" => $Brand,
            'image' => $imageName

        ];

    $snows[] = $mysnow;
    file_put_contents('model/dataStorage/snows.json', json_encode($snows));
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
    file_put_contents('model/dataStorage/snows.json', json_encode($snows));
    return $snows;
}



?>





