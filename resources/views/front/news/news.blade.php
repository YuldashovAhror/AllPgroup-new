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
		<meta name="keywords" content="{{ $metateg['keyword_' . $lang] }}">
	
	<!-- Facebook -->
    <meta property="og:title" content="ALL-P Group">
    <meta property="og:site_name" content="ALL-P Group">
    <meta property="og:description" content="{{$metateg->discription}}">
    <meta property="og:url" content="https://all-p.uz/">
    <meta property="og:image" content="{{$metateg->photo}}" alt="{{$metateg['alt_'.$lang]}}" title="{{$metateg['title_'.$lang]}}">
    <meta property="og:type" content="website">

    <!-- Google Plus -->
    <meta itemprop="name" content="ALL-P Group">
    <meta itemprop="description" content="{{$metateg->discription}}">
    <meta itemprop="image" content="{{$metateg->photo}}" alt="{{$metateg['alt_'.$lang]}}" title="{{$metateg['title_'.$lang]}}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ALL-P Group">
    <meta name="twitter:description" content="{{$metateg->discription}}">
    <meta name="twitter:image" content="{{$metateg->photo}}" alt="{{$metateg['alt_'.$lang]}}" title="{{$metateg['title_'.$lang]}}">
    
    	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		m[i].l=1*new Date();
		for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
		k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
	
		ym(94295729, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
		});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/94295729" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-8WG4XCM61P"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-8WG4XCM61P');
	</script>
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
			<img src="issets/img/news-bg.jpg" alt="{{$metateg['alt_'.$lang]}}" title="{{$metateg['title_'.$lang]}}">
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
							<img src="{{$new->photo}}" alt="{{$new['alt_'.$lang]}}" title="{{$new['title_'.$lang]}}">
						</div>
						<div class="news-item__wrap">
							<div class="news-item__top">
								<div class="news-item__title">
									{{$new['name_'.$lang]}}
								</div>
								<div class="news-item__text">
									{{-- {!!$new['discription_'.$lang]!!} --}}
									{!!mb_substr($new['discription_'.$lang], 0, 500)!!}...
								</div>
							</div>
							<div class="news-item__bot">
								<div class="news-item__date">
									<strong>{{$new->date}}</strong>
								</div>
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
	<script data-b24-form="inline/4/bwnvw4" data-skip-moving="true">
        (function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/180000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b18647668/crm/form/loader_4.js');
    </script>
    <script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b18647668/crm/site_button/loader_4_arvi7b.js');
    </script>
</body>
</html>