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
			@include('questions._form', ['button_text' => 'Save Changes', 'is_create' => false])
		</div>
	</div>
@endsection


@section('edit-section -deletemeeeeeeeeeeee')
	<div class="panel panel-sm">
		<div class="panel-body">
			@if($question->type == 'multichoice' || $question->type == 'diagnostic')
				<a data-toggle="collapse" href="#editQuestion" aria-expanded="false" aria-controls="editQuestion">
					<span class="caret"></span> Edit the question
				</a>
				<div class="collapse" id="editQuestion">
			@else
				<div>
			@endif
				@include('questions._form', ['button_text' => 'Save Changes', 'is_create' => false])
			</div>
		</div>
	</div>
	@include('answers._form')
@endsection

@section('preview-section')
	@include('questions._preview', ['is_create' => false])
@endsection
