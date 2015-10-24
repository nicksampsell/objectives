<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function index()
	{
		$objectives = \App\Objective::orderBy('lesson_date','desc')
			->orderBy('section_id','asc')
			->get();
		return view('admin.all_objectives',['objectives' => $objectives]);
	}
	public function createObjective()
	{
		$sections = all();
		return view('form',['section' => $sections]);
	}
	public function add_objectives(Request $request)
	{
	
		$week_of = \DateTime::createFromFormat('Y-m-d',$request->week_of);
		$objectives = $request->objective;

		$lessons = array();
		foreach($objectives as $key1 => $objective)
		{
			foreach($objective as $key => $val)
			{

				$temp = clone $week_of;

				switch($key)
				{
					case 'monday':
						date_modify($temp, '+0 days');		
					break;
					case 'tuesday':
						date_modify($temp, '+1 day');
					break;
					case 'wednesday':
						date_modify($temp, '+2 days');
					break;
					case 'thursday':
						date_modify($temp, '+3 days');
					break;
					case 'friday':
						date_modify($temp, '+4 days');
					break;
				}

				$objective = new \App\Objective;
				$objective->section_id = str_replace('s_','',$key1);
				$objective->user_id = 1;
				$objective->lesson_date = date_format($temp, 'Y-m-d');
				$objective->objective =$val;
				
				$objective->save();	
			}
		}
		
	
	}
}
