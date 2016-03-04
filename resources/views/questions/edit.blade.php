@extends('layouts.app')

@section('page-title')
	<h1 class="title">Edit this Question</h1>
    <p class="lead">
    	Edit this Question, and add answers, or <a href="{{ route('quizzes.show', $question->quiz->id) }}">go back to the quiz.</a>.
	</p> 
@endsection

@section('edit-section')
	@include('questions._form', ['button_text' => 'Save Changes', 'is_create' => false])		
@endsection

@section('preview-section')
	@include('questions._preview', ['is_create' => false])
@endsection
