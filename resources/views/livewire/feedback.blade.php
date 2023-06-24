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

                        <p>{{ __('asd.Свои предложения вы можете направлять на нашу электронную почту:') }} <a href="mailto:sales@all-p.uz">sales@all-p.uz</a></p>

                        <p>{{ __('asd.Также можете воспользоваться нашей формой быстрого заполнения.') }}</p>
                    </div>
                    <form wire:submit.prevent="feedback1">
                        <div class="contact-form">
                            <div class="contact-form__col">
                                <div class="contact-form__input">
                                    <input type="text" class="form_name" wire:model="first_name1">
                                    <span>{{ __('asd.Ф.И.О.') }}</span>
                                </div>
                                <div class="contact-form__input">
                                    <input type="tel" class="form_tel" id="phone1" wire:model="phone1"  pattern="^[0-9-+\s()]*$"
                                        placeholder=" ">
                                    <span>{{ __('asd.Номер телефона:') }}</span>
                                </div>
                                {{-- @dd($clients->all()) --}}
                                <div class="contact-form__select">
                                    <select class="customSelect" wire:model.defer="clients1" style="width: 100%; padding:6px 12px; border-color: #ced4da; border-radius: 5px">
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}" selected  >{{ $client['name_' . $lang] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="contact-form__file">
                                    <label for="file1">
                                        <input type="file" id="file1" wire:model="photo1" class="photo">
                                        <span>
                                            <img src="/issets/img/file.svg" alt="ico">
                                            {{ __('asd.Прикрепить файл (PDF, Word до 3 Mb)') }}
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="contact-form__col">
                                <div class="contact-form__message">
                                    <textarea  wire:model="discription1"></textarea>
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

                        <p>{{ __('asd.Мы успешно развивающаяся динамичная компания, вот уже 15 лет, как мы вместе с нашими заказчиками и партнерами реализуем разнообразные проекты и добиваемся хороших результатов. Будем рады, если и вы присоединитесь к нам, и мы вместе с Вами разработаем индивидуальные варианты предложений сотрудничества и решения ваших задач в отрасли устройства бетонных покрытий, устройства наливных декоративных, виниловых, полимерных покрытий. Компания All-P-Group открыта к сотрудничеству и реализации совместных проектов.') }}
                        </p>

                        <p>{{ __('asd.Свои предложения вы можете направлять на нашу электронную почту:') }} </p>
                        <a href="mailto:sales@all-p.uz">sales@all-p.uz</a></p>

                        <p>{{ __('asd.Также можете воспользоваться нашей формой быстрого заполнения.') }}</p>

                        <!-- ПАРТНЕРАМ -->
                        <form wire:submit.prevent="feedback2">
                            <div class="contact-form">
                                <div class="contact-form__col">
                                    <div class="contact-form__input">
                                        <input type="text" class="form_name" placeholder=" " wire:model="first_name2">
                                        <span>{{ __('asd.Ф.И.О.') }}</span>
                                    </div>
                                    <div class="contact-form__input">
                                        <input type="tel" class="form_tel" pattern="^[0-9-+\s()]*$" placeholder=" " wire:model="phone2">
                                        <span>{{ __('asd.Номер телефона:') }}</span>
                                    </div>
                                    <div class="contact-form__select">
                                        <select class="customSelect" wire:model="clients2" style="width: 100%; padding:6px 12px; border-color: #ced4da; border-radius: 5px">
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}" selected>{{ $client['name_' . $lang] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="contact-form__file">
                                        <label for="file2">
                                            <input type="file" id="file2" wire:model="photo2">
                                            <span>
                                                <img src="/issets/img/file.svg" alt="ico">
                                                {{ __('asd.Прикрепить файл (PDF, Word до 3 Mb)') }}
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="contact-form__col">
                                    <div class="contact-form__message">
                                        <textarea placeholder="" wire:model="discription2"></textarea>
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
                                href="mailto:hr@all-p.uz">hr@all-p.uz</a></p>
                    </div>
                    <ul class="projects-faq">
                        @foreach ($vacancies as $vacancy)
                            <li class="projects-faq__item">
                                <div class="projects-faq__question">
                                    <span>
                                        {{ $vacancy['name_'.$lang] }}
                                    </span>
                                    <img src="/issets/img/plus.svg" alt="ico">
                                </div>
                                <div class="projects-faq__answer">
                                    <p>{!! $vacancy['discription_'.$lang] !!}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="contact__info">
                        {{ __('asd.Также можете воспользоваться нашей формой быстрого заполнения.') }}
                    </div>
                    <form wire:submit.prevent="feedback3">
                        <div class="contact-form">
                            <div class="contact-form__col">
                                <div class="contact-form__input">
                                    <input type="text" class="form_name" id="first_name3" placeholder=" " wire:model="first_name3">
                                    <span>{{ __('asd.Ф.И.О.') }}</span>
                                </div>
                                <div class="contact-form__input">
                                    <input type="tel" class="form_tel" id="phone3" pattern="^[0-9-+\s()]*$"
                                        placeholder=" " wire:model="phone3">
                                    <span>{{ __('asd.Номер телефона:') }}</span>
                                </div>
                            </div>
                            <div class="contact-form__col">
                                <div class="contact-form__input">
                                    <input class="form_tel" placeholder=" " id="vacancy_number" wire:model="vacancy">
                                    <span>{{ __('asd.Введите номер вакансии') }}</span>
                                </div>
                                <div class="contact-form__file">
                                    <label for="file3">
                                        <input type="file" id="file3" class="photo2" wire:model="photo3">
                                        <span>
                                            <img src="/issets/img/file.svg" alt="ico">
                                            {{ __('asd.Прикрепить файл (PDF, Word до 3 Mb)') }}
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <button class="contact-form__btn btn" id="contact_btn_contact" 
                                type="submit">
                                {{ __('asd.Отправить сообщение') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
