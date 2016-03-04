@extends('layouts.app')

@section('page-title')
	<h1 class="title">Create answers for a Question</h1>
    <p class="lead">
    	Set up the answers to your question here, or <a href="{{ route('questions.edit', [$question->quiz->id]) }}">go back to the question.</a>.
	</p> 
@endsection

@section('edit-section')
	@include('answers._' . $question->type, ['is_create' => true])
@endsection

@section('preview-section')
	<h1>Q. {{ $question->title }}</h1>
	<p class="lead">{{ $question->description }}</p>
	@include('answers._preview')
@endsection
