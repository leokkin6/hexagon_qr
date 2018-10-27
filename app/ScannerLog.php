<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScannerLog extends Model
{
	protected $table = 'scanner_logs';

	public $primaryKey = 'id';
}
