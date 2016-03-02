<h4>Multi choice</h4>
{!! Form::open(['route' => ['answers.store.multiple', $question->id]]) !!}
	<table class="table table-responsive table-condensed">
	 	<thead>
	 		<tr>
	 			<th>Answer</th>
	 			<th>Correct?</th>
	 		</tr>
	 	</thead>
	 	<tbody>
			@forelse($question->answers as $key => $row)
				{{-- If there are answers defined in $ question->answers, then allow these to dicatate the structure of the answers. This structure is explicitly defined in the empty condition below --}}
	 			<tr>
	 				<td>
	 					{{ Form::text('answers[' . $key . '][answer]', $row->answer, ['class' => 'form-control input-sm']) }}
	 				</td>
	 				<td>
	 					{{ Form::radio('is_correct', $key, $row->is_correct) }} Correct
	 				</td>
	 			</tr>
			@empty
				<tr>
					<td>{{ Form::text('answers[1][answer]', null, ['class' => 'form-control input-sm']) }}</td>
					<td>{{ Form::radio('is_correct', 1, true) }}</td>
				</tr>
				<tr>
					<td>{{ Form::text('answers[2][answer]', null, ['class' => 'form-control input-sm']) }}</td>
					<td>{{ Form::radio('is_correct', 2) }}</td>
				</tr>
				<tr>
					<td>{{ Form::text('answers[3][answer]', null, ['class' => 'form-control input-sm']) }}</td>
					<td>{{ Form::radio('is_correct', 3) }}</td>
				</tr>
				<tr>
					<td>{{ Form::text('answers[4][answer]', null, ['class' => 'form-control input-sm']) }}</td>
					<td>{{ Form::radio('is_correct', 4) }}</td>
				</tr>
			@endforelse
	 	</tbody>
	</table>
	<div class="pull-right">
		{{ Form::submit($button_text, ['class' => 'btn btn-primary btn-sm']) }}
	</div>
	<div class="clearfix"></div>
{!! Form::close() !!}