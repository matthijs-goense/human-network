<?php
//code from http://stackoverflow.com/questions/7895335/append-data-to-a-json-file-with-php

$inp = file_get_contents('nodes.json');
$tempArray = json_decode($inp);
$last_id = count($tempArray) - 1;
$label = $_GET['label'];
$node = array('id'=> $tempArray[$last_id]->id + 1 , 'label'=> $label);


array_push($tempArray, $node);
$jsonData = json_encode($tempArray);
file_put_contents('nodes.json', $jsonData);

/*
$fp = fopen('nodes.json', 'a') or die("Unable to open file!");
print($fp);
fwrite($fp, json_encode($node));
fclose($fp);

print_r($node);
*/
?>
