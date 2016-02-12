@extends('layouts.app')

@section('content')
	<div class="row main">
		<h1 class="title">All your quizzes</h1>
		<p class="lead">Select a quiz to edit it, or <a href="quizzes/create">create a new quiz</a>.</p>
		<table class="table table-striped table-bordered table-hover table-responsive">
			<th>Title</th>
			<th>Description</th>
			<th>URL</th>

		@foreach($quizzes as $quiz)
			<tr>
				<td><a href="quizzes/{{ $quiz->id }}/edit">{{ $quiz->quiz_title }}</a></td>
				<td>{{ $quiz->quiz_description }}</td>
				<td>QuizSync.com/to/{{ $quiz->quiz_url }}</td>
			</tr>
		@endforeach
		</table>
	</div>
@endsection