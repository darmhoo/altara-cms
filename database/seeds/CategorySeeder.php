<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        $category = new Category();
        $category->category = 'Freezer';
        $category->save();
        //2
        $category = new Category();
        $category->category = 'Fridge';
        $category->save();
        //3
        $category = new Category();
        $category->category = 'Washing Machine';
        $category->save();
        //4
        $category = new Category();
        $category->category = 'Generator';
        $category->save();
        //5
        $category = new Category();
        $category->category = 'FAN';
        $category->save();
        //6
        $category = new Category();
        $category->category = 'Cooker';
        $category->save();
        //7
        $category = new Category();
        $category->category = 'Air Conditioner';
        $category->save();
        //8
        $category = new Category();
        $category->category = 'Oven';
        $category->save();
        //9
        $category = new Category();
        $category->category = 'Sewing Machine';
        $category->save();
        //10
        $category = new Category();
        $category->category = 'Television';
        $category->save();
        //11
        $category = new Category();
        $category->category = 'Phone';
        $category->save();
        
    }
}
