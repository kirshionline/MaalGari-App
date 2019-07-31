<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    



    protected $table ="register";



    protected $fillable = ['username','firstname','lastname','email_id','mobilenumber','dob','gender','address','password','usersession_id','status'];




}
