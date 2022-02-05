<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    protected $fillable = [
        'good_count'
    ];
     public static $rules = array(
        'good_count' => 'required | integer',
    );
}
