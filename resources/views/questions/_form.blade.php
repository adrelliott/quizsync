@if($is_create)
	{!! Form::open(['route' => ['questions.store', $quiz->id]]) !!}
@else
	<div class="">
		<a href="{{ route('quizzes.show', $question->quiz->id) }}" class="text-muted">Back to the quiz...</a>
	</div>
	{!! Form::model($question, ['route' => ['questions.update', $question->id], 'method' => 'put']) !!}
@endif
	<div class="panel panel-sm">
		<div class="panel-body">		
			<div class="form-group">
				{{ Form::label('title', 'Question Title') }}
				{{ Form::text('title', null, ['class' => 'form-control input-sm copyFrom']) }}
			</div>
			<div class="form-group">
				{{ Form::label('description', 'Question Description') }}
				{{ Form::textarea('description', null, ['class' => 'form-control  input-sm', 'rows' => 4]) }}
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					{{ Form::label('button_text', 'Button Text') }}
					{{ Form::text('button_text', 'Continue...', ['class' => 'form-control input-sm']) }}
				</div>	
			</div>
			<div class="form-group">
				{{ Form::label('type', 'Question Type') }}
				{{ Form::select('type', ['short' => 'Short Answer', 'long' => 'Long Answer', 'yesno' => 'Yes/No Answer', 'number' => 'Number Answer', 'rating' => 'Rating/scale', 'multichoice' => 'Mutiple Choice', 'diagnostic' => 'Diagnostic'], null, ['class' => 'form-control input-sm'], 'short') }}
				@if( ! $is_create)
					{{ Form::hidden('original_question_type', $question->type)}}
				@endif
			</div>

			@if($is_create)
				<div class="form-group">
					@if(count($quiz->sections))
						{{ Form::select('section_id', $quiz->sections->lists('title', 'id'), count($quiz->sections->lists('title')) + 1, ['class' => 'form-control input-sm']) }}
					@elseif(count($question->quiz->sections))
						{{ Form::select('section_id', $question->quiz->sections->lists('title', 'id'), count($question->quiz->sections->lists('title')) + 1, ['class' => 'form-control input-sm']) }}
					@endif
				</div>
			@else
				<div class="form-group">
					{{ Form::label('order_by', 'What order?') }}
					<div class="row">
						<div class="col-sm-4">
							{{ Form::number('order_by', 0, ['class' => 'form-control input'], 0) }}
						</div>
					</div>
				</div>
			@endif
			<div class="pull-right">
				{{ Form::submit($button_text, ['class' => 'btn btn-primary btn-sm']) }}
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
{!! Form::close() !!}