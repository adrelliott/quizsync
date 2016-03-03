<h4>Diagnostic</h4>
{!! Form::open(['route' => ['answers.store.multiple', $question->id]]) !!}
	<table class="table table-responsive table-condensed">
	 	<thead>
	 		<tr>
	 			<th class="col-sm-10 col-xs-9">Answer</th>
	 			<th class="col-md-2 col-xs-3">Score</th>
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
	 					{{ Form::number('answers[' . $key . '][score]', $row->score, ['class' => 'form-control input-sm']) }}
	 				</td>
	 			</tr>
			@empty
				<tr>
					<td>
						{{ Form::text('answers[1][answer]', null, ['class' => 'form-control input-sm']) }}
					</td>
					<td>
						{{ Form::number('answers[1][score]', null, ['class' => 'form-control input-sm']) }}
					</td>
				</tr>
				<tr>
					<td>
						{{ Form::text('answers[2][answer]', null, ['class' => 'form-control input-sm']) }}
					</td>
					<td>
						{{ Form::number('answers[2][score]', null, ['class' => 'form-control input-sm']) }}
					</td>
				</tr>
				<tr>
					<td>
						{{ Form::text('answers[3][answer]', null, ['class' => 'form-control input-sm']) }}
					</td>
					<td>
						{{ Form::number('answers[3][score]', null, ['class' => 'form-control input-sm']) }}
					</td>
				</tr>
				<tr>
					<td>
						{{ Form::text('answers[4][answer]', null, ['class' => 'form-control input-sm']) }}
					</td>
					<td>
						{{ Form::number('answers[4][score]', null, ['class' => 'form-control input-sm']) }}
					</td>
				</tr>
			@endforelse
	 	</tbody>
	</table>
	<div class="pull-right">
		{{ Form::submit('Save Answers', ['class' => 'btn btn-primary btn-sm']) }}
	</div>
	<div class="clearfix"></div>
{!! Form::close() !!}