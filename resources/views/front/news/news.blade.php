<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="issets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="issets/css/normalize.css">
	<link rel="stylesheet" href="issets/css/owl.carousel.css">
	<link rel="stylesheet" href="issets/css/custom.select.css">
	<link rel="stylesheet" href="issets/css/animate.css">
	<link rel="stylesheet" href="issets/css/main.css">
	<title>ALL-P Group | {{$metateg->name}}</title>
	
		<meta name="description" content="{{$metateg->discription}}">
	
	<!-- Facebook -->
    <meta property="og:title" content="ALL-P Group">
    <meta property="og:site_name" content="ALL-P Group">
    <meta property="og:description" content="{{$metateg->discription}}">
    <meta property="og:url" content="https://all-p.uz/">
    <meta property="og:image" content="{{$metateg->photo}}">
    <meta property="og:type" content="website">

    <!-- Google Plus -->
    <meta itemprop="name" content="ALL-P Group">
    <meta itemprop="description" content="{{$metateg->discription}}">
    <meta itemprop="image" content="{{$metateg->photo}}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ALL-P Group">
    <meta name="twitter:description" content="{{$metateg->discription}}">
    <meta name="twitter:image" content="{{$metateg->photo}}">
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
			<img src="issets/img/news-bg.jpg" alt="contact">
		</div>
		<h1 class="page-head__title">
			{{__('asd.Новости')}}
		</h1>
	</section>
	
{{-- @dd($newcategories) --}}
	
	<!-- NEWS -->

	<section class="news-page">
		<div class="container">
			<ul class="news-choose">
				@foreach ($newcategories as $key=>$category)
				<li @if($key == 0) class="current" @endif>{{$category['name_'.$lang]}}</li>
				@endforeach
			</ul>
			<div class="news-tabs">
				@foreach ($newcategories as $key=>$category)
				<div class="news-tab @if($key == 0) current @endif">
					@foreach ($category->news as $new)
					<div class="news-item">
						<div class="news-item__img">
							<img src="{{$new->photo}}" alt="img">
						</div>
						<div class="news-item__wrap">
							<div class="news-item__top">
								<div class="news-item__title">
									{{$new['name_'.$lang]}}
								</div>
								<div class="news-item__date">
									<strong>{{$new->date}}</strong>
								</div>
								<div class="news-item__text">
									{{-- {!!$new['discription_'.$lang]!!} --}}
									{!!mb_substr($new['discription_'.$lang], 0, 500)!!}...
								</div>
							</div>
							<div class="news-item__bot">
								<a href="{{route('news.show', $new)}}" class="news-item__btn btn btn-gray">
									{{__('asd.Читать подробнее')}}
								</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				@endforeach
			</div>
		</div>
	</section>
	


	<!-- FOOTER -->

	@include('components.front.footer')

	@include('components.front.scripts')
</body>
</html>