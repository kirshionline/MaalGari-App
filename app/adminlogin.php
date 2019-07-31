<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminlogin extends Model
{
   




   protected $table="adminlogin";


	protected $fillable=['username','email_id','mobilenumber','gender','password','role'];



}
