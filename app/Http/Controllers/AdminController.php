<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function index()
	{
		echo 'Index';
	}
	public function createObjective()
	{
		$sections = \App\Section::all();
		return view('form',['section' => $sections]);
	}
	public function add_objectives()
	{
		echo 'Add Objectives';
	}
}
