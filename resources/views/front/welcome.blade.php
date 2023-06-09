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
    <title>ALL-P Group {{ $metateg->name }}</title>

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
    <!-- PRELOADER -->
    <div class="preloader">
        <div class="preloader__logo">
            <img src="/issets/img/logo-white.svg" alt="logo">
        </div>
    </div>

    <!-- FEEDBACK -->
    <div class="feedback">
        <div class="feedback-content">

            <!-- feedback-wrap спрятать feedback-done показать при отправке -->

            <div class="feedback-wrap">
                <div class="feedback__title">
                    {{ __('asd.Оставьте свои данные и мы свяжемся с вами!') }}
                </div>
                <div class="feedback__text section-text">
                    {{ __('asd.Обращаем ваше внимаение, что мы не занимаемся реализацией проектов в квартирах и жилых помещениях') }}
                </div>
                <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="feedback-form__input">
                        <input type="email" name="email" placeholder="Ваша почта" required
                            class="feedback-form__email">
                    </div>
                    <div class="feedback-form__input">
                        <input type="text" name="name" placeholder="Ваше имя" required
                            class="feedback-form__name form_name">
                    </div>
                    <div class="feedback-form__input" style="display: block">
                        <input type="tel" placeholder="Ваш телефон" name="phone" required
                            class="form_tel feedback-form__tel" pattern="^[0-9-+\s()]*$">
                    </div>
                    <button class="feedback-form__btn" type="submit">
                        {{ __('asd.Отправить заявку') }}
                    </button>
                </form>
                <div class="feedback__info">
                    {{ __('asd.Нажимая на кнопку, вы даете согласие на обработку моих персональных данных') }}
                </div>
            </div>
            {{-- @dd(session('message')) --}}
            @if (session('message'))
                <div class="feedback-done">
                    <div class="feedback__title">
                        {{ __('asd.Заяка отправлена!') }}
                    </div>
                    <div class="feedback__img">
                        <img src="/issets/img/done.svg" alt="ico">
                    </div>
                    <div class="feedback__info">
                        {{ __('asd.Ваш запрос получен. мы свяжемся с вами в ближайшее время') }}
                    </div>
                    <button class="feedback-form__btn">
                        {{ __('asd.Закрыть') }}
                    </button>
                </div>
            @endif
    </div>


    <!-- CHAT -->

    @include('components.front.logo')
    <!-- MOBILE MENU -->

    @include('components.front.mobile')

    <!-- HEADER -->

    @include('components.front.header')

    <!-- MAIN -->
@dd($mainsliders);
    <section class="main">
        <div class="main-carousel owl-carousel">
            @foreach ($mainsliders as $mainslider)
                <div class="main-item">
                    <div class="container">
                        <div class="main-item__img">
                            <img src="{{ $mainslider->photo }}" alt="main">
                        </div>
                        <h2 class="main-item__title">
                            {{ $mainslider['name_' . $lang] }}
                        </h2>
                        <div class="main-btns">
                            <a href="#" class="main__btn feedback-open">
                                {{ __('asd.Заказать расчёт') }}
                            </a>
                            <a href="#" class="btn">
                                {{ __('asd.Подробнее') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- SERVICES -->

    <section class="services">
        <div class="services-arrows arrows">
            <span class="arrow-left">
                <img src="issets/img/arrow-left.svg" alt="ico">
            </span>
            <span class="arrow-right">
                <img src="issets/img/arrow-right.svg" alt="ico">
            </span>
        </div>
        <div class="container">
            <div class="services-carousel owl-carousel">
                @foreach ($services as $service)
                    <div class="services-item">
                        <div class="services-item__wrap">
                            <h2 class="services__title section-title section-title-white">
                                {{ $service['name_' . $lang] }}
                            </h2>
                            <div class="services-item__title">
                                {{ $service['title_' . $lang] }}
                            </div>
                            <div class="services-item__text">
                                {!! $service['discription_' . $lang] !!}
                            </div>
                            <a href="{{ route('service.show', $service->id) }}"
                                class="services-item__btn btn btn-white">
                                {{ __('asd.Узнать подробнее') }}
                            </a>
                        </div>
                        <div class="services-item__img">
                            <img src="{{ $service->photo }}" alt="services">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- AREA -->
    <section class="area">
        <div class="area-arrows arrows">
            <span class="arrow-left">
                <img src="issets/img/arrow-left.svg" alt="ico">
            </span>
            <span class="arrow-right">
                <img src="issets/img/arrow-right.svg" alt="ico">
            </span>
        </div>
        <div class="container">
            <h2 class="area__title section-title section-title-white">
                {{ __('asd.Области применения') }}
            </h2>
            <div class="area-carousel owl-carousel">
                @foreach ($useprojects as $useproject)
                    <div class="area-item">
                        <div class="area-item__img">
                            <img src="{{ $useproject->photo }}" alt="area">
                        </div>
                        <div class="area-item__title">
                            {{ $useproject['name_' . $lang] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ADVANTAGES -->
    <section class="advantages">
        <div class="container">
            <h2 class="advantages__title section-title">
                {{ __('asd.Наши преимущества') }}
            </h2>
            <div class="advantages-wrap">
                <div class="advantages-item wow fadeInUp" data-wow-delay=".2s">
                    <div class="advantages-item__ico">
                        <img src="issets/img/advantages/1.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title">
                        {{ __('asd.Специалисты с зарубежным опытом работы') }}
                    </div>
                </div>
                <div class="advantages-item wow fadeInUp" data-wow-delay=".3s">
                    <div class="advantages-item__ico">
                        <img src="issets/img/advantages/2.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title">
                        {{ __('asd.Знание методов и современных технологий') }}
                    </div>
                </div>
                <div class="advantages-item wow fadeInUp" data-wow-delay=".4s">
                    <div class="advantages-item__ico">
                        <img src="issets/img/advantages/ad-2.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title">
                        {{ __('asd.Обширная география и многолетний опыт') }}
                    </div>
                </div>
                <div class="advantages-item wow fadeInUp" data-wow-delay=".5s">
                    <div class="advantages-item__ico">
                        <img src="issets/img/advantages/4.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title">
                        {{ __('asd.Контроль качества') }}
                    </div>
                </div>
                <div class="advantages-item wow fadeInUp" data-wow-delay=".6s">
                    <div class="advantages-item__ico">
                        <img src="issets/img/advantages/5.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title">
                        {{ __('asd.Индивидуальный подход к каждому заказчику') }}
                    </div>
                </div>
                <div class="advantages-item wow fadeInUp" data-wow-delay=".7s">
                    <div class="advantages-item__ico">
                        <img src="issets/img/advantages/6.svg" alt="ico">
                    </div>
                    <div class="advantages-item__title">
                        {{ __('asd.Экологичность, практичность, износостойкость') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NUMBERS -->
    <section class="numbers">
        <div class="container">
            <div class="numbers-wrap wow fadeInLeft" data-wow-delay=".2s">
                <div class="numbers-item">
                    <div class="numbers-item__ico">
                        <img src="issets/img/numbers/1.svg" alt="ico">
                    </div>
                    <div class="numbers-item__wrap">
                        <div class="numbers-item__square">
                            3 200 000 м&sup2;
                        </div>
                        <div class="numbers-item__name">
                            {{ __('asd.Залитого бетона') }}
                        </div>
                    </div>
                </div>
                <div class="numbers-item wow fadeInLeft" data-wow-delay=".3s">
                    <div class="numbers-item__ico">
                        <img src="issets/img/numbers/2.svg" alt="ico">
                    </div>
                    <div class="numbers-item__wrap">
                        <div class="numbers-item__square">
                            1 800 000 м&sup2;
                        </div>
                        <div class="numbers-item__name">
                            {{ __('asd.Стяжки пола') }}
                        </div>
                    </div>
                </div>
                <div class="numbers-item wow fadeInLeft" data-wow-delay=".4s">
                    <div class="numbers-item__ico">
                        <img src="issets/img/numbers/3.svg" alt="ico">
                    </div>
                    <div class="numbers-item__wrap">
                        <div class="numbers-item__square">
                            1 200 000 м&sup2;
                        </div>
                        <div class="numbers-item__name">
                            {{ __('asd.Полимерных полов') }}
                        </div>
                    </div>
                </div>
                <div class="numbers-item wow fadeInLeft" data-wow-delay=".5s">
                    <div class="numbers-item__ico">
                        <img src="issets/img/numbers/4.svg" alt="ico">
                    </div>
                    <div class="numbers-item__wrap">
                        <div class="numbers-item__square">
                            120 000 м&sup2;
                        </div>
                        <div class="numbers-item__name">
                            {{ __('asd.Полированных бетонных полов') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->

    <section class="projects">
        <div class="projects-arrows arrows">
            <span class="arrow-left">
                <img src="issets/img/arrow-left.svg" alt="ico">
            </span>
            <span class="arrow-right">
                <img src="issets/img/arrow-right.svg" alt="ico">
            </span>
        </div>
        <div class="container">
            <h2 class="projects__title section-title section-title-white">
                {{ __('asd.Наши проекты') }}
            </h2>
            <div class="projects-carousel owl-carousel">
                @foreach ($projects as $project)
                    <div class="projects-item">
                        <div class="projects-item__img">
                            <img src="{{ $project->photo }}" alt="project">
                        </div>
                        <div class="projects-item__name">
                            {{ $project->name_uz }}
                        </div>
                        <a href="{{ route('project.show', $project) }}" class="projects-item__btn btn btn-white">
                            {{ __('asd.Узнать подробнее') }}
                        </a>
                    </div>
                @endforeach
            </div>
            <h2 class="projects__title section-title section-title-white">
                {{ __('asd.Часто задаваемые вопросы') }}
            </h2>
            <ul class="projects-faq">
                @foreach ($comments as $comment)
                    <li class="projects-faq__item wow fadeInUp" data-wow-delay=".2s">
                        <div class="projects-faq__question">
                            <span>
                                {{ $comment->name_uz }}
                            </span>
                            <img src="issets/img/plus.svg" alt="ico">
                        </div>
                        <div class="projects-faq__answer">
                            {!! $comment->discription_uz !!}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- NEWS -->

    <section class="news">
        <div class="container">
            <div class="news-head">
                <h2 class="news__title section-title">
                    {{ __('asd.Наши новости') }}
                </h2>
                <ul class="news-choose">
                    @foreach ($newcategories as $key => $category)
                        <li @if ($key == 0) class="current" @endif>{{ $category->name_uz }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="news-tabs">
                @foreach ($newcategories as $key => $category)
                    <div class="news-tab @if ($key == 0) current @endif">
                        @foreach ($category->news as $new)
                            <div class="news-item">
                                <div class="news-item__img">
                                    <img src="{{ $new->photo }}" alt="img">
                                </div>
                                <div class="news-item__wrap">
                                    <div class="news-item__top">
                                        <div class="news-item__title">
                                            {{ $new['name_' . $lang] }}
                                        </div>
                                        <div class="news-item__date">
                                            <strong>{{ $new->date }}</strong>
                                        </div>
                                        <div class="news-item__text">
                                            {!! $new['discription_' . $lang] !!}
                                        </div>
                                    </div>
                                    <div class="news-item__bot">
                                        <a href="{{ route('news.show', $new) }}" class="news-item__btn btn btn-gray">
                                            {{ __('asd.Читать подробнее') }}
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

    <!-- CONTACT -->

    <section class="contact">
        <h2 class="contact__title section-title">
            {{ __('asd.НАШИ КОНТАКТЫ') }}
        </h2>
        <div class="contact__map">
            <div id="map"></div>
        </div>
    </section>

    <!-- FOOTER -->
    @include('components.front.footer')
    @include('components.front.scripts')
</body>

</html>
