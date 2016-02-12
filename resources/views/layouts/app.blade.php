<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') QuizSync - Lead Generation quizzes that sync to your CRM @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="quiz, quiz creator, quiz sync to crm"/>
    @show @section('meta_author')
        <meta name="author" content="Al Elliott"/>
    @show @section('meta_description')
        <meta name="description"
              content="Create fun and engaging quizzes that will generate leads, and auot-sync them to your chosen CRM."/>
    @show

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    @yield('styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{!! asset('assets/site/ico/favicon.ico')  !!} ">
</head>
<body>

    @include('partials._appnavbar')

    <div class="container">
        @yield('content')
    </div>
    
    @include('partials._appfooter')

    <!-- Additional scripts Start -->
    @yield('scripts')
    <!-- Additional scripts End -->

</body>
</html>