<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;

use DB;

class ToursController extends Controller
{
    

    public function index() {
    	// $tours= DB::select('select * from tours');
    	return view('tours', ['tours'=>$tours]);
        // return   view;
    }

    public function getExpeditions($epage) {
        // return view('expeditions/{epage}', ['epage'=> $epage]);
        
        $expage = DB::select('select * from tours where link=?', [$epage]);
        return view("/expeditions/{$epage}", ['expage'=> $expage]);
        // return 'Name of expedition ' . $epage;
    }
    public function getTreks($tpage) {
        $tpagedata = DB::select('select * from tours where link=?', [$tpage]);
        return view("/treks/{$tpage}", ['tpage'=> $tpagedata]);
        // return "Trek page";
    }

    public function getCultural($cpage) {
        $culturaldata = DB::select('select * from tours where link=?', [$cpage]);
        return view("/cultural/{$cpage}", ['cpage'=> $culturaldata]);
    }
    public function getSafari($spage) {
        $safariData = DB::select('select * from tours where link=?', [$spage]);
        return view("/safari/{$spage}", ['spage'=> $safariData]);
    }

    public function getServices($serpage) {
        $servicesData = DB::select('select * from tours where link=?', [$serpage]);
        return view("/services/{$serpage}", ['serpage'=>$servicesData]);
        // return $serpage;
    }

    public function getGallery() {
        return view('/gallery');
    }

    public function getBlog() {
        return view('/blog');
    }
    public function getAbout() {
        return view('/about');
    }
    public function getContact() {
        return view('/contact');
    }

    public function getAllTours() {
    	// $contacts= Tour/::all();
    	$tours= DB::select('select * from tours');
    	return view('tours', ['tours=>$tours']);
    }
    public function getContacts() {
        return view('/contact');
    }
    // public function getK2() {
    // 	$k2= DB::select('select * from tours where title=?', ['k2']);
    // 	return view('k2', ['k2=>$k2']);
    // }
}
