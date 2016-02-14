@extends('layouts.app')

@section('page-title')
	<h1 class="title">Create your Quiz</h1>
    <p class="lead">
    	Create your quiz here, or <a href="{{ route('quizzes.index') }}">go back to all quizzes</a>.
	</p> 
@endsection

@section('edit-section')
	@include('quizzes._form', ['button_text' => 'Create this Quiz!', 'is_create' => true])
@endsection

@section('preview-section')
	<code>Preview goes here</code>
@endsection
