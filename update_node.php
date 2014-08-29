<?php
//code from http://stackoverflow.com/questions/17806224/how-to-update-edit-json-file-using-php

//Get the values
$label = $_GET['label'];
$id = $_GET['id'];

print($label);
//print($id);

//First, you need to decode it
$inp = file_get_contents('nodes.json');
$tempArray = json_decode($inp,true);

//print_r($tempArray);


for ($i = 0; $i < count($tempArray); ++$i) {

print('<br />');
		print($tempArray[$i]['label']);

	if ($tempArray[$i]['id'] == $id) {
       print $tempArray[$i]['id'];
		$tempArray[$i]['label'] = $label;
	}
	//print_r( $tempArray[$i]['id']);
}
print('<br />');

print_r($tempArray);


//Then reencode it and save it back in the file:
$jsonData = json_encode($tempArray);
file_put_contents('nodes.json', $jsonData);


/*


foreach ($tempArray as $key => $value){
	//print();
    if ($value['id'] == $id) {
    	print_r($value['label']);
    	$value['label'] = $label;
    //    $value[$key]['label'] = $label;
    }

}

//Then change the data
for ($i = 0; $i < count($tempArray); ++$i) {
	print_r( $tempArray)[$i]['id'];
}

//foreach ($tempArray as $key => $entry){
//    if ($entry['id'] == $id) {
//        $data[$key]['label'] = $label;
//    }
//}


*/
?>
