<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name','brand_id', 'category_id', 'features','features', 'price','image', 'user_id','rprice'
    ];

    public function user()
    {
    	return $this->belongsToManyy(User::class);
    }

    public function brand() {
        return $this->belongsToMany(Brand::class);
    }

    public function category() {
        return $this->belongsToMany(Category::class);
    }
}
