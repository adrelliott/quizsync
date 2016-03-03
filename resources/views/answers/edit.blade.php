@extends('layouts.app')

@section('page-title')
	<h1 class="title">Edit the answers for this Question</h1>
    <p class="lead">
    	Edit the answers to your question here, or <a href="{{ route('questions.edit', [$question->quiz->id, $question->id]) }}">go back to the question.</a>.
	</p> 
@endsection

@section('edit-section')
	
	<h4>Answers:</h4>
	<div class="panel panel-default">	
		<div class="panel-body">
			@include('answers._' . $question->type, ['is_create' => false])
		</div>
	</div>
@endsection

@section('preview-section')
	@include('answers._preview', ['is_create' => true])
@endsection
