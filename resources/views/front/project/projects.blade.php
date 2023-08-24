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
    <meta name="keywords" content="Allp, Allp-group, Промышленный бетонный пол, Производство бетонного пола, Монтаж промышленных полов, Ремонт бетонных полов, Промышленный бетонный пол, Штампованный бетон, Полированный бетонный пол, Топпинг бетонных полов, Полимерные покрытия пола, Полиуретановые полы, Эпоксидные полы, Полимерные покрытия пола, Наливные полы, Декоративные полы, Полы Тераццо, Мозаичные полы, Бетонная стяжка, Наружная стяжка, Стяжка бетона, Виниловые полы">

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
    <div class="preloader">
        <div class="preloader__logo">
            <img src="/issets/img/logo-white.svg" alt="{{$metateg['alt_'.$lang]}}" title="{{$metateg['title_'.$lang]}}">
        </div>
    </div>
    <!-- FEEDBACK -->

    <div class="feedback" style="display: none">
        <div class="feedback-content">
            <!-- feedback-wrap спрятать feedback-done показать при отправке -->

            <div class="feedback-wrap">
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
            <div class="feedback-done" style="display: none">
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
            <img src="/issets/img/project-bg.jpg" alt="contact">
        </div>
        <h1 class="page-head__title">
            {{ __('asd.Наши проекты') }}
        </h1>
        <!-- changes -->
        <a href="#" class="page-head__btn btn feedback-open">
            {{ __('asd.Консультация со специалистом') }}
        </a>
    </section>



    <!-- PROJECT -->

    <section class="projects-page">
        <div class="container">
            <!-- changes -->
            <ul class="projects-nav">
                @foreach ($categories as $key=>$category)
                    <li @if ($select_category == $category->id) class="current" @endif>
                        <a href="{{route('category.show', $category->id)}}"><span>{{$category['name_'.$lang]}}</span></a>
                    </li>
                @endforeach
            </ul>
            <ul class="projects-list">
                @foreach ($projects as $project)
                    <li class="projects-item">
                        <div class="projects-item__img">
                            <img src="{{ $project->photo }}" alt="{{$project['alt_'.$lang]}}" title="{{$project['title_'.$lang]}}">
                        </div>
                        <div class="projects-item__name">
                            {{ $project['name_' . $lang] }}
                        </div>
                        <a href="{{ route('project.show', $project) }}" class="projects-item__btn btn btn-white">
                            {{ __('asd.Узнать подробнее') }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <!-- changes -->
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
                    <img src="/issets/img/get.png" alt="get">
                </div>
            </div>
        </div>
    </section>



    <!-- FOOTER -->

    @include('components.front.footer')

    <script src="/issets/js/jquery-3.4.1.min.js"></script>
    <script src="/issets/js/jquery.inputmask.min.js"></script>
    <script src="/issets/js/owl.carousel.js"></script>
    <script src="/issets/js/jquery.custom-select.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="/issets/js/wow.min.js"></script>
    <script src="/issets/js/main.js"></script>
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
    <script>
        function send2() {

            let token = $("#token").val();
            let name = $('#first_name2').val();
            let phone = $('#phone2').val();
            let email = $('#first_email2').val();
            var data = {
                name: name,
                phone: phone,
                email: email,
            };
            $.ajax({
                type: "POST",
                url: "/feedback/store",
                data: JSON.stringify(data),
                contentType: "application/json",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-TOKEN', token);
                },
                success: function(response) {
                    // Обработка успешного ответа от сервера
                    console.log("Запрос выполнен успешно.");
                    console.log(response);
                },
                error: function(xhr, status, error) {
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
</body>

</html>
