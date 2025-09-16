@extends('layouts.app')

@section('title', $course->title . ' - LearnHub')
@section('description', $course->description)

@section('content')
@php
// Définition dynamique depuis le modèle
$courseId = $course->id;
$testUrl = "/courses/{$courseId}/test";
@endphp

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Zone Vidéo + Résumé -->
            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body">
                        <h2 class="mb-3">🎥 {{ $course->title }}</h2>

                        <!-- Vidéo Rutube intégrée -->
                        <div class="ratio ratio-16x9 mb-3">
                            <iframe id="courseVideo"
                                src="{{ 'https://rutube.ru/play/embed/'.$course->link ?? 'https://rutube.ru/play/embed/abcdef123456' }}"
                                frameborder="0" allowfullscreen></iframe>
                        </div>

                        <!-- Résumé -->
                        <div id="videoSummary" class="p-3 bg-white rounded shadow-sm">
                            <h5>📄 Краткое содержание урока</h5>
                            <p>{{ $course->description ?? 'Резюме этого урока будет доступно позже.' }}</p>
                        </div>

                        <!-- Bouton Test -->
                        <div class="text-center mt-4">
                            <button id="testButton" class="btn btn-lg btn-primary"
                                onclick="window.location.href='{{ $testUrl }}'">
                                🚀 Пройти тест по видео
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top:100px;">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="fw-bold mb-3">📚 {{ $course->title }}</h4>
                            <p class="text-muted">{{ $course->description }}</p>
                            <p><i class="bi bi-clock me-2"></i>{{ $course->duration ?? 'N/A' }} часов контента</p>
                            <p><i class="bi bi-collection-play me-2"></i>{{ $course->lessons_count ?? 0 }} уроков</p>
                            <p><i class="bi bi-people me-2"></i>{{ $course->students_count ?? 0 }} студентов</p>
                        </div>
                    </div>

                    <!-- Comment Section -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="fw-bold mb-3">💬 Обсуждения</h4>

                            <!-- Liste des discussions -->
                            <ul class="list-group mb-3" id="questionsList">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div>
                                        <strong>👩‍🎓 Студент:</strong> Как установить Laravel?<br>
                                        <small class="text-muted">⏳ В ожидании ответа преподавателя</small>
                                    </div>
                                    <span class="badge bg-warning text-dark">В ожидании</span>
                                </li>
                            </ul>

                            <!-- Question Form -->
                            <div class="mb-3">
                                <label for="newQuestion" class="form-label fw-bold">✍️ Задать вопрос
                                    преподавателю:</label>
                                <textarea class="form-control" id="newQuestion" rows="3"
                                    placeholder="Напишите свой вопрос..."></textarea>
                            </div>
                            <div class="text-end">
                                <button class="btn btn-success" id="sendQuestionBtn">
                                    ➕ Добавить вопрос
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const video = document.getElementById("courseVideo");
        const testButton = document.getElementById("testButton");

        // ⚠️ Ici ça ne marchera pas car iframe Rutube ne déclenche pas "ended"
        // On garde le bouton actif par défaut ou on gère côté backend
        // testButton.disabled = true;

        // JS pour ajouter une question dynamiquement
        const sendBtn = document.getElementById('sendQuestionBtn');
        const textarea = document.getElementById('newQuestion');
        const questionsList = document.getElementById('questionsList');

        sendBtn.addEventListener('click', function() {
            const questionText = textarea.value.trim();
            if(!questionText) return alert('Введите вопрос!');

            const li = document.createElement('li');
            li.className = 'list-group-item';
            li.innerHTML = `<strong>Студент:</strong> ${questionText}<br><strong>Преподаватель:</strong> (ответ будет позже)`;
            questionsList.prepend(li);
            textarea.value = '';
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
    const sendBtn = document.getElementById('sendQuestionBtn');
    const textarea = document.getElementById('newQuestion');
    const questionsList = document.getElementById('questionsList');

    sendBtn.addEventListener('click', function() {
        const questionText = textarea.value.trim();
        if (!questionText) return alert('Введите вопрос!');

        // Créer un nouvel élément de discussion
        const li = document.createElement('li');
        li.className = 'list-group-item d-flex justify-content-between align-items-start';
        li.innerHTML = `
            <div>
                <strong>👩‍🎓 Студент:</strong> ${questionText}<br>
                <small class="text-muted">⏳ В ожидании ответа преподавателя</small>
            </div>
            <span class="badge bg-warning text-dark">В ожидании</span>
        `;

        // Ajouter en haut de la liste
        questionsList.prepend(li);

        // Nettoyer le textarea
        textarea.value = '';
    });
});

</script>
@endsection