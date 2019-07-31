<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver_detail extends Model
{
   



	protected $table="driver_detail";


	protected $fillable=['firstname','lastname','email_id','date_of_birth','gender','mobilenumber','address','profile_picture','password','status','usersession_id'];








}
