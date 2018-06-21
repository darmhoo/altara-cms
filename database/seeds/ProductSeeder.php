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
        $product->name = 'CHEST FREEZER';
        $product->brand_id = 1;
        $product->features = "
        size: 260L,
        Adjustable thermostat,
        Manual defrost,
        100% HFC Free & FCKW Free,
        fast freezing function
        ";
        $product->rprice = "5,500";
        $product->price = "44,000";
        $product->image = "plosytar-fridge-3-medium.png";
        $product->user_id = 1;
        $product->category_id = 1;
        $product->popularity = 3;
        $product->save();
        //2
        $product = new Product();
        $product->name = 'CHEST FREEZER';
        $product->brand_id = 1;
        $product->features = "
        size: 185L,
        Adjustable Thermostat,
        Fast freezing function,
        100% HFC free & FCKW free,
        Manual defrost
        ";
        $product->rprice = "5,300";
        $product->price = "42,700";
        $product->image = "plosytar-fridge-5-medium.png";
        $product->user_id = 2;
        $product->category_id = 1;
        $product->popularity = 2;
        $product->save();
        //3
        $product = new Product();
        $product->name = 'CHEST FREEZER';
        $product->brand_id = 1;
        $product->features = "
        size: 165L,
        Adjustable thermostat,
        100% HFC free & FCKW free,
        Fast freezing function,
        Fully tropicalised
        ";
        $product->rprice = "4,900";
        $product->price = "39,500";
        $product->image = "plosytar-fridge-6-medium.png";
        $product->user_id = 1;
        $product->category_id = 1;
        $product->popularity = 2;
        $product->save();
        //4
        $product = new Product();
        $product->name = 'CHEST FREEZER';
        $product->brand_id = 1;
        $product->features = "
        size: 127L,
        Adjustable thermostat,
        100% HFC free & FCKW free,
        Fast freezing function,
        Fully tropicalised
        ";
        $product->rprice = "4,100";
        $product->price = "33,100";
        $product->image = "plosytar-fridge-7-medium.png";
        $product->user_id = 1;
        $product->category_id = 1;
        $product->popularity = 2;
        $product->save();
        //5
        $product = new Product();
        $product->name = 'CHEST FREEZER';
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
        $product->rprice = "6,700";
        $product->price = "53,600";
        $product->image = "plosytar-fridge-8-medium.png";
        $product->user_id = 1;
        $product->category_id = 1;
        $product->popularity = 3;
        $product->save();
        //6
        $product = new Product();
        $product->name = 'CHEST FREEZER';
        $product->brand_id = 1;
        $product->features = "
        size: 519LGR,
        Mechanical Temperature Control,
        Adjustable thermostat,
        Manual defrost,
        100% HFC free & FCKW free,
        Fast freezing function
        ";
        $product->rprice = "9,600";
        $product->price = "77,200";
        $product->image = "plosytar-fridge-9-medium.png";
        $product->user_id = 1;
        $product->category_id = 1;
        $product->popularity = 2;
        $product->save();
        //7
        $product = new Product();
        $product->name = 'CHEST FREEZER';
        $product->brand_id = 5;
        $product->features = "
        size: 185L,
        Adjustable Thermostat,
        Fast freezing function,
        100% HFC free & FCKW free,
        Manual defrost
        ";
        $product->rprice = "4,900";
        $product->price = "39,900";
        $product->image = "plosytar-fridge-5-medium.png";
        $product->user_id = 1;
        $product->category_id = 1;
        $product->popularity = 3;
        $product->save();
        //8
        $product = new Product();
        $product->name = 'REFRIGERATOR';
        $product->brand_id = 5;
        $product->features = "
        Capacity: 121 L
        Color: White,
        Model: ID HS-121L,
        Number Of Shelves: 4,
        Stabilizer Required: No,
        Star Rating: 5 Star,
        Type: Compact
        ";
        $product->rprice = "3,100";
        $product->price = "25,500";
        $product->image = "midea-fridge-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 2;
        $product->save();
        //9
        $product = new Product();
        $product->name = 'REFRIGERATOR';
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
        $product->rprice = "6,100";
        $product->price = "49,100";
        $product->image = "midea-fridge-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 3;
        $product->save();
        //10
        $product = new Product();
        $product->name = 'REFRIGERATOR';
        $product->brand_id = 1;
        $product->features = "
        size: 203LR,
        Full range temperature control,
        Inside super frozen evaporator,
        100% HFC Free & FCKW Free,
        High density foaming for energy saving
        ";
        $product->rprice = "3,900";
        $product->price = "31,600";
        $product->image = "plosytar-fridge-10-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 3;
        $product->save();
        //11
        $product = new Product();
        $product->name = 'REFRIGERATOR';
        $product->brand_id = 1;
        $product->features = "
        size: 78LB
        ";
        $product->rprice = "2,300";
        $product->price = "18,500";
        $product->image = "plosytar-fridge-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 2;
        $product->save();
        //12
        $product = new Product();
        $product->name = 'REFRIGERATOR';
        $product->brand_id = 1;
        $product->features = "
        size: 172SL,
        Adjustable thermostat,
        Manual defrost,
        CFC free,
        Outside condenser
        ";
        $product->rprice = "3,000";
        $product->price = "24,700";
        $product->image = "plosytar-fridge-11-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 3;
        $product->save();
        //13
        $product = new Product();
        $product->name = 'REFRIGERATOR';
        $product->brand_id = 1;
        $product->features = "
        size: 177SL,
        Adjustable thermostat,
        Adjustable leg,
        Mechanical temperature,
        Outside condenser,
        CFC Free
        ";
        $product->rprice = "2,900";
        $product->price = "23,600";
        $product->image = "plosytar-fridge-12-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 2;
        $product->save();
        //14
        $product = new Product();
        $product->name = 'REFRIGERATOR';
        $product->brand_id = 1;
        $product->features = "
        size: 176WL,
        Adjustable thermostat,
        Manual defrost,
        100% HFC free & FCKW free,
        Fast freezing function
        ";
        $product->rprice = "2,800";
        $product->price = "22,900";
        $product->image = "plosytar-fridge-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 2;
        $product->popularity = 3;
        $product->save();
        //15
        $product = new Product();
        $product->name = 'WASHING MACHINE';
        $product->brand_id = 1;
        $product->features = "
        size: 10KG
        ";
        $product->rprice = "4,000";
        $product->price = "32,500";
        $product->image = "polystar-washin-m-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 3;
        $product->popularity = 2;
        $product->save();
        //16
        $product = new Product();
        $product->name = 'WASHING MACHINE';
        $product->brand_id = 1;
        $product->features = "
        size: 6.5KG
        ";
        $product->rprice = "1,900";
        $product->price = "15,600";
        $product->image = "polystar-washin-m-3-medium.png";
        $product->user_id = 1;
        $product->category_id = 3;
        $product->popularity = 3;
        $product->save();
        //17
        $product = new Product();
        $product->name = 'WASHING MACHINE';
        $product->brand_id = 8;
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
        $product->rprice = "3,300";
        $product->price = "27,100";
        $product->image = "century-washing-m-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 3;
        $product->popularity = 2;
        $product->save();
        //18
        $product = new Product();
        $product->name = 'GENERATOR';
        $product->brand_id = 6;
        $product->features = "
        Capacity: 3.5KVA
        ";
        $product->rprice = "3,900";
        $product->price = "31,900";
        $product->image = "elepaq-generator-medium.png";
        $product->user_id = 1;
        $product->category_id = 4;
        $product->popularity = 3;
        $product->save();
        //19
        $product = new Product();
        $product->name = 'GENERATOR';
        $product->brand_id = 6;
        $product->features = "
        Capacity: 2.2KVA
        ";
        $product->rprice = "3,600";
        $product->price = "29,300";
        $product->image = "elepaq-generator-medium.png";
        $product->user_id = 1;
        $product->category_id = 4;
        $product->popularity = 2;
        $product->save();
        //20
        $product = new Product();
        $product->name = 'GENERATOR';
        $product->brand_id = 9;
        $product->features = "
        Capacity: 1.2KVA
        ";
        $product->rprice = "1,600";
        $product->price = "13,400";
        $product->image = "tiger-generator-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 4;
        $product->popularity = 3;
        $product->save();
        //21
        $product = new Product();
        $product->name = 'STANDING FAN';
        $product->brand_id = 1;
        $product->features = '
        20"
        ';
        $product->rprice = "1,500";
        $product->price = "12,000";
        $product->image = "polystar-fan-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 5;
        $product->popularity = 2;
        $product->save();
        //22
        $product = new Product();
        $product->name = 'GAS COOKER';
        $product->brand_id = 8;
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
        $product->rprice = "3,500";
        $product->price = "28,700";
        $product->image = "century-cooker-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 6;
        $product->popularity = 3;
        $product->save();
        //23
        $product = new Product();
        $product->name = 'GAS COOKER';
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
        $product->rprice = "3,600";
        $product->price = "29,300";
        $product->image = "polystar-gas-c-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 6;
        $product->popularity = 2;
        $product->save();
        //24
        $product = new Product();
        $product->name = 'GAS COOKER';
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
        $product->rprice = "4,000";
        $product->price = "32,500";
        $product->image = "polystar-gas-c-4-medium.png";
        $product->user_id = 1;
        $product->category_id = 6;
        $product->popularity = 3;
        $product->save();
        //25
        $product = new Product();
        $product->name = 'AIR CONDITIONER';
        $product->brand_id = 1;
        $product->features = '
        1.5HP
        ';
        $product->rprice = "5,600";
        $product->price = "45,300";
        $product->image = "polystar-ac-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 7;
        $product->popularity = 2;
        $product->save();
        //26
        $product = new Product();
        $product->name = 'AIR CONDITIONER';
        $product->brand_id = 1;
        $product->features = '
        1HP
        ';
        $product->rprice = "5,400";
        $product->price = "43,400";
        $product->image = "polystar-ac-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 7;
        $product->popularity = 2;
        $product->save();
        //27
        $product = new Product();
        $product->name = 'MICROWAVE OVEN';
        $product->brand_id = 5;
        $product->features = '
        20L
        ';
        $product->rprice = "1,900";
        $product->price = "15,600";
        $product->image = "midea-microwave-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 8;
        $product->popularity = 3;
        $product->save();
        //28
        $product = new Product();
        $product->name = 'MICROWAVE OVEN';
        $product->brand_id = 1;
        $product->features = '
        20L
        ';
        $product->rprice = "1,500";
        $product->price = "12,400";
        $product->image = "midea-microwave-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 8;
        $product->popularity = 2;
        $product->save();
        //29
        $product = new Product();
        $product->name = 'SEWING MACHINE';
        $product->brand_id = 10;
        $product->features = '
        Maintenance free,
        Rugged,
        Highly durable,
        Comes with full accesories including Table Stand,
        Optimum performance,
        Complete set with its accessories,
        Table stand
        ';
        $product->rprice = "6,300";
        $product->price = "51,000";
        $product->image = "sewing-m-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 9;
        $product->popularity = 3;
        $product->save();
        //30
        $product = new Product();
        $product->name = 'SMART TELEVISION';
        $product->brand_id = 1;
        $product->features = '
        40"
        ';
        $product->rprice = "6,800";
        $product->price = "54,900";
        $product->image = "polystar-tv-5-medium.png";
        $product->user_id = 1;
        $product->category_id = 10;
        $product->popularity = 2;
        $product->save();
        //31
        $product = new Product();
        $product->name = 'SMART TELEVISION';
        $product->brand_id = 1;
        $product->features = '
        32"
        ';
        $product->rprice = "4,400";
        $product->price = "35,700";
        $product->image = "polystar-tv-1-medium.png";
        $product->user_id = 1;
        $product->category_id = 10;
        $product->popularity = 3;
        $product->save();
        //32
        $product = new Product();
        $product->name = 'LED TELEVISION';
        $product->brand_id = 1;
        $product->features = '
        32"
        ';
        $product->rprice = "4,100";
        $product->price = "33,100";
        $product->image = "polystar-tv-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 10;
        $product->popularity = 2;
        $product->save();
        //33
        $product = new Product();
        $product->name = 'TELEVISION';
        $product->brand_id = 1;
        $product->features = '
        20"
        ';
        $product->rprice = "2,300";
        $product->price = "18,700";
        $product->image = "polystar-tv-3-medium.png";
        $product->user_id = 1;
        $product->category_id = 10;
        $product->popularity = 2;
        $product->save();
        //34
        $product = new Product();
        $product->name = 'ZERO 4';
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
        $product->rprice = "4,600";
        $product->price = "37,700";
        $product->image = "infinix-zero-4-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //35
        $product = new Product();
        $product->name = 'HOT 5';
        $product->brand_id = 3;
        $product->features = '
        16GB, 2GB,
        Screen: 5.5-Inch HD IPS,
        Memory: 1GB RAM, 16GB ROM (expandable up to 32GB),
        CPU: Quad-core 1.3GHz processor,
        Operating System: XOS Based on Android 7 Nougat,
        Camera: 8MP Rear, 5MP Front,
        Battery: 4000mAh capacity Dirac Stereo Widening. Enjoy more enthralling auditory feast. INFINIX HOT5 Lite With
        ';
        $product->rprice = "2,900";
        $product->price = "32,600";
        $product->image = "infinix-hot-5-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //36
        $product = new Product();
        $product->name = 'HOT 5';
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
        $product->rprice = "2,600";
        $product->price = "21,400";
        $product->image = "infinix-hot-5-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 3;
        $product->save();
        //37
        $product = new Product();
        $product->name = 'K7 SPARK';
        $product->brand_id = 11;
        $product->features = '
        5.5" Display,
        Android 7.0,
        Quad-Core 1.3GHZ Processor,
        13MP Rear Camera, 5MP Front Camera,
        16GB Internal Memory, 1GB RAM
        ';
        $product->rprice = "2,500";
        $product->price = "20,700";
        $product->image = "k7-spark-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //38
        $product = new Product();
        $product->name = 'K9 PLUS';
        $product->brand_id = 11;
        $product->features = '
        1GB
        ';
        $product->rprice = "3,300";
        $product->price = "26,800";
        $product->image = "k9-plus-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //39
        $product = new Product();
        $product->name = 'P5 MINI';
        $product->brand_id = 4;
        $product->features = '
        4.5" IPS LCD,
        Android 5.0,
        1.3GHz Quad Core Processor,
        5MP Rear Camera, 2MP Front Camera,
        8GB Internal Memory, 1GB RAM
        ';
        $product->rprice = "1,800";
        $product->price = "14,800";
        $product->image = "p5-mini-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //40
        $product = new Product();
        $product->name = 'NOTE 4';
        $product->brand_id = 2;
        $product->features = '
        16GB, 2GB
        ';
        $product->rprice = "4,000";
        $product->price = "32,200";
        $product->image = "infinix-note-4-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //41
        $product = new Product();
        $product->name = 'S12';
        $product->brand_id = 3;
        $product->features = '
        8GB, 1GB
        ';
        $product->rprice = "1,800";
        $product->price = "15,100";
        $product->image = "itel-a12-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //42
        $product = new Product();
        $product->name = 'DROIPAD 7D';
        $product->brand_id = 11;
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
        $product->rprice = "2,200";
        $product->price = "18,000";
        $product->image = "droipad-pad-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //43
        $product = new Product();
        $product->name = 'ROYALE A1 FERO';
        $product->brand_id = 12;
        $product->features = '
        1 GB RAM,
        5,000 MAH BATTERY,
        HD IPS DISPLAY,
        XENSATION GLASS,
        5 INCH DISPLAY,
        8 MP + 5 MP,
        QUAD CORE PROCESSOR,
        32 GB STORAGE
        ';
        $product->rprice = "2,200";
        $product->price = "18,100";
        $product->image = "royale-a1-fero-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //44
        $product = new Product();
        $product->name = 'VIGITAB';
        $product->brand_id = 13;
        $product->features = '
        10.1" Android OS,
        1GB RAM,
        A7 Quad-core 1.2Ghx, Eight logic cores,
        1GB DDR3,
        16GB On Board Storage
        ';
        $product->rprice = "2,400";
        $product->price = "19,700";
        $product->image = "vigitab-medium.png";
        $product->user_id = 1;
        $product->category_id = 11;
        $product->popularity = 2;
        $product->save();
        //45
        $product = new Product();
        $product->name = 'INDUSTRIAL FAN';
        $product->brand_id = 14;
        $product->features = '
        20"
        ';
        $product->rprice = "1,500";
        $product->price = "12,700";
        $product->image = "ox-fan-medium.png";
        $product->user_id = 1;
        $product->category_id = 5;
        $product->popularity = 2;
        $product->save();
        //46
        $product = new Product();
        $product->name = 'WATER DISPENSER';
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
        $product->rprice = "2,900";
        $product->price = "23,300";
        $product->image = "polystar-water-d-2-medium.png";
        $product->user_id = 1;
        $product->category_id = 12;
        $product->popularity = 2;
        $product->save();
        //47
        $product = new Product();
        $product->name = 'HOME THEATRE';
        $product->brand_id = 1;
        $product->features = '
        HT520
        ';
        $product->rprice = "3,900";
        $product->price = "31,200";
        $product->image = "polystar-sound-s-4-medium.png";
        $product->user_id = 1;
        $product->category_id = 13;
        $product->popularity = 2;
        $product->save();
        //48
        $product = new Product();
        $product->name = 'HOME THEATRE';
        $product->brand_id = 1;
        $product->features = '
        VT607
        ';
        $product->rprice = "2,000";
        $product->price = "16,500";
        $product->image = "polystar-sound-s-3-medium.png";
        $product->user_id = 1;
        $product->category_id = 13;
        $product->popularity = 2;
        $product->save();
        //49
        $product = new Product();
        $product->name = 'HP 255';
        $product->brand_id = 15;
        $product->features = '
        Memory - 4GB,
        Hard disk - 500GB,
        Graphics Card  -    Intel HD Graphics,
        Screen - 15.6 HD BV LED-backlight Display,
        SuperMulti 8X DVD-RW,
        Network - WiFi 802.11 bgn, Bluetooth,
        Webcam + Mic, 
        ';
        $product->rprice = "6,700";
        $product->price = "54,200";
        $product->image = "hp-255-medium.png";
        $product->user_id = 1;
        $product->category_id = 14;
        $product->popularity = 2;
        $product->save();
        //50
        $product = new Product();
        $product->name = 'HP 15 CELERON';
        $product->brand_id = 15;
        $product->features = ' 
        Operating System : Windows 10,
        HDD Size: 500gb RAM,
        RAM :4gb,
        Processor : Intel Celeron
        ';
        $product->rprice = "7,100";
        $product->price = "57,400";
        $product->image = "hp-15-celeron-medium.png";
        $product->user_id = 1;
        $product->category_id = 14;
        $product->popularity = 2;
        $product->save();

    }
}
