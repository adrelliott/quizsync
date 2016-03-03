@if($question->type == 'multichoice' || $question->type == 'diagnostic')
	<h4>Answers:</h4>
	<div class="panel panel-default">	
		<div class="panel-body">
			@include('answers._' . $question->type)	
		</div>
	</div>
@endif