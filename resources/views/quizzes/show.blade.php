@extends('layouts.app')

@section('page-title')
	<h1 class="title">Build your Quiz</h1>
    <p class="lead">
    	Build your quiz here, or <a href="{{ route('quizzes.index') }}">go back to all quizzes</a>.
	</p> 
@endsection

@section('edit-section')
	@include('quizzes._form', ['button_text' => 'Save Changes'])
	<hr>
	<a href="{{ route('sections.create', $quiz->id) }}" role="button" class="btn btn-default btn-block">
		Add New Section
	</a>
	<a href="{{ route('questions.create', $quiz->id) }}" role="button" class="btn btn-default btn-block">
		Add New Question
	</a>
@endsection

@section('preview-section')
	@forelse($quiz->sections->sortBy('order_by') as $section)
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<a href="{{ route('sections.edit', ['quiz' => $quiz->id, 'section' => $section->id]) }}">
						{{ $section->title }}
					</a>
				</h3>
			</div>
		</div>
		@forelse($section->questions as $question)
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="{{ route('questions.edit', ['quiz' => $quiz->id, 'question' => $question->id]) }}">
						{{ $question->title }}
					</a>
				</div>
			</div>
		@empty
		@endforelse
	@empty
		<p class="lead">No sections found (add a section before adding your questions</p>
	@endforelse
@endsection