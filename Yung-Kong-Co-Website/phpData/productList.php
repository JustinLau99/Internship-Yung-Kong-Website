<?php


// Read products from JSON file
$jsonString = file_get_contents('phpData/products.json');

// Decode the JSON string into php array
$data = json_decode($jsonString, true); 

// verify json data

$product_category = [
	$data['building_materials'], 
	$data['bolts_fasteners'], 
	$data['hand_tools'], 
	$data['general_household'], 
	$data['welding_machinery'], 
	$data['safety_security'], 
	$data['electrical_accessories'], 
	$data['plumbing'], 
	$data['power_tools'], 
	$data['paint'], 
];



?>