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
            $product->name = 'Microwave Oven';
            $product->brand_id = 1;
            $product->features = "
            20 liter microwave oven and grill function,
            Microwave input power:1200W,
            Operation Frequency:2450MHz,
            Grill Power input : 700W,
            Power Supply : 230-240 ~ 50/Hz,
            6 Microwave power leve (Microwave),
            Speedy Defrost/ Weight Defrost (meat, poultry, seafood),
            White cavity,
            Silver Housing
            ";
            $product->rprice = "3,000";
            $product->price = "43,000";
            $product->image = "polystar-microwave-1-medium.png";
            $product->user_id = 1;
            $product->category_id = 8;
            $product->save();
            //2
            $product = new Product();
            $product->name = 'Table Gas Cooker';
            $product->brand_id = 1;
            $product->features = "
            Two Burners Gas Stove,
            Tampered Glass Top,
            With Brass burner ring,
            automatic ignition,
            Detachable pan fro easy cleaning
            ";
            $product->rprice = "3,000";
            $product->price = "23,000";
            $product->image = "polystar-gas-c-1-medium.png";
            $product->user_id = 2;
            $product->category_id = 6;
            $product->save();
            //3
            $product = new Product();
            $product->name = 'Washing machine';
            $product->brand_id = 1;
            $product->features = "
            12kg semi automatic washing machine,
            separate wash and spin dry tubs | built in Drain Pump,
            non detachable ltop cover for safer washing,
            washing capacity 9.8kg,
            spinning capacity 6.0kg,
            product Dim (mm) 820 X 495 X 990 mm
            ";
            $product->rprice = "3,000";
            $product->price = "23,000";
            $product->image = "polystar-washin-m-1-medium.png";
            $product->user_id = 1;
            $product->category_id = 3;
            $product->save();
            //4
            $product = new Product();
            $product->name = 'Washing machine';
            $product->brand_id = 1;
            $product->features = "
            12kg semi automatic washing machine,
            separate wash and spin dry tubs | built in Drain Pump,
            non detachable ltop cover for safer washing,
            washing capacity 9.8kg,
            spinning capacity 6.0kg,
            product Dim (mm) 820 X 495 X 990 mm
            ";
            $product->rprice = "3,000";
            $product->price = "23,000";
            $product->image = "polystar-washin-m-2-medium.png";
            $product->user_id = 1;
            $product->category_id = 3;
            $product->save();
            //5
            $product = new Product();
            $product->name = 'Infinix zero 5';
            $product->brand_id = 2;
            $product->features = "
            ZERO 5,
            Helio P25 Optical Zoom,
            64GB ROM 6GB RAM,
            5.98\" FHD LTPS(2.5D) 4350mAh 
            ";
            $product->rprice = "3,000";
            $product->price = "67,000";
            $product->image = "infinix-note-3-pro-medium.png";
            $product->user_id = 2;
            $product->category_id = 11 ;
            $product->save();
            //6
            $product = new Product();
            $product->name = 'Itel S32';
            $product->brand_id = 3;
            $product->features = "
            Android™ 7.0,
            5.5,
            16GB ROM + 1GB RAM: up to 32GB,
            Dual Selfie Camera 2.0MP+8.0MP/ Rear Camera 8.0MP,
            ";
            $product->rprice = "3,000";
            $product->price = "67,000";
            $product->image = "itel-a12-medium.png";
            $product->user_id = 1;
            $product->category_id = 11;
            $product->save();
            //7
            $product = new Product();
            $product->name = 'Itel S12';
            $product->brand_id = 3;
            $product->features = "
            Android™ 7.0,
            5.0,
            8GB ROM + 1GB RAM: up to 32GB,
            Front Camera 2.0MP+5.0MP/Rear Camera 8.0MP AF,
            ";
            $product->rprice = "3,000";
            $product->price = "53,500";
            $product->image = "it1556-medium.png";
            $product->user_id = 2;
            $product->category_id = 11;
            $product->save();
            //8
            $product = new Product();
            $product->name = 'Itel A51';
            $product->brand_id = 3;
            $product->features = "
            Android™ 6.0,
            5.5,
            1GB RAM+16GB ROM: up to 32GB,
            Back 5.0MP AF/Front 2.0MP,
            ";
            $product->rprice = "3,000";
            $product->price = "43,600";
            $product->image = "it1508-medium.png";
            $product->user_id = 1;
            $product->category_id = 11;
            $product->save();
            //9
            $product = new Product();
            $product->name = 'Itel it551';
            $product->brand_id = 3;
            $product->features = "
            Dual Speaker Dirac 3D Stereo Surrounding,
            4000mAh Battery,
            16GB ROM + 2GB RAM,
            5.5” HD Display,
            Fingerprint
            ";
            $product->rprice = "3,000";
            $product->price = "45,000";
            $product->image = "itel-a12-medium.png";
            $product->user_id = 2;
            $product->category_id = 11;
            $product->save();
            //10
            $product = new Product();
            $product->name = 'Gionee A1 LITE';
            $product->brand_id = 4;
            $product->features = "
            5.3 Inch 2.5D Corning Gorilla Glass 3 Screen, 1280*720 Pixel,
            MTK6753 1.3GHz Octa Core,
            Support Touch ID,
            3GB RAM + 32GB ROM + Support 256GB TF Card Expansion,
            13 MP Back Camera + 20 MP Front Camera with Selfie Flash,
            Amigo OS 4.0 ( Based On Android 7.0 System),
            4000mAh Battery
            ";
            $product->rprice = "3,000";
            $product->price = "33,600";
            $product->image = "gionee-2-medium.png";
            $product->user_id = 1;
            $product->category_id = 11;
            $product->save();
            //11
            $product = new Product();
            $product->name = 'Midea 1.5HP Comfort Series Split Unit Air Conditioner MSAF-12CR + Installation Kit';
            $product->brand_id = 5;
            $product->features = "
            1.5HP Capacity,
            Streamlined Design,
            Comfort: Faster Cooling,
            High Density Filter,
            Auto Restart,
            Turbo
            ";
            $product->rprice = "3,000";
            $product->price = "89,000";
            $product->image = "midea-ac-1-medium.png";
            $product->user_id = 2;
            $product->category_id = 7;
            $product->save();
            //12
            $product = new Product();
            $product->name = 'Polystar Single Door Medium Fridge - HR 185S Silver 77301-0378';
            $product->brand_id = 1;
            $product->features="
            Storage Capacity: 185 Litres,
            Direct cooling technology,
            Fully tropicalized compressor,
            Big evaporator for rapid and uniform cooling glass shelving,
            Soft freezing compartment for fish and meat,
            Toughened glass shelves
            ";
            $product->rprice = "3,000";
            $product->price = "89,400";
            $product->image = "plosytar-fridge-2-medium.png";
            $product->user_id = 2;
            $product->category_id = 2;
            $product->save();
            //13
            $product = new Product();
            $product->name = 'Polystar Bedside Fridge Pv-TF79LS - (Silver)';
            $product->brand_id = 1;
            $product->features = "
            Superior Quality,
            Durable,
            Effective & Reliable
            ";
            $product->rprice = "3,000";
            $product->price = "36,555";
            $product->image = "plosytar-fridge-1-medium.png";
            $product->user_id = 1;
            $product->category_id = 2;
            $product->save();
            //14
            $product = new Product();
            $product->name = 'Polystar Chest Freeser - HRF 95 EX';
            $product->brand_id = 1;
            $product->features = "
            Material: Steel,
            Colour: White,
            Direct Cool
            ";
            $product->rprice = "3,000";
            $product->price = "71,730";
            $product->image = "plosytar-fridge-3-medium.png";
            $product->user_id = 1;
            $product->category_id = 1;
            $product->save();
            //15
            $product = new Product();
            $product->name = 'Polystar 32" LED TV POLYSTAR + free Tv Guard';
            $product->brand_id = 1;
            $product->features = "
            Great Value For Money,
            Superior Quality,
            Effective & Reliable
            ";
            $product->rprice = "3,000";
            $product->price = "49,500";
            $product->image = "polystar-tv-1-medium.png";
            $product->user_id = 1;
            $product->category_id = 10;
            $product->save();
            //16
            $product = new Product();
            $product->name = 'Elepaq Generator - 1.3KVA - SV2200';
            $product->brand_id = 6;
            $product->features = "
            Run Time per Tankful 7Hrs@75%Load,
            Dimensions (L x W x H) 460*380*330,
            Noise Level@ 7 Meters 66dB,
            Weight : 26.5
            ";
            $product->rprice = "3,000";
            $product->price = "34,499";
            $product->image = "elepaq-generator-1-medium.png";
            $product->user_id = 1;
            $product->category_id = 4;
            $product->save();
            //17
            $product = new Product();
            $product->name = 'Polystar Chest Freezer PV-CF260LGR';
            $product->brand_id = 1;
            $product->features = "
            Great Value For Money,
            Superior Quality,
            Effective & Reliable
            ";
            $product->rprice = "3,000";
            $product->price = "86,000";
            $product->image = "plosytar-fridge-3-medium.png";
            $product->user_id = 2;
            $product->category_id = 1;
            $product->save();
            //18
            $product = new Product();
            $product->name = 'Polystar 24 Inches LED TV';
            $product->brand_id = 1;
            $product->features = "
            Great Value For Money,
            Superior Quality,
            Effective & Reliable
            ";
            $product->rprice = "3,000";
            $product->price = "40,000";
            $product->image = "polystar-tv-2-medium.png";
            $product->user_id = 1;
            $product->category_id = 10;
            $product->save();
            //19
            $product = new Product();
            $product->name = 'Midea Comfort Series Split Air Conditioner + Installation Kit';
            $product->brand_id = 5;
            $product->features = "
            Streamlined Design,
            Comfort: Faster Cooling,
            High Density Filter,
            Auto Restart,
            Turbo,
            Sleep Mode
            ";
            $product->rprice = "3,000";
            $product->price = "81,500";
            $product->image = "midea-ac-1-medium.png";
            $product->user_id = 1;
            $product->category_id = 7;
            $product->save();
            //20
            $product = new Product();
            $product->name = 'Polystar 1.5HP Fast Cooling, Copper Split Polystar Air Conditioner';
            $product->brand_id = 1;
            $product->features = "
            Super fast cooling,
            Low energy consumption,
            Free Installation kits,
            Two years warranty,
            ";
            $product->rprice = "3,000";
            $product->price = "89,800";
            $product->image = "polystar-ac-1-medium.png";
            $product->user_id = 2;
            $product->category_id = 7;
            $product->save();
            //21
            $product = new Product();
            $product->name = 'Midea Gas Cooker With oven';
            $product->brand_id = 5;
            $product->features = "
            Italian design in stylish black finish,
            Double Enamel Coated Strong Pot Support,
            Double Enamel Coated Burner Caps
            ";
            $product->rprice = "3,000";
            $product->price = "14,800";
            $product->image = "midea-cooking-g-1-medium.png";
            $product->user_id = 2;
            $product->category_id = 6;
            $product->save();
            //22
            $product = new Product();
            $product->name = 'Midea Gas Cooker With oven';
            $product->brand_id = 5;
            $product->features = "
            4 gas burners,
            Tray with wire grid,
            Gas type: LPG 30 mbar,
            Ignition with oven lamp
            ";
            $product->rprice = "3,000";
            $product->price = "15,990";
            $product->image = "midea-cooking-g-5-medium.png";
            $product->user_id = 2;
            $product->category_id = 6;
            $product->save();
            //23
            $product = new Product();
            $product->name = 'Midea Standing Fan';
            $product->brand_id = 5;
            $product->features = "
            High efficiency twin blades,
            LED display,
            1.5M adjustable height,
            28 rib safety grill,
            Long life motor
            ";
            $product->rprice = "3,000";
            $product->price = "9,900";
            $product->image = "midea-fan-1-medium.png";
            $product->user_id = 2;
            $product->category_id = 5;
            $product->save();
            //24
            $product = new Product();
            $product->name = 'Midea washing machine';
            $product->brand_id = 5;
            $product->features = "
            5kg drum capacity - great for smaller households,
            Efficient A+ energy rating,
            Wash your clothes in a speedy 28 minutes,
            Dimensions (cm) - H85 x W60 x D45
            ";
            $product->rprice = "3,000";
            $product->price = "58,000";
            $product->image = "midea-washing-m-3-medium.png";
            $product->user_id = 2;
            $product->category_id = 3;
            $product->save();
            //25
            $product = new Product();
            $product->name = 'Midea washing machine';
            $product->brand_id = 5;
            $product->features = "
            7kg drum capacity - great for smaller households,
            Efficient A+ energy rating,
            Wash your clothes in a speedy 28 minutes,
            Dimensions (cm) - H85 x W60 x D45
            ";
            $product->rprice = "3,000";
            $product->price = "64,000";
            $product->image = "midea-washing-m-5-medium.png";
            $product->user_id = 2;
            $product->category_id = 3;
            $product->save();
            //26
            $product = new Product();
            $product->name = 'Polystar washing machine';
            $product->brand_id = 1;
            $product->features = "
            7kg drum capacity - great for smaller households,
            Wash your clothes in a speedy 25 minutes,
            Dimensions (cm) - H85 x W60 x D45
            ";
            $product->rprice = "3,000";
            $product->price = "67,000";
            $product->image = "polystar-washin-m-5-medium.png";
            $product->user_id = 2;
            $product->category_id = 3;
            $product->save();
            //27
            $product = new Product();
            $product->name = 'Media Standing Fan';
            $product->brand_id = 5;
            $product->features = "
            High efficiency twin blades,
            LED display,
            1.5M adjustable height,
            28 rib safety grill,
            Long life motor
            ";
            $product->rprice = "3,000";
            $product->price = "13,500";
            $product->image = "midea-fan-2-medium.png";
            $product->user_id = 2;
            $product->category_id = 5;
            $product->save();
            //28
            $product = new Product();
            $product->name = 'Media Standing Fan';
            $product->brand_id = 5;
            $product->features = "
            High efficiency twin blades,
            LED display,
            1.5M adjustable height,
            28 rib safety grill,
            Long life motor
            ";
            $product->rprice = "3,000";
            $product->price = "15,000";
            $product->image = "midea-fan-3-medium.png";
            $product->user_id = 2;
            $product->category_id = 5;
            $product->save();
            //29
            $product = new Product();
            $product->name = 'Media Microwave Oven';
            $product->brand_id = 5;
            $product->features = "
            Microwave Oven With Grill,
            Capacity: 20L,
            230V~50Hz,
            Easy control,
            Color:black,
            700W Microwave output,
            1000W Grill Power,
            8 Auto Menus,
            Fast cooking
            ";
            $product->rprice = "3,000";
            $product->price = "23,600";
            $product->image = "midea-microwave-3-medium.png";
            $product->user_id = 2;
            $product->category_id = 8;
            $product->save();
            //30
            $product = new Product();
            $product->name = 'Media Microwave Oven';
            $product->brand_id = 5;
            $product->features = "
            Microwave Oven With Grill,
            Capacity: 20L,
            230V~50Hz,
            Easy control,
            Color:Ash,
            700W Microwave output,
            1000W Grill Power,
            5 Auto Menus,
            Fast cooking
            ";
            $product->rprice = "3,000";
            $product->price = "22,000";
            $product->image = "midea-microwave-1-medium.png";
            $product->user_id = 2;
            $product->category_id = 8;
            $product->save();
            //31
            $product = new Product();
            $product->name = 'Elepaq Generator';
            $product->brand_id = 6;
            $product->features = "
            AC Frequency: 50 Hz,
            Starting Capacity: 4.5KVA,
            Running Capacity: 4.2KVA,
            Alternator Type: Brushless,
            100% Copper Enameled Wire,
            Voltage Regulation: 220V,
            Phase: Single Phase,
            DC Output (HP/ KW): 12V/8.3A,
            Starting System: Electric/Recoil (Manual),
            Fuel: Petrol,
            Fuel Tank Capacity: 15L,
            Noise Level @ 7 Meters: 63dB,
            Battery: Yes
            ";
            $product->rprice = "3,000";
            $product->price = "89,000";
            $product->image = "elepaq-generator-2-medium.png";
            $product->user_id = 2;
            $product->category_id = 4;
            $product->save();
            //32
            $product = new Product();
            $product->name = 'Thermocool Generator';
            $product->brand_id = 7;
            $product->features = "
            AC Frequency: 50 Hz,
            Starting Capacity: 4.5KVA,
            Running Capacity: 4.2KVA,
            Alternator Type: Brushless,
            100% Copper Enameled Wire,
            Voltage Regulation: 220V,
            Phase: Single Phase,
            DC Output (HP/ KW): 12V/8.3A,
            Starting System: Electric/Recoil (Manual),
            Fuel: Petrol,
            Fuel Tank Capacity: 15L,
            Noise Level @ 7 Meters: 63dB,
            Battery: Yes
            ";
            $product->rprice = "3,000";
            $product->price = "94,000";
            $product->image = "thermocool-generator-1-medium.png";
            $product->user_id = 2;
            $product->category_id = 4;
            $product->save();
            //33
            $product = new Product();
            $product->name = 'Midea Washing Machine';
            $product->brand_id = 5;
            $product->features = "
            8kg drum capacity - great for smaller households,
            Wash your clothes in a speedy 25 minutes,
            Dimensions (cm) - H85 x W60 x D45
            ";
            $product->rprice = "3,000";
            $product->price = "63,900";
            $product->image = "midea-washing-m-4-medium.png";
            $product->user_id = 2;
            $product->category_id = 3;
            $product->save();
            //34
            $product = new Product();
            $product->name = 'Polystar Cooker';
            $product->brand_id = 1;
            $product->features = "
            304 Stainless steel cooker – top,
            Cast iron pan support with wok support,
            Electronic ignition,
            Front controls,
            Heat output,
            1 triple ring burner 3.60kw,
            2 semi – rapid burner 1.75kw,
            1 auxiliary burner 1.0,
            1 rapid burner 3.0kw
            ";
            $product->rprice = "3,000";
            $product->price = "21,800";
            $product->image = "polystar-gas-c-2-medium.png";
            $product->user_id = 2;
            $product->category_id = 6;
            $product->save();
            //35
            $product = new Product();
            $product->name = 'Polystar Cooker and Oven';
            $product->brand_id = 1;
            $product->features = "
            304 Stainless steel cooker – top,
            Cast iron pan support with wok support,
            Electronic ignition,
            Front controls,
            Heat output,
            3 triple ring burner 3.60kw,
            2 semi – rapid burner 1.75kw,
            1 auxiliary burner 1.0,
            1 rapid burner 3.0kw
            ";
            $product->rprice = "3,000";
            $product->price = "43,800";
            $product->image = "polystar-gas-c-4-medium.png";
            $product->user_id = 2;
            $product->category_id = 6;
            $product->save();
            //36
            $product = new Product();
            $product->name = 'Midea Medium Air Conditioner';
            $product->brand_id = 5;
            $product->features = "
            1HP Capacity,
            Streamlined Design,
            Comfort: Faster Cooling,
            High Density Filter
            ";
            $product->rprice = "3,000";
            $product->price = "72,000";
            $product->image = "midea-ac-3-medium.png";
            $product->user_id = 7;
            $product->category_id = 7;
            $product->save();
            //37
            $product = new Product();
            $product->name = 'Midea Medium Air Conditioner Split Unit';
            $product->brand_id = 5;
            $product->features = "
            1.5HP Capacity,
            Streamlined Design,
            Comfort: Faster Cooling,
            High Density Filter
            ";
            $product->rprice = "3,000";
            $product->price = "76,000";
            $product->image = "midea-ac-4-medium.png";
            $product->user_id = 7;
            $product->category_id = 6;
            $product->save();
            //38
            $product = new Product();
            $product->name = 'Midea Medium Air Conditioner Split Unit';
            $product->brand_id = 5;
            $product->features = "
            2HP Capacity,
            Streamlined Design,
            Comfort: Faster Cooling,
            High Density Filter,
            Auto Restart,
            Turbo
            ";
            $product->rprice = "3,000";
            $product->price = "82,900";
            $product->image = "midea-ac-1-medium.png";
            $product->user_id = 7;
            $product->category_id = 6;
            $product->save();
            //39
            $product = new Product();
            $product->name = 'Elepaq Generator';
            $product->brand_id = 5;
            $product->features = "
            1.8KVA,
            Manual Start
            ";
            $product->rprice = "3,000";
            $product->price = "37,800";
            $product->image = "elepaq-generator-3-medium.png";
            $product->user_id = 7;
            $product->category_id = 6;
            $product->save();
            //40
            $product = new Product();
            $product->name = 'Elepaq Generator 10KVA- SV 20000 E2 - Constant';
            $product->brand_id = 5;
            $product->features = "
            Model No.: SV 20000E2A/c,
            Output:- 220 - 240 volts,
            Starting: Recoil/ElectricStarting,
            Kva: 10.0kva,
            Max.Running Kva: 9.0kva,
            RatedIgnition System: Transistor Magneto,
            Fuel Tank Capacity: 25L
            ";
            $product->rprice = "3,000";
            $product->price = "132,000";
            $product->image = "elepaq-generator-4-medium.png";
            $product->user_id = 7;
            $product->category_id = 6;
            $product->save();
        }
    }
