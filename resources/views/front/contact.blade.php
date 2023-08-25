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
    @livewireStyles
    <title>ALL-P Group | {{ $metateg->name }}</title>
    <meta name="keywords" content="{{ $metateg['keyword_' . $lang] }}">
    <meta name="description"
        content="{{ $metateg->discription }}">
    

    <!-- Facebook -->
    <meta property="og:title" content="ALL-P Group">
    <meta property="og:site_name" content="ALL-P Group">
    <meta property="og:description"
        content="{{ $metateg->discription }}">
    <meta property="og:url" content="https://all-p.uz/">
    <meta property="og:image" content="{{ $metateg->photo }}" alt="{{$metateg['alt_'.$lang]}}" title="{{$metateg['title_'.$lang]}}">
    <meta property="og:type" content="website">

    <!-- Google Plus -->
    <meta itemprop="name" content="ALL-P Group">
    <meta itemprop="description"
        content="{{ $metateg->discription }}">
    <meta itemprop="image" content="{{ $metateg->photo }}" alt="{{$metateg['alt_'.$lang]}}" title="{{$metateg['title_'.$lang]}}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ALL-P Group">
    <meta name="twitter:description"
        content="{{ $metateg->discription }}">
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
            <img src="/issets/img/contact-bg.jpg" alt="contact">
        </div>
        <h1 class="page-head__title">
            {{ __('asd.НАШИ КОНТАКТЫ123') }}
        </h1>
    </section>
    <!-- CONTACT -->
    <section class="contact-page">
        <div class="container">
            <div class="contact-wrap">
                <ul class="contact-head">
                    <li class="current">
                        {{ __('asd.Заказчикам') }}
                    </li>
                    <li>
                        {{ __('asd.Парнёрам') }}
                    </li>
                    <li>
                        {{ __('asd.Вакансии') }}
                    </li>
                </ul>
                <div class="contact-tabs">
                    <div class="contact-tab current">
                        <div class="contact__text">
                            <p>{{ __('asd.Мы успешно развивающаяся динамичная компания, вот уже 15 лет, как мы вместе с нашими заказчиками и партнерами реализуем разнообразные проекты и добиваемся хороших результатов. Будем рады, если и вы присоединитесь к нам, и мы вместе с Вами разработаем индивидуальные варианты предложений сотрудничества и решения ваших задач в отрасли устройства бетонных покрытий, устройства наливных декоративных, виниловых, полимерных покрытий. Компания All-P-Group открыта к сотрудничеству и реализации совместных проектов.') }}
                            </p>

                            <p>{{ __('asd.Свои предложения вы можете направлять на нашу электронную почту:') }} <a
                                    href="">{{__('asd.sales@all-p.uz')}}</a></p>

                            <p>{{ __('asd.Также можете воспользоваться нашей формой быстрого заполнения.') }}</p>
                        </div>
                        <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="contact-form">
                                <div class="contact-form__col">
                                    <div class="contact-form__input">
                                        <input type="text" class="form_name" name="name" required>
                                        <span>{{ __('asd.Ф.И.О.') }}</span>
                                    </div>
                                    <div class="contact-form__input">
                                        <input type="tel" class="form_tel" name="phone" pattern="^[0-9-+\s()]*$"
                                            required>
                                        <span>{{ __('asd.Номер телефона:') }}</span>
                                    </div>
                                    {{-- @dd($clients->all()) --}}
                                    <div class="contact-form__select">
                                        <select class="customSelect" name="client_id">
                                            <option selected disabled>Тип клиента</option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}">
                                                    {{ $client['name_' . $lang] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="contact-form__file">
                                        <label for="file1">
                                            <input type="file" id="file1" name="photo" class="photo">
                                            <span>
                                                <img src="/issets/img/file.svg" alt="ico">
                                                {{ __('asd.Прикрепить файл (PDF, Word до 3 Mb)') }}
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="contact-form__col">
                                    <div class="contact-form__message">
                                        <textarea name="discription"></textarea>
                                        <span>{{ __('asd.Текст сообщения:') }}</span>
                                    </div>
                                    <button class="contact-form__btn btn" type="submit">
                                        {{ __('asd.Отправить сообщение') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="contact-tab">
                        <div class="contact__text">

                            <p>{{ __('asd.Компания All-P-Group придерживается принципов открытого диалога и реализации совместных проектов. Мы стремимся к установлению долгосрочных партнерских отношений и готовы внимательно выслушать ваши требования, предлагая индивидуальные решения, адаптированные к вашим проектам. Будучи открытыми к сотрудничеству, мы готовы реализовывать совместные проекты и успешно воплощать ваши идеи.') }}
                            </p>

                            <p>{{ __('asd.Свои предложения вы можете направлять на нашу электронную почту:') }} <a href="">{{__('asd.sales@all-p.uz')}}</a></p></p>
                            

                            <p>{{ __('asd.Также можете воспользоваться нашей формой быстрого заполнения.') }}</p>

                            <!-- ПАРТНЕРАМ -->
                            <form action="{{ route('contact.store') }}" method="post"  enctype="multipart/form-data">
                                @csrf
                                <div class="contact-form">
                                    <div class="contact-form__col">
                                        <div class="contact-form__input">
                                            <input type="text" class="form_name"
                                                name="name" required>
                                            <span>{{ __('asd.Ф.И.О.') }}</span>
                                        </div>
                                        <div class="contact-form__input">
                                            <input type="tel" class="form_tel" pattern="^[0-9-+\s()]*$"
                                            name="phone" required>
                                            <span>{{ __('asd.Номер телефона:') }}</span>
                                        </div>
                                        <div class="contact-form__select">
     
                                            <select class="customSelect" name="partner_id">
                                                                                        <option selected disabled>Тип партнера</option>
                                                @foreach ($partners as $partner)
                                                    <option value="{{ $partner->id }}">
                                                        {{ $partner['name_' . $lang] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="contact-form__file">
                                            <label for="file2">
                                                <input type="file" id="file2" name="photo">
                                                <span>
                                                    <img src="/issets/img/file.svg" alt="ico">
                                                    {{ __('asd.Прикрепить файл (PDF, Word до 3 Mb)') }}
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="contact-form__col">
                                        <div class="contact-form__message">
                                            <textarea name="discription"></textarea>
                                            <span>{{ __('asd.Текст сообщения:') }}</span>
                                        </div>
                                        <button class="contact-form__btn btn" type="submit">
                                            {{ __('asd.Отправить сообщение') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="contact-tab">
                        <div class="contact__text">
                            <p>{{ __('asd.Наша компания успешно развивается в Республике Узбекистан, в связи с этим мы всегда рады новым специалистам, вливающимся в наш управленческий и производственный коллектив. Если вы нашли у нас интересующую вас вакансию, отправляйте нам свои резюме и сопроводительные письма. Каждое резюме и письмо будет рассмотрено и не останется без внимания наших HR-специалистов.') }}
                            </p>

                            <p>{{ __('asd.Свои резюме можете направлять на нашу электронную почту:') }} <a
                                    href="">{{__('asd.hr@all-p.uz')}}</a></p>
                        </div>
                        <ul class="projects-faq">
                            @foreach ($vacancies as $vacancy)
                                <li class="projects-faq__item">
                                    <div class="projects-faq__question">
                                        <span>
                                            {{ $vacancy['name_' . $lang] }}
                                        </span>
                                        <img src="/issets/img/plus.svg" alt="{{$metateg['alt_'.$lang]}}" title="{{$metateg['title_'.$lang]}}">
                                    </div>
                                    <div class="projects-faq__answer">
                                        <p>{!! $vacancy['discription_' . $lang] !!}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="contact__info">
                            {{ __('asd.Также можете воспользоваться нашей формой быстрого заполнения.') }}
                        </div>
                        <form action="{{ route('contact.store') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="contact-form">
                                <div class="contact-form__col">
                                    <div class="contact-form__input">
                                        <input type="text" class="form_name" id="first_name3"
                                            name="name">
                                        <span>{{ __('asd.Ф.И.О.') }}</span>
                                    </div>
                                    <div class="contact-form__input">
                                        <input type="tel" class="form_tel" id="phone3"
                                            pattern="^[0-9-+\s()]*$" name="phone">
                                        <span>{{ __('asd.Номер телефона:') }}</span>
                                    </div>
                                </div>
                                <div class="contact-form__col">
                                    <div class="contact-form__input">
                                        <input type="text" id="vacancy_number"
                                            name="vacancy_number">
                                        <span>{{ __('asd.Введите номер вакансии') }}</span>
                                    </div>
                                    <div class="contact-form__file">
                                        <label for="file3">
                                            <input type="file" id="file3" class="photo2" name="photo">
                                            <span>
                                                <img src="/issets/img/file.svg" alt="ico">
                                                {{ __('asd.Прикрепить файл (PDF, Word до 3 Mb)') }}
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <button class="contact-form__btn btn" id="contact_btn_contact" type="submit">
                                    {{ __('asd.Отправить сообщение') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ПОКАЗАТЬ ЭТОТ БЛОК ПРИ ОТПРАВКЕ $('.contact-done').fadeIn(600 -->
    
    @if (session('message'))
        <div class="contact-done" style="display: block">
            <div class="contact-done__wrap">
                <div class="contact-done__title">
                    {{__('asd.Заявка отправлена!')}}
                </div>
                <div class="contact-done__text">
                    {{__('asd.Cпасибо за проявленный интерес, в скором времени мы свяжемся с вами!')}}
                </div>
                <div class="contact-done__img">
                    <img src="/issets/img/done.svg" alt="ico">
                </div>
            </div>
        </div>
    @endif


    <!-- FOOTER -->
    @include('components.front.footer')

    @include('components.front.scripts')

    @livewireScripts
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
    {{-- <script>
        function send1() {
    
            let token1 = $("#token1").val();
            let name = $('#first_name1').val();
            let phone = $('#phone1').val();
            let photo = $('#file1').val();
            let client = $('#client').val();
            let discription = $('#discription1').val();
    
            var formData = new FormData(); // Создаем объект FormData
                formData.append('name', name);
                formData.append('phone', phone);
                formData.append('photo', $("#file1")[0].files[0]);
                formData.append('client', client);
                formData.append('discription', discription); // Добавляем файл в FormData
    
            $.ajax({
                type: "POST",
                url: "feedback/store",
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                dataType : 'json',
                // success: function(response){
                //     console.log(response)
                // }
            });
    
            // console.log(name, phone, formData, client, discription);
            // setTimeout(() => {
            //     $('.popup').hide()
            //     $('.popup__success').show()
            //     $("#first_name").val('');
            //     $("#phone").val('');
            // }, 1000)
            // setTimeout(() => {
            //     $('.popup').show()
            //     $('.popup__success').hide()
            //     $('.feedback').hide()
            // }, 3000)
        }
    </script> --}}
</body>

</html>
