<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wedmall</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{{ URL::to('/') }}}">Wedmall</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{{ URL::to('/') }}}">Home</a></li>
            <li><a href="{{{ URL::to('/user/login') }}}">Login</a></li>
            <li><a href="{{{ URL::to('/user/create') }}}">Register</a></li>
          </ul>
          <!-- /login form -->
          <form  method="POST" action="{{{ Confide::checkAction('UserController@do_login') ?: URL::to('/user/login') }}}" accept-charset="UTF-8" class="navbar-form navbar-right" role="form">
            <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
            <div class="form-group">
              <input type="text" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="{{{ Lang::get('confide::confide.password') }}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">{{{ Lang::get('confide::confide.login.submit') }}}</button>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container" style="margin-top: 80px">

      @yield('content')

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
