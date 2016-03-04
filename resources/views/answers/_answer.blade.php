@if($answer->answer)
	<div class="panel panel-default">
		@if($answer->is_correct && $question->type == 'multichoice')
			<div class="panel-body bg-success">
		@else
			<div class="panel-body">
		@endif
			{{ chr($order + 65) . ') ' . $answer->answer }}
			@if($answer->score && $question->type == 'diagnostic')
				<span class="badge pull-right">{{$answer->score}}</span>
			@endif
		</div>
	</div>
@endif