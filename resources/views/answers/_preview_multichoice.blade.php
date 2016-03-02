@forelse($question->answers as $order => $answer)
	<div class="panel panel-default">
		@if($answer->is_correct)
			<div class="panel-body bg-success">
		@else
			<div class="panel-body">
		@endif
			{{ chr($order + 65) . ') ' . $answer->answer }}
		</div>
	</div>
@empty
@endforelse