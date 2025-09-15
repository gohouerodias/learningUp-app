
// Wait for document to be fully loaded
document.addEventListener('DOMContentLoaded', function() {

    
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Initialize popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    const popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
    
    // Handle mobile menu
    const mobileMenu = document.getElementById('mobileMenu');
    if (mobileMenu) {
        mobileMenu.addEventListener('hidden.bs.collapse', function () {
            document.body.classList.remove('menu-open');
        });
        
        mobileMenu.addEventListener('shown.bs.collapse', function () {
            document.body.classList.add('menu-open');
        });
    }
    
    // Handle search functionality
    const searchForm = document.getElementById('searchForm');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            const searchInput = this.querySelector('input[name="q"]');
            if (!searchInput.value.trim()) {
                e.preventDefault();
                searchInput.focus();
            }
        });
    }
    
    // // Add loading animation to buttons
    // const submitButtons = document.querySelectorAll('button[type="submit"], input[type="submit"]');
    // submitButtons.forEach(button => {
    //     button.addEventListener('click', function() {
    //         const form = this.closest('form');
    //         if (form && form.checkValidity()) {
    //             this.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Chargement...';
    //             this.disabled = true;
    //         }
    //     });
    // });
    
    // Handle course card interactions
    const courseCards = document.querySelectorAll('.course-card');
    courseCards.forEach(card => {
        card.addEventListener('click', function(e) {
            if (!e.target.closest('.btn') && !e.target.closest('.dropdown')) {
                this.querySelector('a.course-link').click();
            }
        });
    });
    
    // Notification system
    const notificationBell = document.getElementById('notificationBell');
    if (notificationBell) {
        notificationBell.addEventListener('click', function() {
            // In a real app, you would mark notifications as read via AJAX
            const badge = this.querySelector('.badge');
            if (badge) {
                badge.style.display = 'none';
            }
        });
    }
});

// Utility function to format dates
function formatDate(dateString) {
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return new Date(dateString).toLocaleDateString('fr-FR', options);
}



// Utility function to handle API errors
function handleApiError(error) {
    console.error('API Error:', error);
    // Show user-friendly error message
    const toast = document.getElementById('errorToast');
    if (toast) {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toast);
        toast.querySelector('.toast-body').textContent = 'Une erreur est survenue. Veuillez réessayer.';
        toastBootstrap.show();
    }
}