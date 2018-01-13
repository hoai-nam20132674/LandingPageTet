<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\dangkyModel;
use App\Http\Requests\dang_ky_uu_daiRequest;

class LandingPageController extends Controller
{
    //
    public function index(){
    	return View('index');
    }
    public function postDangky(dang_ky_uu_daiRequest $request){
    	$new = new dangkyModel;
    	$new->ten=$request->ten;
    	$new->sdt=$request->sdt;
    	$new->save();
    }
}
