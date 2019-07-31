<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stops extends Model
{
    

    protected $table ="stops";



   protected $fillable = ['booking_id', 'stop_address', 'stop_lat', 'stop_long', 'user_id'];


}
