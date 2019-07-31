<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver_certificate extends Model
{
    


	protected $table="driver_certificate";


	protected $fillable=['training_certificate','driver_id','status'];




}
