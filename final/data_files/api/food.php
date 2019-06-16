<?php

include_once ("db_functions.php");


$sql = "SELECT * FROM food1 ORDER BY id";

$rs = getData($sql);

$food = array();

if($rs){

    while ($row = $rs->fetch_assoc()) {

        $food[] = $row;

    }
}



$data = json_encode($food);

echo "$data";