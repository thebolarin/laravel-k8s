<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user(){
        
        return $this->belongsTo('App\user');
    }

    protected $fillable = [
        'user_id', 'avatar', 'about','facebook','youtube'
    ];
   
}
