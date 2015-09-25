<!DOCTYPE html>
<html lang="ua">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Персональний сайт</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-10 .col-xs-12 page-header text-uppercase text-center">
			<h1 id='site_name'>Персональний сайт</h1>
			<h1 id='site_name_1'>Добранюка Юрія</h1>
		</div>
		<div class="col-md-2 .col-xs-12 ">
			<img src="image/foto.jpg" alt="foto" class="img-circle img-responsive center-block">
		</div>
	</div>
</div>
<div class="container">
	<nav class="navbar navbar-inverse ">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				  <a class="navbar-brand" href="/">Головна</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="bio">Біографія</a></li>
					<li><a href="pub">Публікації</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Резюме<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="dani">Особисті дані</a></li>
							<li><a href="osv">Освіта</a></li>
							<li class="divider"></li>
							<li><a href="dosv">Досвід роботи</a></li>
							
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-success">Знайти</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="avt">Авторизація</a></li>
					<li><a href="cont">Контакти</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>  
</div>	


	@yield('content')


	
	<div class="footer">
		<div class="row">
			<div class="col-xs-6 col-sm-8 col-md-8 col-lg-8 text-uppercase text-center otstup">
				<h3>Персональний сайт <strong>Добранюка Юрія</strong></h3>
			</div>
			<div class="col-xs-4 col-sm-2 col-md-1 col-lg-1 ">
				<img src="image/foto.jpg" alt="foto" class="img-circle img-responsive center-block">
			</div>
		</div>
	</div>	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed  -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>