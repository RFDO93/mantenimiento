<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller {

	public function index()
	{
		return view('dashboard.index');
	}

public function inicio()
    {
        return view('dashboard.inicio');
    }
}
