<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookingdetails extends Model
{
    //

      protected $table ="bookingdetails";



      protected $fillable = ['booking_id', 'user_id', 'vehicle_type', 'distance', 'estimate_price', 'pickup_time', 'pickup_date', 'pickup_address', 'pickup_lat', 'pickup_long', 'instruction', 'status'];


     
}
