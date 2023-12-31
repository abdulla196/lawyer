<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blogs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'blogs';

    protected $fillable = ['title','description','content','user_id','navbar','home_page','image','token','url'];
}
