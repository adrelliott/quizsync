@extends('layouts.app')

@section('page-title')
	<h1 class="title">Edit this Section</h1>
    <p class="lead">
    	Edit this Section, or <a href="{{ route('quizzes.show', $section->quiz->id) }}">go back to the quiz.</a>.
	</p> 
@endsection

@section('edit-section')
	@include('sections._form', ['button_text' => 'Save Changes', 'is_create' => false])
@endsection

@section('preview-section')
	@include('sections._preview', ['is_create' => false])
@endsection