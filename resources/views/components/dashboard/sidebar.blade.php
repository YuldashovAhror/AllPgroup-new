<header class="main-nav">
    <div class="sidebar-user text-center">
        <img class="img-90 rounded-circle" src="/assets/images/dashboard/1.png" alt="">
        <a href="/dashboard">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
        </a>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Меню</h6>
                        </div>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Услуги</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.Service.index')}}">Лист</a></li>
                            <li><a href="{{route('dashboard.Service.create')}}">Создать</a></li>
                            <li><a href="{{route('dashboard.file.index')}}">Файлы</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.mainslider.index')}}"><i data-feather="file-text">
                            </i><span>Главный Слайдер</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.comment.index')}}"><i data-feather="file-text">
                            </i><span>Комментарий</span>
                        </a>
                    </li>
                    
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Новости</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.newcategory.index')}}">Категория</a></li>
                            <li><a href="{{route('dashboard.news.index')}}">Лист</a></li>
                            <li><a href="{{route('dashboard.news.create')}}">Создать</a></li>
                            <li><a href="{{route('dashboard.newsto.index')}}">Дополнения к Новости</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Проект</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.category.index')}}">Категории</a></li>
                            <li><a href="{{route('dashboard.project.index')}}">Лист</a></li>
                            <li><a href="{{route('dashboard.project.create')}}">Создать</a></li>
                            <li><a href="{{route('dashboard.projectto.index')}}">Дополнения к проекту</a></li>
                            <li><a href="{{route('dashboard.useproject.index')}}">Использовать проект</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.storie.index')}}"><i data-feather="file-text">
                            </i><span>Истории</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.team.index')}}"><i data-feather="file-text">
                            </i><span>Команда</span>
                        </a>
                    </li>

                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Контакты</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.client.index')}}">Клиент</a></li>
                            <li><a href="{{route('dashboard.partner.index')}}">Партнеры</a></li>
                            <li><a href="{{route('dashboard.feedback.index')}}">Обратная связь</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.vacancy.index')}}"><i data-feather="file-text">
                            </i><span>Вакансия</span>
                        </a>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>О компании</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.parknyor.index')}}">О компании Партнеры</a></li>
                            <li><a href="{{route('dashboard.aboutphoto.index')}}">О кампании фото</a></li>
                            <li><a href="{{route('dashboard.postavchik.index')}}">Наши поставщики</a></li>
                        </ul>
                    </li>
                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.parknyor.index')}}"><i data-feather="file-text">
                            </i><span>О компании Партнеры</span>
                        </a>
                    </li> --}}
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.emailfile.index')}}"><i data-feather="file-text">
                            </i><span>Электронный файл</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.words.index')}}"><i data-feather="file-text">
                            </i><span>Словарь</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.homemetateg')}}"><i data-feather="file-text">
                            </i><span>Метатег</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>