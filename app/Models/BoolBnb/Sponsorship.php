<?php

namespace App\Models\BoolBnb;

use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    protected $fillable = [
        'name',
        'duration',
        "price"
    ];
    //

    public function apartments() {
        return $this->belongsToMany('App\Models\BoolBnb\Apartment', "apartment_sponsorship", "sponsorship_id", "apartment_id")->withPivot('expiration_date')->withTimestamps();
    }
}
