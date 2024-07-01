<?php
// Read JSON file
$jsonData = file_get_contents('json/brand_logo.json');

// Decode JSON data into a PHP array
$brand_data = json_decode($jsonData, true);

// Check if decoding was successful
if ($brand_data === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Failed to decode JSON: " . json_last_error_msg();
}

