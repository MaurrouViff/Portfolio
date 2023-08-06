function toggleEmail() {
    let emailElement = document.getElementById("email");
    let toggleButton = document.getElementById("toggleButton");

    if (emailElement.style.display === "none") {
        // Si l'adresse e-mail est masquée, l'afficher
        emailElement.style.display = "block";
        toggleButton.textContent = "Cacher";
    } else {
        // Si l'adresse e-mail est affichée, la masquer
        emailElement.style.display = "none";
        toggleButton.textContent = "Afficher";
    }
}
