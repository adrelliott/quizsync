@if(isset($is_create))
	{!! Form::open(['route' => 'quizzes.store']) !!}
@else
	{!! Form::model($quiz, ['route' => ['quizzes.update', $quiz->id], 'method' => 'put']) !!}
@endif				
	<div class="form-group">
		{{ Form::label('quiz_title', 'Quiz Title') }}
		{{ Form::text('quiz_title', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group">
		{{ Form::label('quiz_description', 'Quiz Title') }}
		{{ Form::textarea('quiz_description', null, ['class' => 'form-control', 'rows' => 5]) }}
	</div>
	<div class="radio">
		<label>
			{{ Form::radio('is_public', 'false', true) }}
			This quiz is Public
		</label>
	</div>
	<div class="radio">
		<label>
			{{ Form::radio('is_public', 'true') }}
			This quiz is Private
		</label>
	</div>
	<div class="pull-right">
		{{ Form::submit($button_text, ['class' => 'btn btn-primary']) }}
	</div>
{!! Form::close() !!}