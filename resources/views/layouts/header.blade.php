<header class="bg-white shadow-sm sticky-top">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">
            <!-- Logo -->
            <a class="navbar-brand fw-bold text-primary fs-3" href="{{ url('/') }}">
                <i class="bi bi-journal-bookmark-fill me-2"></i>LearnHub
            </a>

            <!-- Search Bar (visible on desktop) -->
            <div class="d-none d-md-block w-50 mx-4">
                <form action="{{ route('courses.search') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Поиск курса..." name="q">
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- User Actions -->
            <div class="d-flex align-items-center">
                <!-- Mobile Search Toggle -->
                <button class="btn btn-outline-secondary d-md-none me-2" type="button" data-bs-toggle="collapse" data-bs-target="#mobileSearch">
                    <i class="bi bi-search"></i>
                </button>

                @auth
                    <!-- Notifications -->
                    <div class="dropdown me-3">
                        <button class="btn btn-outline-secondary position-relative" type="button" id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bell"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                            </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationDropdown">
                            <li><h6 class="dropdown-header">Уведомления</h6></li>
                            <li><a class="dropdown-item" href="#">Доступен новый курс</a></li>
                            <li><a class="dropdown-item" href="#">Напоминание: курс завтра</a></li>
                            <li><a class="dropdown-item" href="#">Сообщение от вашего инструктора</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-center" href="#">Посмотреть все</a></li>
                        </ul>
                    </div>

                    <!-- User Menu -->
                    <div class="dropdown">
                        <button class="btn d-flex align-items-center p-0" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=random" class="rounded-circle me-2" width="32" height="32" alt="Profile">
                            <span class="d-none d-md-inline">{{ auth()->user()->name }}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i class="bi bi-speedometer2 me-2"></i>Панель управления</a></li>
                            <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="bi bi-person me-2"></i>Профиль</a></li>
                            <li><a class="dropdown-item" href="{{ route('my-courses') }}"><i class="bi bi-journal-bookmark me-2"></i>Мои курсы</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-right me-2"></i>Выйти
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <!-- Auth Links -->
                    <div class="d-flex">
                        <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Войти</a>
                        <a href="{{ route('register') }}" class="btn btn-primary">Регистрация</a>
                    </div>
                @endauth
            </div>
        </div>

        <!-- Mobile Search (hidden by default) -->
        <div class="collapse d-md-none mt-2" id="mobileSearch">
            <form action="{{ route('courses.search') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Поиск курса..." name="q">
                    <button class="btn btn-primary" type="submit">Поиск</button>
                </div>
            </form>
        </div>
    </div>
</header>