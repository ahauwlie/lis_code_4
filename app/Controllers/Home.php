<?php

/**
 * Created by PhpStorm.
 * User: Hauw
 * Date: 7/23/2021
 * Time: 10:10 AM
 */

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('Home/header');
		echo view('Home/home');
		echo view('Home/footer');
	}
}
