@extends('layouts.app')

@section('content')
	<div class="row main">
		<h1 class="title">Edit your Quiz</h1>
		<p class="lead">Make changes to your quiz here, or <a href="app/quizzes">go back to all quizzes</a>.</p>
	</div>
	<div class="row">
		<form action="/app/quizzes/{{ $quiz->id }}" method="POST" >
			@include('quizzes._form')
			<input type="hidden" name="_method" value="PUT">
			@forelse ($quiz->sections as $section)
				<ul class="list-group">
			    	<li class="list-group-item">
			    		<form action="/app/quizzes/{{ $quiz->id }}/sections/{{ $section->id }}/edit" method="POST">
							<div class="form-group">
					    		<label for="section_title">Section Title</label>
					    		<input type="text" class="form-control" name="section_title">
					    	</div>
					    	<div class="form-group">
					    		<label for="section_description">Description</label>
					    		<input type="text" class="form-control" name="section_description">
					    	</div>
							<input type="hidden" name="_method" value="PUT">
							<div class="form-group">
					    		<button class="btn btn-primary btn-sm" type="submit">Add New Section</button>
				    		</div>
			    		</form>
		    		</li>
			    </ul>
			    <hr>
			    <p>Create a new section</p>
			@empty
		    	<form action="/app/quizzes/{{ $quiz->id }}/sections" method="POST">
			    	<div class="form-group">
			    		<label for="section_title">Section Title</label>
			    		<input type="text" class="form-control" name="section_title">
			    	</div>
			    	<div class="form-group">
			    		<label for="section_description">Description</label>
			    		<input type="text" class="form-control" name="section_description">
			    	</div>
			    	<div class="form-group">
			    		<button class="btn btn-primary" type="submit">Add New Section</button>
		    		</div>
			    </form>
			@endforelse
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Save Changes</button>
			</div>
		</form>
	</div>
@endsection