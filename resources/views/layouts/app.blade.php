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

    @include('partials._header', ['type' => 'app'])

</head>
<body>

    @include('partials._navbar', ['type' => 'app'])

    <div class="container">
        <div class="row main">
            @section('page-content')
                <div class="col-xs-12 title">
                    @yield('page-title')
                    <hr>
                </div>

                <div class="col-md-4 edit">
                    <div class="well well-sm" style="min-height:350px">
                        @yield('edit-section')
                        <div class="clearfix"></div>
                    </div>

                </div>
                <div class="col-md-8 preview">
                    <div class="panel panel-default">
                        <div class="panel-body" style="min-height:350px">
                            @section('preview')
                                <div class="preview">
                                    @yield('preview-section')
                                </div>
                            @show
                        </div>
                    </div>
                </div>  
           @show
        </div>  
    </div>
 
    @include('partials._footer', ['type' => 'app'])

</body>
</html>