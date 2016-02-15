@extends('layouts.app')

@section('page-title')
	<h1 class="title">Edit this Question</h1>
    <p class="lead">
    	Edit this Question, and add answers, or <a href="{{ route('quizzes.show', $quiz->id) }}">go back to the quiz.</a>.
	</p> 
@endsection

@section('edit-section')
	@include('questions._form', ['button_text' => 'Save Changes'])
	@include('answers._' . $question->type, ['button_text' => 'Save Answers', 'is_create' => false])
@endsection

@section('preview-section')
	<div class="row">
		<div class="col-xs-12">
			<code>Preview goes here...</code>
		</div>
		<code>answers go here</code>
	</div>
@endsection
