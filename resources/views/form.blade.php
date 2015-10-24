{!! Form::open(array('url' => 'admin/objectives/add')) !!}

<input type="date" name="week_of" value="{{ date('Y-m-d') }}" />

@foreach ($section as $subject)

	<h2>{{ $subject->name }}</h2>

	<ul>
	@foreach ($subject->occurs() as $day)

		<li>
			<label>{{$day}}
			<textarea name="objective[s_{{$subject->id}}][{{strtolower($day)}}]">{{$subject->name}} on {{$day}}</textarea>
			</label>
		</li>

	@endforeach
	</ul>
@endforeach

<input type="submit" value="Save Changes">
{!! Form::close() !!}
