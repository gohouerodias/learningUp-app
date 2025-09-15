@extends('layouts.app')

@section('title', 'Plateforme d\'apprentissage en ligne - LearnHub')

@section('description', 'Découvrez des milliers de cours en ligne dispensés par des experts. Développez vos compétences avec LearnHub.')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Apprenez sans limites</h1>
                <p class="lead mb-4">Découvrez des milliers de cours dispensés par des experts du monde entier. Développez vos compétences dès aujourd'hui.</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('courses.index') }}" class="btn btn-primary btn-lg">Explorer les cours</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Créer un compte</a>
                </div>
                <div class="d-flex mt-4 text-white">
                    <div class="me-4">
                        <h3 class="fw-bold">10K+</h3>
                        <p>Étudiants actifs</p>
                    </div>
                    <div class="me-4">
                        <h3 class="fw-bold">500+</h3>
                        <p>Cours en ligne</p>
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <img src="https://images.unsplash.com/photo-1535223289827-42f1e9919769?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="Étudiants apprenant en ligne" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>



<!-- Featured Courses -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Cours populaires</h2>
                <p class="text-muted">Découvrez nos formations les plus appréciées</p>
            </div>
        </div>
        <div class="row">
            @for($i = 0; $i < 6; $i++)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card course-card h-100">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Course image">
                        <span class="position-absolute top-0 end-0 m-2 badge bg-primary">Développement</span>
                        <div class="card-img-overlay d-flex align-items-end p-0">
                            <div class="bg-dark bg-opacity-50 w-100 p-2 text-white">
                                <small><i class="bi bi-clock me-1"></i> 12h de contenu</small>
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
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                <span class="text-muted ms-1">4.5</span>
                            </span>
                        </div>
                        <h5 class="card-title">Laravel pour les débutants</h5>
                        <p class="card-text">Apprenez à créer des applications web modernes avec Laravel, le framework PHP le plus populaire.</p>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-primary fw-bold">49,99 €</span>
                            <span class="text-decoration-line-through text-muted ms-2">89,99 €</span>
                        </div>
                        <div>
                            <i class="bi bi-people"></i>
                            <span>245 étudiants</span>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('courses.index') }}" class="btn btn-outline-primary">Все курсы</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Pourquoi choisir LearnHub ?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 text-center mb-4">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="bi bi-laptop text-primary" style="font-size: 2rem;"></i>
                </div>
                <h4>Apprentissage flexible</h4>
                <p class="text-muted">Apprenez à votre rythme, où que vous soyez</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center mb-4">
                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="bi bi-people-fill text-success" style="font-size: 2rem;"></i>
                </div>
                <h4>Experts du secteur</h4>
                <p class="text-muted">Formez-vous avec des professionnels expérimentés</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center mb-4">
                <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="bi bi-award text-warning" style="font-size: 2rem;"></i>
                </div>
                <h4>Certifications</h4>
                <p class="text-muted">Obtenez des certifications valorisantes</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center mb-4">
                <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="bi bi-chat-dots text-info" style="font-size: 2rem;"></i>
                </div>
                <h4>Support 24/7</h4>
                <p class="text-muted">Notre équipe est là pour vous aider à tout moment</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Ce que disent nos étudiants</h2>
                <p class="text-muted">Découvrez les expériences de nos apprenants</p>
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
                        <p class="card-text">"Les cours sur LearnHub ont transformé ma carrière. J'ai pu acquérir des compétences précieuses qui m'ont aidé à décrocher un nouvel emploi."</p>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" class="rounded-circle me-3" width="50" height="50" alt="Student">
                            <div>
                                <h6 class="mb-0">Thomas Martin</h6>
                                <small class="text-muted">Développeur Web</small>
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
                        <p class="card-text">"La qualité des cours est exceptionnelle. Les instructeurs sont compétents et les supports de cours sont très bien structurés."</p>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" class="rounded-circle me-3" width="50" height="50" alt="Student">
                            <div>
                                <h6 class="mb-0">Sophie Leroux</h6>
                                <small class="text-muted">Designer UX/UI</small>
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
                        <p class="card-text">"La plateforme est intuitive et facile à utiliser. J'apprécie particulièrement la possibilité d'apprendre à mon propre rythme."</p>
                        <div class="d-flex align-items-center mt-3">
                            <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" class="rounded-circle me-3" width="50" height="50" alt="Student">
                            <div>
                                <h6 class="mb-0">Marc Dubois</h6>
                                <small class="text-muted">Data Analyst</small>
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
                <h3>Restez informé</h3>
                <p>Inscrivez-vous à notre newsletter pour recevoir les dernières actualités et les nouveaux cours</p>
                <form class="d-flex gap-2 mt-4">
                    <input type="email" class="form-control form-control-lg" placeholder="Votre adresse email">
                    <button type="submit" class="btn btn-light btn-lg">S'inscrire</button>
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