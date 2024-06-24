<?php

class Product{
	public $title;

    // Constructor
    public function __construct($title, $img) {
        $this->title = $title;
        $this->imgSrc = $img;
    }
}

$building_materials = [
	new Product('CEMENT'									, ''),
	new Product('STEEL BAR'									, ''),
	new Product('YMC'										, ''),
	new Product('DQ'										, ''),
	new Product('YRC'										, ''),
	new Product('YKWI BAR CUT & BEND'						, ''),
	new Product('GI & PVC, HARD DRAWN WIRE'					, ''),
	new Product('GI GRILL, WIRE MESH'						, ''),
	new Product('CL FENCE & BARBED WIRE'					, ''),
	new Product('VERSATILE FENCE, FITTING'					, ''),
	new Product('YKWI PRODUCT SPECIAL ORDER'				, ''),
	new Product('GI, PPGI, PLAIN SHEET'						, ''),
	new Product('ROOFING-CORRUGATED, TRANSPARENT & RIDGES'	, ''),
	new Product('YUNCO PRODUCT SPECIAL ORDER'				, ''),
	new Product('ASTEEL ROOFING PRODUCT'					, ''),
	new Product('CAPPING, FLASHING, GUTTER'					, ''),
	new Product('TRUSS, PURLIN, U-PARTITION'				, ''),
	new Product('ROOFING PRODUCTION'						, ''),
	new Product('PURLIN PRODUCTION'							, ''),
	new Product('DOOR FRAME'								, ''),
	new Product('ROOFING ACCESSORIES'						, ''),
	new Product('HEXAGONAL WIRE NETTING'					, ''),
	new Product('NETTING & MESH - MOSQUITO, G.I COATED'		, ''),
	new Product('GABION'									, ''),
	new Product('ANGLE IRON BAR'							, ''),
	new Product('M.S FLAT, SQUARE BAR, IRON GATE'			, ''),
	new Product('HOLLOW SECTION'							, ''),
	new Product('I-BEAM'									, ''),
	new Product('U-CHANNEL'									, ''),
	new Product('G.I. PIPE'									, ''),
	new Product('UPVC PIPE'									, ''),
	new Product('BLACK PIPE'								, ''),
	new Product('PVC PIPE'									, ''),
	new Product('HDPE PIPE'									, ''),
	new Product('CHROME, STEEL, COPPER TUBE'				, ''),
	new Product('BRICK'										, ''),
	new Product('INSULATION'								, ''),
	new Product('YH LAMINATED PRODUCTS'						, ''),
	new Product('PRIMAFLEX SHEET'							, ''),
	new Product('GYPSUM BOARD'								, ''),
	new Product('M.S PLAIN PLATE'							, ''),
	new Product('WOOD'										, ''),
	new Product('PLYWOOD'									, ''),
];

$bolts_fasteners = [
	new Product('BOLT & NUT - UNC,S/STEEL,BRASS & OTHERS'	, ''),
	new Product('BOLT & NUT'								, ''),
	new Product('STUD BOLT - MS, ZP, S/S 304'				, ''),
	new Product('NUTS, BOLT & ZP BOLT & NUT'				, ''),
	new Product('WASHER-MS,S/S,BRASS,HDG,FIBRE & SPRING'	, ''),
	new Product('POINTED SCREW'								, ''),
	new Product('SELF DRILLING SCREW'						, ''),
	new Product('SCREW - BSW SOCKET & CSK MACHINE'			, ''),
	new Product('NAIL - COIL, ROOFING & OTHER'				, ''),
	new Product('JAGUAR IRON NAIL'							, ''),
	new Product('CONCRETE NAIL'								, ''),
	new Product('RAW & WALL PLUG'							, ''),
	new Product('LAZOR BOLTS & FASTENERS'					, ''),
	new Product('ALUMINIUM RIVET - PATTA, OTHERS'			, ''),
];

$hand_tools = [
	new Product('MECHANIC TOOLS'							, ''),
	new Product('ELORA, SOUTHEN GRACE, WING POH, WYNN\'S'	, ''),
	new Product('TEKIRO PRODUCTS'							, ''),
	new Product('HELLO PRODUCTS'							, ''),
	new Product('HOLDING TOOLS'								, ''),
	new Product('NIPPLE, GREASE GUN, OIL CAN'				, ''),
	new Product('PACKING TOOL & TOOL BOX'					, ''),
	new Product('STRIKING & STRUCK TOOLS'					, ''),
	new Product('LETTER BOX & NUMBERING'					, ''),
	new Product('BOLT CUTTER, FILE, KNIFE'					, ''),
	new Product('GRINDING DISC, CUTTING WHEELS, DRILL BIT'	, ''),
	new Product('AKODA PRODUCTS'							, ''),
	new Product('MEASURING TAPE & MARKING TOOLS'			, ''),
	new Product('PAINTING TOOLS'							, ''),
	new Product('LAZOR PAINTING TOOLS'						, ''),
	new Product('GARDEN TOOLS - SHOVEL & HOES'				, ''),
	new Product('IRWIN & LENOX ACCESSORIES'					, ''),
	new Product('IRWIN HAND TOOLS'							, ''),
	new Product('IRWIN & LENOX DISCONTINUE'					, ''),
	new Product('STANLEY HAND TOOLS'						, ''),
	new Product('STANLEY MECHANIC TOOLS'					, ''),
	new Product('STANLEY AUTOCARE'							, ''),
	new Product('STANLEY DISCONTINUE'						, ''),
];

$general_household = [
	new Product('IKEA PRODUCTS'								, ''),
	new Product('L.F HOUSEHOLD PRODUCTS'					, ''),
	new Product('STATIONERY'								, ''),
	new Product('HOOK,C PIN,SHELF & L BRACKET & SIMILARTY'	, ''),
	new Product('CURTAIN ACCESORIES'						, ''),
	new Product('LAZOR GENERAL TOOLS'						, ''),
	new Product('YKTF PRODUCTS'								, ''),
	new Product('HOSE'										, ''),
	new Product('HOSE ACCESORIES'							, ''),
	new Product('HOSE CLIP'									, ''),
	new Product('FLEXIBLE HOSE'								, ''),
	new Product('CLEANING TOOLS'							, ''),
	new Product('LADDER'									, ''),
	new Product('LADDER PRODUCTION'							, ''),
	new Product('LAZOR LADDER'								, ''),
	new Product('ASTERI LADDER'								, ''),
	new Product('RACK'										, ''),
	new Product('WHEELS'									, ''),
	new Product('WHEEL BARROW & TROLLEY'					, ''),
	new Product('RUBBER MOUNTING'							, ''),
	new Product('SIKA'										, ''),
	new Product('HARDEX'									, ''),
	new Product('SCP'										, ''),
	new Product('DEVON'										, ''),
	new Product('SELLEYS'									, ''),
	new Product('WD-40'										, ''),
	new Product('REXCO'										, ''),
	new Product('DAVCO'										, ''),
	new Product('KOYA PRODUCTS'								, ''),
	new Product('MIX'										, ''),
	new Product('TRANSP, J.I.T, SERV, DIS, UNDERBILL'		, ''),
	new Product('OFFER ITEM'								, ''),
	new Product('A5 J.I.T GENERAL GOODS'					, ''),
];

$welding_machinery = [
	new Product('MISCELLANEOUS / MIXED'				, ''),
	new Product('V-BELT & PULLEYS'					, ''),
	new Product('WALRUS PRODUCTS'					, ''),
	new Product('GASKET, RUBBER SHEET & SIMILARTY'	, ''),
	new Product('PLASTIC SHEETS'					, ''),
	new Product('WELDING ROD & ACCESPRIES'			, ''),
	new Product('HARRY PRODUCTS'					, ''),
	new Product('BEARING'							, ''),
	new Product('SCAFFOLDING & ACCESSORIES'			, ''),
	new Product('LOUVRES, DOORS & ACCESSORIES'		, ''),
	new Product('SAND PAPER'						, ''),
	new Product('HINGES'							, ''),
	new Product('TOWER BOLTS'						, ''),
	new Product('HANDLE'							, ''),
	new Product('JACK, CHAIN BLK & ACCESSORIES'		, ''),
	new Product('ROPE & CHAIN'						, ''),
];

$safety_security = [
	new Product('SAFETY SHOES'					, ''),
	new Product('SAFETY EQUIPMENTS'				, ''),
	new Product('3M PRODUCTS'					, ''),
	new Product('LAZOR HAND GLOVE'				, ''),
	new Product('ABUS'							, ''),
	new Product('SOLEX'							, ''),
	new Product('YALE'							, ''),
	new Product('TRI-CIRCLE'					, ''),
	new Product('AMAN / VIRO'					, ''),
	new Product('BUICK'							, ''),
	new Product('LAZOR LOCK'					, ''),
	new Product('MIX LOCKS'						, ''),
	new Product('STANLEY LOCK'					, ''),
	new Product('STANLEY PADLOCK DISCONTINUE'	, ''),
];

$electrical_accessories = [
	new Product('BATTERY'					, ''),
	new Product('NICRON PRODUCTS'			, ''),
	new Product('ECOLINK PRODUCTS'			, ''),
	new Product('LITE ME PRODUCTS'			, ''),
	new Product('SENCO PRODUCTS'			, ''),
	new Product('ELECTRICAL ACCESSORIES'	, ''),
	new Product('PHILIPS'					, ''),
	new Product('PHILIPS DISCONTINUE'		, ''),
	new Product('KHIND PRODUCT'				, ''),
	new Product('FABER PRODUCTS'			, ''),
];

$plumbing = [
	new Product('WATER TAP & GATE, BALL VALVES'			, ''),
	new Product('VIP PRODUCT'							, ''),
	new Product('MILANO PRODUCT'						, ''),
	new Product('TOILET SET, CISTERM, SINK & DRAINAGE'	, ''),
	new Product('KHE TAP'								, ''),
	new Product('KHE RACKING'							, ''),
	new Product('KHE SINK'								, ''),
	new Product('KHE CERAMIC'							, ''),
	new Product('KHE ACCESSORIES'						, ''),
	new Product('KHE DISCONTINUE'						, ''),
	new Product('DOCASA SANITARYWARE'					, ''),
	new Product('PIPE FITTING -G.I'						, ''),
	new Product('PIPE FITTING - PVC & U-PVC'			, ''),
	new Product('PIPE FITTING - POLYPIPE'				, ''),
	new Product('PIPE FITTING - BRASS, S/STEEL & COPPER', ''),
];

$power_tools = [
	new Product('JET MASTER'				, ''),
	new Product('VACMASTER'					, ''),
	new Product('KANO & VOMAX PRODUCTS'		, ''),
	new Product('DONG CHENG PRODUCTS'		, ''),
	new Product('LAVOR'						, ''),
	new Product('LAVOR ACCESSORIES'			, ''),
	new Product('LAVOR SPARE PART'			, ''),
	new Product('COMPRESSOR & AIR FITTING'	, ''),
	new Product('BOSCH'						, ''),
	new Product('AKAIDO PRODUCTS'			, ''),
	new Product('HITACHI & CARBON BRUSH'	, ''),
	new Product('HIKOKI'					, ''),
	new Product('KARCHER'					, ''),
	new Product('MAKITA DC TOOLS'			, ''),
	new Product('MAKITA DC TOOLS - OPE'		, ''),
	new Product('MAKITA DC TOOLS - CLEANER'	, ''),
	new Product('MAKITA AC TOOLS'			, ''),
	new Product('MAKITA AC - MT'			, ''),
	new Product('MAKITA ACCESSORY'			, ''),
	new Product('MAKITA SPARE PARTS'		, ''),
	new Product('MAKITA - TC INACTIVE'		, ''),
];

$paint = [
	new Product('SPRAY PAINT, SPIRIT & MIX PAINTS'	, ''),
	new Product('DULUX PAINT'						, ''),
	new Product('KANGAROO PAINT'					, ''),
	new Product('COLOURLAND PAINT'					, ''),
	new Product('TRANS PAINT'						, ''),
];











?>
