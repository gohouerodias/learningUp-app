<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h5 class="fw-bold mb-3">LearnHub</h5>
                <p>Notre mission est de rendre l'éducation de qualité accessible à tous, partout dans le monde.</p>
                <div class="d-flex mt-4">
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-twitter fs-5"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-linkedin fs-5"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-youtube fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram fs-5"></i></a>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-4 mb-4">
                <h5 class="fw-bold mb-3">LearnHub</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">À propos</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Carrières</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Blog</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Catalogue</a></li>
                </ul>
            </div>
            
           
            
            <div class="col-lg-2 col-md-4 mb-4">
                <h5 class="fw-bold mb-3">Support</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">FAQ</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Conditions</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Politique de confidentialité</a></li>
                </ul>
            </div>
            
          
        </div>
        
        <hr class="my-4">
        
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0">&copy; {{ date('Y') }} LearnHub. Tous droits réservés.</p>
            </div>
           
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button id="backToTop" class="btn btn-primary rounded-circle position-fixed bottom-0 end-0 m-3" style="display: none;">
    <i class="bi bi-arrow-up"></i>
</button>

<script>
    // Back to top button
    const backToTopButton = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    
// Example: Send a message to a Chrome extension (only works in extension context)
if (typeof chrome !== 'undefined' && chrome.runtime && chrome.runtime.sendMessage) {
    chrome.runtime.sendMessage({ greeting: "hello" }, function(response) {
        if (chrome.runtime.lastError) {
            console.error("Error sending message:", chrome.runtime.lastError.message);
        } else if (response && response.farewell) {
            console.log(response.farewell);
        } else {
            console.log("No response received.");
        }
    });
}

    
    backToTopButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    
    // Tooltip initialization
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>