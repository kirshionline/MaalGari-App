<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passport_and_residence extends Model
{
   
	protected $table="passport_and_residence";


	protected $fillable=['passport_number','passport_name','passport_issued_date','passport_expire_date','passport_address','driver_id'];


}
