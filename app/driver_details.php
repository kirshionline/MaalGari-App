<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver_details extends Model
{
    

	protected $table="driver_details";


	protected $fillable=['corporate','firstname','lastname','gender','email','password','contactnumber','plate_no','brand','color','address','profile_picture','car_image','paypal_email','vehicle_type'];


}
