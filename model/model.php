<?php

function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}
function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"),true);
}
function getUsers()
{
    return json_decode(file_get_contents("model/dataStorage/users.json"),true);
}

function newsnows()
{

    return file_put_contents('Snows.json');
}
function removeSnow($snow_id)
{
    $snows = getSnows();
    foreach ($snows as $key => $snow){
        if($snow['id'] == $snow_id ){
            unset($snows[$key]);
        }
    }
    file_put_contents('snows.json', json_encode($snows));
    return $snows;
}
?>
