@if($is_create)
	{!! Form::open(['route' => 'quizzes.store']) !!}
@else
	{!! Form::model($quiz, ['route' => ['quizzes.update', $quiz->id], 'method' => 'put']) !!}
@endif				
	<div class="form-group">
		{{ Form::label('title', 'Quiz Title') }}
		{{ Form::text('title', null, ['class' => 'form-control input-sm']) }}
	</div>
	<div class="form-group">
		{{ Form::label('description', 'Quiz Description') }}
		{{ Form::textarea('description', null, ['class' => 'form-control  input-sm', 'rows' => 3]) }}
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
	@if( isset($quiz) && $quiz->is_public == 'true')
		<div class="form-group">
     		<label for="url">Public Link to Quiz</label>
			<input class="form-control" type="text" name="url" value="http://QuizSync/q/{{ $quiz->url}}" readonly>
		</div>
	@endif
	<div class="pull-right">
		{{ Form::submit($button_text, ['class' => 'btn btn-primary btn-sm']) }}
	</div>
	<div class="clearfix"></div>
{!! Form::close() !!}