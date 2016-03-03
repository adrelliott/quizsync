@if($is_create)
	<div class="alert alert-warning" role="alert">
		<p class="hidden-xs hidden-sm">Create your question using the form on the left!</p>
		<p class="hidden-md hidden-lg">Create your question using the form above!</p>
	</div>
@else
	<h1>{{ $question->title }}</h1>
	<p class="lead">{{ $question->description }}</p>
	@include('questions.previews._' . $question->type)
@endif