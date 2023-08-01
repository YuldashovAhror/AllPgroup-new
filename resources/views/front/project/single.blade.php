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
    <title>ALL-P Group | {{ $project['name_' . $lang] }}</title>

    <meta name="description" content="{!! $project['discription_' . $lang] !!}">

    <!-- Facebook -->
    <meta property="og:title" content="ALL-P Group">
    <meta property="og:site_name" content="ALL-P Group">
    <meta property="og:description" content="{!! $project['discription_' . $lang] !!}">
    <meta property="og:url" content="https://all-p.uz/">
    <meta property="og:image" content="{{ $project->photo }}">
    <meta property="og:type" content="website">

    <!-- Google Plus -->
    <meta itemprop="name" content="ALL-P Group">
    <meta itemprop="description" content="{!! $project['discription_' . $lang] !!}">
    <meta itemprop="image" content="{{ $project->photo }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ALL-P Group">
    <meta name="twitter:description" content="{!! $project['discription_' . $lang] !!}">
    <meta name="twitter:image" content="{{ $project->photo }}">
</head>

<body>
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

    <!-- PAGE-HEAD -->

    <section class="page-head">
        <div class="page-head__img">
            <img src="{{ $project->photo }}" alt="{{ $project['name_' . $lang] }}">
        </div>
        <h1 class="page-head__title page-head__title-single">
            {{ $project['name_' . $lang] }}
        </h1>
    </section>

    <!-- SINGLE -->

    <section class="single">
        <div class="container">
            <div class="single-main">
                <div class="single-main__content">
                    <p>
                        {!! $project['discription_' . $lang] !!}
                    </p>
                    <img src="{{ $project->second_photo }}" alt="{{ $project['name_' . $lang] }}">

                    @foreach ($project->projecttos as $projectto)
                        <p>
                            {!! $projectto['discription_' . $lang] !!}
                        </p>
                        @if ($projectto->photo != null)
                            <img src="{{ $projectto->photo }}" alt="{{ $project['name_' . $lang] }}">
                        @endif
                    @endforeach

                </div>

                <button class="single-main__btn btn feedback-open">
                    {{ __('asd.Консультация со специалистом') }}
                </button>
            </div>
            <div class="single-side">
                <div class="single-side__title">
                    {{ __('asd.Другие проекты') }}
                </div>
                <div class="single-side__list">
                    @foreach ($projects as $project)
                        <a href="{{ route('project.show', $project) }}" class="single-item">
                            <div class="single-item__img">
                                <img src="{{ $project->photo }}" alt="{{ $project['name_' . $lang] }}">
                            </div>
                            <div class="single-item__title">
                                {{ $project['name_' . $lang] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <!-- changes -->


    <div class="single-get">
        <div class="container">
            <div class="get">
                <div class="get-wrap">
                    <div class="get__title">
                        {{ __('asd.Получите презентацию о компании All-P Group (Олпи Груп) и каталог реализованных проектов на  e-mail :') }}
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
    </div>



    <!-- FOOTER -->

    @include('components.front.footer')

    <script src="/issets/js/jquery-3.4.1.min.js"></script>
    <script src="/issets/js/owl.carousel.js"></script>
    <script src="/issets/js/jquery.custom-select.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="/issets/js/wow.min.js"></script>
    <script src="/issets/js/main.js"></script>
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
