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
    <title>ALL-P Group | {{ $service['name_' . $lang] }}</title>
    
	<meta name="description" content="{!! $service['discription_' . $lang] !!}">
	
	<!-- Facebook -->
    <meta property="og:title" content="ALL-P Group">
    <meta property="og:site_name" content="ALL-P Group">
    <meta property="og:description" content="{!! $service['discription_' . $lang] !!}">
    <meta property="og:url" content="https://all-p.uz/">
    <meta property="og:image" content="{{ $service->photo }}" alt="{{$service['alt_'.$lang]}}" title="{{$service['title_'.$lang]}}">
    <meta property="og:type" content="website">

    <!-- Google Plus -->
    <meta itemprop="name" content="ALL-P Group">
    <meta itemprop="description" content="{!! $service['discription_' . $lang] !!}">
    <meta itemprop="image" content="{{ $service->photo }}" alt="{{$service['alt_'.$lang]}}" title="{{$service['title_'.$lang]}}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ALL-P Group">
    <meta name="twitter:description" content="{!! $service['discription_' . $lang] !!}">
    <meta name="twitter:image" content="{{ $service->photo }}" alt="{{$service['alt_'.$lang]}}" title="{{$service['title_'.$lang]}}">
    
    
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
    {{-- @dd($service->name_uz) --}}
    <section class="page-head">
        <div class="page-head__img">
            <img src="{{ $service->photo }}" alt="{{$service['alt_'.$lang]}}" title="{{$service['title_'.$lang]}}">
        </div>
        <h1 class="page-head__title page-head__title-single">
            {{ $service['name_' . $lang] }}
        </h1>
    </section>



    <!-- SINGLE -->

    <section class="single">
        <div class="container">
            <div class="single-main">

                <div class="single-main__content">
                    <p>
                        {!! $service['discription_' . $lang] !!}
                    </p>
                    <img src="{{ $service->second_photo }}" alt="{{$service['alt_'.$lang]}}" title="{{$service['title_'.$lang]}}">

                    @foreach ($service->servicetos as $serviceto)
                        <p>
                            {!! $serviceto['discription_' . $lang] !!}
                        </p>
                        @if ($serviceto->photo != null)
                            <img src="{{ $serviceto->photo }}" alt="{{$serviceto['alt_'.$lang]}}" title="{{$serviceto['title_'.$lang]}}">
                        @endif
                    @endforeach
                </div>

                <!-- YOUTUBE IFRAME
					<div class="single-main__iframe">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Sh46lNvpQqo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div> -->

            </div>
            <div class="single-side">
                <div class="single-side__title">
                    {{ __('asd.Другие УСЛУГИ') }}
                </div>
                <div class="single-side__list">
                    @foreach ($services as $service)
                        <a href="{{ route('service.show', $service) }}" class="single-item">
                            <div class="single-item__img">
                                <img src="{{ $service->photo }}" alt="{{$service['alt_'.$lang]}}" title="{{$service['title_'.$lang]}}">
                            </div>
                            <div class="single-item__title">
                                {{ $service['name_' . $lang] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>



    <!-- FOOTER -->

    @include('components.front.footer')

    @include('components.front.scripts')
</body>

</html>
