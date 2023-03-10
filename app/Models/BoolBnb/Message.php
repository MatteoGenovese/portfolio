<?php

namespace App\Models\BoolBnb;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //

    protected $fillable = [
        'apartment_id',
        'username',
        'email',
        'message',
    ];

    public function apartment() {
        return $this->belongsTo('App\Models\BoolBnb\Apartment');
    }
}
