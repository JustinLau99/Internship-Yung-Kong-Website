<?php


// categories key value
const BUILDING_MATERIALS 		= 'building_materials';
const BOLTS_FASTENERS 			= 'bolts_fasteners';
const HAND_TOOLS 				= 'hand_tools';
const GENERAL_HOUSEHOLD 		= 'general_household';
const WELDING_MACHINERY 		= 'welding_machinery';
const SAFETY_SECURITY 			= 'safety_security';
const ELECTRICAL_ACCESSORIES 	= 'electrical_accessories';
const PLUMBING 					= 'plumbing';
const POWER_TOOLS 				= 'power_tools';
const PAINT 					= 'paint';
// each category key value
const IMG 						= 'img';
const TITLE 					= 'title';
const SUBCATEGORY 				= 'subCategory';
const PROD 						= 'prod';

// product category
$product_category = [

	BUILDING_MATERIALS => [
		IMG => "building_material_categories.jpg",
		TITLE => "Building Materials",
		SUBCATEGORY => [
			"Cement",
			"Steel Bar",
			"Plywoods",
			"Roofing Sheet",
			"Wire Mesh"
		],
		PROD => [
			[TITLE => "CEMENT", 									IMG => ""],
			[TITLE => "STEEL BAR", 									IMG => ""],
			[TITLE => "YMC", 										IMG => ""],
			[TITLE => "DQ", 										IMG => ""],
			[TITLE => "YRC", 										IMG => ""],
			[TITLE => "YKWI BAR CUT & BEND", 						IMG => ""],
			[TITLE => "GI & PVC, HARD DRAWN WIRE", 					IMG => ""],
			[TITLE => "GI GRILL, WIRE MESH", 						IMG => ""],
			[TITLE => "CL FENCE & BARBED WIRE", 					IMG => ""],
			[TITLE => "VERSATILE FENCE, FITTING", 					IMG => ""],
			[TITLE => "YKWI PRODUCT SPECIAL ORDER", 				IMG => ""],
			[TITLE => "GI, PPGI, PLAIN SHEET", 						IMG => ""],
			[TITLE => "ROOFING-CORRUGATED, TRANSPARENT & RIDGES", 	IMG => ""],
			[TITLE => "YUNCO PRODUCT SPECIAL ORDER", 				IMG => ""],
			[TITLE => "ASTEEL ROOFING PRODUCT", 					IMG => ""],
			[TITLE => "CAPPING, FLASHING, GUTTER", 					IMG => ""],
			[TITLE => "TRUSS, PURLIN, U-PARTITION", 				IMG => ""],
			[TITLE => "ROOFING PRODUCTION", 						IMG => ""],
			[TITLE => "PURLIN PRODUCTION", 							IMG => ""],
			[TITLE => "DOOR FRAME", 								IMG => ""],
			[TITLE => "ROOFING ACCESSORIES", 						IMG => ""],
			[TITLE => "HEXAGONAL WIRE NETTING", 					IMG => ""],
			[TITLE => "NETTING & MESH - MOSQUITO, G.I COATED", 		IMG => ""],
			[TITLE => "GABION", 									IMG => ""],
			[TITLE => "ANGLE IRON BAR", 							IMG => ""],
			[TITLE => "M.S FLAT, SQUARE BAR, IRON GATE", 			IMG => ""],
			[TITLE => "HOLLOW SECTION", 							IMG => ""],
			[TITLE => "I-BEAM", 									IMG => ""],
			[TITLE => "U-CHANNEL", 									IMG => ""],
			[TITLE => "G.I. PIPE", 									IMG => ""],
			[TITLE => "UPVC PIPE", 									IMG => ""],
			[TITLE => "BLACK PIPE", 								IMG => ""],
			[TITLE => "PVC PIPE", 									IMG => ""],
			[TITLE => "HDPE PIPE", 									IMG => ""],
			[TITLE => "CHROME, STEEL, COPPER TUBE", 				IMG => ""],
			[TITLE => "BRICK", 										IMG => ""],
			[TITLE => "INSULATION", 								IMG => ""],
			[TITLE => "YH LAMINATED PRODUCTS", 						IMG => ""],
			[TITLE => "PRIMAFLEX SHEET", 							IMG => ""],
			[TITLE => "GYPSUM BOARD", 								IMG => ""],
			[TITLE => "M.S PLAIN PLATE", 							IMG => ""],
			[TITLE => "WOOD", 										IMG => ""],
			[TITLE => "PLYWOOD", 									IMG => ""],
		]
	],



	
	BOLTS_FASTENERS => [
		IMG => "bolts_fasteners_categories.jpg",
		TITLE => "Bolts & Fasteners",
		SUBCATEGORY => [
			"Nails",
			"Hooks",
			"Rivets",
			"Screws",
			"Washers",
			"Bolts & Nut"
		],
		PROD => [
			[TITLE => "BOLT & NUT - UNC,S/STEEL,BRASS & OTHERS", 	IMG => ""],
			[TITLE => "BOLT & NUT", 								IMG => ""],
			[TITLE => "STUD BOLT - MS, ZP, S/S 304", 				IMG => ""],
			[TITLE => "NUTS, BOLT & ZP BOLT & NUT", 				IMG => ""],
			[TITLE => "WASHER-MS,S/S,BRASS,HDG,FIBRE & SPRING", 	IMG => ""],
			[TITLE => "POINTED SCREW", 								IMG => ""],
			[TITLE => "SELF DRILLING SCREW", 						IMG => ""],
			[TITLE => "SCREW - BSW SOCKET & CSK MACHINE", 			IMG => ""],
			[TITLE => "NAIL - COIL, ROOFING & OTHER", 				IMG => ""],
			[TITLE => "JAGUAR IRON NAIL", 							IMG => ""],
			[TITLE => "CONCRETE NAIL", 								IMG => ""],
			[TITLE => "RAW & WALL PLUG", 							IMG => ""],
			[TITLE => "LAZOR BOLTS & FASTENERS", 					IMG => ""],
			[TITLE => "ALUMINIUM RIVET - PATTA, OTHERS", 			IMG => ""],
		]
	],

	HAND_TOOLS => [
		IMG => "hand_tools_categories.jpg",
		TITLE => "Hand Tools",
		PROD => [
			[TITLE => "MECHANIC TOOLS", 							IMG => ""],
			[TITLE => "ELORA, SOUTHEN GRACE, WING POH, WYNN'S", 	IMG => ""],
			[TITLE => "TEKIRO PRODUCTS", 							IMG => ""],
			[TITLE => "HELLO PRODUCTS", 							IMG => ""],
			[TITLE => "HOLDING TOOLS", 								IMG => ""],
			[TITLE => "NIPPLE, GREASE GUN, OIL CAN", 				IMG => ""],
			[TITLE => "PACKING TOOL & TOOL BOX", 					IMG => ""],
			[TITLE => "STRIKING & STRUCK TOOLS", 					IMG => ""],
			[TITLE => "LETTER BOX & NUMBERING", 					IMG => ""],
			[TITLE => "BOLT CUTTER, FILE, KNIFE", 					IMG => ""],
			[TITLE => "GRINDING DISC, CUTTING WHEELS, DRILL BIT", 	IMG => ""],
			[TITLE => "AKODA PRODUCTS", 							IMG => ""],
			[TITLE => "MEASURING TAPE & MARKING TOOLS", 			IMG => ""],
			[TITLE => "PAINTING TOOLS", 							IMG => ""],
			[TITLE => "LAZOR PAINTING TOOLS", 						IMG => ""],
			[TITLE => "GARDEN TOOLS - SHOVEL & HOES", 				IMG => ""],
			[TITLE => "IRWIN & LENOX ACCESSORIES", 					IMG => ""],
			[TITLE => "IRWIN HAND TOOLS", 							IMG => ""],
			[TITLE => "IRWIN & LENOX DISCONTINUE", 					IMG => ""],
			[TITLE => "STANLEY HAND TOOLS", 						IMG => ""],
			[TITLE => "STANLEY MECHANIC TOOLS", 					IMG => ""],
			[TITLE => "STANLEY AUTOCARE", 							IMG => ""],
			[TITLE => "STANLEY DISCONTINUE", 						IMG => ""],
		],
		SUBCATEGORY => [
			"Mechanical Tools",
			"Crimping Tools",
			"Cutting Tools",
			"Holding Tools",
			"Fastening Tools",
			"Stapling Tools",
			"Striking & Struck Tools",
			"Measuring Tools"
		]
	],

	GENERAL_HOUSEHOLD => [
		IMG => "general_tools_categories.jpg",
		TITLE => "General & Household",
		PROD => [
			[TITLE => "IKEA PRODUCTS", 								IMG => ""],
			[TITLE => "L.F HOUSEHOLD PRODUCTS", 					IMG => ""],
			[TITLE => "STATIONERY", 								IMG => ""],
			[TITLE => "HOOK,C PIN,SHELF & L BRACKET & SIMILARTY", 	IMG => ""],
			[TITLE => "CURTAIN ACCESORIES", 						IMG => ""],
			[TITLE => "LAZOR GENERAL TOOLS", 						IMG => ""],
			[TITLE => "YKTF PRODUCTS", 								IMG => ""],
			[TITLE => "HOSE", 										IMG => ""],
			[TITLE => "HOSE ACCESORIES", 							IMG => ""],
			[TITLE => "HOSE CLIP", 									IMG => ""],
			[TITLE => "FLEXIBLE HOSE", 								IMG => ""],
			[TITLE => "CLEANING TOOLS", 							IMG => ""],
			[TITLE => "LADDER", 									IMG => ""],
			[TITLE => "LADDER PRODUCTION", 							IMG => ""],
			[TITLE => "LAZOR LADDER", 								IMG => ""],
			[TITLE => "ASTERI LADDER", 								IMG => ""],
			[TITLE => "RACK", 										IMG => ""],
			[TITLE => "WHEELS", 									IMG => ""],
			[TITLE => "WHEEL BARROW & TROLLEY", 					IMG => ""],
			[TITLE => "RUBBER MOUNTING", 							IMG => ""],
			[TITLE => "SIKA", 										IMG => ""],
			[TITLE => "HARDEX", 									IMG => ""],
			[TITLE => "SCP", 										IMG => ""],
			[TITLE => "DEVON", 										IMG => ""],
			[TITLE => "SELLEYS", 									IMG => ""],
			[TITLE => "WD-40", 										IMG => ""],
			[TITLE => "REXCO", 										IMG => ""],
			[TITLE => "DAVCO", 										IMG => ""],
			[TITLE => "KOYA PRODUCTS", 								IMG => ""],
			[TITLE => "MIX", 										IMG => ""],
			[TITLE => "TRANSP, J.I.T, SERV, DIS, UNDERBILL", 		IMG => ""],
			[TITLE => "OFFER ITEM", 								IMG => ""],
			[TITLE => "A5 J.I.T GENERAL GOODS", 					IMG => ""],
		],
		SUBCATEGORY => [
			"Rachet Brace",
			"Wheel Spanner",
			"Utility Knife Set",
			"Hex Key Set",
			"Ladder",
			"G Clamps",
			"Others"
		]
	],

	WELDING_MACHINERY => [
		IMG => "welding_machinery.jpg",
		TITLE => "Welding & Machinery",
		PROD => [
			[TITLE => "MISCELLANEOUS / MIXED", 						IMG => ""],
			[TITLE => "V-BELT & PULLEYS", 							IMG => ""],
			[TITLE => "WALRUS PRODUCTS", 							IMG => ""],
			[TITLE => "GASKET, RUBBER SHEET & SIMILARTY", 			IMG => ""],
			[TITLE => "PLASTIC SHEETS", 							IMG => ""],
			[TITLE => "WELDING ROD & ACCESPRIES", 					IMG => ""],
			[TITLE => "HARRY PRODUCTS", 							IMG => ""],
			[TITLE => "BEARING", 									IMG => ""],
			[TITLE => "SCAFFOLDING & ACCESSORIES", 					IMG => ""],
			[TITLE => "LOUVRES, DOORS & ACCESSORIES", 				IMG => ""],
			[TITLE => "SAND PAPER", 								IMG => ""],
			[TITLE => "HINGES", 									IMG => ""],
			[TITLE => "TOWER BOLTS", 								IMG => ""],
			[TITLE => "HANDLE", 									IMG => ""],
			[TITLE => "JACK, CHAIN BLK & ACCESSORIES", 				IMG => ""],
			[TITLE => "ROPE & CHAIN", 								IMG => ""],
		],
		SUBCATEGORY => [

		]
	],

	SAFETY_SECURITY => [
		IMG => "safety_security_categories.jpg",
		TITLE => "Safety & Security",
		PROD => [
			[TITLE => "SAFETY SHOES", 								IMG => ""],
			[TITLE => "SAFETY EQUIPMENTS", 							IMG => ""],
			[TITLE => "3M PRODUCTS", 								IMG => ""],
			[TITLE => "LAZOR HAND GLOVE", 							IMG => ""],
			[TITLE => "ABUS", 										IMG => ""],
			[TITLE => "SOLEX", 										IMG => ""],
			[TITLE => "YALE", 										IMG => ""],
			[TITLE => "TRI-CIRCLE", 								IMG => ""],
			[TITLE => "AMAN / VIRO", 								IMG => ""],
			[TITLE => "BUICK", 										IMG => ""],
			[TITLE => "LAZOR LOCK", 								IMG => ""],
			[TITLE => "MIX LOCKS", 									IMG => ""],
			[TITLE => "STANLEY LOCK", 								IMG => ""],
			[TITLE => "STANLEY PADLOCK DISCONTINUE", 				IMG => ""],
		],
		SUBCATEGORY => [
			"Safety Shoes, Glove, Mask & Helmet",
			"Rain Coat Jacket, Welding Jacket"
		]
	],

	ELECTRICAL_ACCESSORIES => [
		IMG => "electrical_categories.jpg",
		TITLE => "Electrical Accessories",
		PROD => [
			[TITLE => "BATTERY", 									IMG => ""],
			[TITLE => "NICRON PRODUCTS", 							IMG => ""],
			[TITLE => "ECOLINK PRODUCTS", 							IMG => ""],
			[TITLE => "LITE ME PRODUCTS", 							IMG => ""],
			[TITLE => "SENCO PRODUCTS", 							IMG => ""],
			[TITLE => "ELECTRICAL ACCESSORIES", 					IMG => ""],
			[TITLE => "PHILIPS", 									IMG => ""],
			[TITLE => "PHILIPS DISCONTINUE", 						IMG => ""],
			[TITLE => "KHIND PRODUCT", 								IMG => ""],
			[TITLE => "FABER PRODUCTS", 							IMG => ""],
		],
		SUBCATEGORY => [
			"Wire & Accessories",
			"Extensions & Adaptors",
			"Plug & Sockets",
			"Bulbs & Downlight",
			"Tube & Tube Fitting",
			"Accessories"
		]
	],

	PLUMBING => [
		IMG => "plumbing_categories.jpg",
		TITLE => "Plumbing",
		PROD => [
			[TITLE => "WATER TAP & GATE, BALL VALVES", 				IMG => ""],
			[TITLE => "VIP PRODUCT", 								IMG => ""],
			[TITLE => "MILANO PRODUCT", 							IMG => ""],
			[TITLE => "TOILET SET, CISTERM, SINK & DRAINAGE", 		IMG => ""],
			[TITLE => "KHE TAP", 									IMG => ""],
			[TITLE => "KHE RACKING", 								IMG => ""],
			[TITLE => "KHE SINK", 									IMG => ""],
			[TITLE => "KHE CERAMIC", 								IMG => ""],
			[TITLE => "KHE ACCESSORIES", 							IMG => ""],
			[TITLE => "KHE DISCONTINUE", 							IMG => ""],
			[TITLE => "DOCASA SANITARYWARE", 						IMG => ""],
			[TITLE => "PIPE FITTING -G.I", 							IMG => ""],
			[TITLE => "PIPE FITTING - PVC & U-PVC", 				IMG => ""],
			[TITLE => "PIPE FITTING - POLYPIPE", 					IMG => ""],
			[TITLE => "PIPE FITTING - BRASS, S/STEEL & COPPER", 	IMG => ""],
		],
		SUBCATEGORY => [
			"Valve & Fitting",
			"Taps & Accessories",
			"Shower Set & Accessories",
			"Bathroom & Accessories",
			"Sink & Accessories",
			"Basin & Accessories"
		]
	],

	POWER_TOOLS => [
		IMG => "power_tools_categories.jpg",
		TITLE => "Power Tools",
		PROD => [
			[TITLE => "JET MASTER", 								IMG => ""],
			[TITLE => "VACMASTER", 									IMG => ""],
			[TITLE => "KANO & VOMAX PRODUCTS", 						IMG => ""],
			[TITLE => "DONG CHENG PRODUCTS", 						IMG => ""],
			[TITLE => "LAVOR", 										IMG => ""],
			[TITLE => "LAVOR ACCESSORIES", 							IMG => ""],
			[TITLE => "LAVOR SPARE PART", 							IMG => ""],
			[TITLE => "COMPRESSOR & AIR FITTING", 					IMG => ""],
			[TITLE => "BOSCH", 										IMG => ""],
			[TITLE => "AKAIDO PRODUCTS", 							IMG => ""],
			[TITLE => "HITACHI & CARBON BRUSH", 					IMG => ""],
			[TITLE => "HIKOKI", 									IMG => ""],
			[TITLE => "KARCHER", 									IMG => ""],
			[TITLE => "MAKITA DC TOOLS", 							IMG => ""],
			[TITLE => "MAKITA DC TOOLS - OPE", 						IMG => ""],
			[TITLE => "MAKITA DC TOOLS - CLEANER", 					IMG => ""],
			[TITLE => "MAKITA AC TOOLS", 							IMG => ""],
			[TITLE => "MAKITA AC - MT", 							IMG => ""],
			[TITLE => "MAKITA ACCESSORY", 							IMG => ""],
			[TITLE => "MAKITA SPARE PARTS", 						IMG => ""],
			[TITLE => "MAKITA - TC INACTIVE", 						IMG => ""],
		],
		SUBCATEGORY => [
			"Cordless Tools",
			"Demolition Tools and Equipment",
			"Power Drills",
			"Heat Guns",
			"Fastening Tools",
			"Jigsaw",
			"Nail Gun"
		]
	],

	PAINT => [
		IMG => "paint_categories.jpg",
		TITLE => "Paint",
		PROD => [
			[TITLE => "SPRAY PAINT, SPIRIT & MIX PAINTS", 			IMG => ""],
			[TITLE => "DULUX PAINT", 								IMG => ""],
			[TITLE => "KANGAROO PAINT", 							IMG => ""],
			[TITLE => "COLOURLAND PAINT", 							IMG => ""],
			[TITLE => "TRANS PAINT", 								IMG => ""],
		],
		SUBCATEGORY => [
			"Decorating Paint",
			"Industrial Paint",
			"Painting Accesories"
		]
	],

];




