<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected $table = 'employees';
	protected $guarded = ['emp_id', '_token'];
    protected $fillable = ['emp_id', 'title', 'last_name','first_name' ,'middle_name' ,'department' ,'unit' , 'division','position','is_user' ,'email' ,'image' ,'qr_value',
    'hash_value','status'];

	public $timestamps=false;

	public function tbl_users()
	{
		return $this->belongsTo('App\User', 'emp_id');
	}
}
