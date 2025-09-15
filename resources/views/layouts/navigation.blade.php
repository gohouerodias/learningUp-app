<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
                        <i class="bi bi-house-door me-1"></i>Главная 
                    </a>
                </li>
                                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('courses.index') }}">
                        <i class="bi bi-journal-bookmark me-1"></i>Все курсы
                    </a>
                </li>
                
            </ul>
            
            @auth
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