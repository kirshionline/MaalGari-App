<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demourl extends Model
{
   
	protected $table="demourl";


	protected $fillable=['basepath', 'context', 'operaction_id', 'method', 'gateway'];

  
}
