<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $product = new Product();
        $product->name = 'Polystar 260L Chest Freezer';
        $product->brand_id = 1;
        $product->features = "
        size: 260L,
        Adjustable thermostat,
        Manual defrost,
        100% HFC Free & FCKW Free,
        fast freezing function
        ";
        $product->twenty_price = "115700";
        $product->fourty_price = "110000";
        $product->image = "polystar-fridge-3-medium.png";
        $product->user_id = 1;
        $product->category_id = 1;
        $product->popularity = 3;
        $product->save();
        //2
        $product = new Product();
        $product->name = 'Polystar 185L Chest Freezer';
        $product->brand_id = 1;
        $product->features = "
        size: 185L,
        Adjustable Thermostat,
        Fast freezing function,
        100% HFC free & FCKW free,
        Manual defrost
        ";
        $product->twenty_price = "112600";
        $product->fourty_price = "106300";
        $product->image = "polystar-fridge-4-medium.png";
        $product->user_id = 2;
        $product->category_id = 1;
        $product->popularity = 2;
        $product->save();
        //3
        $product = new Product();
        $product->name = 'Polystar 165L Chest Freezer';
        $product->brand_id = 1;
        $product->features = "
        size: 165L,
        Adjustable thermostat,
        100% HFC free & FCKW free,
        Fast freezing function,
        Fully tropicalised
        ";
        $product->twenty_price = "103700";
        $product->fourty_price = "98300";
        $product->image = "polystar-fridge-6-medium.png";
        $product->user_id = 1;
        $product->category_id = 1;
        $product->popularity = 2;
        $product->save();
        //4
        $product = new Product();
        $product->name = 'Polystar 127L Chest Freezer';
        $product->brand_id = 1;
        $product->features = "
        size: 127L,
        Adjustable thermostat,
        100% HFC free & FCKW free,
        Fast freezing function,
        Fully tropicalised
        ";
        $product->twenty_price = "87100";
        $product->fourty_price = "82300";
        $product->image = "polystar-fridge-7-medium.png";
        $product->user_id = 1;
        $product->category_id = 1;
        $product->popularity = 2;
        $product->save();
        //5
        $product = new Product();
        $product->name = 'Polystar 320LGR Chest Freezer';
        $product->brand_id = 1;
        $product->features = "
        Model: PVCF-320LGR,
        Capacity: 320 Litres,
        Color: Silver,
        Adjustable Thermostat,
        Fast Freezing Function,
        100% HFC Free & FCKW Free,
        Zintec Coated Anti-rust,
        Top Glass,
        Single Door,
        Stylish Handle,
        Easy to Clean Interior,
        Removable Storage Basket,
        Low Voltage Technology
        ";
        $product->twenty_price = "141200";
        $product->fourty_price = "134000";
        $product->image = "polystar-fridge-8-medium.png";
        $product->user_id = 1;
        $product->category_id = 1;
        $product->popularity = 3;
        $product->save();
        //6
        $product = new Product();
        $product->name = 'Polystar 519LGR Chest Freezer';
        $product->brand_id = 1;
        $product->features = "
        size: 519LGR,
        Mechanical Temperature Control,
        Adjustable thermostat,
        Manual defrost,
        100% HFC free & FCKW free,
        Fast freezing function
        ";
        $product->twenty_price = "204100";
        $product->fourty_price = "192400";
        $product->image = "polystar-fridge-9-medium.png";
        $product->user_id = 1;
        $product->category_id = 1;
        $product->popularity = 2;
        $product->save();
        //7
        
        //8
        
        //9
        $product = new Product();
        $product->name = 'Polystar 261L Refrigerator';
        $product->brand_id = 1;
        $product->features = "
        size: 261L,
        Mechanical temperature control,
        Grip and recessed handle optional,
        Separate freezer compartment,
        Adjustable leg,
        Separate transparent crisper,
        Interior light,
        Easy rolling wheels
        ";
        $product->twenty_price = "129200";
        $product->fourty_price = "122300";
        $product->image = "midea-fridge-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 3;
        $product->save();
        //10
        $product = new Product();
        $product->name = 'Polystar 203LR Refrigerator';
        $product->brand_id = 1;
        $product->features = "
        size: 203LR,
        Full range temperature control,
        Inside super frozen evaporator,
        100% HFC Free & FCKW Free,
        High density foaming for energy saving
        ";
        $product->twenty_price = "82700";
        $product->fourty_price = "78400";
        $product->image = "polystar-fridge-10-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 3;
        $product->save();
        //11
        $product = new Product();
        $product->name = 'Polystar 78LB Refrigerator';
        $product->brand_id = 1;
        $product->features = "
        size: 78LB
        ";
        $product->twenty_price = "48200";
        $product->fourty_price = "46100";
        $product->image = "polystar-fridge-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 2;
        $product->save();
        //12
        $product = new Product();
        $product->name = 'Polystar 172SL Refrigerator';
        $product->brand_id = 1;
        $product->features = "
        size: 172SL,
        Adjustable thermostat,
        Manual defrost,
        CFC free,
        Outside condenser
        ";
        $product->twenty_price = "64700";
        $product->fourty_price = "60700";
        $product->image = "polystar-fridge-11-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 3;
        $product->save();
        //13
        $product = new Product();
        $product->name = 'Polystar 177SL Refrigerator';
        $product->brand_id = 1;
        $product->features = "
        size: 177SL,
        Adjustable thermostat,
        Adjustable leg,
        Mechanical temperature,
        Outside condenser,
        CFC Free
        ";
        $product->twenty_price = "61700";
        $product->fourty_price = "58400";
        $product->image = "polystar-fridge-12-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 2;
        $product->save();
        //14
        $product = new Product();
        $product->name = 'Polystar 176WL Refrigerator';
        $product->brand_id = 1;
        $product->features = "
        size: 176WL,
        Adjustable thermostat,
        Manual defrost,
        100% HFC free & FCKW free,
        Fast freezing function
        ";
        $product->twenty_price = "60100";
        $product->fourty_price = "56500";
        $product->image = "polystar-fridge-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 3;
        $product->save();
        //15
        $product = new Product();
        $product->name = 'Polystar 10KG Washing Machine';
        $product->brand_id = 1;
        $product->features = "
        size: 10KG
        ";
        $product->twenty_price = "85600";
        $product->fourty_price = "80500";
        $product->image = "polystar-washin-m-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 3;
        $product->popularity = 2;
        $product->save();
        //16
        $product = new Product();
        $product->name = 'Polystar 6.5KG Washing Machine';
        $product->brand_id = 1;
        $product->features = "
        size: 6.5KG
        ";
        $product->twenty_price = "40600";
        $product->fourty_price = "38400";
        $product->image = "polystar-washin-m-3-medium.png";
        $product->user_id = 1;
        $product->category_id = 3;
        $product->popularity = 3;
        $product->save();
        //17
        $product = new Product();
        $product->name = 'Century 8KG Washing Machine';
        $product->brand_id = 7;
        $product->features = "
        size: 8KG,
        Twin Tub Washing Machine,
        Water-Prook & Rust Proof Full Platic Body,
        NEw Box Type Lint Filter,
        Over-Load Protection,
        Buzzer & Timer,
        Transparent Lid,
        Easy to Operate,
        Washing Capacity 8KG Spin Capacity 6G
        ";
        $product->twenty_price = "73600";
        $product->fourty_price = "70000";
        $product->image = "century-washing-m-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 3;
        $product->popularity = 2;
        $product->save();
        //18
        $product = new Product();
        $product->name = 'Elepaq 3.5KVA Generator';
        $product->brand_id = 5;
        $product->features = "
        Capacity: 3.5KVA
        ";
        $product->twenty_price = "84100";
        $product->fourty_price = "78700";
        $product->image = "elepaq-generator-medium.png";
        $product->user_id = 1;
        $product->category_id = 4;
        $product->popularity = 3;
        $product->save();
        //19
        $product = new Product();
        $product->name = 'Elepaq 2.2KVA Generator';
        $product->brand_id = 5;
        $product->features = "
        Capacity: 2.2KVA
        ";
        $product->twenty_price = "76700";
        $product->fourty_price = "72500";
        $product->image = "elepaq-generator-medium.png";
        $product->user_id = 1;
        $product->category_id = 4;
        $product->popularity = 2;
        $product->save();
        //20
        $product = new Product();
        $product->name = 'Tiger 1.2KVA Generator';
        $product->brand_id = 8;
        $product->features = "
        Capacity: 1.2KVA
        ";
        $product->twenty_price = "39100";
        $product->fourty_price = "36600";
        $product->image = "tiger-generator-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 4;
        $product->popularity = 3;
        $product->save();
        //21
        $product = new Product();
        $product->name = 'Polystar 20" Standing Fan';
        $product->brand_id = 1;
        $product->features = '
        20"
        ';
        $product->twenty_price = "31500";
        $product->fourty_price = "30000";
        $product->image = "polystar-fan-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 5;
        $product->popularity = 2;
        $product->save();
        //22
        $product = new Product();
        $product->name = 'Century 3Gas 1Electric Cooker';
        $product->brand_id = 7;
        $product->features = '        
        1 Electric 3 Gas burner,
        Oven capacity- 60L ,
        Stainless steel body ,
        Pulse ignition for gas burner,
        Manual ignition for gas oven,
        Up and down gas burner in oven ,
        Oven lamp,
        Oven Grid,
        Extra rotisserie and tray,
        Double glass oven door,
        Tempered glass lid,
        Enameled trivet for gas burner 
        ';
        $product->twenty_price = "75200";
        $product->fourty_price = "70700";
        $product->image = "century-cooker-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 6;
        $product->popularity = 3;
        $product->save();
        //23
        $product = new Product();
        $product->name = 'Polystar 3Gas Bunner Cooker';
        $product->brand_id = 1;
        $product->features = '
        3 GAS BURNERS, 1 ELECTRIC,
        Glass top,
        Aluminum burners with brass burner caps,
        1 Hotplate,
        Auto Ignition,
        Enamel flat iron grill,
        Knobs with base,
        Downside oven burner
        ';
        $product->twenty_price = "76700";
        $product->fourty_price = "72500";
        $product->image = "polystar-gas-c-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 6;
        $product->popularity = 2;
        $product->save();
        //24
        $product = new Product();
        $product->name = 'Polystar 4Gas Bunner Cooker';
        $product->brand_id = 1;
        $product->features = '
        4 GAS BURNERS,
        Aluminum burners with brass burner caps,
        1 Hotplate,
        Auto Ignition,
        Enamel flat iron grill,
        Knobs with base,
        Downside oven burner
        ';
        $product->twenty_price = "85600";
        $product->fourty_price = "80500";
        $product->image = "polystar-gas-c-4-medium.png";
        $product->user_id = 1;
        $product->category_id = 6;
        $product->popularity = 3;
        $product->save();
        //25
        $product = new Product();
        $product->name = 'Polystar 1.5HP A.C';
        $product->brand_id = 1;
        $product->features = '
        1.5HP
        ';
        $product->twenty_price = "120000";
        $product->fourty_price = "112500";
        $product->image = "polystar-ac-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 7;
        $product->popularity = 2;
        $product->save();
        //26
        $product = new Product();
        $product->name = 'Polystar 1HP A.C';
        $product->brand_id = 1;
        $product->features = '
        1HP
        ';
        $product->twenty_price = "114100";
        $product->fourty_price = "108200";
        $product->image = "polystar-ac-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 7;
        $product->popularity = 2;
        $product->save();
        //27
       
        //28
        $product = new Product();
        $product->name = 'Polystar 20L Microwave Oven';
        $product->brand_id = 1;
        $product->features = '
        20L
        ';
        $product->twenty_price = "31700";
        $product->fourty_price = "30400";
        $product->image = "midea-microwave-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 8;
        $product->popularity = 2;
        $product->save();
        //29
        $product = new Product();
        $product->name = 'Sumo Premium Industrial Sewing Machine';
        $product->brand_id = 9;
        $product->features = '
        Maintenance free,
        Rugged,
        Highly durable,
        Comes with full accesories including Table Stand,
        Optimum performance,
        Complete set with its accessories,
        Table stand
        ';
        $product->twenty_price = "135000";
        $product->fourty_price = "126600";
        $product->image = "sewing-m-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 9;
        $product->popularity = 3;
        $product->save();
        //30
        $product = new Product();
        $product->name = 'Polystar 40" LED Smart TV';
        $product->brand_id = 1;
        $product->features = '
        40"
        ';
        $product->twenty_price = "144200";
        $product->fourty_price = "136500";
        $product->image = "polystar-tv-5-medium.png";
        $product->user_id = 1;
        $product->category_id = 10;
        $product->popularity = 2;
        $product->save();
        //31
        $product = new Product();
        $product->name = 'Polystar 32" LED Smart TV';
        $product->brand_id = 1;
        $product->features = '
        32"
        ';
        $product->twenty_price = "94500";
        $product->fourty_price = "88500";
        $product->image = "polystar-tv-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 10;
        $product->popularity = 3;
        $product->save();
        //32
        $product = new Product();
        $product->name = 'Polystar 32" LED TV';
        $product->brand_id = 1;
        $product->features = '
        32"
        ';
        $product->twenty_price = "87100";
        $product->fourty_price = "82300";
        $product->image = "polystar-tv-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 10;
        $product->popularity = 2;
        $product->save();
        //33
        $product = new Product();
        $product->name = 'Polystar 20" LED TV';
        $product->brand_id = 1;
        $product->features = '
        20"
        ';
        $product->twenty_price = "49500";
        $product->fourty_price = "46300";
        $product->image = "polystar-tv-3-medium.png";
        $product->user_id = 1;
        $product->category_id = 10;
        $product->popularity = 2;
        $product->save();
        //34
        $product = new Product();
        $product->name = 'Infinix 32GB/3GB Zero 4';
        $product->brand_id = 2;
        $product->features = '
        3GB RAM,
        Dual SIM,
        Octa-Core 1.3 GHz Processor,
        32 GB ROM,
        Main Camera 16 MP ,
        Front Camera 8 MP,
        5.5 Inch Gorilla Glass
        ';
        $product->twenty_price = "97600";
        $product->fourty_price = "92200";
        $product->image = "infinix-zero-4-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //35
        $product = new Product();
        $product->name = 'Infinix 16GB/2GB Hot 5';
        $product->brand_id = 2;
        $product->features = '
        16GB, 2GB,
        Screen: 5.5-Inch HD IPS,
        Memory: 1GB RAM, 16GB ROM (expandable up to 32GB),
        CPU: Quad-core 1.3GHz processor,
        Operating System: XOS Based on Android 7 Nougat,
        Camera: 8MP Rear, 5MP Front,
        Battery: 4000mAh capacity Dirac Stereo Widening. Enjoy more enthralling auditory feast. INFINIX HOT5 Lite With
        ';
        $product->twenty_price = "61700";
        $product->fourty_price = "58400";
        $product->image = "infinix-hot-5-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //36
        $product = new Product();
        $product->name = 'Infinix 16GB/1GB Hot 5';
        $product->brand_id = 2;
        $product->features = '
        16GB, 1GB,
        Screen: 5.5-Inch HD IPS,
        Memory: 1GB RAM, 16GB ROM (expandable up to 32GB),
        CPU: Quad-core 1.3GHz processor,
        Operating System: XOS Based on Android 7 Nougat,
        Camera: 8MP Rear, 5MP Front,
        Battery: 4000mAh capacity Dirac Stereo Widening. Enjoy more enthralling auditory feast. INFINIX HOT5 Lite With
        ';
        $product->twenty_price = "55700";
        $product->fourty_price = "52600";
        $product->image = "infinix-hot-5-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 3;
        $product->save();
        //37
        $product = new Product();
        $product->name = 'Tecno 16GB/1GB K7 Spark';
        $product->brand_id = 10;
        $product->features = '
        5.5" Display,
        Android 7.0,
        Quad-Core 1.3GHZ Processor,
        13MP Rear Camera, 5MP Front Camera,
        16GB Internal Memory, 1GB RAM
        ';
        $product->twenty_price = "54100";
        $product->fourty_price = "50700";
        $product->image = "k7-spark-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //38
        $product = new Product();
        $product->name = 'Tecno 1GB K9 Plus';
        $product->brand_id = 10;
        $product->features = '
        1GB
        ';
        $product->twenty_price = "70600";
        $product->fourty_price = "66400";
        $product->image = "k9-plus-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //39
        $product = new Product();
        $product->name = 'Gionee 8GB/1GB P5 Mini';
        $product->brand_id = 4;
        $product->features = '
        4.5" IPS LCD,
        Android 5.0,
        1.3GHz Quad Core Processor,
        5MP Rear Camera, 2MP Front Camera,
        8GB Internal Memory, 1GB RAM
        ';
        $product->twenty_price = "39000";
        $product->fourty_price = "36400";
        $product->image = "p5-mini-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //40
        $product = new Product();
        $product->name = 'Infinix 16GB/2GB Note 4';
        $product->brand_id = 2;
        $product->features = '
        16GB, 2GB
        ';
        $product->twenty_price = "84200";
        $product->fourty_price = "80200";
        $product->image = "infinix-note-4-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //41
        $product = new Product();
        $product->name = 'Itel 8GB/1GB S12';
        $product->brand_id = 3;
        $product->features = '
        8GB, 1GB
        ';
        $product->twenty_price = "39200";
        $product->fourty_price = "36700";
        $product->image = "itel-a12-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //42
        $product = new Product();
        $product->name = 'Tecno 16GB/1GB Droipad 7D';
        $product->brand_id = 10;
        $product->features = '
        SIM: Dual Micro SIM,
        Phone Size: 7 Inch IPS,
        OS: Android 7.0 Nougat,
        Display: 600 x 1024 pixels (169 ppi),
        Memory: 16GB Storage with memory card slot,
        RAM: 1GB,
        Processor: 1.3GHz quad-core,
        Front Camera: 2MP Front Camera,
        Rear Camera: 5MP Rear Camera,
        Network Conn: 3G,
        Battery: 3,000mAh
        ';
        $product->twenty_price = "46700";
        $product->fourty_price = "44400";
        $product->image = "droipad-pad-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //43
        $product = new Product();
        $product->name = 'Android 1GB Royale A1 Fero';
        $product->brand_id = 11;
        $product->features = '
        1Gb Ram,
        5,000 Mah Battery,
        Hd Ips Display,
        Xensation Glass,
        5 Inch Display,
        8Mp + 5Mp,
        Quad Core Processor,
        32Gb Storage
        ';
        $product->twenty_price = "48000";
        $product->fourty_price = "44500";
        $product->image = "royale-a1-fero-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //44
        $product = new Product();
        $product->name = 'Android 1GB Vigitab';
        $product->brand_id = 12;
        $product->features = '
        10.1" Android OS,
        1GB RAM,
        A7 Quad-core 1.2Ghx, Eight logic cores,
        1GB DDR3,
        16GB On Board Storage
        ';
        $product->twenty_price = "51200";
        $product->fourty_price = "48500";
        $product->image = "vigitab-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //45
        $product = new Product();
        $product->name = 'Ox 20" Industrial Fan';
        $product->brand_id = 13;
        $product->features = '
        20"
        ';
        $product->twenty_price = "33100";
        $product->fourty_price = "30700";
        $product->image = "ox-fan-medium.png";
        $product->user_id = 1;
        $product->category_id = 5;
        $product->popularity = 2;
        $product->save();
        //46
        $product = new Product();
        $product->name = 'Polystar 2 Taps Water Dispenser';
        $product->brand_id = 1;
        $product->features = '
        2 Taps,
        Double door design,
        Fridge / Freezer,
        Water collector to prevent spilling,
        Replaceable pencil puncture,
        Hot/Cold water,
        1 Year Warranty
        ';
        $product->twenty_price = "61500";
        $product->fourty_price = "58100";
        $product->image = "polystar-water-d-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 12;
        $product->popularity = 2;
        $product->save();
        //47
        $product = new Product();
        $product->name = 'Polystar HT520 Home Theatre';
        $product->brand_id = 1;
        $product->features = '
        HT520
        ';
        $product->twenty_price = "82500";
        $product->fourty_price = "78000";
        $product->image = "polystar-sound-s-4-medium.png";
        $product->user_id = 1;
        $product->category_id = 13;
        $product->popularity = 2;
        $product->save();
        //48
        $product = new Product();
        $product->name = 'Polystar VT607 Home Theatre';
        $product->brand_id = 1;
        $product->features = '
        VT607
        ';
        $product->twenty_price = "43500";
        $product->fourty_price = "40500";
        $product->image = "polystar-sound-s-3-medium.png";
        $product->user_id = 1;
        $product->category_id = 13;
        $product->popularity = 2;
        $product->save();
        //49
        $product = new Product();
        $product->name = 'HP 255 4GB/500HDD Laptop';
        $product->brand_id = 14;
        $product->features = '
        Memory - 4GB,
        Hard disk - 500GB,
        Graphics Card  -    Intel HD Graphics,
        Screen - 15.6 HD BV LED-backlight Display,
        SuperMulti 8X DVD-RW,
        Network - WiFi 802.11 bgn, Bluetooth,
        Webcam + Mic, 
        ';
        $product->twenty_price = "142700";
        $product->fourty_price = "134600";
        $product->image = "hp-255-medium.png";
        $product->user_id = 1;
        $product->category_id = 14;
        $product->popularity = 2;
        $product->save();
        //50
        $product = new Product();
        $product->name = 'HP 15 Celeron 4GB/500HDD Laptop';
        $product->brand_id = 14;
        $product->features = ' 
        Operating System : Windows 10,
        HDD Size: 500gb RAM,
        RAM :4gb,
        Processor : Intel Celeron
        ';
        $product->twenty_price = "151600";
        $product->fourty_price = "142600";
        $product->image = "hp-15-celeron-medium.png";
        $product->user_id = 1;
        $product->category_id = 14;
        $product->popularity = 2;
        $product->save();

    }
}
