<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
	public function objectives()
	{
		return $this->hasMany('App\Objective');
	}

	public function occurs()
	{
		$occurs = [];

		$days_of_the_week = strtolower($this->days_of_the_week);
		$days_of_the_week = explode(',',$days_of_the_week);


		foreach($days_of_the_week as $dotw)
		{
			switch($dotw)
			{
				case 'm':
					$occurs[] = 'Monday';
				break;
				case 't':
					$occurs[] = 'Tuesday';
				break;
				case 'w':
					$occurs[] = 'Wednesday';
				break;
				case 'r':
					$occurs[] = 'Thursday';
				break;
				case 'f':
					$occurs[] = 'Friday';
				break;
			}
		}

		return $occurs;
	}
}
