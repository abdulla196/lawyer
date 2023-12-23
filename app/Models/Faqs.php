<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faqs extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $table = 'faq';

    protected $fillable = ['question',  'answer'];
}
