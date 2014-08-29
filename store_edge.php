<?php
//code from http://stackoverflow.com/questions/7895335/append-data-to-a-json-file-with-php

$inp = file_get_contents('edges.json');

$tempArray = json_decode($inp);
$last_id = count($tempArray) - 1;
//print($last_id);
$from = $_GET['from'];
$to = $_GET['to'];
$edge = array('id'=> $tempArray[$last_id]->id + 1 , 'from'=> $from, 'to'=> $to);


array_push($tempArray, $edge);
//print_r($tempArray);
$jsonData = json_encode($tempArray);

file_put_contents('edges.json', $jsonData);

/*
$fp = fopen('nodes.json', 'a') or die("Unable to open file!");
print($fp);
fwrite($fp, json_encode($node));
fclose($fp);

print_r($node);
*/
?>
