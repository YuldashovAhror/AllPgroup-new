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
</head>

<body>

    <!-- CHAT -->

    @include('components.front.logo')

    <!-- MOBILE MENU -->

    @include('components.front.mobile')

    <!-- HEADER -->

    @include('components.front.header')



    <!-- PAGE-HEAD -->
    {{-- @dd($service->name_uz) --}}
    <section class="page-head">
        <div class="page-head__img">
            <img src="{{ $service->photo }}" alt="single">
        </div>
        <h1 class="page-head__title page-head__title-single">
            {{ $service['name_' . $lang] }}
        </h1>
    </section>



    <!-- SINGLE -->

    <section class="single">
        <div class="container">
            <div class="single-main">

                <div class="single-main__content">
                    <p>
                        {!! $service['discription_' . $lang] !!}
                    </p>
                    <img src="{{ $service->second_photo }}" alt="img">

                    @foreach ($service->servicetos as $serviceto)
                        <p>
                            {{ $serviceto['discription_' . $lang] }}
                        </p>
                        @if ($serviceto->photo != null)
                            <img src="{{ $serviceto->photo }}" alt="img">
                        @endif
                    @endforeach
                </div>

                <!-- YOUTUBE IFRAME
					<div class="single-main__iframe">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Sh46lNvpQqo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div> -->

            </div>
            <div class="single-side">
                <div class="single-side__title">
                    {{ __('asd.Другие УСЛУГИ') }}
                </div>
                <div class="single-side__list">
                    @foreach ($services as $service)
                        <a href="{{ route('service.show', $service) }}" class="single-item">
                            <div class="single-item__img">
                                <img src="{{ $service->photo }}" alt="project">
                            </div>
                            <div class="single-item__title">
                                {{ $service['name_' . $lang] }}
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
