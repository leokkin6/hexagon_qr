<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GatekeeperController extends Controller
{
    public function fetchData(){
    	#For main user card 1
		$result1 = DB::selectOne("SELECT *
								FROM (SELECT TOP 5 Row_Number() 
									OVER (ORDER BY DateEntered DESC) AS ROWNUMBER, 
									unit,
									emp_id,
									title,
									last_name,
									first_name,
									middle_name,
									position,
									department,
									A.dateEntered,
									status,
									image
									FROM scanner_logs A
									LEFT JOIN employees B ON A.hash = B.hash_value
									) A 
								WHERE ROWNUMBER = 1"); #Row number for user card main 1

		$result2 = DB::selectOne("SELECT *
								FROM (SELECT TOP 5 Row_Number() 
									OVER (ORDER BY DateEntered DESC) AS ROWNUMBER, 
									title,
									last_name,
									first_name,
									middle_name,
									position,
									A.dateEntered,
									image
									FROM scanner_logs A
									LEFT JOIN employees B ON A.hash = B.hash_value
									) A 
								WHERE ROWNUMBER = 2"); #Row number for user card 2

		$result3 = DB::selectOne("SELECT *
								FROM (SELECT TOP 5 Row_Number() 
									OVER (ORDER BY DateEntered DESC) AS ROWNUMBER, 
									title,
									last_name,
									first_name,
									middle_name,
									position,
									A.dateEntered,
									image
									FROM scanner_logs A
									LEFT JOIN employees B ON A.hash = B.hash_value
									) A 
								WHERE ROWNUMBER = 3"); #Row number for user card 3

		$result4 = DB::selectOne("SELECT *
								FROM (SELECT TOP 5 Row_Number() 
									OVER (ORDER BY DateEntered DESC) AS ROWNUMBER, 
									title,
									last_name,
									first_name,
									middle_name,
									position,
									A.dateEntered,
									image
									FROM scanner_logs A
									LEFT JOIN employees B ON A.hash = B.hash_value
									) A 
								WHERE ROWNUMBER = 4"); #Row number for user card 4

		$result5 = DB::selectOne("SELECT *
								FROM (SELECT TOP 5 Row_Number() 
									OVER (ORDER BY DateEntered DESC) AS ROWNUMBER, 
									title,
									last_name,
									first_name,
									middle_name,
									position,
									A.dateEntered,
									image
									FROM scanner_logs A
									LEFT JOIN employees B ON A.hash = B.hash_value
									) A 
								WHERE ROWNUMBER = 5"); #Row number for user card 5

		#Resultset for user card main 1
		$unit1 = $result1->unit;
		$empid1 = $result1->emp_id;
		$fullname1 = $result1->title.' '.$result1->first_name.' '.$result1->middle_name.' '.$result1->last_name;
		$position1 = $result1->position;
		$department1 = $result1->department;
		$lastentry1 = $result1->dateEntered;
		$status1 = $result1->status;
			#get image
			$imageFileName1 = $result1->image;
		
		#Resultset for user card 2
		$fullname2 = $result2->first_name.' '.$result2->middle_name.' '.$result2->last_name;
		$position2 = $result2->position;
		$lastentry2 = $result2->dateEntered;
			#get image
			$imageFileName2 = $result2->image;

		#Resultset for user card 3
		$fullname3 = $result3->first_name.' '.$result3->middle_name.' '.$result3->last_name;
		$position3 = $result3->position;
		$lastentry3 = $result3->dateEntered;
			#get image
			$imageFileName3 = $result3->image;

		#Resultset for user card 4
		$fullname4 = $result4->first_name.' '.$result4->middle_name.' '.$result4->last_name;
		$position4 = $result4->position;
		$lastentry4 = $result4->dateEntered;
			#get image
			$imageFileName4 = $result4->image;

		#Resultset for user card 4
		$fullname5 = $result5->first_name.' '.$result5->middle_name.' '.$result5->last_name;
		$position5 = $result5->position;
		$lastentry5 = $result5->dateEntered;
			#get image
			$imageFileName5 = $result5->image;
		
		return compact(['unit1',
						'empid1',
						'fullname1',
						'position1',
						'department1',
						'lastentry1',
						'status1',
						'imageFileName1',
						'imageFileName2',
						'imageFileName3',
						'imageFileName4',
						'imageFileName5',
						'fullname2',
						'position2',
						'lastentry2',
						'fullname3',
						'position3',
						'lastentry3',
						'fullname4',
						'position4',
						'lastentry4',
						'fullname5',
						'position5',
						'lastentry5']);
		// return $result->emp_id;
    }
}

