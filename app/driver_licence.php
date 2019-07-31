<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver_licence extends Model
{
    

  
	protected $table="driver_licence";


	protected $fillable=['licence_number','licence_name','licence_issued_date','licence_plate_number','licence_expire_date','licence_image','driver_id','status'];




}
