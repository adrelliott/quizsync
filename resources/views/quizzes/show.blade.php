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
	@forelse($quiz->sections as $section)
		<div class="panel panel-default">
			<div class="panel-heading">
				<a href="{{ route('sections.edit', ['quiz' => $quiz->id, 'section' => $section->id]) }}">
					{{ $section->title }}
				</a>
			</div>
			<ul class="list-group">
				@forelse($section->questions as $question)
					<li class="list-group-item">{{ $question->title }}</li>
				@empty
					<li class="list-group-item">No questions defined</li>
				@endforelse
			</ul>
		</div>
	@empty
		<p class="lead">No sections found (add a section before adding your questions</p>
	@endforelse
@endsection