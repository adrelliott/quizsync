<!-- Navbar Start  -->
<div class="bs-component">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">QuizSync</a>
      </div>
<?php $active = false ?>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="{ { $active == 'home' ? 'active' : '' } }"><a href="#">Home <span class="sr-only">(current)</span></a></li>
          <li class="{ { $active == 'about' ? 'active' : '' } }"><a href="#">About</a></li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Login <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        <!-- Else, show log in button -->
        <li><a href="#">Register</a></li>
        <li><a href="#">Sign In</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- Navbar End -->