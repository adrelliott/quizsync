@if($type == 'app')
	<!-- _footer Scripts begin -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
	<!-- _footer Scripts End -->
@else
	<code>add site footer stuff in partials._footer</code>
@endif
<!-- Additional scripts Start -->
    @yield('scripts')
<!-- Additional scripts End -->