{!! Form::open(['route' => ['answers.store.multiple', $question->id]]) !!}

@forelse($question->answers as $key => $row)
	{{-- If there are answers defined in $question->answers, then allow these to dicatate the structure of the answers. This structure is explicitly defined in the empty condition below --}}
	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('answers[' . $key . '][description]', $row->answer) }}
			{{ Form::hidden('answers[' . $key . '][answer]', $row->answer) }}
			{{ Form::text('answers[' . $key . '][description]', $row->description, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('answers[' . $key . '][score]', 'Score') }}
			{{ Form::number('answers[' . $key . '][score]', $row->score, ['class' => 'form-control input-sm']) }}
		</div>
	</div>

@empty
	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('answers[1][description]', 'Strongly Disagree') }}
			{{ Form::hidden('answers[1][answer]', 'Strongly Disagree') }}
			{{ Form::text('answers[1][description]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('answers[1][score]', 'Score') }}
			{{ Form::number('answers[1][score]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('answers[2][description]', 'Disagree') }}
			{{ Form::hidden('answers[2][answer]', 'Disagree') }}
			{{ Form::text('answers[2][description]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('answers[2][score]', 'Score') }}
			{{ Form::number('answers[2][score]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('answers[3][description]', 'Agree') }}
			{{ Form::hidden('answers[3][answer]', 'Agree') }}
			{{ Form::text('answers[3][description]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('answers[3][score]', 'Score') }}
			{{ Form::number('answers[3][score]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('answers[4][description]', 'Strongly Agree') }}
			{{ Form::hidden('answers[4][answer]', 'Strongly Agree') }}
			{{ Form::text('answers[4][description]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('answers[4][score]', 'Score') }}
			{{ Form::number('answers[4][score]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>
@endforelse

	<div class="pull-right">
		{{ Form::submit($button_text, ['class' => 'btn btn-primary btn-sm']) }}
	</div>
	<div class="clearfix"></div>
{!! Form::close() !!}