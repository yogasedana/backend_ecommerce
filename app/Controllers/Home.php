<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard || Nama Toko'
		];

		return view('dashboard/vw_dashboard', $data);
	}
}
