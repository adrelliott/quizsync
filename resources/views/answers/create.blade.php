@extends('layouts.app')

@section('page-title')
	<h1 class="title">Create answers for a Question</h1>
    <p class="lead">
    	Set up the answers to your question here, or <a href="{{ route('questions.edit', [$question->quiz->id, $question->id]) }}">go back to the question.</a>.
	</p> 
@endsection

@section('edit-section')
	<h4>Create some answers:</h4>
	<div class="panel panel-default">	
		<div class="panel-body">
			@include('answers._' . $question->type, ['is_create' => true])
		</div>
	</div>
	<div class="panel panel-sm">
		<div class="panel-body">
			<a data-toggle="collapse" href="#editQuestion" aria-expanded="false" aria-controls="editQuestion">
				<span class="caret"></span> Edit the question
			</a>
			<div class="collapse" id="editQuestion">
				@include('questions._form', ['button_text' => 'Save Changes', 'is_create' => true])
			</div>
		</div>
	</div>
@endsection

@section('preview-section')
	@include('answers._preview', ['is_create' => true])
@endsection
