<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainComment extends Model
{
    use HasFactory;

    //
    protected $guarded = array('id');
    protected $fillable = [
        'user_id',
        'content'
    ];
    public static $rules = array(
        'user_id' => 'required',
        'content' => 'required | max:120',
    );

    //
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function reComments(){
        return $this->hasMany('App\Models\ReComment');
    }

    public function commentRelationships(){
        return $this->belongsToMany(ReComment::class);
    }
}
