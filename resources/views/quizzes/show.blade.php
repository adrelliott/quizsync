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
	<a href="{{ route('sections.create', $quiz->id) }}" role="button" class="btn btn-default btn-block">Add New Section</a>
	<a href="{{ route('sections.create', $quiz->id) }}" role="button" class="btn btn-default btn-block">Add Multiple Choice Question</a>
@endsection

@section('preview-section')
	<code>Preview goes here</code>
@endsection