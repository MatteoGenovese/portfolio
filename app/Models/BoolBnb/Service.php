<?php

namespace App\Models\BoolBnb;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
    ];
    //
    public function apartments() {
        return $this->belongsToMany('App\Models\BoolBnb\Apartment')->withTimestamps();
    }
}
