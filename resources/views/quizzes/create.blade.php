@extends('layouts.app')

@section('content')
	<div class="row main">
		<h1 class="title">Create a new Quiz</h1>
		<p class="lead">Create a brand new quiz, or <a href="app/quizzes">view all quizzes</a>.</p>
	</div>
	<div class="row">
		<form action="/app/quizzes" method="POST" >
			<div class="form-group">
				<label for="quiz_title">Title of Quiz</label>
				<input type="text" class="form-control" name="quiz_title">
			</div>
			<div class="form-group">
				<label for="quiz_description">Quiz description</label>
				<textarea class="form-control" name="quiz_description"></textarea>
			</div>
			<div class="form-group">
				<div class="radio">
					<label>
						<input type="radio" name="is_public" id="optionsIsPublicFalse" value="false" checked>
						Private
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="is_public" id="optionsIsPublicTrue" value="true">
						Public
					</label>
				</div>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Create Quiz</button>
			</div>
		</form>
	</div>
@endsection