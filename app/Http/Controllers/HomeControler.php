<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeControler extends Controller
{
    public function index()
	{
		return view('pages.mysite');
	}
	public function pub()
	{
		return view('pages.mysite_pub');
	}
	public function osv()
	{
		return view('pages.mysite_osv');
	}
	public function avt()
	{
		return view('pages.mysite_avt');
	}
	public function bio()
	{
		return view('pages.mysite_bio');
	}
	public function dani()
	{
		return view('pages.mysite_dani');
	}
	public function dosv()
	{
		return view('pages.mysite_dosv');
	}
	public function cont()
	{
		return view('pages.mysite_cont');
	}
	
	
	
	
	
	
}
