<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReComment extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    protected $fillable = [
        'main_comment_id',
        'user_id',
        'content'
    ];
     public static $rules = array(
        'content' => 'required | max:120',
    );

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
