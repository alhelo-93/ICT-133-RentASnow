<?php


function getPDO (){
    require ".const.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}



function getNews()
{
    //return json_decode(file_get_contents("model/dataStorage/news.json"), true);

        require ".const.php";

        try {
            $dbh = getPDO();
            $query = 'SELECT * FROM snows.news INNER JOIN users on user_id = users.id';
            $statment = $dbh->prepare($query);
            $statment->execute();//prepare query
            $queryResult = $statment->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
            $dbh = null;
            return $queryResult;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return null;
        }

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





