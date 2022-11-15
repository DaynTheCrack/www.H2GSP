function verif() { // verif de la longueur du mot de passe
    if (password.value.length < 8 ) {
        output.textContent = "Pas assez de caractères (8 minimum) !";
        output.style.color = "red";
    } else {
        output.textContent = "Mot de passe assez long !";
        output.style.color = "green";
    }
}

form.onsubmit = () =>{ // annule l'operation de post l'orsque la longueur < 8
    if (password.value.length < 8) {
        return false;
    } else {
        return true;
    }
}