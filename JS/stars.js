document.addEventListener('DOMContentLoaded', function() {
    const ratingStars = document.querySelectorAll('.rating-stars i');
    const submitButton = document.getElementById('submitRating');
    const ratingError = document.getElementById('ratingError');
    const ratingForm = document.getElementById('ratingForm');
    let currentRating = 0;
    const serviceID = 'default_service';
    const templateID = 'template_str5ce9';
    
    function updateRating(rating) {
        currentRating = rating;
        ratingStars.forEach((star, index) => {
            star.classList.toggle('bi-star-fill', index < rating);
            star.classList.toggle('bi-star', index >= rating);
            star.setAttribute('aria-checked', index < rating);
        });
        submitButton.disabled = rating === 0;
        ratingError.textContent = '';
    }

    ratingStars.forEach(star => {
        star.addEventListener('mouseenter', () => updateRating(parseInt(star.dataset.rating)));
        star.addEventListener('click', () => updateRating(parseInt(star.dataset.rating)));
        star.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                updateRating(parseInt(star.dataset.rating));
            }
        });
    });

    document.querySelector('.rating-stars').addEventListener('mouseleave', () => updateRating(currentRating));

    ratingForm.addEventListener('submit', function(e) {
        e.preventDefault();
        if (currentRating === 0) {
            ratingError.textContent = 'Ingrese una calificacion antes de enviar.';
            return;
        }
        
        Swal.fire({
            title: 'Calificación enviada',
            text: `Tu calificación ha sido enviada con éxito. La calificación es de ${currentRating} estrella/s.`,
            icon: 'success',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#038dac',
            allowOutsideClick: false
        });

        ratingForm.reset();
        updateRating(0);
    });
});
