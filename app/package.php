<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class package extends Model
{
  



 protected $table ="package";



  protected $fillable = [ 'number_hours', 'price', 'distance','service_type','status'];



}
