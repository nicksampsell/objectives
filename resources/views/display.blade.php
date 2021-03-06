<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lesson Objectives</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery.cycle2.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,900,900italic,700italic,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="display.css"/>
</head>
<body>

<div class="cycle-slideshow" data-cycle-speed="600" data-cycle-timeout="10000000" data-cycle-slides=">.objective_display" data-cycle-fx="scrollHorz">
	@foreach($objectives as $objective)

		<div class="objective_display">
			<h1>{{ $objective->section->name }}</h1>

			<ul>
				<li>{{$objective->objective}}</li>
			</ul>
		</div>

	@endforeach;
</div>
</body>
</html>
