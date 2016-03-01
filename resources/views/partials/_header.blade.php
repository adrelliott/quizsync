<!-- Fonts -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

@if($type == 'app')	
	<!-- Styles -->
	@if(env('APP_ENV') == 'local')
		<link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap.min.js')}}" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/jasny-bootstrap.min.js')}}" rel="stylesheet" type="text/css">
	@else
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
	@endif
	<!-- Not hosted on CDNs -->
	<link href="{{ asset('css/bootstrap-switch.min.js')}}" rel="stylesheet" type="text/css">

	<!-- Styles end -->
@else
	<h1>site headers go here </h1>
	<code>edit this in partials._header</code>
@endif

@yield('styles')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link rel="shortcut icon" href="{!! asset('assets/site/ico/favicon.ico')  !!} ">