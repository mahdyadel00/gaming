<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthImage extends Model
{
    use HasFactory;

    protected $table = 'auths';
    protected $guarded = [];
    protected $fillable = array('login_image', 'register_image');


}
