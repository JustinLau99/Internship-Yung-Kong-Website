<?php

// each category key value
const IMG = 'img';
const TITLE = 'title';
const SUBCATEGORY = 'subCategory';
const PROD = 'prod';
const PRODUCT_IMG_PATH = 'img_path';
const DESC = 'description';
// categories key value (same as folder name)





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
			[TITLE => 'ANGLE IRON BAR'								, IMG => 'angle_iron_bar.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'ASTEEL ROOFING PRODUCT'						, IMG => 'asteel_roofing_product.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'BLACK PIPE'									, IMG => 'black_pipe.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'BRICK'										, IMG => 'brick.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'CAPPING, FLASHING, GUTTER'					, IMG => 'capping_flashing_gutter.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'CEMENT'										, IMG => 'cement.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'CHROME, STEEL, COPPER TUBE'					, IMG => 'chrome_steel_copper_tube.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'CL FENCE & BARBED WIRE'						, IMG => 'cl_fence_barbed_wire.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'DOOR FRAME'									, IMG => 'door_frame.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'DQ'											, IMG => 'dq.jpg'										, DESC => '[Placeholder]',],
			[TITLE => 'G.I. PIPE'									, IMG => 'gabion.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'GABION'										, IMG => 'gi_grill_wire_mesh.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'GI & PVC, HARD DRAWN WIRE'					, IMG => 'gi_pipe.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'GI GRILL, WIRE MESH'							, IMG => 'gi_ppgi_pain_sheet.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'GI, PPGI, PLAIN SHEET'						, IMG => 'gi_pvc_hand_drawn_wire.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'GYPSUM BOARD'								, IMG => 'gypsum_board.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'HDPE PIPE'									, IMG => 'hdpe_pipe.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'HEXAGONAL WIRE NETTING'						, IMG => 'hexagonal_wire_netting.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'HOLLOW SECTION'								, IMG => 'hollow_section.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'I-BEAM'										, IMG => 'i_beam.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'INSULATION'									, IMG => 'insulation.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'M.S FLAT, SQUARE BAR, IRON GATE'				, IMG => 'ms_flat_square_bar_iron_gate.jpg'				, DESC => '[Placeholder]',],
			[TITLE => 'M.S PLAIN PLATE'								, IMG => 'ms_plain_plate.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'NETTING & MESH - MOSQUITO, G.I COATED'		, IMG => 'netting_mesh_mosquitto_gi_coated.jpg'			, DESC => '[Placeholder]',],
			[TITLE => 'PLYWOOD'										, IMG => 'plywood.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'PRIMAFLEX SHEET'								, IMG => 'primaflex_sheet.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'PURLIN PRODUCTION'							, IMG => 'purlin_production.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'PVC PIPE'									, IMG => 'pvc_pipe.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'ROOFING ACCESSORIES'							, IMG => 'roofing_accessories.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'ROOFING PRODUCTION'							, IMG => 'roofing_production.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'ROOFING-CORRUGATED, TRANSPARENT & RIDGES'	, IMG => 'roofing_corrugated_transparent_ridges.jpg'	, DESC => '[Placeholder]',],
			[TITLE => 'STEEL BAR'									, IMG => 'steel_bar.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'TRUSS, PURLIN, U-PARTITION'					, IMG => 'truss_purlin_u_partition.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'U-CHANNEL'									, IMG => 'u_channel.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'UPVC PIPE'									, IMG => 'upvc_pipe.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'VERSATILE FENCE, FITTING'					, IMG => 'versatile_fence_fitting.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'WOOD'										, IMG => 'wood.jpg'										, DESC => '[Placeholder]',],
			[TITLE => 'YH LAMINATED PRODUCTS'						, IMG => 'yh_laminated_products.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'YKWI BAR CUT & BEND'							, IMG => 'ykwi_bar_cut_bend.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'YKWI PRODUCT SPECIAL ORDER'					, IMG => 'ykwi_product_special_order.jpg'				, DESC => '[Placeholder]',],
			[TITLE => 'YMC'											, IMG => 'ymc.jpg'										, DESC => '[Placeholder]',],
			[TITLE => 'YRC'											, IMG => 'yrc.jpg'										, DESC => '[Placeholder]',],
			[TITLE => 'YUNCO PRODUCT SPECIAL ORDER'					, IMG => 'yunco_product_special_order.jpg'				, DESC => '[Placeholder]',],
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
			[TITLE => 'ALUMINIUM RIVET - PATTA, OTHERS'				, IMG => 'aluminium_rivet_patta_others.jpg'				, DESC => '[Placeholder]',],
			[TITLE => 'BOLT & NUT'									, IMG => 'bolt_nut.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'BOLT & NUT - UNC,S/STEEL,BRASS & OTHERS'		, IMG => 'bolt_nut_unc_s_steel_brass_others.jpg'		, DESC => '[Placeholder]',],
			[TITLE => 'CONCRETE NAIL'								, IMG => 'concrete_nail.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'JAGUAR IRON NAIL'							, IMG => 'jaguar_iron_nail.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'LAZOR BOLTS & FASTENERS'						, IMG => 'lazor_bolts_fasteners.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'NAIL - COIL, ROOFING & OTHER'				, IMG => 'nail_coil_roofing_other.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'NUTS, BOLT & ZP BOLT & NUT'					, IMG => 'nuts_bolt_zp_bolt_nut.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'POINTED SCREW'								, IMG => 'pointed_screw.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'RAW & WALL PLUG'								, IMG => 'raw_wall_plug.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'SCREW - BSW SOCKET & CSK MACHINE'			, IMG => 'screw_bsw_socket_csk_machine.jpg'				, DESC => '[Placeholder]',],
			[TITLE => 'SELF DRILLING SCREW'							, IMG => 'self_drilling_screw.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'STUD BOLT - MS, ZP, S/S 304'					, IMG => 'stud_bolt_ms_zp_s_s_304.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'WASHER-MS,S/S,BRASS,HDG,FIBRE & SPRING'		, IMG => 'washer_ms_s_s_brass_hdg_fibre_spring.jpg'		, DESC => '[Placeholder]',],
		],
	],
	##########################################################
	[
		TITLE => "Hand Tools",
		IMG => "hand_tools_category.jpg",
		PRODUCT_IMG_PATH => '/hand_tools/',
		PROD => [ // [2]
			[TITLE => 'AKODA PRODUCTS'								, IMG => 'akoda_products.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'BOLT CUTTER, FILE, KNIFE'					, IMG => 'bolt_cutter_file_knife.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'ELORA, SOUTHEN GRACE, WING POH, WYNN`S'		, IMG => 'elora_southen_grace_wing_poh_wynns.jpg'		, DESC => '[Placeholder]',],
			[TITLE => 'GARDEN TOOLS - SHOVEL & HOES'				, IMG => 'garden_tools_shovel_hoes.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'GRINDING DISC, CUTTING WHEELS, DRILL BIT'	, IMG => 'grinding_disc_cutting_wheels_drill_bit.jpg'	, DESC => '[Placeholder]',],
			[TITLE => 'HELLO PRODUCTS'								, IMG => 'hello_products.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'HOLDING TOOLS'								, IMG => 'holding_tools.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'IRWIN & LENOX ACCESSORIES'					, IMG => 'irwin_hand_tools.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'IRWIN & LENOX DISCONTINUE'					, IMG => 'irwin_lenox_accessories.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'IRWIN HAND TOOLS'							, IMG => 'irwin_lenox_discontinue.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'LAZOR Painting TOOLS'						, IMG => 'lazor_painting_tools.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'LETTER BOX & NUMBERING'						, IMG => 'letter_box_numbering.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'MEASURING TAPE & MARKING TOOLS'				, IMG => 'measuring_tape_marking_tools.jpg'				, DESC => '[Placeholder]',],
			[TITLE => 'MECHANIC TOOLS'								, IMG => 'mechanical_tools.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'NIPPLE, GREASE GUN, OIL CAN'					, IMG => 'nipple_grease_gun_oil_can.jpg'				, DESC => '[Placeholder]',],
			[TITLE => 'PACKING TOOL & TOOL BOX'						, IMG => 'packing_tool_tool_box.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'Painting TOOLS'								, IMG => 'painting_tools.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'STANLEY AUTOCARE'							, IMG => 'stanley_autocare.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'STANLEY DISCONTINUE'							, IMG => 'stanley_discontinue.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'STANLEY HAND TOOLS'							, IMG => 'stanley_hand_tools.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'STANLEY MECHANIC TOOLS'						, IMG => 'stanley_mechanic_tools.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'STRIKING & STRUCK TOOLS'						, IMG => 'striking_struck_tools.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'TEKIRO PRODUCTS'								, IMG => 'tekiro_products.jpg'							, DESC => '[Placeholder]',],
		],
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
			[TITLE => 'A5 J.I.T GENERAL GOODS'						, IMG => 'a5_jit_general_goods.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'ASTERI LADDER'								, IMG => 'asteri_ladder.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'CLEANING TOOLS'								, IMG => 'cleaning_tools.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'CURTAIN ACCESSORIES'							, IMG => 'curtain_accessories.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'DAVCO'										, IMG => 'davco.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'DEVON'										, IMG => 'devon.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'FLEXIBLE HOSE'								, IMG => 'flexible_hose.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'HARDEX'										, IMG => 'hardex.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'HOOK,C PIN,SHELF & L BRACKET & SIMILARTY'	, IMG => 'hook_c_pin_shelf_l_bracket_similarty.jpg'		, DESC => '[Placeholder]',],
			[TITLE => 'HOSE'										, IMG => 'hose.jpg'										, DESC => '[Placeholder]',],
			[TITLE => 'HOSE ACCESORIES'								, IMG => 'hose_accessories.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'HOSE CLIP'									, IMG => 'hose_clip.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'IKEA PRODUCTS'								, IMG => 'ikea_products.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'KOYA PRODUCTS'								, IMG => 'koya_products.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'L.F HOUSEHOLD PRODUCTS'						, IMG => 'ladder.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'LADDER'										, IMG => 'ladder_production.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'LADDER PRODUCTION'							, IMG => 'lazor_general_tools.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'LAZOR GENERAL TOOLS'							, IMG => 'lazor_ladder.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'LAZOR LADDER'								, IMG => 'lf_householdProducts.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'MIX'											, IMG => 'mix.jpg'										, DESC => '[Placeholder]',],
			[TITLE => 'OFFER ITEM'									, IMG => 'offer_item.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'RACK'										, IMG => 'rack.jpg'										, DESC => '[Placeholder]',],
			[TITLE => 'REXCO'										, IMG => 'rexco.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'RUBBER MOUNTING'								, IMG => 'rubber_mounting.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'SCP'											, IMG => 'scp.jpg'										, DESC => '[Placeholder]',],
			[TITLE => 'SELLEYS'										, IMG => 'selleys.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'SIKA'										, IMG => 'sika.jpg'										, DESC => '[Placeholder]',],
			[TITLE => 'STATIONERY'									, IMG => 'stationery.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'TRANSP, J.I.T, SERV, DIS, UNDERBILL'			, IMG => 'transp_jit_serv_dis_underbill.jpg'			, DESC => '[Placeholder]',],
			[TITLE => 'WD-40'										, IMG => 'wd_40.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'WHEEL BARROW & TROLLEY'						, IMG => 'wheel_barrow_trolley.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'WHEELS'										, IMG => 'wheels.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'YKTF PRODUCTS'								, IMG => 'yktf_products.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'GASKET, RUBBER SHEET & SIMILARTY'			, IMG => 'gasket_rubber_sheet_similarty.jpg'			, DESC => '[Placeholder]',],
			[TITLE => 'PLASTIC SHEETS'								, IMG => 'plastic_sheets.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'HANDLE'										, IMG => 'handle.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'HINGES'										, IMG => 'hinges.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'JACK, CHAIN BLK & ACCESSORIES'				, IMG => 'jack_chain_blk_accessories.jpg'				, DESC => '[Placeholder]',],
			[TITLE => 'LOUVRES, DOORS & ACCESSORIES'				, IMG => 'louvres_doors_accessories.jpg'				, DESC => '[Placeholder]',],
			[TITLE => 'ROPE & CHAIN'								, IMG => 'rope_chain.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'SAND PAPER'									, IMG => 'sand_paper.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'SCAFFOLDING & ACCESSORIES'					, IMG => 'scaffolding_accessories.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'TOWER BOLTS'									, IMG => 'tower_bolts.jpg'								, DESC => '[Placeholder]',],
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
			[TITLE => 'BEARING'										, IMG => 'bearing.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'HARRY PRODUCTS'								, IMG => 'harry_products.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'WELDING ROD & ACCESPRIES'					, IMG => 'welding_rod_accespries.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'WALRUS PRODUCTS'								, IMG => 'walrus_products.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'PERIPHERAL PUMPS'							, IMG => '.jpg'											, DESC => '[Placeholder]',],
			[TITLE => 'WELDING MACHINE'								, IMG => '.jpg'											, DESC => '[Placeholder]',],
			[TITLE => 'HIGH PRESSURE REGULATOR'						, IMG => '.jpg'											, DESC => '[Placeholder]',],
			[TITLE => 'GENERATOR'									, IMG => '.jpg'											, DESC => '[Placeholder]',],
			[TITLE => 'WATER PUMP'									, IMG => '.jpg'											, DESC => '[Placeholder]',],
			[TITLE => 'CENTRIFUGAL PUMP'							, IMG => '.jpg'											, DESC => '[Placeholder]',],
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
			[TITLE => '3M PRODUCTS'									, IMG => '3m_products.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'ABUS'										, IMG => 'abus.jpg'										, DESC => '[Placeholder]',],
			[TITLE => 'AMAN / VIRO'									, IMG => 'aman_viro.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'BUICK'										, IMG => 'buick.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'LAZOR HAND GLOVE'							, IMG => 'lazor_hand_glove.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'LAZOR LOCK'									, IMG => 'lazor_lock.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'MIX LOCKS'									, IMG => 'mix_locks.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'SAFETY EQUIPMENTS'							, IMG => 'safety_equipments.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'SAFETY SHOES'								, IMG => 'safety_shoes.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'SOLEX'										, IMG => 'solex.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'STANLEY LOCK'								, IMG => 'stanley_lock.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'STANLEY PADLOCK DISCONTINUE'					, IMG => 'stanley_padlock_discontinue.jpg'				, DESC => '[Placeholder]',],
			[TITLE => 'TRI-CIRCLE'									, IMG => 'tri_circle.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'YALE'										, IMG => 'yale.jpg'										, DESC => '[Placeholder]',],
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
			[TITLE => 'BATTERY'										, IMG => 'battery.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'ECOLINK PRODUCTS'							, IMG => 'ecolink_products.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'ELECTRICAL ACCESSORIES'						, IMG => 'electrical_accessories.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'FABER PRODUCTS'								, IMG => 'faber_products.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'KHIND PRODUCT'								, IMG => 'khind_product.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'LITE ME PRODUCTS'							, IMG => 'lite_me_products.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'NICRON PRODUCTS'								, IMG => 'nicron_products.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'PHILIPS'										, IMG => 'philips.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'PHILIPS DISCONTINUE'							, IMG => 'philips_discontinue.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'SENCO PRODUCTS'								, IMG => 'senco_products.jpg'							, DESC => '[Placeholder]',],
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
			[TITLE => 'DOCASA SANITARYWARE'							, IMG => 'docasa_sanitaryware.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'KHE ACCESSORIES'								, IMG => 'khe_accessories.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'KHE CERAMIC'									, IMG => 'khe_ceramic.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'KHE DISCONTINUE'								, IMG => 'khe_discontinue.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'KHE RACKING'									, IMG => 'khe_rack.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'KHE SINK'									, IMG => 'khe_sink.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'KHE TAP'										, IMG => 'khe_tap.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'MILANO PRODUCT'								, IMG => 'milano_product.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'PIPE FITTING - BRASS, S/STEEL & COPPER'		, IMG => 'pipe_fitting_brass_s_steel_copper.jpg'		, DESC => '[Placeholder]',],
			[TITLE => 'PIPE FITTING - POLYPIPE'						, IMG => 'pipe_fitting_gi.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'PIPE FITTING - PVC & U-PVC'					, IMG => 'pipe_fitting_polypipe.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'PIPE FITTING -G.I'							, IMG => 'pipe_fitting_pvc_u_pvc.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'TOILET SET, CISTERM, SINK & DRAINAGE'		, IMG => 'toilet_set_cisterm_sink_drainage.jpg'			, DESC => '[Placeholder]',],
			[TITLE => 'VIP PRODUCT'									, IMG => 'vip_product.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'WATER TAP & GATE, BALL VALVES'				, IMG => 'water_tap_gate_ball_valves.jpg'				, DESC => '[Placeholder]',],
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
			[TITLE => 'AKAIDO PRODUCTS'								, IMG => 'akaido.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'BOSCH'										, IMG => 'bosch.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'COMPRESSOR & AIR FITTING'					, IMG => 'compressor_air_fitting.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'DONG CHENG PRODUCTS'							, IMG => 'dong_cheng_products.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'HIKOKI'										, IMG => 'hikoki.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'HITACHI & CARBON BRUSH'						, IMG => 'hitachi_carbon_brush.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'JET MASTER'									, IMG => 'jet_master.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'KANO & VOMAX PRODUCTS'						, IMG => 'kano_vomax_products.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'KARCHER'										, IMG => 'karcher.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'LAVOR'										, IMG => 'lavor.jpg'									, DESC => '[Placeholder]',],
			[TITLE => 'LAVOR ACCESSORIES'							, IMG => 'lavor_accessories.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'LAVOR SPARE PART'							, IMG => 'lavor_spare_part.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'MAKITA - TC INACTIVE'						, IMG => 'makita_ac_mt.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'MAKITA AC - MT'								, IMG => 'makita_ac_tools.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'MAKITA AC TOOLS'								, IMG => 'makita_accessory.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'MAKITA ACCESSORY'							, IMG => 'makita_dc_tools.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'MAKITA DC TOOLS'								, IMG => 'makita_dc_tools_cleaner.jpg'					, DESC => '[Placeholder]',],
			[TITLE => 'MAKITA DC TOOLS - CLEANER'					, IMG => 'makita_dc_tools_ope.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'MAKITA DC TOOLS - OPE'						, IMG => 'makita_spare_parts.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'MAKITA SPARE PARTS'							, IMG => 'makita_tc_inactive.jpg'						, DESC => '[Placeholder]',],
			[TITLE => 'VACMASTER'									, IMG => 'vacmaster.jpg'								, DESC => '[Placeholder]',],
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
			[TITLE => 'COLOURLAND PAINT'							, IMG => 'colourland_paint.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'DULUX PAINT'									, IMG => 'dulux_paint.jpg'								, DESC => '[Placeholder]',],
			[TITLE => 'KANGAROO PAINT'								, IMG => 'kangaroo_paint.jpg'							, DESC => '[Placeholder]',],
			[TITLE => 'SPRAY PAINT, SPIRIT & MIX PAINT'				, IMG => 'spray_paint_spirit_max_paints.jpg'			, DESC => '[Placeholder]',],
			[TITLE => 'TRANS PAINT'									, IMG => 'trans_paint.jpg'								, DESC => '[Placeholder]',],
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