<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = array('title_en','title_ar','logo','email','phone','start_from', 'end_at','facebook_link','twitter_link','linkedin_link','youtube_link');


}
