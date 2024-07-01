<?php

// Read products from JSON file
$jsonString = file_get_contents('json/product_category.json');

// Decode the JSON string into php array
$products_data = json_decode($jsonString, true); 

// verify json data

$product_category = [
	$products_data['building_materials'], 
	$products_data['bolts_fasteners'], 
	$products_data['hand_tools'], 
	$products_data['general_household'], 
	$products_data['welding_machinery'], 
	$products_data['safety_security'], 
	$products_data['electrical_accessories'], 
	$products_data['plumbing'], 
	$products_data['power_tools'], 
	$products_data['paint'], 
];


