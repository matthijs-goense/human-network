<?php
//code from http://stackoverflow.com/questions/17806224/how-to-update-edit-json-file-using-php

//Get the values
$id = $_GET['id'];

//First, you need to decode it
$inp = file_get_contents('nodes.json');
$tempArray = json_decode($inp,true);

//Loop trough the array
for ($i = 0; $i < count($tempArray); ++$i) {
	if ($tempArray[$i]['id'] == $id) {
        unset($tempArray[$i]);
	}
}


//Then reencode it and save it back in the file:
$jsonData = json_encode($tempArray);
file_put_contents('nodes.json', $jsonData);

//First, you need to decode it
$edgeInp = file_get_contents('edges.json');
$tempEdgeArray = json_decode($edgeInp,true);

//Loop trough the array
for ($i = 0; $i < count($tempEdgeArray); ++$i) {
	if ($tempEdgeArray[$i]['from'] == $id || $tempEdgeArray[$i]['to'] ) {
        unset($tempEdgeArray[$i]);
	}
}


//Then reencode it and save it back in the file:
$jsonEdgeData = json_encode($tempEdgeArray);
file_put_contents('edges.json', $jsonEdgeData);

?>
