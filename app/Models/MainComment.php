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
        'content',
        'good_count'
    ];

    public static $rules = array(
        'user_id' => 'required',
        'content' => 'required | max:120',
        'good_count' => 'integer',
    );

    //
    public function getComment(){
        return $this->content;
    }
    public function getUser(){
        return optional($this->user)->name;
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function reComments(){
        return $this->hasMany('App\Models\ReComment');
    }

    public function commentRelationships(){
        return $this->belongsToMany(ReComment::class);
    }

    //アクセサ
    public function getUserIdAttribute($value){
        // $user = App\User::find($value);
        // return $value;
        return User::find($value)->name;
    }
    //ミューテタ
    public function setUserIdAttribute($value){
        $this->attributes['user_id'] = User::where('name', $value)->first()->id;
    }
}
