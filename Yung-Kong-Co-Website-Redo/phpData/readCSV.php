<?php

function readCSVData(string $filename): array 
{
	$data = [];

	if (file_exists($filename)) {
		if (($handle = fopen($filename, 'r')) !== FALSE) {
			$header = fgetcsv($handle); // Read the header

			while (($row = fgetcsv($handle)) !== FALSE) {
				$row = array_map('trim', $row); // Trim whitespace from each field
				$data[] = array_combine($header, $row);
			}
			fclose($handle);
		} else {
			throw new Exception("Could not open the file!");
		}
	} else {
		throw new Exception("The file does not exist!");
	}

	return $data;
}


