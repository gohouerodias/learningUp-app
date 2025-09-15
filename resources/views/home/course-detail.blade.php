@extends('layouts.app')

@section('title', 'Laravel для начинающих - LearnHub')

@section('description', 'Научитесь создавать современные веб-приложения с помощью Laravel, самого популярного PHP-фреймворка.')

@section('content')
<!-- Course Header -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}" class="text-white">Курсы</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#" class="text-white">Веб-разработка</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">Laravel для начинающих
                        </li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold">Laravel для начинающих</h1>
                <p class="lead">Научитесь создавать современные веб-приложения с помощью Laravel, самого популярного PHP-фреймворка.</p>
                <div class="d-flex flex-wrap align-items-center mb-3">
                    <div class="d-flex align-items-center me-4 mb-2">
                        <div class="text-warning me-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <span>4.5 (245 отзывов)</span>
                    </div>
                    <div class="d-flex align-items-center me-4 mb-2">
                        <i class="bi bi-people me-2"></i>
                        <span>1,245 студентов</span>
                    </div>
                    <div class="d-flex align-items-center me-4 mb-2">
                        <i class="bi bi-clock me-2"></i>
                        <span>12 часов контента</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-collection-play me-2"></i>
                        <span>56 уроков</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <img src="https://ui-avatars.com/api/?name=John+Doe&background=random" class="rounded-circle me-2"
                        width="40" height="40" alt="Instructor">
                    <div>
                        <span>Создано <strong>John Doe</strong></span>
                        <div class="text-muted">Full-Stack разработчик и инструктор</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Course Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Course Overview -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h3 class="mb-0">Обзор курса</h3>
                    </div>
                    <div class="card-body">
                        <p>Этот комплексный курс научит вас создавать современные веб-приложения с помощью Laravel, самого популярного PHP-фреймворка. Вы освоите фундаментальные и продвинутые концепции Laravel.</p>

                        <h5 class="mt-4">Что вы изучите</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-check">
                                    <li>Установка и настройка Laravel</li>
                                    <li>Архитектура MVC в Laravel</li>
                                    <li>Управление базами данных с помощью Eloquent ORM</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-check">
                                    <li>Создание RESTful API</li>
                                    <li>Система аутентификации</li>
                                    <li>Развертывание приложений Laravel</li>
                                </ul>
                            </div>
                        </div>

                        <h5 class="mt-4">Требования</h5>
                        <ul>
                            <li>Базовые знания PHP</li>
                            <li>Понимание основ HTML и CSS</li>
                            <li>Знакомство с базами данных MySQL</li>
                        </ul>
                    </div>
                </div>

                <!-- Course Curriculum -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-white">
                        <h3 class="mb-0">Программа курса</h3>
                        <p class="text-muted mb-0">56 уроков • 12 часов контента</p>
                    </div>
                    <div class="card-body p-0">
                        <div class="accordion" id="courseAccordion">
                            @for($i = 1; $i <= 5; $i++) <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $i }}">
                                    <button class="accordion-button {{ $i > 1 ? 'collapsed' : '' }}" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $i }}"
                                        aria-expanded="{{ $i == 1 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $i }}">
                                        Раздел {{ $i }}: Введение в Laravel
                                        <span class="badge bg-secondary ms-2">12 уроков • 2ч 30мин</span>
                                    </button>
                                </h2>
                                <div id="collapse{{ $i }}"
                                    class="accordion-collapse collapse {{ $i == 1 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $i }}" data-bs-parent="#courseAccordion">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            @for($j = 1; $j <= 5; $j++) <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-play-circle text-muted me-3"></i>
                                                    <span>Урок {{ $j }}: Введение в Laravel</span>
                                                </div>
                                                <span class="text-muted">15:30</span>
                                                </li>
                                                @endfor
                                        </ul>
                                    </div>
                                </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Instructor -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white">
                    <h3 class="mb-0">Инструктор</h3>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=random&size=100"
                            class="rounded-circle me-4" width="100" height="100" alt="Instructor">
                        <div>
                            <h4>John Doe</h4>
                            <p class="text-muted">Full-Stack разработчик и инструктор</p>
                            <div class="d-flex mb-3">
                                <div class="me-4">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span>4.5 Рейтинг инструктора</span>
                                </div>
                                <div class="me-4">
                                    <i class="bi bi-people"></i>
                                    <span>12,545 студентов</span>
                                </div>
                                <div>
                                    <i class="bi bi-play-circle"></i>
                                    <span>8 курсов</span>
                                </div>
                            </div>
                            <p>Full-stack разработчик с более чем 10-летним опытом, специализирующийся на современных веб-технологиях. Увлечен преподаванием и обменом знаниями.</p>
                            <button class="btn btn-outline-primary">Посмотреть профиль</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reviews -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h3 class="mb-0">Отзывы студентов</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-3 text-center">
                            <h2 class="display-4 fw-bold text-primary">4.5</h2>
                            <div class="text-warning mb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <p class="text-muted">Средняя оценка</p>
                        </div>
                        <div class="col-md-9">
                            @for($i = 5; $i >= 1; $i--)
                            <div class="d-flex align-items-center mb-2">
                                <div class="me-3" style="width: 40px;">
                                    <span class="text-muted">{{ $i }} <i
                                            class="bi bi-star-fill text-warning"></i></span>
                                </div>
                                <div class="progress flex-grow-1 me-3" style="height: 8px;">
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ rand(60, 100) }}%;" aria-valuenow="{{ rand(60, 100) }}"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div style="width: 40px;">
                                    <span class="text-muted">{{ rand(100, 500) }}</span>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>

                    <h5 class="mb-4">Комментарии студентов</h5>

                    @for($k = 1; $k <= 3; $k++) <div class="border-bottom pb-4 mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://ui-avatars.com/api/?name=User{{ $k }}&background=random"
                                class="rounded-circle me-3" width="50" height="50" alt="User">
                            <div>
                                <h6 class="mb-0">User{{ $k }}</h6>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                            <small class="text-muted ms-auto">{{ rand(1, 10) }} дней назад</small>
                        </div>
                        <p>Этот курс исключительный! Я узнал очень много нового, и преподаватель очень хорошо объясняет сложные концепции. Настоятельно рекомендую!</p>
                </div>
                @endfor

                <div class="text-center mt-4">
                    <button class="btn btn-outline-primary">Показать больше отзывов</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="col-lg-4">
        <div class="sticky-top" style="top: 100px;">
            <!-- Course Card -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <div class="position-relative mb-3">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top rounded" alt="Course image">
                        <div class="position-absolute top-0 start-0 m-2">
                            <span class="badge bg-danger">Акция</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <span class="h3 fw-bold text-primary mb-0">49,99 €</span>
                        <span class="text-decoration-line-through text-muted ms-2 fs-5">89,99 €</span>
                        <span class="badge bg-success ms-auto">-45%</span>
                    </div>

                    <div class="d-grid gap-2 mb-3">
                        <button class="btn btn-primary btn-lg">
                            <i class="bi bi-cart3 me-2"></i>Купить сейчас
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="bi bi-heart me-2"></i>Добавить в избранное
                        </button>
                    </div>

                    <div class="text-center">
                        <small class="text-muted">Гарантия возврата денег в течение 30 дней</small>
                    </div>
                </div>
            </div>

            <!-- Course Features -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Этот курс включает</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-play-circle text-primary me-2"></i>12 часов видео по запросу</li>
                        <li class="mb-2"><i class="bi bi-file-text text-primary me-2"></i>56 загружаемых ресурсов</li>
                        <li class="mb-2"><i class="bi bi-infinity text-primary me-2"></i>Пожизненный доступ</li>
                        <li class="mb-2"><i class="bi bi-phone text-primary me-2"></i>Доступ на мобильных устройствах и ТВ</li>
                        <li class="mb-2"><i class="bi bi-trophy text-primary me-2"></i>Сертификат об окончании</li>
                        <li><i class="bi bi-arrow-repeat text-primary me-2"></i>Неограниченный доступ после получения</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .list-check li {
        position: relative;
        padding-left: 1.5rem;
        margin-bottom: 0.5rem;
    }

    .list-check li:before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #28a745;
        font-weight: bold;
    }

    .sticky-top {
        position: sticky;
        z-index: 1020;
    }
</style>
@endsection