@if($is_create)
	<div class="alert alert-warning" role="alert">
		<p class="hidden-xs hidden-sm">Create your quiz using the form on the left!</p>	
		<p class="hidden-md hidden-lg">Create your quiz using the form above!</p>
	</div>
@else
	@forelse($quiz->sections->sortBy('order_by') as $section)
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<a href="{{ route('sections.edit', ['section' => $section->id]) }}">
						{{ $section->title }}
					</a>
				</h3>
			</div>
			@if(count($section->questions))
				<ul class="list-group">
					@foreach($section->questions as $question)
						<li class="list-group-item">
							<a href="{{ route('questions.edit', ['question' => $question->id]) }}">
								{{ $question->title }}
							</a>		
						</li>
					@endforeach
				</ul>
			@endif
		</div>
	@empty
		<div class="alert alert-warning" role="alert">
			<p class="lead">No Sections found!</p>
			<p>(Create a section before creating questions)</p>
		</div>
	@endforelse
@endif