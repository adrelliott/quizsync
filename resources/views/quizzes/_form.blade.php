@if(isset($is_create))
	{!! Form::open(['route' => 'quizzes.store']) !!}
@else
	{!! Form::model($quiz, ['route' => ['quizzes.update', $quiz->id], 'method' => 'put']) !!}
@endif				
	<div class="form-group">
		{{ Form::label('quiz_title', 'Quiz Title') }}
		{{ Form::text('quiz_title', null, ['class' => 'form-control input-sm']) }}
	</div>
	<div class="form-group">
		{{ Form::label('quiz_description', 'Quiz Description') }}
		{{ Form::textarea('quiz_description', null, ['class' => 'form-control  input-sm', 'rows' => 3]) }}
	</div>
	<div class="form-group">
		<p><b>Quiz status:</b></p>
	<label class="radio-inline">
		{{ Form::radio('is_public', 'false', true) }}
		Draft
	</label>
	<label class="radio-inline">
		{{ Form::radio('is_public', 'true') }}
		Published
	</label>
	</div>
	<div class="pull-right">
		{{ Form::submit($button_text, ['class' => 'btn btn-primary btn-sm']) }}
	</div>
	<div class="clearfix"></div>
{!! Form::close() !!}