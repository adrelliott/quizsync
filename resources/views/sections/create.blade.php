@extends('layouts.app')

@section('page-title')
	<h1 class="title">Create a New Section</h1>
    <p class="lead">
    	Create a new section for your quiz here, or <a href="{{ route('quizzes.show', $quiz->id) }}">go back to the quiz.</a>.
	</p>
@endsection

@section('edit-section')
	@include('sections._form', ['button_text' => 'Create section!', 'is_create' => true])
@endsection

@section('preview-section')
	@include('sections._preview', ['is_create' => true])
@endsection
