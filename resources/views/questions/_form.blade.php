@if(isset($is_create))
	{!! Form::open(['route' => ['questions.store', $section->id, 'quiz_id' => $section->quiz_id]]) !!}
@else
	{!! Form::model($section, ['route' => ['questions.update', $question->id, 'quiz_id' => $section->quiz_id], 'method' => 'put']) !!}
@endif				
	<div class="form-group">
		{{ Form::label('title', 'Question Title') }}
		{{ Form::text('title', null, ['class' => 'form-control input']) }}
	</div>
	<div class="form-group">
		{{ Form::label('description', 'Question Description') }}
		{{ Form::textarea('description', null, ['class' => 'form-control  input-sm', 'rows' => 4]) }}
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			{{ Form::label('button_text', 'Button Text') }}
			{{ Form::text('button_text', null, ['class' => 'form-control input-sm']) }}
		</div>	
	</div>
	<div class="form-group">
		{{ Form::label('type', 'Question Type') }}
		{{ Form::select('type', ['multi_choice' => 'Mutiple Choice', 'short' => 'Short Answer', 'long' => 'Long Answer', 'yes_no' => 'Yes/No Answer', 'number' => 'Number Answer'], null, ['class' => 'form-control input-sm'], 'multi_choice') }}
	</div>
	{{ dd($quiz)}}
	<div class="form-group">
		{{ Form::label('section_id', 'Which Section?') }}
		{{ Form::select('section_id', ['multi_choice' => 'Mutiple Choice', 'short' => 'Short Answer', 'long' => 'Long Answer', 'yes_no' => 'Yes/No Answer', 'number' => 'Number Answer'], null, ['class' => 'form-control input-sm'], 'multi_choice') }}
	</div>
	{{ Form::hidden('order_by') }}
	<div class="pull-right">
		{{ Form::submit($button_text, ['class' => 'btn btn-primary btn-sm']) }}
	</div>
	<div class="clearfix"></div>
{!! Form::close() !!}