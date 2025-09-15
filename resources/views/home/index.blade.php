@extends('layouts.app')

@section('title', 'Платформа для онлайн-обучения - LearnHub')

@section('description', 'Откройте для себя тысячи онлайн-курсов от экспертов. Развивайте свои навыки с LearnHub.')

@section('content')
<!-- Hero Section -->
@php
    $topUsers = collect([
    (object)[ 'name' => 'Иван Петров', 'course' => 'Laravel для начинающих', 'tests_count' => 15, 'points' => 320 ],
    (object)[ 'name' => 'Анна Смирнова', 'course' => 'JavaScript с нуля', 'tests_count' => 12, 'points' => 280 ],
    (object)[ 'name' => 'Сергей Ковалёв', 'course' => 'Python: практический курс', 'tests_count' => 10, 'points' => 250 ],
    (object)[ 'name' => 'Мария Иванова', 'course' => 'Основы Data Science', 'tests_count' => 8, 'points' => 210 ],
    (object)[ 'name' => 'Дмитрий Соколов', 'course' => 'Введение в кибербезопасность', 'tests_count' => 7, 'points' => 180
    ],
    ]);
    $maxPoints = $topUsers->max('points');
@endphp

<section class="hero-section bg-dark text-white py-5">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Учитесь без границ 🎓</h1>
                <p class="lead mb-4">
                    Проходите курсы, сдавайте тесты и зарабатывайте очки.
                    Вдохновляйтесь достижениями других студентов и станьте лучшим!
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('courses.index') }}" class="btn btn-primary btn-lg">Изучить курсы</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Создать аккаунт</a>
                </div>
            </div>

            <!-- Tableau attractif des meilleurs пользователей -->
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-gradient bg-primary text-white text-center rounded-top-4">
                        <h4 class="mb-0">🏆 Лидеры недели</h4>
                    </div>
                    <div class="card-body p-4">
                        @foreach($topUsers as $index => $user)
                        <div class="mb-4">
                            <!-- Ligne Nom + Badge -->
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <div>
                                    <strong style='color: black;' class="fs-5  {{ $index == 0 ? 'text-primary' : '' }}">
                                        {{ $index+1 }}. {{ $user->name }}
                                    </strong>
                                    @if($index == 0) <span class="badge bg-warning text-dark">🥇</span> @endif
                                </div>
                                <span class="fw-bold">{{ $user->points }} очков</span>
                            </div>

                            <!-- Nom du cours -->
                            <p class="mb-1 text-muted">
                                📘 Курс: <em>{{ $user->course }}</em>
                            </p>

                            <!-- Barre de progression -->
                            <div class="progress progress-bar-animated" style="height: 12px;">
                                <div class="progress-bar 
                                        {{ $index==0 ? 'bg-warning' : ($index==1 ? 'bg-info' : 'bg-success') }}"
                                    role="progressbar" data-points="{{ $user->points }}" data-max="{{ $maxPoints }}"
                                    style="width: 0%">
                                </div>
                            </div>
                            <small class="text-muted">Пройдено тестов: {{ $user->tests_count }}</small>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Featured Courses -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Популярные курсы</h2>
                <p class="text-muted">Откройте для себя наши самые популярные курсы</p>
            </div>
        </div>
        <div class="row">
            @for($i = 0; $i < 6; $i++) <div class="col-md-6 col-lg-4 mb-4">
                <div class="card course-card h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Изображение курса">
                        <span class="position-absolute top-0 end-0 m-2 badge bg-primary">Разработка</span>
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <div class="bg-dark bg-opacity-50 w-100 p-2 text-white">
                                <small><i class="bi bi-clock me-1"></i> 12 часов контента</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=random"
                                    class="rounded-circle me-2" width="24" height="24" alt="Инструктор">
                                <small>John Doe</small>
                            </div>
                            <span class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span class="text-muted ms-1">4.5</span>
                            </span>
                        </div>
                        <h5 class="card-title">Laravel для начинающих</h5>
                        <p class="card-text">Научитесь создавать современные веб-приложения с помощью Laravel, самого
                            популярного PHP-фреймворка.</p>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-primary fw-bold">49,99 €</span>
                            <span class="text-decoration-line-through text-muted ms-2">89,99 €</span>
                        </div>
                        <div>
                            <i class="bi bi-people"></i>
                            <span>245 студентов</span>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('courses.index') }}" class="btn btn-outline-primary">Посмотреть все курсы</a>
    </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Почему стоит выбрать LearnHub?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 text-center mb-4">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-laptop text-primary" style="font-size: 2rem;"></i>
                </div>
                <h4>Гибкое обучение</h4>
                <p class="text-muted">Учитесь в своем темпе, где бы вы ни находились</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center mb-4">
                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-people-fill text-success" style="font-size: 2rem;"></i>
                </div>
                <h4>Эксперты отрасли</h4>
                <p class="text-muted">Обучайтесь у опытных профессионалов</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center mb-4">
                <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-award text-warning" style="font-size: 2rem;"></i>
                </div>
                <h4>Сертификаты</h4>
                <p class="text-muted">Получайте ценные сертификаты</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center mb-4">
                <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                    style="width: 80px; height: 80px;">
                    <i class="bi bi-chat-dots text-info" style="font-size: 2rem;"></i>
                </div>
                <h4>Support 24/7</h4>
                <p class="text-muted">Наша команда готова помочь вам в любое время</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Что говорят наши студенты</h2>
                <p class="text-muted">Узнайте об опыте наших учащихся</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="text-warning mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="card-text">"Курсы на LearnHub изменили мою карьеру. Я смог приобрести ценные навыки,
                            которые помогли мне получить новую работу."</p>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80"
                                class="rounded-circle me-3" width="50" height="50" alt="Студент">
                            <div>
                                <h6 class="mb-0">Тома Мартен</h6>
                                <small class="text-muted">Веб-разработчик</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="text-warning mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <p class="card-text">"Качество курсов исключительное. Преподаватели компетентны, а учебные
                            материалы очень хорошо структурированы."</p>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80"
                                class="rounded-circle me-3" width="50" height="50" alt="Студент">
                            <div>
                                <h6 class="mb-0">Софи Леру</h6>
                                <small class="text-muted">UX/UI-дизайнер</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="text-warning mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="card-text">"Платформа интуитивно понятна и проста в использовании. Мне особенно
                            нравится возможность учиться в собственном темпе."</p>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80"
                                class="rounded-circle me-3" width="50" height="50" alt="Студент">
                            <div>
                                <h6 class="mb-0">Марк Дюбуа</h6>
                                <small class="text-muted">Аналитик данных</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h3>Будьте в курсе</h3>
                <p>Подпишитесь на нашу рассылку, чтобы получать последние новости и информацию о новых курсах</p>
                <form class="d-flex gap-2 mt-4">
                    <input type="email" class="form-control form-control-lg" placeholder="Ваш адрес электронной почты">
                    <button type="submit" class="btn btn-light btn-lg">Подписаться</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Animation for counter
    document.addEventListener('DOMContentLoaded', function() {
        const counters = document.querySelectorAll('.counter');
        const speed = 200;
        
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                
                const inc = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };
            
            updateCount();
        });
    });
</script>
@endsection