<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class criminal_record_details extends Model
{
    

	  protected $table ="criminal_record_details";

	  protected $fillable=['cirminal_issued_date','cirminal_certificate','driver_id','status'];



}
