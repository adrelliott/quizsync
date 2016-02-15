@if(isset($is_create))
	{!! Form::open(['route' => ['questions.store', $quiz->id]]) !!}
@else
	{!! Form::model($question, ['route' => ['questions.update', $question->id], 'method' => 'put']) !!}
@endif			

@include('answers._' . $question->type)	

	<div class="pull-right">
		{{ Form::submit($button_text, ['class' => 'btn btn-primary btn-sm']) }}
	</div>
	<div class="clearfix"></div>
{!! Form::close() !!}