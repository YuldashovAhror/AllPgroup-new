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
    <title>ALL-P Group | {{ $metateg->name }}</title>

    <meta name="description" content="{{ $metateg->discription }}">

    <!-- Facebook -->
    <meta property="og:title" content="ALL-P Group">
    <meta property="og:site_name" content="ALL-P Group">
    <meta property="og:description" content="{{ $metateg->discription }}">
    <meta property="og:url" content="https://all-p.uz/">
    <meta property="og:image" content="{{ $metateg->photo }}">
    <meta property="og:type" content="website">

    <!-- Google Plus -->
    <meta itemprop="name" content="ALL-P Group">
    <meta itemprop="description" content="{{ $metateg->discription }}">
    <meta itemprop="image" content="{{ $metateg->photo }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ALL-P Group">
    <meta name="twitter:description" content="{{ $metateg->discription }}">
    <meta name="twitter:image" content="{{ $metateg->photo }}">
</head>

<body>
    <div class="preloader">
        <div class="preloader__logo">
            <img src="/issets/img/logo-white.svg" alt="logo">
        </div>
    </div>
    <!-- CHAT -->
    @include('components.front.logo')
    <!-- MOBILE MENU -->
    @include('components.front.mobile')
    <!-- HEADER -->

    @include('components.front.header')

    <!-- PAGE-HEAD -->
    <section class="page-head">
        <div class="page-head__img">
            <img src="/issets/img/about/bg.jpg" alt="about">
        </div>
        <h1 class="page-head__title">
            {{ __('asd.О компании') }}
        </h1>
    </section>
    <!-- ABOUT -->
    <section class="about">
        <div class="container">
            <div class="about__title section-title">
                {{ __('asd.О компании') }}
            </div>
        </div>
        <div class="about-info">
            <div class="container">
                <div class="about-info__wrap">

                    <!-- changes -->

                    <!--<div class="about-info__text">-->
                    <!--	<p>{{ __('asd.Компания All-P-Group была основана в 2007 году в Грузии. Свою деятельность компания начинала как предприятие специализирующееся на устройстве бетонных покрытий, заглаживания поверхностей, устройстве полимерных полов, мягких и эластичных полов, а также гидроизоляции плоских кровельных покрытий.') }}</p>-->
                    <!--	<p>{{ __('asd.2010 году компания перешла на новый этап развития, начав предлагать заказчикам полный спектр строительных монтажных и ремонтных работ. Начато плодотворное сотрудничество с местными и зарубежными производителями строительной техники и материалов, такими как: Хайдельбергбетон, Koster, Romex, Gerflor, Tecsom, Oscar. В 2022 году компания All-P-Group расширяя географию бизнеса, начала свою деятельность в Республике Узбекистан. Профессионализм, опыт и инновационный подход в нашей Деятельности является основой успеха компании All-P-Group') }}.</p>-->
                    <!--</div>-->

                    <div class="about-info__text">
                        <p>{{__('asd.Компания ALL-P (Олпи) начала свою деятельность в 2007 году как строительная компания, которая затем переросла в крупнейший строительный холдинг ALL-P Group (Олпи Груп) в Грузии. Накопленный опыт, высокий профессионализм наших сотрудников позволил нам начать международную деятельность и выйти на внешние рынки, в том числе на стремительно развивающийся рынок Узбекистана.')}}</p>

                        <p>{{__('asd.Мы являемся экспертами и одними из лидеров отрасли по производству промышленных бетонных полов, бетонных покрытий, полимерных покрытий для промышленных и коммерческих площадей, автопарковок, декоративных бетонных покрытий.')}}</p>

                        <p>{{__('asd.Нашими клиентами стали бренды с мировым именем:')}}</p>
                    </div>
                    <div class="about-info__partners">
                        @foreach ($parknyors as $parknyor)
                        <div class="about-info__partner">
                            <img src="{{$parknyor->photo}}" alt="img">
                        </div>
                        @endforeach
                        
                    </div>
                    <div class="about-info__text">
                        <p>{{__('asd.Наша компания непрерывно инвестирует в развитие компетенций своих сотрудников, их обучение новым технологиям производства и методам работы с покрытиями, что гарантирует нам высокие конкурентные преимущества и наилучшее предложение для наших Клиентов.')}}</p>

                        <p>{{__('asd.Мы сотрудничаем исключительно с проверенными поставщиками сырья и регулярно взаимодействуем с их представителями по всем вопросам качества и гарантии используемых материалов.')}}</p>

                        <p>{{__('asd.В основе нашего успеха лежит постоянное совершенствование процессов и технологий производства. Мы стремимся привнести инновационный подход во все области нашей деятельности и предоставить лучшие решение нашим Клиентам и партнерам.')}}</p>
                    </div>

                    <div class="about-info__author">
                        {{ __('asd.С уважением, <br> Генеральный директор All-P-Group Uzbekistan <br> Евгений Таран') }}
                    </div>
                </div>
                <div class="about-info__img">
                    <img src="{{$aboutphoto->photo}}" alt="about">
                </div>
            </div>
        </div>
        <!-- changes -->
        <div class="about-provider">
            <div class="container">
                <div class="about__title section-title">
                    {{__('asd.Наши поставщики')}}
                </div>
                <div class="about-arrows arrows">
                    <span class="arrow-left">
                        <img src="/issets/img/arrow-left.svg" alt="ico">
                    </span>
                    <span class="arrow-right">
                        <img src="/issets/img/arrow-right.svg" alt="ico">
                    </span>
                </div>
                <div class="about-provider__carousel owl-carousel">
                    @foreach ($postavchiks as $postavchik)
                    <a href="#" class="about-provider__item">
                        <div class="about-provider__img">
                            <img src="{{$postavchik->photo}}" alt="provider">
                        </div>
                        <div class="about-provider__text">
                            {!!$postavchik['discription_'.$lang]!!}
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="about-history">
            <div class="container">
                <div class="about__title section-title">
                    {{ __('asd.Ключевые моменты истории развития') }}
                </div>
            </div>
            <ul class="about-history__list">
                @foreach ($stories as $storie)
                    <div class="about-history__item">
                        <div class="about-history__wrap">
                            <div class="about-history__name">
                                {{ $storie['name_' . $lang] }}
                            </div>
                            <div class="about-history__text">
                                {!! $storie['discription_' . $lang] !!}
                            </div>
                        </div>
                        <div class="about-history__year">
                            {{ $storie->date }}
                        </div>

                    </div>
                @endforeach
            </ul>
            <div class="about-history__dots">
                @foreach ($stories as $storie)
                    @for ($i = 0; $i < 8; $i++)
                        <span></span>
                    @endfor
                @endforeach

            </div>
        </div>
        <div class="about-management">
            <div class="container">
                <div class="about__title section-title">
                    {{ __('asd.Наша команда') }}
                </div>
                <ul class="about-management__list">
                    @foreach ($teams as $team)
                        <li class="about-management__item">
                            <div class="about-management__img">
                                <img src="{{ $team->photo }}" alt="about">
                            </div>
                            <div class="about-management__wrap">
                                <div class="about-management__name">
                                    {{ $team['name_' . $lang] }}
                                </div>
                                <div class="about-management__pos">
                                    {!! $team['discription_' . $lang] !!}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- changes -->
        <div class="container">
            <div class="get">
                <div class="get-wrap">
                    <div class="get__title">
                        {{__('asd.Получите презентацию о компании All-P Group (Олпи Груп) и каталог реализованных проектов на e-mail :')}}
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
    </section>
    <!-- FOOTER -->
    @include('components.front.footer')
    @include('components.front.scripts')
</body>

</html>
