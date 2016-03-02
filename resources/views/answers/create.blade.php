@extends('layouts.app')

@section('page-title')
	<h1 class="title">Create answers for a Question</h1>
    <p class="lead">
    	Set up the answers to your question here, or <a href="{{ route('questions.edit', [$question->quiz->id, $question->id]) }}">go back to the question.</a>.
	</p> 
@endsection

@section('edit-section')
	@include('answers._' . $question->type, ['button_text' => 'Create answer!'])
@endsection

@section('preview-section')
	@include('answers._preview', ['is_create' => true])
@endsection
