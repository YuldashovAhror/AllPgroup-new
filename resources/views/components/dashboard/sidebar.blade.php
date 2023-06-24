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
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Услуга</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.Service.index')}}">Лист</a></li>
                            <li><a href="{{route('dashboard.Service.create')}}">Создать</a></li>
                            <li><a href="{{route('dashboard.serviceto.index')}}">Дополнения к Услуга</a></li>
                        </ul>
                        {{-- <li class="dropdown">
                            <a class="nav-link menu-title link-nav" href="{{route('dashboard.serviceto.index')}}"><i data-feather="file-text">
                                </i><span>Дополнения к Услуга</span>
                            </a>
                        </li> --}}
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.mainslider.index')}}"><i data-feather="file-text">
                            </i><span>ГлавнаяСлайдер</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.comment.index')}}"><i data-feather="file-text">
                            </i><span>Комментарий</span>
                        </a>
                    </li>
                    
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Новости</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.newcategory.index')}}">Новости Категория</a></li>
                            <li><a href="{{route('dashboard.news.index')}}">Новости Лист</a></li>
                            <li><a href="{{route('dashboard.news.create')}}">Новости Создать</a></li>
                            <li><a href="{{route('dashboard.newsto.index')}}">Дополнения к Новости</a></li>
                        </ul>
                        {{-- <li class="dropdown">
                            <a class="nav-link menu-title link-nav" href="{{route('dashboard.newcategory.index')}}"><i data-feather="file-text">
                                </i><span>Новости Категория</span>
                            </a>
                        </li> --}}
                        {{-- <li class="dropdown">
                            <a class="nav-link menu-title link-nav" href="{{route('dashboard.newsto.index')}}"><i data-feather="file-text">
                                </i><span>Дополнения к Новости</span>
                            </a>
                        </li> --}}
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Проект</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('dashboard.project.index')}}">Проект Лист</a></li>
                            <li><a href="{{route('dashboard.project.create')}}">Проект Создать</a></li>
                            <li><a href="{{route('dashboard.projectto.index')}}">Дополнения к проекту</a></li>
                            <li><a href="{{route('dashboard.useproject.index')}}">Использовать проект</a></li>
                        </ul>
                        {{-- <li class="dropdown">
                            <a class="nav-link menu-title link-nav" href="{{route('dashboard.useproject.index')}}"><i data-feather="file-text">
                                </i><span>Использовать проект</span>
                            </a>
                        </li> --}}
                        {{-- <li class="dropdown">
                            <a class="nav-link menu-title link-nav" href="{{route('dashboard.projectto.index')}}"><i data-feather="file-text">
                                </i><span>Дополнения к проекту</span>
                            </a>
                        </li> --}}
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
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.client.index')}}"><i data-feather="file-text">
                            </i><span>Клиент</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.vacancy.index')}}"><i data-feather="file-text">
                            </i><span>Вакансия</span>
                        </a>
                    </li>
                    
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.feedback.index')}}"><i data-feather="file-text">
                            </i><span>Обратная связь</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.words.index')}}"><i data-feather="file-text">
                            </i><span>Словарь</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>