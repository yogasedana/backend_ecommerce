<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('dashboard/vw_dashboard');
	}
}
