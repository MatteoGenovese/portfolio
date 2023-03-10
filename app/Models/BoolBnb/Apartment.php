<?php

namespace App\Models\BoolBnb;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'bathroom_no',
        'bed_no',
        'room_no',
        'square_meters',
        'address',
        'latitude',
        'longitude',
        'is_available',
    ];

    //

    public function user() {
        return $this->belongsTo("App\User");
    }

    public function messages(){
        return $this->hasMany('App\Models\BoolBnb\Message');
    }

    public function photos(){
        return $this->hasMany('App\Models\BoolBnb\Photo');
    }

    public function services() {
        return $this->belongsToMany('App\Models\BoolBnb\Service')->withTimestamps();
    }

    public function sponsorships() {
        return $this->belongsToMany('App\Models\BoolBnb\Sponsorship', "apartment_sponsorship", "apartment_id", "sponsorship_id")->withPivot('expiration_date')->withTimestamps();
    }

    public function visuals(){
        return $this->hasMany('App\Models\BoolBnb\Visual');
    }

}
