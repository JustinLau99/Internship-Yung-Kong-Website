<?php



# products' data

// Read the JSON file
$jsonString = file_get_contents('phpData/products.json');

// Decode the JSON string into php array
$data = json_decode($jsonString, true); 

// Example: Print the data to verify it's correct
echo '<pre>';
$imgValue = $data['building_materials']['prod'];

foreach ($imgValue as $img):
	echo $img['title'];
	echo $img['img'];

endforeach;

// print_r($data);
echo '</pre>';


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














/*
$building_materials = [
	'img' => 'building_material_categories.jpg',
	'title' => 'Building Materials',
	'prod' => [
		new ProductCategory('CEMENT'									, ''),
		new ProductCategory('STEEL BAR'									, ''),
		new ProductCategory('YMC'										, ''),
		new ProductCategory('DQ'										, ''),
		new ProductCategory('YRC'										, ''),
		new ProductCategory('YKWI BAR CUT & BEND'						, ''),
		new ProductCategory('GI & PVC, HARD DRAWN WIRE'					, ''),
		new ProductCategory('GI GRILL, WIRE MESH'						, ''),
		new ProductCategory('CL FENCE & BARBED WIRE'					, ''),
		new ProductCategory('VERSATILE FENCE, FITTING'					, ''),
		new ProductCategory('YKWI PRODUCT SPECIAL ORDER'				, ''),
		new ProductCategory('GI, PPGI, PLAIN SHEET'						, ''),
		new ProductCategory('ROOFING-CORRUGATED, TRANSPARENT & RIDGES'	, ''),
		new ProductCategory('YUNCO PRODUCT SPECIAL ORDER'				, ''),
		new ProductCategory('ASTEEL ROOFING PRODUCT'					, ''),
		new ProductCategory('CAPPING, FLASHING, GUTTER'					, ''),
		new ProductCategory('TRUSS, PURLIN, U-PARTITION'				, ''),
		new ProductCategory('ROOFING PRODUCTION'						, ''),
		new ProductCategory('PURLIN PRODUCTION'							, ''),
		new ProductCategory('DOOR FRAME'								, ''),
		new ProductCategory('ROOFING ACCESSORIES'						, ''),
		new ProductCategory('HEXAGONAL WIRE NETTING'					, ''),
		new ProductCategory('NETTING & MESH - MOSQUITO, G.I COATED'		, ''),
		new ProductCategory('GABION'									, ''),
		new ProductCategory('ANGLE IRON BAR'							, ''),
		new ProductCategory('M.S FLAT, SQUARE BAR, IRON GATE'			, ''),
		new ProductCategory('HOLLOW SECTION'							, ''),
		new ProductCategory('I-BEAM'									, ''),
		new ProductCategory('U-CHANNEL'									, ''),
		new ProductCategory('G.I. PIPE'									, ''),
		new ProductCategory('UPVC PIPE'									, ''),
		new ProductCategory('BLACK PIPE'								, ''),
		new ProductCategory('PVC PIPE'									, ''),
		new ProductCategory('HDPE PIPE'									, ''),
		new ProductCategory('CHROME, STEEL, COPPER TUBE'				, ''),
		new ProductCategory('BRICK'										, ''),
		new ProductCategory('INSULATION'								, ''),
		new ProductCategory('YH LAMINATED PRODUCTS'						, ''),
		new ProductCategory('PRIMAFLEX SHEET'							, ''),
		new ProductCategory('GYPSUM BOARD'								, ''),
		new ProductCategory('M.S PLAIN PLATE'							, ''),
		new ProductCategory('WOOD'										, ''),
		new ProductCategory('PLYWOOD'									, ''),
	],
	'subCategory' => [
		'Cement',
		'Steel Bar',
		'Plywoods',
		'Roofing Sheet',
		'Wire Mesh',
	],
];

$bolts_fasteners = [
	'img' => 'bolts_fasteners_categories.jpg', 
	'title' => 'Bolts & Fasteners',
	'prod' => [
		new ProductCategory('BOLT & NUT - UNC,S/STEEL,BRASS & OTHERS'	, ''),
		new ProductCategory('BOLT & NUT'								, ''),
		new ProductCategory('STUD BOLT - MS, ZP, S/S 304'				, ''),
		new ProductCategory('NUTS, BOLT & ZP BOLT & NUT'				, ''),
		new ProductCategory('WASHER-MS,S/S,BRASS,HDG,FIBRE & SPRING'	, ''),
		new ProductCategory('POINTED SCREW'								, ''),
		new ProductCategory('SELF DRILLING SCREW'						, ''),
		new ProductCategory('SCREW - BSW SOCKET & CSK MACHINE'			, ''),
		new ProductCategory('NAIL - COIL, ROOFING & OTHER'				, ''),
		new ProductCategory('JAGUAR IRON NAIL'							, ''),
		new ProductCategory('CONCRETE NAIL'								, ''),
		new ProductCategory('RAW & WALL PLUG'							, ''),
		new ProductCategory('LAZOR BOLTS & FASTENERS'					, ''),
		new ProductCategory('ALUMINIUM RIVET - PATTA, OTHERS'			, ''),
	],
	'subCategory' => [
		'Nails',
		'Hooks',
		'Rivets',
		'Screws',
		'Washers',
		'Bolts & Nuts',
	],
];

$hand_tools = [
	'img' => 'hand_tools_categories.jpg', 
	'title' => 'Hand Tools',
	'prod' => [
		new ProductCategory('MECHANIC TOOLS'							, ''),
		new ProductCategory('ELORA, SOUTHEN GRACE, WING POH, WYNN\'S'	, ''),
		new ProductCategory('TEKIRO PRODUCTS'							, ''),
		new ProductCategory('HELLO PRODUCTS'							, ''),
		new ProductCategory('HOLDING TOOLS'								, ''),
		new ProductCategory('NIPPLE, GREASE GUN, OIL CAN'				, ''),
		new ProductCategory('PACKING TOOL & TOOL BOX'					, ''),
		new ProductCategory('STRIKING & STRUCK TOOLS'					, ''),
		new ProductCategory('LETTER BOX & NUMBERING'					, ''),
		new ProductCategory('BOLT CUTTER, FILE, KNIFE'					, ''),
		new ProductCategory('GRINDING DISC, CUTTING WHEELS, DRILL BIT'	, ''),
		new ProductCategory('AKODA PRODUCTS'							, ''),
		new ProductCategory('MEASURING TAPE & MARKING TOOLS'			, ''),
		new ProductCategory('PAINTING TOOLS'							, ''),
		new ProductCategory('LAZOR PAINTING TOOLS'						, ''),
		new ProductCategory('GARDEN TOOLS - SHOVEL & HOES'				, ''),
		new ProductCategory('IRWIN & LENOX ACCESSORIES'					, ''),
		new ProductCategory('IRWIN HAND TOOLS'							, ''),
		new ProductCategory('IRWIN & LENOX DISCONTINUE'					, ''),
		new ProductCategory('STANLEY HAND TOOLS'						, ''),
		new ProductCategory('STANLEY MECHANIC TOOLS'					, ''),
		new ProductCategory('STANLEY AUTOCARE'							, ''),
		new ProductCategory('STANLEY DISCONTINUE'						, ''),
	],
	'subCategory' => [
		'Mechanical Tools', 
		'Crimping Tools', 
		'Cutting Tools', 
		'Holding Tools', 
		'Fastening Tools', 
		'Stapling Tools', 
		'Striking & Struck Tools', 
		'Measuring Tools', 
	],
];

$general_household = [
	'img' => 'general_tools_categories.jpg', 
	'title' => 'General & Household',
	'prod' => [
		new ProductCategory('IKEA PRODUCTS'								, ''),
		new ProductCategory('L.F HOUSEHOLD PRODUCTS'					, ''),
		new ProductCategory('STATIONERY'								, ''),
		new ProductCategory('HOOK,C PIN,SHELF & L BRACKET & SIMILARTY'	, ''),
		new ProductCategory('CURTAIN ACCESORIES'						, ''),
		new ProductCategory('LAZOR GENERAL TOOLS'						, ''),
		new ProductCategory('YKTF PRODUCTS'								, ''),
		new ProductCategory('HOSE'										, ''),
		new ProductCategory('HOSE ACCESORIES'							, ''),
		new ProductCategory('HOSE CLIP'									, ''),
		new ProductCategory('FLEXIBLE HOSE'								, ''),
		new ProductCategory('CLEANING TOOLS'							, ''),
		new ProductCategory('LADDER'									, ''),
		new ProductCategory('LADDER PRODUCTION'							, ''),
		new ProductCategory('LAZOR LADDER'								, ''),
		new ProductCategory('ASTERI LADDER'								, ''),
		new ProductCategory('RACK'										, ''),
		new ProductCategory('WHEELS'									, ''),
		new ProductCategory('WHEEL BARROW & TROLLEY'					, ''),
		new ProductCategory('RUBBER MOUNTING'							, ''),
		new ProductCategory('SIKA'										, ''),
		new ProductCategory('HARDEX'									, ''),
		new ProductCategory('SCP'										, ''),
		new ProductCategory('DEVON'										, ''),
		new ProductCategory('SELLEYS'									, ''),
		new ProductCategory('WD-40'										, ''),
		new ProductCategory('REXCO'										, ''),
		new ProductCategory('DAVCO'										, ''),
		new ProductCategory('KOYA PRODUCTS'								, ''),
		new ProductCategory('MIX'										, ''),
		new ProductCategory('TRANSP, J.I.T, SERV, DIS, UNDERBILL'		, ''),
		new ProductCategory('OFFER ITEM'								, ''),
		new ProductCategory('A5 J.I.T GENERAL GOODS'					, ''),
	],
	'subCategory' => [
		'Rachet Brace', 
		'Wheel Spanner', 
		'Utility Knife Set', 
		'Hex Key Set', 
		'Ladder', 
		'G Clamps', 
		'Others', 
	],
];

$welding_machinery = [
	'img' => 'welding_machinery.jpg', 
	'title' => 'Welding & Machinery',
	'prod' => [
		new ProductCategory('MISCELLANEOUS / MIXED'				, ''),
		new ProductCategory('V-BELT & PULLEYS'					, ''),
		new ProductCategory('WALRUS PRODUCTS'					, ''),
		new ProductCategory('GASKET, RUBBER SHEET & SIMILARTY'	, ''),
		new ProductCategory('PLASTIC SHEETS'					, ''),
		new ProductCategory('WELDING ROD & ACCESPRIES'			, ''),
		new ProductCategory('HARRY PRODUCTS'					, ''),
		new ProductCategory('BEARING'							, ''),
		new ProductCategory('SCAFFOLDING & ACCESSORIES'			, ''),
		new ProductCategory('LOUVRES, DOORS & ACCESSORIES'		, ''),
		new ProductCategory('SAND PAPER'						, ''),
		new ProductCategory('HINGES'							, ''),
		new ProductCategory('TOWER BOLTS'						, ''),
		new ProductCategory('HANDLE'							, ''),
		new ProductCategory('JACK, CHAIN BLK & ACCESSORIES'		, ''),
		new ProductCategory('ROPE & CHAIN'						, ''),
	],
	'subCategory' => [],
];

$safety_security = [
	'img' => 'safety_security_categories.jpg', 
	'title' => 'Safety & Security',
	'prod' => [
		new ProductCategory('SAFETY SHOES'					, ''),
		new ProductCategory('SAFETY EQUIPMENTS'				, ''),
		new ProductCategory('3M PRODUCTS'					, ''),
		new ProductCategory('LAZOR HAND GLOVE'				, ''),
		new ProductCategory('ABUS'							, ''),
		new ProductCategory('SOLEX'							, ''),
		new ProductCategory('YALE'							, ''),
		new ProductCategory('TRI-CIRCLE'					, ''),
		new ProductCategory('AMAN / VIRO'					, ''),
		new ProductCategory('BUICK'							, ''),
		new ProductCategory('LAZOR LOCK'					, ''),
		new ProductCategory('MIX LOCKS'						, ''),
		new ProductCategory('STANLEY LOCK'					, ''),
		new ProductCategory('STANLEY PADLOCK DISCONTINUE'	, ''),
	],
	'subCategory' => [
		'Safety Shoes, Glove, Mask & Helmet', 
		'Rain Coat Jacket, Welding Jacket', 
	],
];

$electrical_accessories = [
	'img' => 'electrical_categories.jpg', 
	'title' => 'Electrical Accessories',
	'prod' => [
		new ProductCategory('BATTERY'					, ''),
		new ProductCategory('NICRON PRODUCTS'			, ''),
		new ProductCategory('ECOLINK PRODUCTS'			, ''),
		new ProductCategory('LITE ME PRODUCTS'			, ''),
		new ProductCategory('SENCO PRODUCTS'			, ''),
		new ProductCategory('ELECTRICAL ACCESSORIES'	, ''),
		new ProductCategory('PHILIPS'					, ''),
		new ProductCategory('PHILIPS DISCONTINUE'		, ''),
		new ProductCategory('KHIND PRODUCT'				, ''),
		new ProductCategory('FABER PRODUCTS'			, ''),
	],
	'subCategory' => [
		'Wire & Accessories', 
		'Extensions & Adaptors', 
		'Plug & Sockets', 
		'Bulbs & Downlight', 
		'Tube & Tube Fitting', 
		'Accessories', 
	],
];

$plumbing = [
	'img' => 'plumbing_categories.jpg', 
	'title' => 'Plumbing',
	'prod' => [
		new ProductCategory('WATER TAP & GATE, BALL VALVES'			, ''),
		new ProductCategory('VIP PRODUCT'							, ''),
		new ProductCategory('MILANO PRODUCT'						, ''),
		new ProductCategory('TOILET SET, CISTERM, SINK & DRAINAGE'	, ''),
		new ProductCategory('KHE TAP'								, ''),
		new ProductCategory('KHE RACKING'							, ''),
		new ProductCategory('KHE SINK'								, ''),
		new ProductCategory('KHE CERAMIC'							, ''),
		new ProductCategory('KHE ACCESSORIES'						, ''),
		new ProductCategory('KHE DISCONTINUE'						, ''),
		new ProductCategory('DOCASA SANITARYWARE'					, ''),
		new ProductCategory('PIPE FITTING -G.I'						, ''),
		new ProductCategory('PIPE FITTING - PVC & U-PVC'			, ''),
		new ProductCategory('PIPE FITTING - POLYPIPE'				, ''),
		new ProductCategory('PIPE FITTING - BRASS, S/STEEL & COPPER', ''),
	],
	'subCategory' => [
		'Valve & Fitting', 
		'Taps & Accessories', 
		'Shower Set & Accessories', 
		'Bathroom & Accessories', 
		'Sink & Accessories', 
		'Basin & Accessories', 
	],
];

$power_tools = [
	'img' => 'power_tools_categories.jpg', 
	'title' => 'Power Tools',
	'prod' => [
		new ProductCategory('JET MASTER'				, ''),
		new ProductCategory('VACMASTER'					, ''),
		new ProductCategory('KANO & VOMAX PRODUCTS'		, ''),
		new ProductCategory('DONG CHENG PRODUCTS'		, ''),
		new ProductCategory('LAVOR'						, ''),
		new ProductCategory('LAVOR ACCESSORIES'			, ''),
		new ProductCategory('LAVOR SPARE PART'			, ''),
		new ProductCategory('COMPRESSOR & AIR FITTING'	, ''),
		new ProductCategory('BOSCH'						, ''),
		new ProductCategory('AKAIDO PRODUCTS'			, ''),
		new ProductCategory('HITACHI & CARBON BRUSH'	, ''),
		new ProductCategory('HIKOKI'					, ''),
		new ProductCategory('KARCHER'					, ''),
		new ProductCategory('MAKITA DC TOOLS'			, ''),
		new ProductCategory('MAKITA DC TOOLS - OPE'		, ''),
		new ProductCategory('MAKITA DC TOOLS - CLEANER'	, ''),
		new ProductCategory('MAKITA AC TOOLS'			, ''),
		new ProductCategory('MAKITA AC - MT'			, ''),
		new ProductCategory('MAKITA ACCESSORY'			, ''),
		new ProductCategory('MAKITA SPARE PARTS'		, ''),
		new ProductCategory('MAKITA - TC INACTIVE'		, ''),
	],
	'subCategory' => [
		'Cordless Tools', 
		'Demolition Tools and Equipment', 
		'Power Drills', 
		'Heat Guns', 
		'Fastening Tools', 
		'Jigsaw', 
		'Nail Gun', 
	],
];

$paint = [
	'img' => 'paint_categories.jpg', 
	'title' => 'Paint',
	'prod' => [
		new ProductCategory('SPRAY PAINT, SPIRIT & MIX PAINTS'	, ''),
		new ProductCategory('DULUX PAINT'						, ''),
		new ProductCategory('KANGAROO PAINT'					, ''),
		new ProductCategory('COLOURLAND PAINT'					, ''),
		new ProductCategory('TRANS PAINT'						, ''),
	],
	'subCategory' => [
		'Decorating Paint', 
		'Industrial Paint', 
		'Painting Accesories', 
	],
];

*/


?>