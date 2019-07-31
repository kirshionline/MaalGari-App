<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver_location extends Model
{
    
	protected $table="driver_location";


	protected $fillable=['latitude','longitude','driver_id','status'];


}
