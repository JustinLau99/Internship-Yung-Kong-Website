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
			'SubCategories' => $subCategory, // Ensure SubCategory is an array of strings
			'Category' => $itemTypeMap[$itemType] ?? [] // Use empty array if no categories exist for this item type
		];
	}

	return $result;
}

// Parse CSV data to PHP
$stockItemTypeListing = readCSVData("phpData/stock_item_type_listing.csv");
$productCategory = readCSVData("phpData/product_category.csv");

// Build the nested array structure
$productListing = buildNestedArray($stockItemTypeListing, $productCategory);


// foreach ($productListing as $key => $value) {
// 	echo "Item Type: " . htmlspecialchars($key) . "----";
// 	echo "Description: " . htmlspecialchars($value['Description']) . "----";
// 	echo "Image Path: " . htmlspecialchars($value['Image Path']) . "----";
// 	echo "<br>Categories:";
// 	foreach ($value['SubCategories'] as $subcategory) {
//         echo "- " . htmlspecialchars($subcategory) . "<br>";
//     }
// 	echo "<br>Categories:";
// 	foreach ($value['Category'] as $category) {
// 		echo "<br>- Item Group: " . htmlspecialchars($category['Item Group']) . "----";
// 		echo "  Description: " . htmlspecialchars($category['Description']);
// 	}
// 	echo "<br>";
// }













// each category key value
const IMG = 'img';
const TITLE = 'title';
const SUBCATEGORY = 'subCategory';
const PROD = 'prod';
const PRODUCT_IMG_PATH = 'img_path';
const DESC = 'description';


const PRODUCT_CATEGORY = [
	[
		TITLE => "Building Materials",
		IMG => "building_materials_category.jpg",
		PRODUCT_IMG_PATH => '/building_materials/',
		SUBCATEGORY => [
			"Cement",
			"Steel Bar",
			"Plywoods",
			"Roofing Sheet",
			"Wire Mesh",
		],
		PROD => [ // [0]
			[TITLE => 'ANGLE IRON BAR', IMG => 'angle_iron_bar.jpg', DESC => '[angle_iron_bar - description]',],
			[TITLE => 'ASTEEL ROOFING PRODUCT', IMG => 'asteel_roofing_product.jpg', DESC => '[asteel_roofing_product - description]',],
			[TITLE => 'BLACK PIPE', IMG => 'black_pipe.jpg', DESC => '[black_pipe - description]',],
			[TITLE => 'BRICK', IMG => 'brick.jpg', DESC => '[brick - description]',],
			[TITLE => 'CAPPING, FLASHING, GUTTER', IMG => 'capping_flashing_gutter.jpg', DESC => '[capping_flashing_gutter - description]',],
			[TITLE => 'CEMENT', IMG => 'cement.jpg', DESC => '[cement - description]',],
			[TITLE => 'CHROME, STEEL, COPPER TUBE', IMG => 'chrome_steel_copper_tube.jpg', DESC => '[chrome_steel_copper_tube - description]',],
			[TITLE => 'CL FENCE & BARBED WIRE', IMG => 'cl_fence_barbed_wire.jpg', DESC => '[cl_fence_barbed_wire - description]',],
			[TITLE => 'DOOR FRAME', IMG => 'door_frame.jpg', DESC => '[door_frame - description]',],
			[TITLE => 'DQ', IMG => 'dq.jpg', DESC => '[dq - description]',],
			[TITLE => 'G.I. PIPE', IMG => 'gabion.jpg', DESC => '[gabion - description]',],
			[TITLE => 'GABION', IMG => 'gi_grill_wire_mesh.jpg', DESC => '[gi_grill_wire_mesh - description]',],
			[TITLE => 'GI & PVC, HARD DRAWN WIRE', IMG => 'gi_pipe.jpg', DESC => '[gi_pipe - description]',],
			[TITLE => 'GI GRILL, WIRE MESH', IMG => 'gi_ppgi_pain_sheet.jpg', DESC => '[gi_ppgi_pain_sheet - description]',],
			[TITLE => 'GI, PPGI, PLAIN SHEET', IMG => 'gi_pvc_hand_drawn_wire.jpg', DESC => '[gi_pvc_hand_drawn_wire - description]',],
			[TITLE => 'GYPSUM BOARD', IMG => 'gypsum_board.jpg', DESC => '[gypsum_board - description]',],
			[TITLE => 'HDPE PIPE', IMG => 'hdpe_pipe.jpg', DESC => '[hdpe_pipe - description]',],
			[TITLE => 'HEXAGONAL WIRE NETTING', IMG => 'hexagonal_wire_netting.jpg', DESC => '[hexagonal_wire_netting - description]',],
			[TITLE => 'HOLLOW SECTION', IMG => 'hollow_section.jpg', DESC => '[hollow_section - description]',],
			[TITLE => 'I-BEAM', IMG => 'i_beam.jpg', DESC => '[i_beam - description]',],
			[TITLE => 'INSULATION', IMG => 'insulation.jpg', DESC => '[insulation - description]',],
			[TITLE => 'M.S FLAT, SQUARE BAR, IRON GATE', IMG => 'ms_flat_square_bar_iron_gate.jpg', DESC => '[ms_flat_square_bar_iron_gate - description]',],
			[TITLE => 'M.S PLAIN PLATE', IMG => 'ms_plain_plate.jpg', DESC => '[ms_plain_plate - description]',],
			[TITLE => 'NETTING & MESH - MOSQUITO, G.I COATED', IMG => 'netting_mesh_mosquitto_gi_coated.jpg', DESC => '[netting_mesh_mosquitto_gi_coated - description]',],
			[TITLE => 'PLYWOOD', IMG => 'plywood.jpg', DESC => '[plywood - description]',],
			[TITLE => 'PRIMAFLEX SHEET', IMG => 'primaflex_sheet.jpg', DESC => '[primaflex_sheet - description]',],
			[TITLE => 'PURLIN PRODUCTION', IMG => 'purlin_production.jpg', DESC => '[purlin_production - description]',],
			[TITLE => 'PVC PIPE', IMG => 'pvc_pipe.jpg', DESC => '[pvc_pipe - description]',],
			[TITLE => 'ROOFING ACCESSORIES', IMG => 'roofing_accessories.jpg', DESC => '[roofing_accessories - description]',],
			[TITLE => 'ROOFING PRODUCTION', IMG => 'roofing_production.jpg', DESC => '[roofing_production - description]',],
			[TITLE => 'ROOFING-CORRUGATED, TRANSPARENT & RIDGES', IMG => 'roofing_corrugated_transparent_ridges.jpg', DESC => '[roofing_corrugated_transparent_ridges - description]',],
			[TITLE => 'STEEL BAR', IMG => 'steel_bar.jpg', DESC => '[steel_bar - description]',],
			[TITLE => 'TRUSS, PURLIN, U-PARTITION', IMG => 'truss_purlin_u_partition.jpg', DESC => '[truss_purlin_u_partition - description]',],
			[TITLE => 'U-CHANNEL', IMG => 'u_channel.jpg', DESC => '[u_channel - description]',],
			[TITLE => 'UPVC PIPE', IMG => 'upvc_pipe.jpg', DESC => '[upvc_pipe - description]',],
			[TITLE => 'VERSATILE FENCE, FITTING', IMG => 'versatile_fence_fitting.jpg', DESC => '[versatile_fence_fitting - description]',],
			[TITLE => 'WOOD', IMG => 'wood.jpg', DESC => '[wood - description]',],
			[TITLE => 'YH LAMINATED PRODUCTS', IMG => 'yh_laminated_products.jpg', DESC => '[yh_laminated_products - description]',],
			[TITLE => 'YKWI BAR CUT & BEND', IMG => 'ykwi_bar_cut_bend.jpg', DESC => '[ykwi_bar_cut_bend - description]',],
			[TITLE => 'YKWI PRODUCT SPECIAL ORDER', IMG => 'ykwi_product_special_order.jpg', DESC => '[ykwi_product_special_order - description]',],
			[TITLE => 'YMC', IMG => 'ymc.jpg', DESC => '[ymc - description]',],
			[TITLE => 'YRC', IMG => 'yrc.jpg', DESC => '[yrc - description]',],
			[TITLE => 'YUNCO PRODUCT SPECIAL ORDER', IMG => 'yunco_product_special_order.jpg', DESC => '[yunco_product_special_order - description]',],
		],
	],
	##########################################################	
	[
		TITLE => "Bolts & Fasteners",
		IMG => "bolts_fasteners_category.jpg",
		PRODUCT_IMG_PATH => '/bolts_fasteners/',
		SUBCATEGORY => [
			"Nails",
			"Hooks",
			"Rivets",
			"Screws",
			"Washers",
			"Bolts & Nut",
		],
		PROD => [ // [1]
			[TITLE => 'ALUMINIUM RIVET - PATTA, OTHERS', IMG => 'aluminium_rivet_patta_others.jpg', DESC => '[aluminium_rivet_patta_others - description]',],
			[TITLE => 'BOLT & NUT', IMG => 'bolt_nut.jpg', DESC => '[bolt_nut - description]',],
			[TITLE => 'BOLT & NUT - UNC,S/STEEL,BRASS & OTHERS', IMG => 'bolt_nut_unc_s_steel_brass_others.jpg', DESC => '[bolt_nut_unc_s_steel_brass_others - description]',],
			[TITLE => 'CONCRETE NAIL', IMG => 'concrete_nail.jpg', DESC => '[concrete_nail - description]',],
			[TITLE => 'JAGUAR IRON NAIL', IMG => 'jaguar_iron_nail.jpg', DESC => '[jaguar_iron_nail - description]',],
			[TITLE => 'LAZOR BOLTS & FASTENERS', IMG => 'lazor_bolts_fasteners.jpg', DESC => '[lazor_bolts_fasteners - description]',],
			[TITLE => 'NAIL - COIL, ROOFING & OTHER', IMG => 'nail_coil_roofing_other.jpg', DESC => '[nail_coil_roofing_other - description]',],
			[TITLE => 'NUTS, BOLT & ZP BOLT & NUT', IMG => 'nuts_bolt_zp_bolt_nut.jpg', DESC => '[nuts_bolt_zp_bolt_nut - description]',],
			[TITLE => 'POINTED SCREW', IMG => 'pointed_screw.jpg', DESC => '[pointed_screw - description]',],
			[TITLE => 'RAW & WALL PLUG', IMG => 'raw_wall_plug.jpg', DESC => '[raw_wall_plug - description]',],
			[TITLE => 'SCREW - BSW SOCKET & CSK MACHINE', IMG => 'screw_bsw_socket_csk_machine.jpg', DESC => '[screw_bsw_socket_csk_machine - description]',],
			[TITLE => 'SELF DRILLING SCREW', IMG => 'self_drilling_screw.jpg', DESC => '[self_drilling_screw - description]',],
			[TITLE => 'STUD BOLT - MS, ZP, S/S 304', IMG => 'stud_bolt_ms_zp_s_s_304.jpg', DESC => '[stud_bolt_ms_zp_s_s_304 - description]',],
			[TITLE => 'WASHER-MS,S/S,BRASS,HDG,FIBRE & SPRING', IMG => 'washer_ms_s_s_brass_hdg_fibre_spring.jpg', DESC => '[washer_ms_s_s_brass_hdg_fibre_spring - description]',],
		],
	],
	##########################################################
	[
		TITLE => "Hand Tools",
		IMG => "hand_tools_category.jpg",
		PRODUCT_IMG_PATH => '/hand_tools/',
		SUBCATEGORY => [
			"Mechanical Tools",
			"Crimping Tools",
			"Cutting Tools",
			"Holding Tools",
			"Fastening Tools",
			"Stapling Tools",
			"Striking & Struck Tools",
			"Measuring Tools",
		],
		PROD => [ // [2]
			[TITLE => 'AKODA PRODUCTS', IMG => 'akoda_products.jpg', DESC => '[akoda_products - description]',],
			[TITLE => 'BOLT CUTTER, FILE, KNIFE', IMG => 'bolt_cutter_file_knife.jpg', DESC => '[bolt_cutter_file_knife - description]',],
			[TITLE => 'ELORA, SOUTHEN GRACE, WING POH, WYNN`S', IMG => 'elora_southen_grace_wing_poh_wynns.jpg', DESC => '[elora_southen_grace_wing_poh_wynns - description]',],
			[TITLE => 'GARDEN TOOLS - SHOVEL & HOES', IMG => 'garden_tools_shovel_hoes.jpg', DESC => '[garden_tools_shovel_hoes - description]',],
			[TITLE => 'GRINDING DISC, CUTTING WHEELS, DRILL BIT', IMG => 'grinding_disc_cutting_wheels_drill_bit.jpg', DESC => '[grinding_disc_cutting_wheels_drill_bit - description]',],
			[TITLE => 'HELLO PRODUCTS', IMG => 'hello_products.jpg', DESC => '[hello_products - description]',],
			[TITLE => 'HOLDING TOOLS', IMG => 'holding_tools.jpg', DESC => '[holding_tools - description]',],
			[TITLE => 'IRWIN & LENOX ACCESSORIES', IMG => 'irwin_hand_tools.jpg', DESC => '[irwin_hand_tools - description]',],
			[TITLE => 'IRWIN & LENOX DISCONTINUE', IMG => 'irwin_lenox_accessories.jpg', DESC => '[irwin_lenox_accessories - description]',],
			[TITLE => 'IRWIN HAND TOOLS', IMG => 'irwin_lenox_discontinue.jpg', DESC => '[irwin_lenox_discontinue - description]',],
			[TITLE => 'LAZOR Painting TOOLS', IMG => 'lazor_painting_tools.jpg', DESC => '[lazor_painting_tools - description]',],
			[TITLE => 'LETTER BOX & NUMBERING', IMG => 'letter_box_numbering.jpg', DESC => '[letter_box_numbering - description]',],
			[TITLE => 'MEASURING TAPE & MARKING TOOLS', IMG => 'measuring_tape_marking_tools.jpg', DESC => '[measuring_tape_marking_tools - description]',],
			[TITLE => 'MECHANIC TOOLS', IMG => 'mechanical_tools.jpg', DESC => '[mechanical_tools - description]',],
			[TITLE => 'NIPPLE, GREASE GUN, OIL CAN', IMG => 'nipple_grease_gun_oil_can.jpg', DESC => '[nipple_grease_gun_oil_can - description]',],
			[TITLE => 'PACKING TOOL & TOOL BOX', IMG => 'packing_tool_tool_box.jpg', DESC => '[packing_tool_tool_box - description]',],
			[TITLE => 'Painting TOOLS', IMG => 'painting_tools.jpg', DESC => '[painting_tools - description]',],
			[TITLE => 'STANLEY AUTOCARE', IMG => 'stanley_autocare.jpg', DESC => '[stanley_autocare - description]',],
			[TITLE => 'STANLEY DISCONTINUE', IMG => 'stanley_discontinue.jpg', DESC => '[stanley_discontinue - description]',],
			[TITLE => 'STANLEY HAND TOOLS', IMG => 'stanley_hand_tools.jpg', DESC => '[stanley_hand_tools - description]',],
			[TITLE => 'STANLEY MECHANIC TOOLS', IMG => 'stanley_mechanic_tools.jpg', DESC => '[stanley_mechanic_tools - description]',],
			[TITLE => 'STRIKING & STRUCK TOOLS', IMG => 'striking_struck_tools.jpg', DESC => '[striking_struck_tools - description]',],
			[TITLE => 'TEKIRO PRODUCTS', IMG => 'tekiro_products.jpg', DESC => '[tekiro_products - description]',],
		],
	],
	##########################################################
	[
		TITLE => "General & Household",
		IMG => "general_household_category.jpg",
		PRODUCT_IMG_PATH => '/general_household/',
		SUBCATEGORY => [
			"Rachet Brace",
			"Wheel Spanner",
			"Utility Knife Set",
			"Hex Key Set",
			"Ladder",
			"G Clamps",
			"Others",
		],
		PROD => [ // [3]
			[TITLE => 'A5 J.I.T GENERAL GOODS', IMG => 'a5_jit_general_goods.jpg', DESC => '[a5_jit_general_goods - description]',],
			[TITLE => 'ASTERI LADDER', IMG => 'asteri_ladder.jpg', DESC => '[asteri_ladder - description]',],
			[TITLE => 'CLEANING TOOLS', IMG => 'cleaning_tools.jpg', DESC => '[cleaning_tools - description]',],
			[TITLE => 'CURTAIN ACCESSORIES', IMG => 'curtain_accessories.jpg', DESC => '[curtain_accessories - description]',],
			[TITLE => 'DAVCO', IMG => 'davco.jpg', DESC => '[davco - description]',],
			[TITLE => 'DEVON', IMG => 'devon.jpg', DESC => '[devon - description]',],
			[TITLE => 'FLEXIBLE HOSE', IMG => 'flexible_hose.jpg', DESC => '[flexible_hose - description]',],
			[TITLE => 'HARDEX', IMG => 'hardex.jpg', DESC => '[hardex - description]',],
			[TITLE => 'HOOK,C PIN,SHELF & L BRACKET & SIMILARTY', IMG => 'hook_c_pin_shelf_l_bracket_similarty.jpg', DESC => '[hook_c_pin_shelf_l_bracket_similarty - description]',],
			[TITLE => 'HOSE', IMG => 'hose.jpg', DESC => '[hose - description]',],
			[TITLE => 'HOSE ACCESORIES', IMG => 'hose_accessories.jpg', DESC => '[hose_accessories - description]',],
			[TITLE => 'HOSE CLIP', IMG => 'hose_clip.jpg', DESC => '[hose_clip - description]',],
			[TITLE => 'IKEA PRODUCTS', IMG => 'ikea_products.jpg', DESC => '[ikea_products - description]',],
			[TITLE => 'KOYA PRODUCTS', IMG => 'koya_products.jpg', DESC => '[koya_products - description]',],
			[TITLE => 'L.F HOUSEHOLD PRODUCTS', IMG => 'ladder.jpg', DESC => '[ladder - description]',],
			[TITLE => 'LADDER', IMG => 'ladder_production.jpg', DESC => '[ladder_production - description]',],
			[TITLE => 'LADDER PRODUCTION', IMG => 'lazor_general_tools.jpg', DESC => '[lazor_general_tools - description]',],
			[TITLE => 'LAZOR GENERAL TOOLS', IMG => 'lazor_ladder.jpg', DESC => '[lazor_ladder - description]',],
			[TITLE => 'LAZOR LADDER', IMG => 'lf_householdProducts.jpg', DESC => '[lf_householdProducts - description]',],
			[TITLE => 'MIX', IMG => 'mix.jpg', DESC => '[mix - description]',],
			[TITLE => 'OFFER ITEM', IMG => 'offer_item.jpg', DESC => '[offer_item - description]',],
			[TITLE => 'RACK', IMG => 'rack.jpg', DESC => '[rack - description]',],
			[TITLE => 'REXCO', IMG => 'rexco.jpg', DESC => '[rexco - description]',],
			[TITLE => 'RUBBER MOUNTING', IMG => 'rubber_mounting.jpg', DESC => '[rubber_mounting - description]',],
			[TITLE => 'SCP', IMG => 'scp.jpg', DESC => '[scp - description]',],
			[TITLE => 'SELLEYS', IMG => 'selleys.jpg', DESC => '[selleys - description]',],
			[TITLE => 'SIKA', IMG => 'sika.jpg', DESC => '[sika - description]',],
			[TITLE => 'STATIONERY', IMG => 'stationery.jpg', DESC => '[stationery - description]',],
			[TITLE => 'TRANSP, J.I.T, SERV, DIS, UNDERBILL', IMG => 'transp_jit_serv_dis_underbill.jpg', DESC => '[transp_jit_serv_dis_underbill - description]',],
			[TITLE => 'WD-40', IMG => 'wd_40.jpg', DESC => '[wd_40 - description]',],
			[TITLE => 'WHEEL BARROW & TROLLEY', IMG => 'wheel_barrow_trolley.jpg', DESC => '[wheel_barrow_trolley - description]',],
			[TITLE => 'WHEELS', IMG => 'wheels.jpg', DESC => '[wheels - description]',],
			[TITLE => 'YKTF PRODUCTS', IMG => 'yktf_products.jpg', DESC => '[yktf_products - description]',],
			[TITLE => 'GASKET, RUBBER SHEET & SIMILARTY', IMG => 'gasket_rubber_sheet_similarty.jpg', DESC => '[gasket_rubber_sheet_similarty - description]',],
			[TITLE => 'PLASTIC SHEETS', IMG => 'plastic_sheets.jpg', DESC => '[plastic_sheets - description]',],
			[TITLE => 'HANDLE', IMG => 'handle.jpg', DESC => '[handle - description]',],
			[TITLE => 'HINGES', IMG => 'hinges.jpg', DESC => '[hinges - description]',],
			[TITLE => 'JACK, CHAIN BLK & ACCESSORIES', IMG => 'jack_chain_blk_accessories.jpg', DESC => '[jack_chain_blk_accessories - description]',],
			[TITLE => 'LOUVRES, DOORS & ACCESSORIES', IMG => 'louvres_doors_accessories.jpg', DESC => '[louvres_doors_accessories - description]',],
			[TITLE => 'ROPE & CHAIN', IMG => 'rope_chain.jpg', DESC => '[rope_chain - description]',],
			[TITLE => 'SAND PAPER', IMG => 'sand_paper.jpg', DESC => '[sand_paper - description]',],
			[TITLE => 'SCAFFOLDING & ACCESSORIES', IMG => 'scaffolding_accessories.jpg', DESC => '[scaffolding_accessories - description]',],
			[TITLE => 'TOWER BOLTS', IMG => 'tower_bolts.jpg', DESC => '[tower_bolts - description]',],
		],
	],
	##########################################################
	[
		TITLE => "Welding & Machinery",
		IMG => "welding_machinery_category.jpg",
		PRODUCT_IMG_PATH => '/welding_machinery/',
		SUBCATEGORY => [
			"PERIPHERAL PUMPS",
			"WELDING MACHINE",
			"HIGH PRESSURE REGULATOR",
			"GENERATOR",
			"WATER PUMP",
			"CENTRIGUGAL PUMP",
		],
		PROD => [ // [4]
			[TITLE => 'BEARING', IMG => 'bearing.jpg', DESC => '[bearing - description]',],
			[TITLE => 'HARRY PRODUCTS', IMG => 'harry_products.jpg', DESC => '[harry_products - description]',],
			[TITLE => 'WELDING ROD & ACCESPRIES', IMG => 'welding_rod_accespries.jpg', DESC => '[welding_rod_accespries - description]',],
			[TITLE => 'WALRUS PRODUCTS', IMG => 'walrus_products.jpg', DESC => '[walrus_products - description]',],
			[TITLE => 'PERIPHERAL PUMPS', IMG => 'periheral_pump.jpg', DESC => '[periheral_pump - description]',],
			[TITLE => 'WELDING MACHINE', IMG => 'welding_machine.jpg', DESC => '[welding_machine - description]',],
			[TITLE => 'HIGH PRESSURE REGULATOR', IMG => 'high_pressure_regulator.jpg', DESC => '[high_pressure_regulator - description]',],
			[TITLE => 'GENERATOR', IMG => 'generator.jpg', DESC => '[generator - description]',],
			[TITLE => 'WATER PUMP', IMG => 'water_pump.jpg', DESC => '[water_pump - description]',],
			[TITLE => 'CENTRIFUGAL PUMP', IMG => 'centrifugal_pump.jpg', DESC => '[centrifugal_pump - description]',],
		],
	],
	##########################################################
	[
		TITLE => "Safety & Security",
		IMG => "safety_security_category.jpg",
		PRODUCT_IMG_PATH => '/safety_security/',
		SUBCATEGORY => [
			"Safety Shoes, Glove, Mask & Helmet",
			"Rain Coat Jacket, Welding Jacket",
		],
		PROD => [ // [5]
			[TITLE => '3M PRODUCTS', IMG => '3m_products.jpg', DESC => '[3m_products - description]',],
			[TITLE => 'ABUS', IMG => 'abus.jpg', DESC => '[abus - description]',],
			[TITLE => 'AMAN / VIRO', IMG => 'aman_viro.jpg', DESC => '[aman_viro - description]',],
			[TITLE => 'BUICK', IMG => 'buick.jpg', DESC => '[buick - description]',],
			[TITLE => 'LAZOR HAND GLOVE', IMG => 'lazor_hand_glove.jpg', DESC => '[lazor_hand_glove - description]',],
			[TITLE => 'LAZOR LOCK', IMG => 'lazor_lock.jpg', DESC => '[lazor_lock - description]',],
			[TITLE => 'MIX LOCKS', IMG => 'mix_locks.jpg', DESC => '[mix_locks - description]',],
			[TITLE => 'SAFETY EQUIPMENTS', IMG => 'safety_equipments.jpg', DESC => '[safety_equipments - description]',],
			[TITLE => 'SAFETY SHOES', IMG => 'safety_shoes.jpg', DESC => '[safety_shoes - description]',],
			[TITLE => 'SOLEX', IMG => 'solex.jpg', DESC => '[solex - description]',],
			[TITLE => 'STANLEY LOCK', IMG => 'stanley_lock.jpg', DESC => '[stanley_lock - description]',],
			[TITLE => 'STANLEY PADLOCK DISCONTINUE', IMG => 'stanley_padlock_discontinue.jpg', DESC => '[stanley_padlock_discontinue - description]',],
			[TITLE => 'TRI-CIRCLE', IMG => 'tri_circle.jpg', DESC => '[tri_circle - description]',],
			[TITLE => 'YALE', IMG => 'yale.jpg', DESC => '[yale - description]',],
		],
	],
	##########################################################
	[
		TITLE => "Electrical Accessories",
		IMG => "electrical_accessories_category.jpg",
		PRODUCT_IMG_PATH => '/electrical_accessories/',
		SUBCATEGORY => [
			"Wire & Accessories",
			"Extensions & Adaptors",
			"Plug & Sockets",
			"Bulbs & Downlight",
			"Tube & Tube Fitting",
			"Accessories",
		],
		PROD => [ // [6]
			[TITLE => 'BATTERY', IMG => 'battery.jpg', DESC => '[battery - description]',],
			[TITLE => 'ECOLINK PRODUCTS', IMG => 'ecolink_products.jpg', DESC => '[ecolink_products - description]',],
			[TITLE => 'ELECTRICAL ACCESSORIES', IMG => 'electrical_accessories.jpg', DESC => '[electrical_accessories - description]',],
			[TITLE => 'FABER PRODUCTS', IMG => 'faber_products.jpg', DESC => '[faber_products - description]',],
			[TITLE => 'KHIND PRODUCT', IMG => 'khind_product.jpg', DESC => '[khind_product - description]',],
			[TITLE => 'LITE ME PRODUCTS', IMG => 'lite_me_products.jpg', DESC => '[lite_me_products - description]',],
			[TITLE => 'NICRON PRODUCTS', IMG => 'nicron_products.jpg', DESC => '[nicron_products - description]',],
			[TITLE => 'PHILIPS', IMG => 'philips.jpg', DESC => '[philips - description]',],
			[TITLE => 'PHILIPS DISCONTINUE', IMG => 'philips_discontinue.jpg', DESC => '[philips_discontinue - description]',],
			[TITLE => 'SENCO PRODUCTS', IMG => 'senco_products.jpg', DESC => '[senco_products - description]',],
		],
	],
	##########################################################
	[
		TITLE => "Plumbing",
		IMG => "plumbing_category.jpg",
		PRODUCT_IMG_PATH => '/plumbing/',
		SUBCATEGORY => [
			"Valve & Fitting",
			"Taps & Accessories",
			"Shower Set & Accessories",
			"Bathroom & Accessories",
			"Sink & Accessories",
			"Basin & Accessories",
		],
		PROD => [ // [7]
			[TITLE => 'DOCASA SANITARYWARE', IMG => 'docasa_sanitaryware.jpg', DESC => '[docasa_sanitaryware - description]',],
			[TITLE => 'KHE ACCESSORIES', IMG => 'khe_accessories.jpg', DESC => '[khe_accessories - description]',],
			[TITLE => 'KHE CERAMIC', IMG => 'khe_ceramic.jpg', DESC => '[khe_ceramic - description]',],
			[TITLE => 'KHE DISCONTINUE', IMG => 'khe_discontinue.jpg', DESC => '[khe_discontinue - description]',],
			[TITLE => 'KHE RACKING', IMG => 'khe_rack.jpg', DESC => '[khe_rack - description]',],
			[TITLE => 'KHE SINK', IMG => 'khe_sink.jpg', DESC => '[khe_sink - description]',],
			[TITLE => 'KHE TAP', IMG => 'khe_tap.jpg', DESC => '[khe_tap - description]',],
			[TITLE => 'MILANO PRODUCT', IMG => 'milano_product.jpg', DESC => '[milano_product - description]',],
			[TITLE => 'PIPE FITTING - BRASS, S/STEEL & COPPER', IMG => 'pipe_fitting_brass_s_steel_copper.jpg', DESC => '[pipe_fitting_brass_s_steel_copper - description]',],
			[TITLE => 'PIPE FITTING - POLYPIPE', IMG => 'pipe_fitting_gi.jpg', DESC => '[pipe_fitting_gi - description]',],
			[TITLE => 'PIPE FITTING - PVC & U-PVC', IMG => 'pipe_fitting_polypipe.jpg', DESC => '[pipe_fitting_polypipe - description]',],
			[TITLE => 'PIPE FITTING -G.I', IMG => 'pipe_fitting_pvc_u_pvc.jpg', DESC => '[pipe_fitting_pvc_u_pvc - description]',],
			[TITLE => 'TOILET SET, CISTERM, SINK & DRAINAGE', IMG => 'toilet_set_cisterm_sink_drainage.jpg', DESC => '[toilet_set_cisterm_sink_drainage - description]',],
			[TITLE => 'VIP PRODUCT', IMG => 'vip_product.jpg', DESC => '[vip_product - description]',],
			[TITLE => 'WATER TAP & GATE, BALL VALVES', IMG => 'water_tap_gate_ball_valves.jpg', DESC => '[water_tap_gate_ball_valves - description]',],
		],
	],
	##########################################################
	[
		TITLE => "Power Tools",
		IMG => "power_tools_category.jpg",
		PRODUCT_IMG_PATH => '/power_tools/',
		SUBCATEGORY => [
			"Cordless Tools",
			"Demolition Tools and Equipment",
			"Power Drills",
			"Heat Guns",
			"Fastening Tools",
			"Jigsaw",
			"Nail Gun",
		],
		PROD => [ // [8]
			[TITLE => 'AKAIDO PRODUCTS', IMG => 'akaido.jpg', DESC => '[akaido - description]',],
			[TITLE => 'BOSCH', IMG => 'bosch.jpg', DESC => '[bosch - description]',],
			[TITLE => 'COMPRESSOR & AIR FITTING', IMG => 'compressor_air_fitting.jpg', DESC => '[compressor_air_fitting - description]',],
			[TITLE => 'DONG CHENG PRODUCTS', IMG => 'dong_cheng_products.jpg', DESC => '[dong_cheng_products - description]',],
			[TITLE => 'HIKOKI', IMG => 'hikoki.jpg', DESC => '[hikoki - description]',],
			[TITLE => 'HITACHI & CARBON BRUSH', IMG => 'hitachi_carbon_brush.jpg', DESC => '[hitachi_carbon_brush - description]',],
			[TITLE => 'JET MASTER', IMG => 'jet_master.jpg', DESC => '[jet_master - description]',],
			[TITLE => 'KANO & VOMAX PRODUCTS', IMG => 'kano_vomax_products.jpg', DESC => '[kano_vomax_products - description]',],
			[TITLE => 'KARCHER', IMG => 'karcher.jpg', DESC => '[karcher - description]',],
			[TITLE => 'LAVOR', IMG => 'lavor.jpg', DESC => '[lavor - description]',],
			[TITLE => 'LAVOR ACCESSORIES', IMG => 'lavor_accessories.jpg', DESC => '[lavor_accessories - description]',],
			[TITLE => 'LAVOR SPARE PART', IMG => 'lavor_spare_part.jpg', DESC => '[lavor_spare_part - description]',],
			[TITLE => 'MAKITA - TC INACTIVE', IMG => 'makita_ac_mt.jpg', DESC => '[makita_ac_mt - description]',],
			[TITLE => 'MAKITA AC - MT', IMG => 'makita_ac_tools.jpg', DESC => '[makita_ac_tools - description]',],
			[TITLE => 'MAKITA AC TOOLS', IMG => 'makita_accessory.jpg', DESC => '[makita_accessory - description]',],
			[TITLE => 'MAKITA ACCESSORY', IMG => 'makita_dc_tools.jpg', DESC => '[makita_dc_tools - description]',],
			[TITLE => 'MAKITA DC TOOLS', IMG => 'makita_dc_tools_cleaner.jpg', DESC => '[makita_dc_tools_cleaner - description]',],
			[TITLE => 'MAKITA DC TOOLS - CLEANER', IMG => 'makita_dc_tools_ope.jpg', DESC => '[makita_dc_tools_ope - description]',],
			[TITLE => 'MAKITA DC TOOLS - OPE', IMG => 'makita_spare_parts.jpg', DESC => '[makita_spare_parts - description]',],
			[TITLE => 'MAKITA SPARE PARTS', IMG => 'makita_tc_inactive.jpg', DESC => '[makita_tc_inactive - description]',],
			[TITLE => 'VACMASTER', IMG => 'vacmaster.jpg', DESC => '[vacmaster - description]',],
		],
	],
	##########################################################
	[
		TITLE => "Paint",
		IMG => "paint_category.jpg",
		PRODUCT_IMG_PATH => '/paint/',
		SUBCATEGORY => [
			"Decorating paint",
			"Industrial paint",
			"painting Accesories",
		],
		PROD => [ // [9]
			[TITLE => 'COLOURLAND PAINT', IMG => 'colourland_paint.jpg', DESC => '[colourland_paint - description]',],
			[TITLE => 'DULUX PAINT', IMG => 'dulux_paint.jpg', DESC => '[dulux_paint - description]',],
			[TITLE => 'KANGAROO PAINT', IMG => 'kangaroo_paint.jpg', DESC => '[kangaroo_paint - description]',],
			[TITLE => 'SPRAY PAINT, SPIRIT & MIX PAINT', IMG => 'spray_paint_spirit_max_paints.jpg', DESC => '[spray_paint_spirit_max_paints - description]',],
			[TITLE => 'TRANS PAINT', IMG => 'trans_paint.jpg', DESC => '[trans_paint - description]',],
		],
	],
	##########################################################
];



// building_materials
// bolts_fasteners
// hand_tools
// general_household
// welding_machinery
// safety_security
// electrical_accessories
// plumbing
// power_tools
// paint

// building_materials_category.jpg
// bolts_fasteners_category.jpg
// hand_tools_category.jpg
// general_household_category.jpg
// welding_machinery_category.jpg
// safety_security_category.jpg
// electrical_accessories_category.jpg
// plumbing_category.jpg
// power_tools_category.jpg
// paint_category.jpg



