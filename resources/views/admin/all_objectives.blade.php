<table>
@foreach ($objectives as $objective)
	<tr>
		<td>{{ $objective->section->name }}</td>
		<td>{{ $objective->objective }}</td>
		<td>{{ $objective->lesson_date}} </td>
	</tr>
@endforeach
</table>
