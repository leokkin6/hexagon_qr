<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HashMonitoringController extends Controller
{
    function getInformation($id){
    	$query = DB::selectOne("SELECT emp_id,
						title,
						last_name,
						first_name,
						middle_name,
						unit,
						position,
						department,
						status,
						image
					FROM employees
					WHERE hash_value = '$id'");
	$empID = $query->emp_id;
	$title = $query->title;
	$lastName = $query->last_name;
	$firstName = $query->first_name;
	$middleName = $query->middle_name;
	$fullName = $title.' '.$lastName.' '.$firstName.' '.$middleName;
	$position = $query->position;
	$unit = $query->unit;
	$department = $query->department;
	$status = $query->status;
	$image = $query->image;
	

	return view('pages.hash_monitoring')
		->withEmpID($empID)
		->withTitle($title)
		->withFullName($fullName)
		->withPosition($position)
		->withUnit($unit)
		->withDepartment($department)
		->withStatus($status)
		->withImage($image);
    }
}
