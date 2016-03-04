@if($is_create)
	{!! Form::open(['route' => ['sections.store', $quiz->id]]) !!}
@else
	<a href="{{ route('quizzes.show', $section->quiz->id) }}">Back to the quiz.</a>
	{!! Form::model($section, ['route' => ['sections.update', $section->id], 'method' => 'put']) !!}
@endif	
	<div class="panel panel-sm">
		<div class="panel-body">			
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
					{{ Form::text('button_text', 'Continue...', ['class' => 'form-control input-sm']) }}
				</div>	
			</div>
			@if(! $is_create)
				<div class="form-group">
					{{ Form::label('order_by', 'What order?') }}
					<div class="row">
						<div class="col-sm-4">
						{{ Form::number('order_by', null, ['class' => 'form-control input']) }}
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