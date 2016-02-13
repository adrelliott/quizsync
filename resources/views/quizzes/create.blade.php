@extends('layouts.app')

@section('content')
	<div class="row">
		<h1 class="title">Create a new Quiz</h1>
		<p class="lead">Create a brand new quiz, or <a href="app/quizzes">view all quizzes</a>.</p>
	</div>
	<div class="row">
		@include('quizzes._form', ['button_text' => 'Create Quiz!', 'is_create' => true])
	</div>
@endsection