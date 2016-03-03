@if($question->answers->isEmpty())
	<a href="{{ route('answers.create', $question->id) }}" class="btn btn-lg btn-success center-block">
		Create Some Answers...
	</a>
@else
	@foreach($question->answers as $order => $answer)
		<div class="panel panel-default">
			@if($answer->is_correct)
				<div class="panel-body bg-success">
			@else
				<div class="panel-body">
			@endif
				{{ chr($order + 65) . ') ' . $answer->answer }}
			</div>
		</div>
	@endforeach
	<a href="{{ route('answers.create', $question->id) }}" class="btn btn-lg ">
		Edit these Answers...
	</a>
@endif