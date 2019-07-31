<?php

namespace App;



use Illuminate\Database\Eloquent\Model;



class vehicle_types extends Model
{
     

     protected $table="vehicle_types";

     protected $fillable=['vehicle_type','capacity','base_fare','minimum_fare','booking_fee','tax_fee','price_per_minute','price_per_mile_kms','mile_or_kms','picture','status'];

}
