<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="/issets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/issets/css/normalize.css">
	<link rel="stylesheet" href="/issets/css/owl.carousel.css">
	<link rel="stylesheet" href="/issets/css/custom.select.css">
	<link rel="stylesheet" href="/issets/css/animate.css">
	<link rel="stylesheet" href="/issets/css/main.css">
	<title>ALL-P Group | {{__('asd.Услуги')}}</title>
</head>
<body>

	<!-- CHAT -->

	@include('components.front.logo')

	<!-- MOBILE MENU -->

	@include('components.front.mobile')

	<!-- HEADER -->

	@include('components.front.header')



	<!-- PAGE-HEAD -->

	<section class="page-head">
		<div class="page-head__img">
			<img src="/issets/img/services/bg.jpg" alt="services">
		</div>
		<h1 class="page-head__title">
			{{__('asd.НАШИ УСЛУГИ')}}
		</h1>
	</section>

	
	<!-- SERVICES -->

	<section class="services-page">
		<div class="container">
			<ul class="services-list">
				@foreach ($services as $service)
				<li class="services-list__item">
					<div class="services-list__img">
						<img src="{{$service->photo}}" alt="service">
					</div>
					<div class="services-list__wrap">
						<div class="services-list__title">
							{{$service['name_'.$lang]}}
						</div>
						<div class="services-list__name">
							{{$service['title_'.$lang]}}
						</div>
						<div class="services-list__text">
							{!!$service['discription_'.$lang]!!}
						</div>
						<a href="{{route('service.show', $service)}}" class="services-list__btn btn btn-white">
							{{__('asd.Читать подробнее')}}
						</a>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
	</section>


	<!-- FOOTER -->

	@include('components.front.footer')

	@include('components.front.scripts')
</body>
</html>