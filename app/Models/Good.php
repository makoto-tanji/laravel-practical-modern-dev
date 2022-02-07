<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    protected $fillable = [
        'main_comment_id',
        'user_id',
        'count'
    ];
     public static $rules = array(
        'comment_id' => 'required',
        'user_id' => 'required',
        'count' => 'required | integer',
    );
}
