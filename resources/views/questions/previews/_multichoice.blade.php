@if($question->answers->isEmpty())
	<a href="{{ route('answers.create', $question->id) }}" class="btn btn-lg btn-success center-block">
		Create Some Answers...
	</a>
@else
	@foreach($question->answers as $order => $answer)
		@include('answers._answer', compact('order', 'answer'))
	@endforeach
	<a href="{{ route('answers.create', $question->id) }}" class="btn btn-lg ">
		Edit these Answers...
	</a>
@endif