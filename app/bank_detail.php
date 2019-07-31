<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bank_detail extends Model
{
     protected $table ="bank_detail";



      protected $fillable = [ 'bank_account_no','card_no','driver_id','status'];
}
