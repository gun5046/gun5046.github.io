<?php

include_once ("db_functions.php");

$status = array("status"=>false);

if($_POST){



    $a= $_POST['name'];

    $b = $_POST['price'];


    $sql = "INSERT INTO food1 (name, price) 

    VALUES ('$a', '$b')"; 

    if(saveData($sql))

        $status = array("status"=>true);

}

echo json_encode($status);