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
				@include('quizzes._form', ['button_text' => 'Save Changes!'])
				<div class="clearfix"></div>
			</div>

		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
  				<div class="panel-body" style="min-height:350px">
					<div class="center-block">
						<p>Preview</p>
					</div>
				</div>
			</div>
		</div>	
	</div>	
	<hr><hr>
	<div class="row">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Panel heading</div>
				<div class="panel-body">
					<p>...</p>
				</div>

				<!-- List group -->
				<ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
					<li class="list-group-item">Porta ac consectetur ac</li>
					<li class="list-group-item">Vestibulum at eros</li>
				</ul>
			</div>
		</div>
	</div>
@endsection