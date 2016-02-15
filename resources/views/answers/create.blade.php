@extends('layouts.app')

@section('page-title')
	<h1 class="title">Create answers for a Question</h1>
    <p class="lead">
    	Set up the answers to your question here, or <a href="{{ route('questions.edit', $question->id) }}">go back to the question.</a>.
	</p> 
@endsection

@section('edit-section')
	@include('answers._form', ['button_text' => 'Create answer!', 'is_create' => true])
@endsection

@section('preview-section')
	<h3>{{ $question->title }}</h3>
	<code>Preview goes here</code>
@endsection
