@extends('index')

@section('content')

<div class="container">
	<div class="row">
		<form class="form-horizontal col-md-6">
			<div class="col-md-12 .col-xs-12 page-header text-uppercase text-center">
				<h1><strong>авторизація</strong></h1>
			</div>
			<div class="form-group">
				<label for="inputText" class="col-sm-2 control-label">Логін</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputlogin" placeholder="Логін">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword3" placeholder="Пароль">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <div class="checkbox">
					<label>
					  <input type="checkbox"> запам'ятай мене
					</label>
				  </div>
				</div>
			</div>
			 <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default">Вхід</button>
				</div>
			</div>
		</form>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-12 .col-xs-12 page-header text-uppercase text-center">
					<h1><strong>відзнаки</strong></h1>
				</div>
				<div class="col-md-3 otstup">
					<img src="image/dipl_1.jpg" class="img-responsive img-thumbnail" alt="dipl_1">
				</div>
				<div class="col-md-3 otstup">
					<img src="image/dipl_2_1.jpg" class="img-responsive img-thumbnail" alt="dipl_2_1">
				</div>
				<div class="col-md-3 otstup">
					<img src="image/dipl_2_2.jpg" class="img-responsive img-thumbnail" alt="dipl_2_2">
				</div>
				<div class="col-md-3 otstup">
					<img src="image/gramota.jpg" class="img-responsive img-thumbnail" alt="gramota">
				</div>
			</div>
		</div>
	</div>  
</div>
@stop