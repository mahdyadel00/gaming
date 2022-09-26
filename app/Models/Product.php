<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function user(){

        return $this->hasMany(User::class , 'id' , 'user_id');
    }

    public function category(){

        return $this->hasMany(Category::class , 'id' , 'category_id');
    }

    public function favourite(){
        return $this->belongsToMany(User::class , 'favourite_products' , 'product_id' , 'user_id');
    }
    public function adImages(){
        return $this->hasMany(ImageProduct::class , 'product_id' , 'id');
    }

}
