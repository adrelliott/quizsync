@extends('layouts.app')

@section('page-title')
	<h1 class="title">Build your Quiz</h1>
    <p class="lead">
    	Build your quiz here, or <a href="{{ route('quizzes.index') }}">go back to all quizzes</a>.
	</p> 
@endsection

@section('edit-section')
	<div class="panel panel-sm">
		<div class="panel-body">
			<a data-toggle="collapse" href="#editQuiz" aria-expanded="false" aria-controls="editQuiz">
				<span class="caret"></span> Edit the Quiz
			</a>
			<div class="collapse" id="editQuiz">
				@include('quizzes._form', ['button_text' => 'Save Changes!', 'is_create' => false])
			</div>
		</div>
	</div>
	<a href="{{ route('sections.create', $quiz->id) }}" role="button" class="btn btn-default btn-block">
		Add New Section
	</a>
	<a href="{{ route('questions.create', $quiz->id) }}" role="button" class="btn btn-default btn-block">
		Add New Question
	</a>
@endsection

@section('preview-section')
	@include('quizzes._preview', ['is_create' => false])
@endsection