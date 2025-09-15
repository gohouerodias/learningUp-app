@extends('layouts.app')

@section('title', 'Онлайн-курсы - LearnHub')

@section('description', 'Просмотрите наш каталог онлайн-курсов и найдите подходящее для вас обучение.')

@section('content')
<!-- Page Header -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-5 fw-bold">Каталог курсов</h1>
                <p class="lead">Откройте для себя все наши доступные курсы</p>
            </div>
        </div>
    </div>
</section>

<!-- Courses Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Sidebar Filters -->
            <div class="col-lg-3 mb-4">
                <div class="card border-0 shadow-sm sticky-top" style="top: 100px;">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">Фильтры</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center text-muted p-4">
                            <i class="bi bi-tools fs-2 mb-2"></i>
                            <p class="mb-0">
                                Фильтры в разработке.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Courses List -->
            <div class="col-lg-9">
                <!-- Search and Sort -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="mb-0">Отображение <span class="fw-bold">120</span> курсов</p>
                    <div class="d-flex">
                        <select class="form-select me-2" style="width: auto;">
                            <option selected>Сортировать по: Релевантности</option>
                            <option>Самые популярные</option>
                            <option>Лучшие оценки</option>
                            <option>Цена по возрастанию</option>
                            <option>Цена по убыванию</option>
                            <option>Новинки</option>
                        </select>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-secondary active"><i class="bi bi-grid"></i></button>
                            <button type="button" class="btn btn-outline-secondary"><i class="bi bi-list"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Courses Grid -->
                <div class="row">
                    @for($i = 0; $i < 9; $i++)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card course-card h-100">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Course image">
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
                                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=random" class="rounded-circle me-2" width="24" height="24" alt="Instructor">
                                        <small>John Doe</small>
                                    </div>
                                    <span class="text-warning">
                                        <i class="bi bi-star-fill"></i>
                                        <span class="text-muted ms-1">4.5</span>
                                    </span>
                                </div>
                                <h5 class="card-title">Laravel для начинающих</h5>
                                <p class="card-text">Научитесь создавать современные веб-приложения с помощью Laravel.</p>
                            </div>
                            <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-primary fw-bold">49,99 €</span>
                                    <span class="text-decoration-line-through text-muted ms-2">89,99 €</span>
                                </div>
                                <a href="{{ route('courses.show', 1) }}" class="btn btn-sm btn-outline-primary">Посмотреть курс</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Предыдущая</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Следующая</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
