@extends('layouts.app')

@section('page-title')
	<h1 class="title">Edit this Question</h1>
    <p class="lead">
    	Edit this Question, and add answers, or <a href="{{ route('quizzes.show', $quiz->id) }}">go back to the quiz.</a>.
	</p> 
@endsection

@section('edit-section')
	<div class="panel panel-sm">
		<div class="panel-body">
			<a data-toggle="collapse" href="#editQuestion" aria-expanded="false" aria-controls="editQuestion">
				<span class="caret"></span> Edit the question
			</a>
			<div class="collapse" id="editQuestion">
				@include('questions._form', ['button_text' => 'Save Changes', 'is_create' => false])
			</div>
		</div>
	</div>
	<h4>Answers:</h4>
	<div class="panel panel-default">	
		<div class="panel-body">
			@include('answers._' . $question->type, ['button_text' => 'Save Answers'])
		</div>
	</div>	
@endsection

@section('preview-section')
	<div class="row">
		<div class="col-xs-12">
			<code>Preview goes here...</code>
		</div>
		<code>answers go here</code>
	</div>
@endsection
