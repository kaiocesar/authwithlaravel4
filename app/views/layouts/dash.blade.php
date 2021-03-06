
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png"> -->

    <title>Dashboard :::: Authentication with Laravel</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">



    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/assets/js/html5shiv.js"></script>
      <script src="/assets/js/respond.min.js"></script>
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
          <a class="navbar-brand" href="/<?php echo PREFIX_ADM; ?>">Administrator Area</a>
        </div>
        <div class="navbar-collapse float-left">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/<?php echo PREFIX_ADM; ?>/">Home</a></li>
            <li><a href="/<?php echo PREFIX_ADM; ?>/users">Users</a></li>
            <li><a href="/<?php echo PREFIX_ADM; ?>/posts">Post</a></li>
          </ul>
        </div><!--/.nav-collapse -->

        <div class="navbar-collapse float-right">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> User <!-- <b class="caret"></b>--> </a>
              <ul class="dropdown-menu">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 1</a></li>
                <li class="divider"></li>
                <li><a href="/logout"><i class="glyphicon glyphicon-off"></i> Sair</a></li>
              </ul>
            </li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        @yield('content')
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(function(){
        $('.action-icons a').tooltip(delay: { show: 400, hide: 100 });
      });
    </script>


  </body>
</html>
