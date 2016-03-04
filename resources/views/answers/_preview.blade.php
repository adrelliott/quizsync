@forelse($question->answers as $order => $answer)
	@include('answers._answer', compact('order', 'answer'))
@empty
	<div class="alert alert-warning" role="alert">
		<p class="hidden-xs hidden-sm">Create your answers using the form on the left!</p>
		<p class="hidden-md hidden-lg">Create your answers using the form above!</p>
	</div>
@endforelse