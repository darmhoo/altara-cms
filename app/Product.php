<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'user_id','make', 'name', 'pcategory','features', 'price','rprice', 'image'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
