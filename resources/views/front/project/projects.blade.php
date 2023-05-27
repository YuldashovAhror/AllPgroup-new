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
	<title>ALL-P Group | {{__('asd.Наши проекты')}}</title>
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
			<img src="/issets/img/project-bg.jpg" alt="contact">
		</div>
		<h1 class="page-head__title">
			{{__('asd.Наши проекты')}}
		</h1>
	</section>
	

	
	<!-- PROJECT -->

	<section class="projects-page">
		<div class="container">
			<ul class="projects-list">
				@foreach ($projects as $project)
				<li class="projects-item">
					<div class="projects-item__img">
						<img src="{{$project->photo}}" alt="projects">
					</div>
					<div class="projects-item__name">
						{{$project['name_'.$lang]}}
					</div>
					<a href="{{route('project.show', $project)}}" class="projects-item__btn btn btn-white">
						{{__('asd.Узнать подробнее')}}
					</a>
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