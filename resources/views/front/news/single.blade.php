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
    <title>ALL-P Group | {{ $new['name_'.$lang] }}</title>
    
    
    <meta name="description" content="{!! $new['discription_' . $lang] !!}">
	
	<!-- Facebook -->
    <meta property="og:title" content="ALL-P Group">
    <meta property="og:site_name" content="ALL-P Group">
    <meta property="og:description" content="{!! $new['discription_' . $lang] !!}">
    <meta property="og:url" content="https://all-p.uz/">
    <meta property="og:image" content="{{ $new->photo }}">
    <meta property="og:type" content="website">

    <!-- Google Plus -->
    <meta itemprop="name" content="ALL-P Group">
    <meta itemprop="description" content="{!! $new['discription_' . $lang] !!}">
    <meta itemprop="image" content="{{ $new->photo }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ALL-P Group">
    <meta name="twitter:description" content="{!! $new['discription_' . $lang] !!}">
    <meta name="twitter:image" content="{{ $new->photo }}">
</head>

<body>

    <!-- CHAT -->

    @include('components.front.logo')

    <!-- MOBILE MENU -->

    @include('components.front.mobile')

    <!-- HEADER -->

    @include('components.front.header')


    <!-- PAGE-HEAD -->
    {{-- @dd($news) --}}
    <section class="page-head">
        <div class="page-head__img">
            <img src="{{ $new->photo }}" alt="single">
        </div>
        <h1 class="page-head__title page-head__title-single">
            {{ $new['name_' . $lang] }}
        </h1>
    </section>



    <!-- SINGLE -->

    <section class="single">

        {{-- CURRENT DATE --}}
        <div class="single-main__date">
            <div class="container">
                <div class="news-item__date">
                    {{-- <strong>15</strong>/04/2023 --}}
                    {{ $new->date }}
                </div>
            </div>
        </div>

        <div class="container">
            <div class="single-main">
                <div class="single-main__content">
                    <p>
                        {!! $new['discription_' . $lang] !!}
                    </p>
                    <img src="{{ $new->second_photo }}" alt="img">
                    @foreach ($new->newtos as $newto)
                        <p>
                            {!! $newto['discription_' . $lang] !!}
                        </p>
                        @if ($newto->photo != null)
                            <img src="{{ $newto->photo }}" alt="img">
                        @endif
                    @endforeach
                </div>

                {{-- YOUTUBE IFRAME --}}
                <div class="single-main__iframe">
                    {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Sh46lNvpQqo"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe> --}}
						{!! $new->youtube !!}

                </div>
                
                
                <button class="single-main__btn btn feedback-open">
					{{__('asd.Консультация со специалистом')}}
				</button>

            </div>
            <div class="single-side">
                <div class="single-side__title">
                    {{ __('asd.Другие Новости') }}
                </div>
                <div class="single-side__list">
                    @foreach ($news as $new)
                        <a href="{{ route('news.show', $new) }}" class="single-item">
                            <div class="single-item__img">
                                <img src="{{ $new->photo }}" alt="project">
                            </div>
                            <div class="single-item__title">
                                {{ $new->name_uz }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    
    
    
	<div class="single-get">
		<div class="container">
			<div class="get">
				<div class="get-wrap">
					<div class="get__title">
						{{__('asd.Получите презентацию о компании All-P Group (Олпи Груп) и каталог реализованных проектов на  e-mail :')}}
					</div>
					<div class="get__form">
						<input type="email" placeholder="e-mail">
						<button class="btn btn-white">
							{{__('asd.Получить')}}
						</button>
					</div>
				</div>
				<div class="get__img">
					<img src="/issets/img/get.png" alt="get">
				</div>
			</div>
		</div>
	</div>

    <!-- FOOTER -->

    @include('components.front.footer')

    @include('components.front.scripts')
</body>

</html>
