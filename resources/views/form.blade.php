{!! Form::open(array('url' => 'admin/objective/add')) !!}
@foreach ($section as $subject)

	<h2>{{ $subject->name }}</h2>

	<ul>
	@foreach ($subject->occurs() as $day)

		<li>
			<label>{{$day}}
			<textarea name="objective[s_{{$subject->id}}][{{strtolower($day)}}]"></textarea>
			</label>
		</li>

	@endforeach
	</ul>
@endforeach

{!! Form::close() !!}
