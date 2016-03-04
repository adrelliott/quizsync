@extends('layouts.app')

@section('page-content')
	<div class="row main">
		<div class="col-xs-12">
			<h1 class="title">All your quizzes</h1>
			<p class="lead">Select a quiz to edit it, or <a href="quizzes/create">create a new quiz</a>.</p>
			@if(count($quizzes))
				<table class="table table-striped table-bordered table-hover table-responsive">
					<thead>
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>URL</th>
						</tr>
					</thead>
					<tbody data-link="row" class="rowlink">
						@foreach($quizzes as $quiz)
							<tr>
								<td><a href="{{ route('quizzes.show', ['quiz' => $quiz->id]) }}"></a>{{ $quiz->title }}</td>
								<td>{{ $quiz->description }}</td>
								<td>Quizmania.net/{{ $quiz->url }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<div class="panel panel-default">
					<div class="panel-body">
						<p>You've not created any quizzes yet :(</p>
					</div>
				</div>
			@endif
			{!! $quizzes->render() !!}
			<div class="pull-right">
				<a href="{{ route('quizzes.create') }}" class="btn btn-primary">Create A Quiz</a>
			</div>
		</div>
	</div>
@endsection