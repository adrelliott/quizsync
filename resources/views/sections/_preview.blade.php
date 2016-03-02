@if($is_create)
	<div class="alert alert-warning" role="alert">
		<p class="bg-warning hidden-xs hidden-sm">Create your section using the form on the left!</p>
		<p class="bg-warning hidden-md hidden-lg">Create your section using the form above!</p>
	</div>
@else
	<h1>{{ $section->title }}</h1>
	<p class="lead">{{ $section->description }}</p>
@endif