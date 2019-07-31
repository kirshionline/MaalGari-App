<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company_info extends Model
{
    
	protected $table="company_info";

	protected $fillable=['company_name','id_card_image','company_issued_date','company_joining_date','designation','driver_id','usersession_id','status'];

	
}
