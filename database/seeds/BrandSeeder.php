<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $brand = new Brand();
        $brand->brand = 'Polyster';
        $brand->save();
        //2
        $brand = new Brand();
        $brand->brand = 'Infinix';
        $brand->save();
        //3
        $brand = new Brand();
        $brand->brand = 'Itel';
        $brand->save();
        //4
        $brand = new Brand();
        $brand->brand = 'Gionee';
        $brand->save();
        //5
        $brand = new Brand();
        $brand->brand = 'Midea';
        $brand->save();
        //6
        $brand = new Brand();
        $brand->brand = 'Elepax';
        $brand->save();
        //7
        $brand = new Brand();
        $brand->brand = 'Haier Thermocool';
        $brand->save();
        //8
        $brand = new Brand();
        $brand->brand = 'Tecno';
        $brand->save();
     
    }
}
