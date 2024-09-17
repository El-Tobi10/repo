document.addEventListener('DOMContentLoaded', () => {
    const ratingInputs = document.querySelectorAll('.rating input');
    ratingInputs.forEach((input) => {
        input.addEventListener('change', () => {
            const ratingValue = input.value;
            console.log("Has dado una puntuación de ${ratingValue} estrellas");
            // Aquí puedes enviar la puntuación al servidor o almacenarla en una base de datos
        });
    });
    const ratingForm = document.querySelector('.rating');
    ratingForm.addEventListener('change', (e) => {
        const ratingValue = document.querySelector('input[name="rating"]:checked').value;
        fetch('/enviar-puntuacion', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ rating: ratingValue }),
        }).then(response => {
            if (response.ok) {
                console.log('Puntuación enviada con éxito');
            }
        });
    });
});