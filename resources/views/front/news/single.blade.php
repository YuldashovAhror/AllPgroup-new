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
    <title>ALL-P Group | {{ __('asd.Сингл') }}</title>
    
    
    	<meta name="description" content="Компания All-P-Group предлагает полный спектр строительных, монтажных и ремонтных работ. Мы сотрудничаем с ведущими производителями строительной техники и материалов. Профессионализм, опыт и инновационный подход - основа нашего успеха.">
	
	<!-- Facebook -->
    <meta property="og:title" content="ALL-P Group">
    <meta property="og:site_name" content="ALL-P Group">
    <meta property="og:description" content="Компания All-P-Group предлагает полный спектр строительных, монтажных и ремонтных работ. Мы сотрудничаем с ведущими производителями строительной техники и материалов. Профессионализм, опыт и инновационный подход - основа нашего успеха.">
    <meta property="og:url" content="https://all-p.uz/">
    <meta property="og:image" content="/meta.jpg">
    <meta property="og:type" content="website">

     <!-- Google Plus -->
    <meta itemprop="name" content="ALL-P Group">
    <meta itemprop="description" content="Компания All-P-Group предлагает полный спектр строительных, монтажных и ремонтных работ. Мы сотрудничаем с ведущими производителями строительной техники и материалов. Профессионализм, опыт и инновационный подход - основа нашего успеха.">
    <meta itemprop="image" content="/meta.jpg">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ALL-P Group">
    <meta name="twitter:description" content="Компания All-P-Group предлагает полный спектр строительных, монтажных и ремонтных работ. Мы сотрудничаем с ведущими производителями строительной техники и материалов. Профессионализм, опыт и инновационный подход - основа нашего успеха.">
    <meta name="twitter:image" content="/meta.jpg">
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

    <!-- FOOTER -->

    @include('components.front.footer')

    @include('components.front.scripts')
</body>

</html>
