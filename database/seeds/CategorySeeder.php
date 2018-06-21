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
        $category->category = 'Freezers';
        $category->save();
        //2
        $category = new Category();
        $category->category = 'Fridges';
        $category->save();
        //3
        $category = new Category();
        $category->category = 'Washing Machines';
        $category->save();
        //4
        $category = new Category();
        $category->category = 'Generators';
        $category->save();
        //5
        $category = new Category();
        $category->category = 'Fans';
        $category->save();
        //6
        $category = new Category();
        $category->category = 'Cookers';
        $category->save();
        //7
        $category = new Category();
        $category->category = 'Air Conditioners';
        $category->save();
        //8
        $category = new Category();
        $category->category = 'Ovens';
        $category->save();
        //9
        $category = new Category();
        $category->category = 'Sewing Machines';
        $category->save();
        //10
        $category = new Category();
        $category->category = 'Televisions';
        $category->save();
        //11
        $category = new Category();
        $category->category = 'Phones';
        $category->save();
        
    }
}
