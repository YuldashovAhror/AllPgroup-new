<header class="header">
    <div class="container">
        <div class="header__logo">
            <a href="/">
                <img src="/issets/img/logo.svg" alt="ALL-P Group" title="ALL-P group">
            </a>
        </div>
        <ul class="header-menu">
            <li>
                <a href="/" @if (\Request::segment(1) == '') class=" current " @endif>
                    {{ __('asd.Главная') }}
                </a>
            </li>
            <li>
                <a href="{{ route('about.index') }}" @if (\Request::segment(1) == 'about') class=" current " @endif>
                    {{ __('asd.О компании') }}
                </a>
            </li>
            <li class="header-submenu">
                <a href="#" @if (\Request::segment(1) == 'service') class=" current " @endif>
                    {{ __('asd.НАШИ УСЛУГИ') }}
                </a>
                {{-- {{ route('service.index') }} --}}
                <!-- changes -->

                <div class="submenu">
                    @foreach (App\Models\Service::orderBy('id', 'asc')->get() as $service)
                        <div>
                            <a href="{{route('service.show', $service->id)}}">
                                {{$service['name_'.$lang]}}
                            </a>
                        </div>
                    @endforeach
                </div>
            </li>
            <li>
                <a href="{{ route('project.index') }}" @if (\Request::segment(1) == 'project') class=" current " @endif>
                    {{ __('asd.Наши проекты') }}
                </a>

            </li>
            <li>
                <a href="{{ route('news.index') }}" @if (\Request::segment(1) == 'news') class=" current " @endif>
                    {{ __('asd.Новости') }}
                </a>
            </li>
            <li>
                <a href="/contact" @if (\Request::segment(1) == 'contact') class=" current " @endif>
                    {{ __('asd.Контакты') }}
                </a>
            </li>
        </ul>
        <div class="header-lang">
            <div class="header-lang__btn">
                <span>
                    @if ($lang == 'uz')
                        UZ
                    @elseif($lang == 'ru')
                        RU
                    @elseif($lang == 'en')
                        EN
                    @endif
                </span>
                <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6L8 0L0 0L4 6Z" fill="#4CAD3B" />
                </svg>
            </div>
            <div class="header-lang__list">
                @if ($lang != 'ru')
                    <a href="/languages/ru">
                        <span>RU</span>
                    </a>
                @endif
                @if ($lang != 'uz')
                    <a href="/languages/uz">
                        <span>UZ</span>
                    </a>
                @endif
                @if ($lang != 'en')
                    <a href="/languages/en">
                        <span>EN</span>
                    </a>
                @endif
            </div>
        </div>

        <!-- changes -->


        <div class="header-social">
            <a href="https://wa.me/+998996354444" target="_blank" rel="nofollow">
                <img src="/issets/img/whatsapp.svg" alt="ico">
            </a>
            <a href="https://t.me/+998996354444" target="_blank" rel="nofollow">
                <img src="/issets/img/tg.svg" alt="ico">
            </a>
        </div>
        <div class="header-wrap">
            <a href="tel:+998996354444" class="header__tel">
                <img src="/issets/img/tel.svg" alt="ico">
                <span>+998(99) 635-44-44</span>
            </a>
            <div class="header-mobile">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
