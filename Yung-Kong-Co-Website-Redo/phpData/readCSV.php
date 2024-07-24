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



function buildNestedArray(array $stockItemTypeListing, array $productCategory): array
{
	// Create an empty array for the nested structure
	$result = [];

	// Build the itemTypeMap from the productCategory data
	$itemTypeMap = [];
	foreach ($productCategory as $category) {
		$itemType = $category['Item Type'];
		if (!isset($itemTypeMap[$itemType])) {
			$itemTypeMap[$itemType] = [];
		}
		$itemTypeMap[$itemType][] = [
			'Item Group' => $category['Item Group'],
			'Description' => $category['Description']
		];
	}

	// Build the final nested array structure
	foreach ($stockItemTypeListing as $itemTypeData) {
		$itemType = $itemTypeData['Item Type'];
		$subCategoryString = $itemTypeData['SubCategory'];
		// Use str_getcsv to handle quotes and embedded commas
		$subCategory = str_getcsv($subCategoryString);
		$subCategory = array_map('trim', $subCategory); // Trim each subcategory

		$result[$itemType] = [
			'Description' => $itemTypeData['Description'],
			'Image Path' => $itemTypeData['Image Path'],
			'SubCategory' => $subCategory,
			'Category' => $itemTypeMap[$itemType] ?? [] // Use empty array if no categories exist for this item type
		];
	}

	return $result;
}




function debugExtractedCSV($extracted)
{
	foreach ($extracted as $key => $extract) {
		echo "<br>Item Type: " . htmlspecialchars($key);
		echo "<br>Description: " . htmlspecialchars($extract['Description']);
		echo "<br>Image Path: " . htmlspecialchars($extract['Image Path']);
		echo "<br>Categories:";
		foreach ($extract['SubCategory'] as $subcategory) {
			echo "- " . htmlspecialchars($subcategory) . "<br>";
		}

		echo "<br>Categories:";
		foreach ($extract['Category'] as $category) {
			echo "<br>- Item Group: " . htmlspecialchars($category['Item Group']) . "----";
			echo "  Description: " . htmlspecialchars($category['Description']);
		}
		echo "<br>";
	}

}

