<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
    

  protected $table ="passenger";



  protected $fillable = [ 'firstname', 'lastname', 'gender','email','contactnumber','pickup_location','Picture'];



}
