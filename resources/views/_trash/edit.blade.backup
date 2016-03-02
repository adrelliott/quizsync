@extends('layouts.app')

@section('content')
	<div class="row main">
		<div class="col-lg-12">
			<h1 class="title">Edit your Quiz</h1>
			<p class="lead">Make changes to your quiz here, or <a href="{{ route('quizzes.index') }}">go back to all quizzes</a>.</p>	
			<hr>
		</div>

		<div class="col-md-4">
			<div class="well well-sm" style="min-height:350px">
				@include('quizzes._form', ['button_text' => 'Save Changes!', 'is_create' => false])
				<div class="clearfix"></div>
			</div>

		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
  				<div class="panel-body" style="min-height:350px">
					<div class="center-block">
						<code>codereview</code>
					</div>
				</div>
			</div>
		</div>	
	</div>	
@endsection