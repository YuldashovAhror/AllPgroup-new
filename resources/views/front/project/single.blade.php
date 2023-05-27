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

    <section class="page-head">
        <div class="page-head__img">
            <img src="{{ $project->photo }}" alt="single">
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
                    <img src="{{ $project->second_photo }}" alt="img">

                    @foreach ($project->projecttos as $projectto)
                        <p>
                            {{ $projectto['discription_' . $lang] }}
                        </p>
                        @if ($projectto->photo != null)
                            <img src="{{ $projectto->photo }}" alt="img">
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="single-side">
                <div class="single-side__title">
                    {{ __('asd.Другие проекты') }}
                </div>
                <div class="single-side__list">
                    @foreach ($projects as $project)
                        <a href="{{ route('project.show', $project) }}" class="single-item">
                            <div class="single-item__img">
                                <img src="{{ $project->photo }}" alt="project">
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



    <!-- FOOTER -->

    @include('components.front.footer')

    @include('components.front.scripts')
</body>

</html>
