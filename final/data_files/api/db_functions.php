<?php



$host = "localhost";

$user = "root";

$pass = "";

$db = "foodapp1";


$link = @mysqli_connect($host,$user,$pass,$db);



function saveData($insertQuery){

    global $link;

    if($link){

        $link->query($insertQuery);

        return $link;

    }

    return false;

}



function getData($query){

    global $link;

    $rs = null;

    if($link){

        $rs = $link->query($query);

    }

    return $rs;

}   





function getFood($id){

    $query = "SELECT * FROM food1 WHERE id='$id'";

    global $link;

    $rs = null;

    if($link){

        $rs = $link->query($query);

    }

    $row = null;

    if($rs) 

        $row = $rs->fetch_assoc();

    return $row;

}

