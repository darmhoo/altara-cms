<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name','brand_id', 'category_id', 'features','features', 'price','image', 'user_id','rprice','popularity'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}