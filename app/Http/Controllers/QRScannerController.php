<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScannerLog;
use DB;
use DateTime;   
class QRScannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertQRData()
    {   
        if(request()->ajax()){
        $code = $_REQUEST['code'];

        DB::insert("INSERT INTO scanner_logs (DateEntered,Hash) VALUES (GETDATE(),?)", 
            array($code));
        
        return $code;
        }
    }
}
