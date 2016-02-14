@extends('layouts.app')

@section('page-title')
	<h1 class="title">Edit this Section</h1>
    <p class="lead">
    	Edit this section, and add questions, or <a href="{{ route('quizzes.show', $quiz->id) }}">go back to the quiz.</a>.
	</p> 
@endsection

@section('edit-section')
	@include('sections._form', ['button_text' => 'Save Changes'])
@endsection

@section('preview-section')
	<div class="row">
		<div class="col-xs-12">
			<code>Preview goes here...</code>
		</div>
		<div class="col-xs-12">
			<div class="panel-group" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Click to see all questions</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
						<ul class="list-group"> 
							@forelse ($section->questions as $question)
								<li class="list-group-item">{{ $question->title }}</li>
							@empty
								<li class="list-group-item">No questions found</li>
							@endforelse
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
