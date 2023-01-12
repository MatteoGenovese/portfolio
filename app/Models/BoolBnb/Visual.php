<?php

namespace App\Models\BoolBnb;

use Illuminate\Database\Eloquent\Model;

class Visual extends Model
{
    protected $fillable = [
        'apartment_id',
        'date',
        'user_ip',
    ];
    //
    public function apartment() {
        return $this->belongsTo('App\Models\BoolBnb\Apartment');
    }
}
