<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('title_en','title_ar','description_en','description_ar','image','price');
    public function products()
    {
        return $this->hasMany('Product');
    }

}
