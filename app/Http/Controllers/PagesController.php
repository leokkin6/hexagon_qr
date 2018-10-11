<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getGatekeeper(){
    	return view('pages.gatekeeper');
    }
    public function getQRGenerator(){
    	return view('pages.qr_generator');
    }
    public function getQRScanner(){
    	return view('pages.qr_scanner');
    }
    public function getStatistics(){
    	return view('pages.statistics');
    }
    /* public function getRegistration(){
    	return view('pages.user_registration_form');
    } */
    
}
