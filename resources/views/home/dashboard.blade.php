@extends('layouts.app')

@section('title', 'Панель управления - LearnHub')

@section('content')
<!-- Page Header -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Панель управления</h1>
    <a href="{{ route('courses.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="bi bi-search me-1"></i> Найти курс
    </a>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Progress Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Общий прогресс
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">68%</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-graph-up-arrow fa-2x text-gray-300"></i>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Пройденные курсы
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-journal-bookmark fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hours Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Часы обучения
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">42h</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-clock-history fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Certificates Card -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Полученные сертификаты
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-award fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">
    <!-- Continue Learning -->
    <div class="col-lg-8 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Продолжить обучение</h6>
                <a href="{{ route('my-courses') }}" class="btn btn-sm btn-outline-primary">Посмотреть все</a>
            </div>
            <div class="card-body">
                @for($i = 1; $i <= 3; $i++)
                <div class="card mb-3 border-0 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" class="img-fluid rounded-start h-100 object-fit-cover" alt="Course image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Laravel для начинающих</h5>
                                <p class="card-text">Научитесь создавать современные веб-приложения с помощью Laravel.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="w-75 me-3">
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar" role="progressbar" style="width: {{ rand(30, 90) }}%;" aria-valuenow="{{ rand(30, 90) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small class="text-muted">{{ rand(30, 90) }}% пройдено</small>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Продолжить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Недавняя активность</h6>
            </div>
            <div class="card-body">
                <div class="timeline">
                    @for($i = 1; $i <= 5; $i++)
                    <div class="timeline-item">
                        <div class="timeline-icon bg-primary text-white">
                            <i class="bi bi-play-circle"></i>
                        </div>
                        <div class="timeline-content">
                            <h6 class="mb-1">Вы завершили урок</h6>
                            <p class="text-muted mb-0">"Введение в Laravel" в курсе "Laravel для начинающих"</p>
                            <small class="text-muted">{{ $i * 2 }} часа назад</small>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <!-- Right Column -->
    <div class="col-lg-4">
        <!-- Upcoming Events -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Предстоящие события</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="d-flex align-items-center mb-2">
                        <div class="bg-primary text-white rounded p-2 me-3">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">Live Q&A по Laravel</h6>
                            <small class="text-muted">Завтра, 18:00</small>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-primary w-100">Присоединиться</button>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex align-items-center mb-2">
                        <div class="bg-success text-white rounded p-2 me-3">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">Мастер-класс по REST API</h6>
                            <small class="text-muted">15 окт, 14:00</small>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-success w-100">Запланировать</button>
                </div>
                
                <div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="bg-info text-white rounded p-2 me-3">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">Итоговый экзамен по PHP</h6>
                            <small class="text-muted">20 окт, 10:00</small>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-info w-100">Запланировать</button>
                </div>
            </div>
        </div>

        <!-- Recommended Courses -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Рекомендовано для вас</h6>
            </div>
            <div class="card-body">
                @for($i = 1; $i <= 3; $i++)
                <div class="d-flex mb-3">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" class="rounded me-3" width="60" height="60" alt="Course">
                    <div>
                        <h6 class="mb-0">Продвинутая веб-разработка</h6>
                        <small class="text-muted">От Jane Smith</small>
                        <div class="text-warning small">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            4.5
                        </div>
                    </div>
                </div>
                @endfor
                <a href="{{ route('courses.index') }}" class="btn btn-sm btn-outline-primary w-100 mt-2">Посмотреть еще</a>
            </div>
        </div>

        <!-- Achievements -->
        <div class="card shadow">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Награды</h6>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col-4 mb-3">
                        <div class="bg-warning p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-trophy text-white fs-4"></i>
                        </div>
                        <small class="d-block mt-1">Исследователь</small>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="bg-success p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-award text-white fs-4"></i>
                        </div>
                        <small class="d-block mt-1">Студент</small>
                    </div>
                    <div class="col-4 mb-3">
                        <div class="bg-info p-3 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <i class="bi bi-lightning text-white fs-4"></i>
                        </div>
                        <small class="d-block mt-1">Быстрый</small>
                    </div>
                </div>
                <a href="#" class="btn btn-sm btn-outline-primary">Посмотреть все награды</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .timeline {
        position: relative;
        padding-left: 3rem;
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 2rem;
    }
    
    .timeline-icon {
        position: absolute;
        left: -3rem;
        top: 0;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .timeline-content {
        background: #f8f9fa;
        padding: 1rem;
        border-radius: 0.5rem;
        border-left: 3px solid #4e73df;
    }
    
    .object-fit-cover {
        object-fit: cover;
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Progress bar animation
        const progressBars = document.querySelectorAll('.progress-bar');
        progressBars.forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0';
            setTimeout(() => {
                bar.style.width = width;
            }, 500);
        });
    });
</script>
@endsection