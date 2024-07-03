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
const IMG_PATH 					= 'img_path';


				
// product category
$product_category = [

	BUILDING_MATERIALS => [
		IMG => "building_material_categories.jpg",
		TITLE => "Building Materials",
		IMG_PATH => BUILDING_MATERIALS,
		SUBCATEGORY => [
			"Cement",
			"Steel Bar",
			"Plywoods",
			"Roofing Sheet",
			"Wire Mesh"
		],
		PROD => [
			[TITLE => 'ANGLE IRON BAR'								, IMG => 'angle_iron_bar.jpg'],
			[TITLE => 'ASTEEL ROOFING PRODUCT'						, IMG => 'asteel_roofing_product.jpg'],
			[TITLE => 'BLACK PIPE'									, IMG => 'black_pipe.jpg'],
			[TITLE => 'BRICK'										, IMG => 'brick.jpg'],
			[TITLE => 'CAPPING, FLASHING, GUTTER'					, IMG => 'capping_flashing_gutter.jpg'],
			[TITLE => 'CEMENT'										, IMG => 'cement.jpg'],
			[TITLE => 'CHROME, STEEL, COPPER TUBE'					, IMG => 'chrome_steel_copper_tube.jpg'],
			[TITLE => 'CL FENCE & BARBED WIRE'						, IMG => 'cl_fence_barbed_wire.jpg'],
			[TITLE => 'DOOR FRAME'									, IMG => 'door_frame.jpg'],
			[TITLE => 'DQ'											, IMG => 'dq.jpg'], 
			[TITLE => 'G.I. PIPE'									, IMG => 'gabion.jpg'],
			[TITLE => 'GABION'										, IMG => 'gi_grill_wire_mesh.jpg'],
			[TITLE => 'GI & PVC, HARD DRAWN WIRE'					, IMG => 'gi_pipe.jpg'],
			[TITLE => 'GI GRILL, WIRE MESH'							, IMG => 'gi_ppgi_pain_sheet.jpg'],
			[TITLE => 'GI, PPGI, PLAIN SHEET'						, IMG => 'gi_pvc_hand_drawn_wire.jpg'],
			[TITLE => 'GYPSUM BOARD'								, IMG => 'gypsum_board.jpg'],
			[TITLE => 'HDPE PIPE'									, IMG => 'hdpe_pipe.jpg'],
			[TITLE => 'HEXAGONAL WIRE NETTING'						, IMG => 'hexagonal_wire_netting.jpg'],
			[TITLE => 'HOLLOW SECTION'								, IMG => 'hollow_section.jpg'],
			[TITLE => 'I-BEAM'										, IMG => 'i_beam.jpg'],
			[TITLE => 'INSULATION'									, IMG => 'insulation.jpg'],
			[TITLE => 'M.S FLAT, SQUARE BAR, IRON GATE'				, IMG => 'ms_flat_square_bar_iron_gate.jpg'],
			[TITLE => 'M.S PLAIN PLATE'								, IMG => 'ms_plain_plate.jpg'],
			[TITLE => 'NETTING & MESH - MOSQUITO, G.I COATED'		, IMG => 'netting_mesh_mosquitto_gi_coated.jpg'],
			[TITLE => 'PLYWOOD'										, IMG => 'plywood.jpg'],
			[TITLE => 'PRIMAFLEX SHEET'								, IMG => 'primaflex_sheet.jpg'],
			[TITLE => 'PURLIN PRODUCTION'							, IMG => 'purlin_production.jpg'],
			[TITLE => 'PVC PIPE'									, IMG => 'pvc_pipe.jpg'],
			[TITLE => 'ROOFING ACCESSORIES'							, IMG => 'roofing_accessories.jpg'],
			[TITLE => 'ROOFING PRODUCTION'							, IMG => 'roofing_production.jpg'],
			[TITLE => 'ROOFING-CORRUGATED, TRANSPARENT & RIDGES'	, IMG => 'roofing_corrugated_transparent_ridges.jpg'],
			[TITLE => 'STEEL BAR'									, IMG => 'steel_bar.jpg'],
			[TITLE => 'TRUSS, PURLIN, U-PARTITION'					, IMG => 'truss_purlin_u_partition.jpg'],
			[TITLE => 'U-CHANNEL'									, IMG => 'u_channel.jpg'],
			[TITLE => 'UPVC PIPE'									, IMG => 'upvc_pipe.jpg'],
			[TITLE => 'VERSATILE FENCE, FITTING'					, IMG => 'versatile_fence_fitting.jpg'],
			[TITLE => 'WOOD'										, IMG => 'wood.jpg'],
			[TITLE => 'YH LAMINATED PRODUCTS'						, IMG => 'yh_laminated_products.jpg'],
			[TITLE => 'YKWI BAR CUT & BEND'							, IMG => 'ykwi_bar_cut_bend.jpg'],
			[TITLE => 'YKWI PRODUCT SPECIAL ORDER'					, IMG => 'ykwi_product_special_order.jpg'],
			[TITLE => 'YMC'											, IMG => 'ymc.jpg'],
			[TITLE => 'YRC'											, IMG => 'yrc.jpg'],
			[TITLE => 'YUNCO PRODUCT SPECIAL ORDER'					, IMG => 'yunco_product_special_order.jpg'],
		]
	],
##########################################################	
	BOLTS_FASTENERS => [
		IMG => "bolts_fasteners_categories.jpg",
		TITLE => "Bolts & Fasteners",
		IMG_PATH => BOLTS_FASTENERS,
		SUBCATEGORY => [
			"Nails",
			"Hooks",
			"Rivets",
			"Screws",
			"Washers",
			"Bolts & Nut"
		],
		PROD => [
			[TITLE => 'ALUMINIUM RIVET - PATTA, OTHERS'				, IMG => 'aluminium_rivet_patta_others.jpg'],
			[TITLE => 'BOLT & NUT'									, IMG => 'bolt_nut.jpg'],
			[TITLE => 'BOLT & NUT - UNC,S/STEEL,BRASS & OTHERS'		, IMG => 'bolt_nut_unc_s_steel_brass_others.jpg'],
			[TITLE => 'CONCRETE NAIL'								, IMG => 'concrete_nail.jpg'],
			[TITLE => 'JAGUAR IRON NAIL'							, IMG => 'jaguar_iron_nail.jpg'],
			[TITLE => 'LAZOR BOLTS & FASTENERS'						, IMG => 'lazor_bolts_fasteners.jpg'],
			[TITLE => 'NAIL - COIL, ROOFING & OTHER'				, IMG => 'nail_coil_roofing_other.jpg'],
			[TITLE => 'NUTS, BOLT & ZP BOLT & NUT'					, IMG => 'nuts_bolt_zp_bolt_nut.jpg'],
			[TITLE => 'POINTED SCREW'								, IMG => 'pointed_screw.jpg'],
			[TITLE => 'RAW & WALL PLUG'								, IMG => 'raw_wall_plug.jpg'],
			[TITLE => 'SCREW - BSW SOCKET & CSK MACHINE'			, IMG => 'screw_bsw_socket_csk_machine.jpg'],
			[TITLE => 'SELF DRILLING SCREW'							, IMG => 'self_drilling_screw.jpg'],
			[TITLE => 'STUD BOLT - MS, ZP, S/S 304'					, IMG => 'stud_bolt_ms_zp_s_s_304.jpg'],
			[TITLE => 'WASHER-MS,S/S,BRASS,HDG,FIBRE & SPRING'		, IMG => 'washer_ms_s_s_brass_hdg_fibre_spring.jpg'],
		]
	],
##########################################################
	HAND_TOOLS => [
		IMG => "hand_tools_categories.jpg",
		TITLE => "Hand Tools",
		IMG_PATH => HAND_TOOLS,
		PROD => [
			[TITLE => 'AKODA PRODUCTS'								, IMG => 'akoda_products.jpg'],
			[TITLE => 'BOLT CUTTER, FILE, KNIFE'					, IMG => 'bolt_cutter_file_knife.jpg'],
			[TITLE => 'ELORA, SOUTHEN GRACE, WING POH, WYNN`S'		, IMG => 'elora_southen_grace_wing_poh_wynns.jpg'],
			[TITLE => 'GARDEN TOOLS - SHOVEL & HOES'				, IMG => 'garden_tools_shovel_hoes.jpg'],
			[TITLE => 'GRINDING DISC, CUTTING WHEELS, DRILL BIT'	, IMG => 'grinding_disc_cutting_wheels_drill_bit.jpg'],
			[TITLE => 'HELLO PRODUCTS'								, IMG => 'hello_products.jpg'],
			[TITLE => 'HOLDING TOOLS'								, IMG => 'holding_tools.jpg'],
			[TITLE => 'IRWIN & LENOX ACCESSORIES'					, IMG => 'irwin_hand_tools.jpg'],
			[TITLE => 'IRWIN & LENOX DISCONTINUE'					, IMG => 'irwin_lenox_accessories.jpg'],
			[TITLE => 'IRWIN HAND TOOLS'							, IMG => 'irwin_lenox_discontinue.jpg'],
			[TITLE => 'LAZOR PAINTING TOOLS'						, IMG => 'lazor_painting_tools.jpg'],
			[TITLE => 'LETTER BOX & NUMBERING'						, IMG => 'letter_box_numbering.jpg'],
			[TITLE => 'MEASURING TAPE & MARKING TOOLS'				, IMG => 'measuring_tape_marking_tools.jpg'],
			[TITLE => 'MECHANIC TOOLS'								, IMG => 'mechanical_tools.jpg'],
			[TITLE => 'NIPPLE, GREASE GUN, OIL CAN'					, IMG => 'nipple_grease_gun_oil_can.jpg'],
			[TITLE => 'PACKING TOOL & TOOL BOX'						, IMG => 'packing_tool_tool_box.jpg'],
			[TITLE => 'PAINTING TOOLS'								, IMG => 'painting_tools.jpg'],
			[TITLE => 'STANLEY AUTOCARE'							, IMG => 'stanley_autocare.jpg'],
			[TITLE => 'STANLEY DISCONTINUE'							, IMG => 'stanley_discontinue.jpg'],
			[TITLE => 'STANLEY HAND TOOLS'							, IMG => 'stanley_hand_tools.jpg'],
			[TITLE => 'STANLEY MECHANIC TOOLS'						, IMG => 'stanley_mechanic_tools.jpg'],
			[TITLE => 'STRIKING & STRUCK TOOLS'						, IMG => 'striking_struck_tools.jpg'],
			[TITLE => 'TEKIRO PRODUCTS'								, IMG => 'tekiro_products.jpg'],
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
##########################################################
	GENERAL_HOUSEHOLD => [
		IMG => "general_tools_categories.jpg",
		TITLE => "General & Household",
		IMG_PATH => HAND_TOOLS,
		PROD => [
			[TITLE => 'A5 J.I.T GENERAL GOODS'						, IMG => 'a5_jit_general_goods.jpg'],
			[TITLE => 'ASTERI LADDER'								, IMG => 'asteri_ladder.jpg'],
			[TITLE => 'CLEANING TOOLS'								, IMG => 'cleaning_tools.jpg'],
			[TITLE => 'CURTAIN ACCESSORIES'							, IMG => 'curtain_accessories.jpg'],
			[TITLE => 'DAVCO'										, IMG => 'davco.jpg'],
			[TITLE => 'DEVON'										, IMG => 'devon.jpg'],
			[TITLE => 'FLEXIBLE HOSE'								, IMG => 'flexible_hose.jpg'],
			[TITLE => 'HARDEX'										, IMG => 'hardex.jpg'],
			[TITLE => 'HOOK,C PIN,SHELF & L BRACKET & SIMILARTY'	, IMG => 'hook_c_pin_shelf_l_bracket_similarty.jpg'],
			[TITLE => 'HOSE'										, IMG => 'hose.jpg'],
			[TITLE => 'HOSE ACCESORIES'								, IMG => 'hose_accessories.jpg'],
			[TITLE => 'HOSE CLIP'									, IMG => 'hose_clip.jpg'],
			[TITLE => 'IKEA PRODUCTS'								, IMG => 'ikea_products.jpg'],
			[TITLE => 'KOYA PRODUCTS'								, IMG => 'koya_products.jpg'],
			[TITLE => 'L.F HOUSEHOLD PRODUCTS'						, IMG => 'ladder.jpg'],
			[TITLE => 'LADDER'										, IMG => 'ladder_production.jpg'],
			[TITLE => 'LADDER PRODUCTION'							, IMG => 'lazor_general_tools.jpg'],
			[TITLE => 'LAZOR GENERAL TOOLS'							, IMG => 'lazor_ladder.jpg'],
			[TITLE => 'LAZOR LADDER'								, IMG => 'lf_householdProducts.jpg'],
			[TITLE => 'MIX'											, IMG => 'mix.jpg'],
			[TITLE => 'OFFER ITEM'									, IMG => 'offer_item.jpg'],
			[TITLE => 'RACK'										, IMG => 'rack.jpg'],
			[TITLE => 'REXCO'										, IMG => 'rexco.jpg'],
			[TITLE => 'RUBBER MOUNTING'								, IMG => 'rubber_mounting.jpg'],
			[TITLE => 'SCP'											, IMG => 'scp.jpg'],
			[TITLE => 'SELLEYS'										, IMG => 'selleys.jpg'],
			[TITLE => 'SIKA'										, IMG => 'sika.jpg'],
			[TITLE => 'STATIONERY'									, IMG => 'stationery.jpg'],
			[TITLE => 'TRANSP, J.I.T, SERV, DIS, UNDERBILL'			, IMG => 'transp_jit_serv_dis_underbill.jpg'],
			[TITLE => 'WD-40'										, IMG => 'wd_40.jpg'],
			[TITLE => 'WHEEL BARROW & TROLLEY'						, IMG => 'wheel_barrow_trolley.jpg'],
			[TITLE => 'WHEELS'										, IMG => 'wheels.jpg'],
			[TITLE => 'YKTF PRODUCTS'								, IMG => 'yktf_products.jpg'],
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
##########################################################
	WELDING_MACHINERY => [
		IMG => "welding_machinery.jpg",
		TITLE => "Welding & Machinery",
		IMG_PATH => GENERAL_HOUSEHOLD,
		PROD => [
			[TITLE => 'BEARING'										, IMG => 'bearing.jpg'],
			[TITLE => 'GASKET, RUBBER SHEET & SIMILARTY'			, IMG => 'gasket_rubber_sheet_similarty.jpg'],
			[TITLE => 'HANDLE'										, IMG => 'handle.jpg'],
			[TITLE => 'HARRY PRODUCTS'								, IMG => 'harry_products.jpg'],
			[TITLE => 'HINGES'										, IMG => 'hinges.jpg'],
			[TITLE => 'JACK, CHAIN BLK & ACCESSORIES'				, IMG => 'jack_chain_blk_accessories.jpg'],
			[TITLE => 'LOUVRES, DOORS & ACCESSORIES'				, IMG => 'louvres_doors_accessories.jpg'],
			[TITLE => 'MISCELLANEOUS / MIXED'						, IMG => 'miscellaneous_mixed.jpg'],
			[TITLE => 'PLASTIC SHEETS'								, IMG => 'plastic_sheets.jpg'],
			[TITLE => 'ROPE & CHAIN'								, IMG => 'rope_chain.jpg'],
			[TITLE => 'SAND PAPER'									, IMG => 'sand_paper.jpg'],
			[TITLE => 'SCAFFOLDING & ACCESSORIES'					, IMG => 'scaffolding_accessories.jpg'],
			[TITLE => 'TOWER BOLTS'									, IMG => 'tower_bolts.jpg'],
			[TITLE => 'V-BELT & PULLEYS'							, IMG => 'v_belt_pulleys.jpg'],
			[TITLE => 'WALRUS PRODUCTS'								, IMG => 'walrus_products.jpg'],
			[TITLE => 'WELDING ROD & ACCESPRIES'					, IMG => 'welding_rod_accespries.jpg'],
		],
		SUBCATEGORY => [

		]
	],
##########################################################
	SAFETY_SECURITY => [
		IMG => "safety_security_categories.jpg",
		TITLE => "Safety & Security",
		IMG_PATH => WELDING_MACHINERY,
		PROD => [
			[TITLE => '3M PRODUCTS'									, IMG => '3m_products.jpg'],
			[TITLE => 'ABUS'										, IMG => 'abus.jpg'],
			[TITLE => 'AMAN / VIRO'									, IMG => 'aman_viro.jpg'],
			[TITLE => 'BUICK'										, IMG => 'buick.jpg'],
			[TITLE => 'LAZOR HAND GLOVE'							, IMG => 'lazor_hand_glove.jpg'],
			[TITLE => 'LAZOR LOCK'									, IMG => 'lazor_lock.jpg'],
			[TITLE => 'MIX LOCKS'									, IMG => 'mix_locks.jpg'],
			[TITLE => 'SAFETY EQUIPMENTS'							, IMG => 'safety_equipments.jpg'],
			[TITLE => 'SAFETY SHOES'								, IMG => 'safety_shoes.jpg'],
			[TITLE => 'SOLEX'										, IMG => 'solex.jpg'],
			[TITLE => 'STANLEY LOCK'								, IMG => 'stanley_lock.jpg'],
			[TITLE => 'STANLEY PADLOCK DISCONTINUE'					, IMG => 'stanley_padlock_discontinue.jpg'],
			[TITLE => 'TRI-CIRCLE'									, IMG => 'tri_circle.jpg'],
			[TITLE => 'YALE'										, IMG => 'yale.jpg'],
		],
		SUBCATEGORY => [
			"Safety Shoes, Glove, Mask & Helmet",
			"Rain Coat Jacket, Welding Jacket"
		]
	],
##########################################################
	ELECTRICAL_ACCESSORIES => [
		IMG => "electrical_categories.jpg",
		TITLE => "Electrical Accessories",
		IMG_PATH => SAFETY_SECURITY,
		PROD => [
			[TITLE => 'BATTERY'										, IMG => 'battery.jpg'],
			[TITLE => 'ECOLINK PRODUCTS'							, IMG => 'ecolink_products.jpg'],
			[TITLE => 'ELECTRICAL ACCESSORIES'						, IMG => 'electrical_accessories.jpg'],
			[TITLE => 'FABER PRODUCTS'								, IMG => 'faber_products.jpg'],
			[TITLE => 'KHIND PRODUCT'								, IMG => 'khind_product.jpg'],
			[TITLE => 'LITE ME PRODUCTS'							, IMG => 'lite_me_products.jpg'],
			[TITLE => 'NICRON PRODUCTS'								, IMG => 'nicron_products.jpg'],
			[TITLE => 'PHILIPS'										, IMG => 'philips.jpg'],
			[TITLE => 'PHILIPS DISCONTINUE'							, IMG => 'philips_discontinue.jpg'],
			[TITLE => 'SENCO PRODUCTS'								, IMG => 'senco_products.jpg'],
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
##########################################################
	PLUMBING => [
		IMG => "plumbing_categories.jpg",
		TITLE => "Plumbing",
		IMG_PATH => PLUMBING,
		PROD => [
			[TITLE => 'DOCASA SANITARYWARE'							, IMG => 'docasa_sanitaryware.jpg'],
			[TITLE => 'KHE ACCESSORIES'								, IMG => 'khe_accessories.jpg'],
			[TITLE => 'KHE CERAMIC'									, IMG => 'khe_ceramic.jpg'],
			[TITLE => 'KHE DISCONTINUE'								, IMG => 'khe_discontinue.jpg'],
			[TITLE => 'KHE RACKING'									, IMG => 'khe_rack.jpg'],
			[TITLE => 'KHE SINK'									, IMG => 'khe_sink.jpg'],
			[TITLE => 'KHE TAP'										, IMG => 'khe_tap.jpg'],
			[TITLE => 'MILANO PRODUCT'								, IMG => 'milano_product.jpg'],
			[TITLE => 'PIPE FITTING - BRASS, S/STEEL & COPPER'		, IMG => 'pipe_fitting_brass_s_steel_copper.jpg'],
			[TITLE => 'PIPE FITTING - POLYPIPE'						, IMG => 'pipe_fitting_gi.jpg'],
			[TITLE => 'PIPE FITTING - PVC & U-PVC'					, IMG => 'pipe_fitting_polypipe.jpg'],
			[TITLE => 'PIPE FITTING -G.I'							, IMG => 'pipe_fitting_pvc_u_pvc.jpg'],
			[TITLE => 'TOILET SET, CISTERM, SINK & DRAINAGE'		, IMG => 'toilet_set_cisterm_sink_drainage.jpg'],
			[TITLE => 'VIP PRODUCT'									, IMG => 'vip_product.jpg'],
			[TITLE => 'WATER TAP & GATE, BALL VALVES'				, IMG => 'water_tap_gate_ball_valves.jpg'],
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
##########################################################
	POWER_TOOLS => [
		IMG => "power_tools_categories.jpg",
		TITLE => "Power Tools",
		IMG_PATH => POWER_TOOLS,
		PROD => [
			[TITLE => 'AKAIDO PRODUCTS'								, IMG => 'akaido.jpg'],
			[TITLE => 'BOSCH'										, IMG => 'bosch.jpg'],
			[TITLE => 'COMPRESSOR & AIR FITTING'					, IMG => 'compressor_air_fitting.jpg'],
			[TITLE => 'DONG CHENG PRODUCTS'							, IMG => 'dong_cheng_products.jpg'],
			[TITLE => 'HIKOKI'										, IMG => 'hikoki.jpg'],
			[TITLE => 'HITACHI & CARBON BRUSH'						, IMG => 'hitachi_carbon_brush.jpg'],
			[TITLE => 'JET MASTER'									, IMG => 'jet_master.jpg'],
			[TITLE => 'KANO & VOMAX PRODUCTS'						, IMG => 'kano_vomax_products.jpg'],
			[TITLE => 'KARCHER'										, IMG => 'karcher.jpg'],
			[TITLE => 'LAVOR'										, IMG => 'lavor.jpg'],
			[TITLE => 'LAVOR ACCESSORIES'							, IMG => 'lavor_accessories.jpg'],
			[TITLE => 'LAVOR SPARE PART'							, IMG => 'lavor_spare_part.jpg'],
			[TITLE => 'MAKITA - TC INACTIVE'						, IMG => 'makita_ac_mt.jpg'],
			[TITLE => 'MAKITA AC - MT'								, IMG => 'makita_ac_tools.jpg'],
			[TITLE => 'MAKITA AC TOOLS'								, IMG => 'makita_accessory.jpg'],
			[TITLE => 'MAKITA ACCESSORY'							, IMG => 'makita_dc_tools.jpg'],
			[TITLE => 'MAKITA DC TOOLS'								, IMG => 'makita_dc_tools_cleaner.jpg'],
			[TITLE => 'MAKITA DC TOOLS - CLEANER'					, IMG => 'makita_dc_tools_ope.jpg'],
			[TITLE => 'MAKITA DC TOOLS - OPE'						, IMG => 'makita_spare_parts.jpg'],
			[TITLE => 'MAKITA SPARE PARTS'							, IMG => 'makita_tc_inactive.jpg'],
			[TITLE => 'VACMASTER'									, IMG => 'vacmaster.jpg'],
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
##########################################################
	PAINT => [
		IMG => "paint_categories.jpg",
		TITLE => "Paint",
		IMG_PATH => PAINT,
		PROD => [
			[TITLE => 'COLOURLAND PAINT'							, IMG => 'colourland_paint.jpg'],
			[TITLE => 'DULUX PAINT'									, IMG => 'dulux_paint.jpg'],
			[TITLE => 'KANGAROO PAINT'								, IMG => 'kangaroo_paint.jpg'],
			[TITLE => 'SPRAY PAINT, SPIRIT & MIX PAINTS'			, IMG => 'spray_paint_spirit_max_paints.jpg'],
			[TITLE => 'TRANS PAINT'									, IMG => 'trans_paint.jpg'],
		],
		SUBCATEGORY => [
			"Decorating Paint",
			"Industrial Paint",
			"Painting Accesories"
		]
	],

];






