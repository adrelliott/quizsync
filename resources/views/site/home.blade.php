@extends('layouts.app')
@section('title') Home :: @parent @stop
@section('content')
<div class="row">
    <div class="page-header">
        <h2>Home Page</h2>
    </div>
</div>

        <div class="row">
            <h2>News</h2>
           
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>
                                //link
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <a href="#" class="thumbnail"><img
                                        src="http://placehold.it/260x180" alt=""></a>
                        </div>
                        <div class="col-md-10">
                            <p>~Introd</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p></p>

                            <p>
                                <span class="glyphicon glyphicon-user"></span> by <span
                                        class="muted">author name</span> | <span
                                        class="glyphicon glyphicon-calendar"></span>  $post->created_at }}
                            </p>
                        </div>
                    </div>
                </div>
        </div>


@endsection
