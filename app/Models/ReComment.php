<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReComment extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    protected $fillable = [
        'content'
    ];
     public static $rules = array(
        'content' => 'required | max:120',
    );
}
