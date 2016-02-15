@if(isset($is_create))
	{!! Form::open(['route' => ['sections.store', $quiz->id]]) !!}
@else
	{!! Form::model($section, ['route' => ['sections.update', $section->id, 'quiz_id' => $quiz->id], 'method' => 'put']) !!}
@endif				
	<div class="form-group">
		{{ Form::label('title', 'Section Title') }}
		{{ Form::text('title', null, ['class' => 'form-control input']) }}
	</div>
	<div class="form-group">
		{{ Form::label('description', 'Section Description') }}
		{{ Form::textarea('description', null, ['class' => 'form-control  input-sm', 'rows' => 4]) }}
	</div>
	<div class="row">
		<div class="form-group col-md-6">
			{{ Form::label('button_text', 'Button Text') }}
			{{ Form::text('button_text', null, ['class' => 'form-control input-sm']) }}
		</div>	
	</div>
	<div class="form-group">
		{{ Form::label('order_by', 'What order?') }}
		<div class="row">
			<div class="col-sm-4">
				@if(isset($is_create))
					{{ Form::number('order_by', count($quiz->sections) + 1, ['class' => 'form-control input']) }}
				@else
					{{ Form::number('order_by', null, ['class' => 'form-control input']) }}
				@endif
			</div>
		</div>
	</div>
	<div class="pull-right">
		{{ Form::submit($button_text, ['class' => 'btn btn-primary btn-sm']) }}
	</div>
	<div class="clearfix"></div>
{!! Form::close() !!}