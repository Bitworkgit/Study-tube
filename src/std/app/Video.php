<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "videos";

    protected $fillable = [
        'user_id', 'title', 'descript',"path",
    ];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
