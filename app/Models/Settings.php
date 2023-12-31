<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Settings extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'settings';

    protected $fillable = ['name','email','logo','phone','whatsapp','address','consultation'];
}
