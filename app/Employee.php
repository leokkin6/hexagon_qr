<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['emp_id', 'title', 'last_name','first_name' ,'middle_name' ,'department' ,'unit' , 'division','position','is_user' ,'email' ,'image' ,'qr_value',
    'hash_value','status' ];

  	public $timestamps=false;
}
