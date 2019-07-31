<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver_vehicle extends Model
{




	protected $table="driver_vehicle";


	protected $fillable=['brand','model','year','licence_plate_number','vehicle_type','vehicle_color','vehicle_dimension','registration_certificate','driver_id','status'];





}
