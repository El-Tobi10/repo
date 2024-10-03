function filterGames(value) {
    let buttons = document.querySelectorAll('.btn');
    buttons.forEach((button) => {
        if (value.toUpperCase() == button.innerText.toUpperCase()) {
            button.classList.addClass("active");
        }
        else{
            button.classList.removeClass("active");
        }
    })
}