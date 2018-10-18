<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRGeneratorController extends Controller
{
    public function getQRValueGen(){
    	if(request()->ajax()){
		$code = '<center><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.$_REQUEST['qrValue'].'" title="Link to Google.com"></center>';
		return $code;
		}
    }
    public function getQRValueReg(){
    	if(request()->ajax()){
    	$codeHash = hash('sha1',$_REQUEST['qrValue']);
		$code = '<center><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='. $codeHash .'" title="Link to Google.com"></center>';
		return compact(['codeHash',
						'code']);
		}
    }
}
