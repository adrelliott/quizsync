@if($is_create)
	{!! Form::open(['route' => ['answers.store.multiple', $question->id]]) !!}
@else
	{!! Form::model($question, ['route' => ['answers.update.multiple', $question->id], 'method' => 'put']) !!}
@endif		
{{ dump($question->answers)}}	

@forelse($question->answers as $answer)
	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('answers['. $answer->id . '][description]', 'Strongly Disagree') }}
			<input type="hidden" value="Strongly Disagree" name="'answers['. $answer->id . '][answer]'">
			{{ Form::text('answers['. $answer->id . '][description]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('answers['. $answer->id . '][score]', 'Score') }}
			{{ Form::number('answers['. $answer->id . '][score]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>
	
@empty

@endforelse

	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('description[]', 'Strongly Disagree') }}
			<input type="hidden" value="Strongly Disagree" name="answer[]">
			{{ Form::text('description[]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('score[]', 'Score') }}
			{{ Form::number('score[]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('description[]', 'Disagree') }}
			<input type="hidden" value="Disagree" name="answer[]">
			{{ Form::text('description[]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('score[]', 'Score') }}
			{{ Form::number('score[]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('description[]', 'Agree') }}
			<input type="hidden" value="Agree" name="answer[]">
			{{ Form::text('description[]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('score[]', 'Score') }}
			{{ Form::number('score[]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('description[]', 'Strongly Agree') }}
			<input type="hidden" value="Strongly Agree" name="answer[]">
			{{ Form::text('description[]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('score[]', 'Score') }}
			{{ Form::number('score[]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>
	<div class="pull-right">
		{{ Form::submit($button_text, ['class' => 'btn btn-primary btn-sm']) }}
	</div>
	<div class="clearfix"></div>
{!! Form::close() !!}



====


	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('answer[][description]', 'Disagree') }}
			<input type="hidden" value="Disagree" name="answer[]">
			{{ Form::text('answer[][description]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('score[]', 'Score') }}
			{{ Form::number('score[]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('answer[][description]', 'Agree') }}
			<input type="hidden" value="Agree" name="answer[]">
			{{ Form::text('answer[][description]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('score[]', 'Score') }}
			{{ Form::number('score[]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>
	<div class="form-group row">
		<div class="col-sm-8">
			{{ Form::label('answer[][description]', 'Strongly Agree') }}
			<input type="hidden" value="Strongly Agree" name="answer[]">
			{{ Form::text('answer[][description]', null, ['class' => 'form-control input-sm']) }}
		</div>
		<div class="col-sm-4 col-xs-12">
			{{ Form::label('score[]', 'Score') }}
			{{ Form::number('score[]', null, ['class' => 'form-control input-sm']) }}
		</div>
	</div>