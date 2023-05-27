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
    <title>ALL-P Group | {{ __('asd.Контакты') }}</title>
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
                                    href="mailto:sales@all-p.uz">sales@all-p.uz</a></p>

                            <p>{{ __('asd.Также можете воспользоваться нашей формой быстрого заполнения.') }}</p>
                        </div>
                        <div class="contact-form">
                            <div class="contact-form__col">
                                <div class="contact-form__input">
                                    <input type="text" id="first_name" class="form_name" placeholder=" ">
                                    <span>{{ __('asd.Ф.И.О.') }}</span>
                                </div>
                                <div class="contact-form__input">
                                    <input type="tel" class="form_tel" id="phone" pattern="^[0-9-+\s()]*$"
                                        placeholder=" ">
                                    <input id="token1" value="{{ csrf_token() }}" type="hidden" required>
                                    <span>{{ __('asd.Номер телефона:') }}</span>
                                </div>
                                <div class="contact-form__select">
                                    <select class="customSelect" id="client">
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}">{{ $client['name_' . $lang] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="contact-form__file">
                                    <label for="file1">
                                        <input type="file" id="file1" class="photo">
                                        <span>
                                            <img src="/issets/img/file.svg" alt="ico">
                                            {{ __('asd.Прикрепить файл (PDF, Word до 3 Mb)') }}
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="contact-form__col">
                                <div class="contact-form__message">
                                    <textarea placeholder=" " id="discription"></textarea>
                                    <span>{{ __('asd.Текст сообщения:') }}</span>
                                </div>
                                <button class="contact-form__btn btn" id="contact_btn" onclick="send1()" type="button">
                                    {{ __('asd.Отправить сообщение') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="contact-tab">
                        <div class="contact__text">

                            <p>{{ __('asd.Мы успешно развивающаяся динамичная компания, вот уже 15 лет, как мы вместе с нашими заказчиками и партнерами реализуем разнообразные проекты и добиваемся хороших результатов. Будем рады, если и вы присоединитесь к нам, и мы вместе с Вами разработаем индивидуальные варианты предложений сотрудничества и решения ваших задач в отрасли устройства бетонных покрытий, устройства наливных декоративных, виниловых, полимерных покрытий. Компания All-P-Group открыта к сотрудничеству и реализации совместных проектов.') }}
                            </p>

                            <p>{{ __('asd.Свои предложения вы можете направлять на нашу электронную почту:') }} <a
                                    href="mailto:sales@all-p.uz">sales@all-p.uz</a></p>

                            <p>{{ __('asd.Также можете воспользоваться нашей формой быстрого заполнения.') }}</p>

                            <!-- ПАРТНЕРАМ -->

                            <div class="contact-form">
                                <div class="contact-form__col">
                                    <div class="contact-form__input">
                                        <input type="text" class="form_name" placeholder=" ">
                                        <span>{{__('asd.Ф.И.О.')}}</span>
                                    </div>
                                    <div class="contact-form__input">
                                        <input type="tel" class="form_tel" pattern="^[0-9-+\s()]*$" placeholder=" ">
                                        <span>{{__('asd.Номер телефона:')}}</span>
                                    </div>
                                    <div class="contact-form__select">
                                        <select class="customSelect">
                                            <option selected disabled>
                                                {{__('asd.Тип партнера')}}
                                            </option>
                                            <option>
                                                {{__('asd.Поставщик')}}
                                            </option>
                                            <option>
                                                {{__('asd.Производитель')}}
                                            </option>
                                            <option>
                                                {{__('asd.Архитектор')}}
                                            </option>
                                            <option>
                                                {{__('asd.Строительные компании')}}
                                            </option>
                                            <option>
                                                {{__('asd.Другие')}}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="contact-form__file">
                                        <label for="file2">
                                            <input type="file" id="file2">
                                            <span>
                                                <img src="/issets/img/file.svg" alt="ico">
                                                {{__('asd.Прикрепить файл (PDF, Word до 3 Mb)')}}
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="contact-form__col">
                                    <div class="contact-form__message">
                                        <textarea placeholder=" "></textarea>
                                        <span>{{__('asd.Текст сообщения:')}}</span>
                                    </div>
                                    <button class="contact-form__btn btn">
                                        {{__('asd.Отправить сообщение')}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-tab">
                        <div class="contact__text">
                            <p>{{ __('asd.Наша компания успешно развивается в Республике Узбекистан, в связи с этим мы всегда рады новым специалистам, вливающимся в наш управленческий и производственный коллектив. Если вы нашли у нас интересующую вас вакансию, отправляйте нам свои резюме и сопроводительные письма. Каждое резюме и письмо будет рассмотрено и не останется без внимания наших HR-специалистов.') }}
                            </p>

                            <p>{{ __('asd.Свои резюме можете направлять на нашу электронную почту:') }} <a
                                    href="mailto:hr@all-p.uz">hr@all-p.uz</a></p>
                        </div>
                        <ul class="projects-faq">
                            @foreach ($vacancies as $vacancy)
                                <li class="projects-faq__item">
                                    <div class="projects-faq__question">
                                        <span>
                                            {{ $vacancy['name_' . $lang] }}
                                        </span>
                                        <img src="/issets/img/plus.svg" alt="ico">
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
                        <div class="contact-form">
                            <div class="contact-form__col">
                                <div class="contact-form__input">
                                    <input type="text" class="form_name" id="first_name2" placeholder=" ">
                                    <span>{{ __('asd.Ф.И.О.') }}</span>
                                </div>
                                <div class="contact-form__input">
                                    <input type="tel" class="form_tel" id="phone2" pattern="^[0-9-+\s()]*$"
                                        placeholder=" ">
                                    <span>{{ __('asd.Номер телефона:') }}</span>
                                </div>
                            </div>
                            <div class="contact-form__col">
                                <div class="contact-form__input">
                                    <input class="form_tel" placeholder=" " id="vacancy_number">
                                    <span>{{ __('asd.Введите номер вакансии') }}</span>
                                </div>
                                <div class="contact-form__file">
                                    <label for="file2">
                                        <input type="file" id="file2" class="photo2">
                                        <span>
                                            <img src="/issets/img/file.svg" alt="ico">
                                            {{ __('asd.Прикрепить файл (PDF, Word до 3 Mb)') }}
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <button class="contact-form__btn btn" id="contact_btn_contact" onclick="send2()"
                                type="button">
                                {{ __('asd.Отправить сообщение') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- FOOTER -->

    @include('components.front.footer')

    @include('components.front.scripts')


</body>

</html>
