<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
                        <i class="bi bi-house-door me-1 fs-5"></i>Главная 
                    </a>
                </li>
                                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('courses.index') }}">
                        <i class="bi bi-journal-bookmark me-1 fs-5"></i>Все курсы
                    </a>
                </li>
            </ul>
            
            @auth
                @if(!auth()->user()->is_instructor)
                    <ul class="navbar-nav ms-auto align-items-center">

                        <!-- Coins -->
                        <li class="nav-item me-4">
                            <a class="nav-link text-white fs-4">
                                🪙 <span id="coinsCounter" data-value="{{ auth()->user()->coins ?? 0 }}">0</span>
                            </a>
                        </li>

                        <!-- Certificates -->
                        <li class="nav-item me-4">
                            <a class="nav-link text-white fs-4">
                                🎓 <span id="certCounter" data-value="{{ auth()->user()->certificates_count ?? 0 }}">0</span>
                            </a>
                        </li>

                        <!-- Goals Dropdown -->
                        <li class="nav-item dropdown me-2">
                            <a class="nav-link dropdown-toggle text-white fs-4" href="#" id="goalsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                🎯
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="goalsDropdown">
                                <li class="dropdown-item">
                                    🪙 Coins сегодня: <br>
                                    <small>
                                        {{ auth()->user()->coins_today ?? 0 }} / {{ auth()->user()->coins_goal ?? 100 }}
                                    </small>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar" 
                                             style="width: {{ isset(auth()->user()->coins_today) && isset(auth()->user()->coins_goal) ? round((auth()->user()->coins_today / auth()->user()->coins_goal) * 100) : 0 }}%">
                                        </div>
                                    </div>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li class="dropdown-item">
                                    📚 Курсы: <br>
                                    <small>
                                        {{ auth()->user()->courses_done ?? 0 }} / {{ auth()->user()->courses_goal ?? 10 }}
                                    </small>
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar bg-info" role="progressbar" 
                                             style="width: {{ isset(auth()->user()->courses_done) && isset(auth()->user()->courses_goal) ? round((auth()->user()->courses_done / auth()->user()->courses_goal) * 100) : 0 }}%">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endif

                @if(auth()->user()->is_instructor)
                    <div class="d-flex">
                        <a href="{{ route('instructor.courses.create') }}" class="btn btn-light">
                            <i class="bi bi-plus-circle me-1"></i>Créer un cours
                        </a>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</nav>