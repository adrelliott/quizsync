@extends('layouts.app')

@section('page-title')
	<h1 class="title">Build your Quiz</h1>
    <p class="lead">
    	Build your quiz here, or <a href="{{ route('quizzes.index') }}">go back to all quizzes</a>.
	</p> 
@endsection

@section('edit-section')
	@include('quizzes._form', ['button_text' => 'Save Changes!', 'is_create' => false])
	@if( ! $quiz->sections->isEmpty())
		<a href="{{ route('questions.create', ['quiz' => $quiz->id]) }}" role="button" class="btn btn-success btn-block">
			Add New Question
		</a>
	@endif
	<a href="{{ route('sections.create', ['quiz' => $quiz->id]) }}" role="button" class="btn btn-default btn-block">
		Add New Section
	</a>
@endsection

@section('preview-section')
	@include('quizzes._preview', ['is_create' => false])
@endsection