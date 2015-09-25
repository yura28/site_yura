@extends('index')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="col-md-12 .col-xs-12 page-header text-uppercase text-center">
				<h1><strong>особисті дані</strong></h1>
			</div>
			<div class="row">
				<div class="col-md-3 lead">
					<p>Посада</p>
				</div>
				<div class="col-md-9 text-justify">
					<p>Старший викладач кафедри вищої математики</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 lead">
					<p>Науковий ступінь</p>
				</div>
				<div class="col-md-9 text-justify">
					<p>кандидат технічних наук</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 lead">
					<p>Дата і місце народження</p>
				</div>
				<div class="col-md-9 text-justify">
					<p>28 травня 1986 року,  с. Снітків, Мурованокуриловецького району, Вінницької області</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="row">
				<div class="col-md-12 .col-xs-12 page-header text-uppercase text-center">
					<h1><strong>відзнаки</strong></h1>
				</div>
				<div class="col-md-6 otstup">
					<img src="image/dipl_1.jpg" class="img-responsive img-thumbnail" alt="dipl_1">
				</div>
				<div class="col-md-6 otstup">
					<img src="image/dipl_2_1.jpg" class="img-responsive img-thumbnail" alt="dipl_2_1">
				</div>
				<div class="col-md-6 otstup">
					<img src="image/dipl_2_2.jpg" class="img-responsive img-thumbnail" alt="dipl_2_2">
				</div>
				<div class="col-md-6 otstup">
					<img src="image/gramota.jpg" class="img-responsive img-thumbnail" alt="gramota">
				</div>
			</div>
		</div>
	</div>  
</div>
@stop