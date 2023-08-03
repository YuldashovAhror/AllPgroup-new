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
    <meta property="og:image" content="{{ $metateg->photo }}" alt="{{$metateg['alt_'.$lang]}}" title="{{$metateg['title_'.$lang]}}">
    <meta property="og:type" content="website">

    <!-- Google Plus -->
    <meta itemprop="name" content="ALL-P Group">
    <meta itemprop="description" content="{{ $metateg->discription }}">
    <meta itemprop="image" content="{{ $metateg->photo }}" alt="{{$metateg['alt_'.$lang]}}" title="{{$metateg['title_'.$lang]}}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ALL-P Group">
    <meta name="twitter:description" content="{{ $metateg->discription }}">
    <meta name="twitter:image" content="{{ $metateg->photo }}" alt="{{$metateg['alt_'.$lang]}}" title="{{$metateg['title_'.$lang]}}">
</head>

<body>


    <!-- PRELOADER -->

    <div class="preloader">
        <div class="preloader__logo">
            <img src="/issets/img/logo-white.svg" alt="logo">
        </div>
    </div>

    <!-- FEEDBACK -->

    <div class="feedback" style="display: none">
        <div class="feedback-content">

            <!-- feedback-wrap спрятать feedback-done показать при отправке -->

            <div class="feedback-wrap" @if (session('message')) style="display: none" @endif>
                <div class="feedback__title">
                    {{ __('asd.Оставьте свои данные и мы свяжемся с вами!') }}
                </div>
                <div class="feedback__text section-text">
                    {{ __('asd.Обращаем ваше внимаение, что мы не занимаемся реализацией проектов в квартирах и жилых помещениях') }}
                </div>
                <form action="{{ route('contact.store') }}" method="post" class="feedback-form" action="#">
                    @csrf
                    <div class="feedback-form__input">
                        <input type="email" id="first_email2" placeholder="Ваша почта" name="email" required
                            class="feedback-form__email">
                    </div>
                    <div class="feedback-form__input">
                        <input type="text" id="first_name2" placeholder="Ваше имя" name="name" required
                            class="feedback-form__name form_name">
                    </div>
                    <div class="feedback-form__input">
                        <input type="tel" id="phone2" placeholder="Ваш телефон" name="phone" required
                            class="form_tel feedback-form__tel" pattern="^[0-9-+\s()]*$">
							<input id="token" value="{{ csrf_token() }}" type="hidden" required>
                    </div>
                    <button class="feedback-form__btn" id="button" onclick="send2()" type="button">
                        {{ __('asd.Отправить заявку') }}
                    </button>
                </form>
                <div class="feedback__info">
                    {{ __('asd.Нажимая на кнопку, вы даете согласие на обработку моих персональных данных') }}
                </div>
            </div>

            @if (session('message'))
                <div class="feedback-done" style="display: block">
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
    </div>

    <!-- CHAT -->

    @include('components.front.logo')
    <!-- MOBILE MENU -->

    @include('components.front.mobile')

    <!-- HEADER -->

    @include('components.front.header')

    <!-- MAIN -->

    <section class="main">
        <div class="main-carousel owl-carousel">
            @foreach ($mainsliders as $mainslider)
                <div class="main-item">
                    <div class="container">
                        <div class="main-item__img">
                            <img src="{{ $mainslider->photo }}" alt="{{ $mainslider['name_' . $lang] }}" title="{{$mainslider['title_'.$lang]}}">
                        </div>
                        <h2 class="main-item__title">
                            {{ $mainslider['name_' . $lang] }}
                        </h2>
                        <div class="main-btns">
                            <a href="#" class="main__btn feedback-open">
                                {{__('asd.Заказать расчёт')}}
                            </a>
                            <a href="{{ $mainslider->link }}" class="btn">
                                {{ __('asd.Подробнее') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <!-- NUMBERS -->

    <!-- changes -->
    <section class="numbers">
        <div class="container">
            <h2 class="numbers__title section-title wow fadeInUp" data-wow-delay=".2s">
                {{ __('asd.Почему выбирают All-P Group?') }}
            </h2>
            <div class="numbers__text wow fadeInUp" data-wow-delay=".4s">
                {{ __('asd.Мы успешно сотрудничаем с крупнейшими международными заказчиками и выполнили более 2500 проектов, а это:') }}
            </div>
            <div class="numbers-wrap wow fadeInLeft" data-wow-delay=".2s">
                <div class="numbers-item">
                    <div class="numbers-item__ico">
                        <img src="issets/img/numbers/1.svg" alt="ico">
                    </div>
                    <div class="numbers-item__wrap">
                        <div class="numbers-item__square">
                            <span>3</span> <span>200</span> 000 м&sup2;
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
                            <span>1</span> <span>800</span> 000 м&sup2;
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
                            <span>1</span> <span>200</span> 000 м&sup2;
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
                            <span>120</span> 000 м&sup2;
                        </div>
                        <div class="numbers-item__name">
                            {{ __('asd.Полированных бетонных полов') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-page">
        <div class="container">
            <h2 class="section-title wow fadeInUp" data-wow-delay=".2s">
                {{ __('asd.HНаши услуги') }}
            </h2>
            <ul class="services-list">
                @foreach ($services as $service)
                    <li class="services-list__item">
                        <div class="services-list__img">
                            <img src="{{ $service->photo }}" alt="{{ $service['name_' . $lang] }}" title="{{$service['title_'.$lang]}}">
                        </div>
                        <div class="services-list__wrap">
                            <div class="services-list__title">
                                {{ $service['name_' . $lang] }}
                            </div>
                            <div class="services-list__text">
                                {!! $service['discription_' . $lang] !!}
                            </div>
                            <a href="{{ route('service.show', $service->id) }}" class="services-list__btn btn">
                                {{ __('asd.Узнать больше') }}
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
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
                            <img src="{{ $useproject->photo }}" alt="{{ $useproject['name_' . $lang] }}" title="{{$useproject['title_'.$lang]}}">
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



    <!-- PROJECTS -->

    <section class="projects">
        <div class="projects-arrows arrows">
            <span class="arrow-left">
                <img src="issets/img/arrow-left-white.svg" alt="ico">
            </span>
            <span class="arrow-right">
                <img src="issets/img/arrow-right-white.svg" alt="ico">
            </span>
        </div>
        <div class="container">

            <!-- changes -->

            <div class="projects-head">
                <h2 class="projects__title section-title section-title-white">
                    {{ __('asd.Наши проекты') }}
                </h2>
                <a href="{{ route('project.index') }}" class="projects-all">
                    {{ __('asd.Посмотреть все проекты') }}
                </a>
            </div>
            <div class="projects-carousel owl-carousel">
                @foreach ($projects as $project)
                    <div class="projects-item">
                        <div class="projects-item__img">
                            <img src="{{ $project->photo }}" alt="{{ $project['name_' . $lang] }}" title="{{$project['title_'.$lang]}}">
                        </div>
                        <div class="projects-item__name">
                            {{ $project['name_'.$lang] }}
                        </div>
                        <a href="{{ route('project.show', $project) }}" class="projects-item__btn btn btn-white">
                            {{ __('asd.Узнать подробнее') }}
                        </a>
                    </div>
                @endforeach
            </div>
            {{-- <!--<h2 class="projects__title section-title section-title-white">-->
            <!--	{{ __('asd.Часто задаваемые вопросы') }}-->
            <!--</h2>-->
            <!--<ul class="projects-faq">-->
            <!--	@foreach ($comments as $comment)
-->
            <!--	<li class="projects-faq__item wow fadeInUp" data-wow-delay=".2s">-->
            <!--		<div class="projects-faq__question">-->
            <!--			<span>-->
            <!--				{{ $comment->name_uz }}-->
            <!--			</span>-->
            <!--			<img src="issets/img/plus.svg" alt="ico">-->
            <!--		</div>-->
            <!--		<div class="projects-faq__answer">-->
            <!--			{!! $comment->discription_uz !!}-->
            <!--		</div>-->
            <!--	</li>-->
            <!--
                @endforeach-->
            <!--</ul>--> --}}
        </div>
    </section>


    <!-- changes -->


    <!-- HOW -->

    <section class="how">
        <div class="container">
            <h2 class="projects__title section-title section-title-white">
                {{ __('asd.Как мы работаем?') }}
            </h2>
            <ul class="projects-faq">
                @php($k = 1)
                @foreach ($comments as $comment)
                    <li class="projects-faq__item wow fadeInUp" data-wow-delay=".2s">
                        <div class="projects-faq__question">
                            <span class="green">
                                {{ $k++ }}
                            </span>
                            <span>
                                {{ $comment['name_' . $lang] }}
                            </span>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="get">
                <div class="get-wrap">
                    <div class="get__title">
                        {{ __('asd.Получите презентацию о компании All-P Group (Олпи Груп) и каталог реализованных проектов на e-mail :') }}
                    </div>
                    <form action="{{route('email.store')}}" method="POST">
                        @csrf
                        <div class="get__form">
                            <input type="email" name="email_name" placeholder="e-mail">
                            <button class="btn btn-white">
                                {{ __('asd.Получить') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="get__img">
                    <img src="issets/img/get.png" alt="get">
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS -->

        {{-- <!--<section class="news">-->
        <!--	<div class="container">-->
        <!--			<div class="news-head">-->
        <!--				<h2 class="news__title section-title">-->
        <!--					{{ __('asd.Наши новости') }}-->
        <!--				</h2>-->
        <!--				<ul class="news-choose">-->
        <!--					@foreach ($newcategories as $key => $category)
    -->
        <!--						<li @if ($key == 0) class="current" @endif>{{ $category->name_uz }}</li>-->
        <!--
    @endforeach-->
        <!--				</ul>-->
        <!--			</div>-->

        <!--			<div class="news-tabs">-->
        <!--				@foreach ($newcategories as $key => $category)
    -->

        <!--					<div class="news-tab @if ($key == 0) current @endif">-->
        <!--						@foreach ($category->news as $new)
    -->
        <!--							<div class="news-item">-->
        <!--								<div class="news-item__img">-->
        <!--									<img src="{{ $new->photo }}" alt="img">-->
        <!--								</div>-->
        <!--								<div class="news-item__wrap">-->
        <!--									<div class="news-item__top">-->
        <!--										<div class="news-item__title">-->
        <!--											{{ $new['name_' . $lang] }}-->
        <!--										</div>-->
        <!--										<div class="news-item__date">-->
        <!--											<strong>{{ $new->date }}</strong>-->
        <!--										</div>-->
        <!--										<div class="news-item__text">-->
        <!--											{!! $new['discription_' . $lang] !!}-->
        <!--										</div>-->
        <!--									</div>-->
        <!--									<div class="news-item__bot">-->
        <!--										<a href="{{ route('news.show', $new) }}" class="news-item__btn btn btn-gray">-->
        <!--											{{ __('asd.Читать подробнее') }}-->
        <!--										</a>-->
        <!--									</div>-->
        <!--								</div>-->
        <!--							</div>-->
        <!--
    @endforeach-->
        <!--					</div>-->
        <!--
    @endforeach-->
        <!--			</div>--> --}}


    {{-- <!--	</div>-->
    <!--</section>-->

    <!-- CONTACT -->

    <!--<section class="contact">-->
    <!--	<h2 class="contact__title section-title">-->
    <!--		{{ __('asd.НАШИ КОНТАКТЫ') }}-->
    <!--	</h2>-->
    <!--	<div class="contact__map">-->
    <!--		<div id="map"></div>-->
    <!--	</div>-->
    <!--</section>-->


    <!-- changes -->


    <!-- CONTACT --> --}}

    <section class="contact">
        <div class="contact-main">
            <div class="container">
                <h2 class="contact__title section-title section-title-white">
                    {{ __('asd.Свяжитесь с нами') }}
                </h2>
                <div class="contact__text">
                    {!!__('asd.Если у Вас остались вопросы по реализации Вашего проекта, и хотите получить консультацию по продуктам и услугам - оставляйте заявку на сайте, в социальных сетях или по телефону: <a href="#">+998(99) 635-44-44.</a> Мы всегда рады Вам ответить!')!!}
                </div>
                <div class="get__form">
                    <input type="text" id="first_name1" placeholder="Ваше имя*">
                    <input type="text" id="phone1" placeholder="Телефон*">
					<input id="token" value="{{ csrf_token() }}" type="hidden" required>
                    <input type="email" id="first_email1" placeholder="Почта">
                    <div class="contact-form__text" >
                        {{ __('asd.*Обязательные поля') }}
                    </div>
                    <button class="btn btn-white" id="button" onclick="send1()" type="button">
                        {{ __('asd.Отправить') }}
                    </button>
                </div>
            </div>
        </div>
        <div class="contact__map">
            <div id="map"></div>
        </div>
    </section>



    <!-- FOOTER -->
    @include('components.front.footer')
	<script>
		function send1() {
	
			let token = $("#token").val();
			let name = $('#first_name1').val();
			let phone = $('#phone1').val();
			let email = $('#first_email1').val();
			var data = {
                name:name,
                phone: phone,
				email: email,
            };
			$.ajax({
				type: "POST",
				url: "/feedback/store",
				data: JSON.stringify(data),
				contentType: "application/json",
				beforeSend: function (xhr) {
					xhr.setRequestHeader('X-CSRF-TOKEN', token);
				},
				success: function (response) {
					// Обработка успешного ответа от сервера
					console.log("Запрос выполнен успешно.");
					console.log(response);
				},
				error: function (xhr, status, error) {
					// Обработка ошибки запроса
					console.log("Произошла ошибка при выполнении запроса.");
					console.log(error);
				}
			});
			

			// setTimeout(() => {
			// 	$('.feedback-wrap').hide()
			// 	$('.feedback-done').show()
			// 	$("#first_name").val('');
			// 	$("#phone").val('');
			// }, 1000)
			// setTimeout(() => {
			// 	$('.feedback-wrap').show()
			// 	$('.feedback-done').hide()
			// 	$('.feedback').hide()
			// }, 3000)
		}
	</script>
	<script>
		function send2() {
	
			let token = $("#token").val();
			let name = $('#first_name2').val();
			let phone = $('#phone2').val();
			let email = $('#first_email2').val();
			var data = {
                name:name,
                phone: phone,
				email: email,
            };
			$.ajax({
				type: "POST",
				url: "/feedback/store",
				data: JSON.stringify(data),
				contentType: "application/json",
				beforeSend: function (xhr) {
					xhr.setRequestHeader('X-CSRF-TOKEN', token);
				},
				success: function (response) {
					// Обработка успешного ответа от сервера
					console.log("Запрос выполнен успешно.");
					console.log(response);
				},
				error: function (xhr, status, error) {
					// Обработка ошибки запроса
					console.log("Произошла ошибка при выполнении запроса.");
					console.log(error);
				}
			});
			

			setTimeout(() => {
				$('.feedback-wrap').hide()
				$('.feedback-done').show()
				$("#first_name").val('');
				$("#phone").val('');
			}, 1000)
			setTimeout(() => {
				$('.feedback-wrap').show()
				$('.feedback-done').hide()
				$('.feedback').hide()
			}, 3000)
		}
	</script>

    <script src="/issets/js/jquery-3.4.1.min.js"></script>
    <script src="/issets/js/owl.carousel.js"></script>
    <script src="/issets/js/jquery.custom-select.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="/issets/js/wow.min.js"></script>
    <script src="/issets/js/main.js"></script>
</body>

</html>
