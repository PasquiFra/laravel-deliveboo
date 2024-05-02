// Recupero gli elementi
const formUpdate = document.getElementById('form-update');
const inputs = document.querySelectorAll('.form-inputs');
const invalidMessage = document.querySelectorAll('.invalid-message');

console.log(formUpdate)

// Flag
let isValid = true;

//! Effettiva validazione
formUpdate.addEventListener('submit', e => {
    // Giro su tutti gli input
    inputs.forEach((input, i) => {
        e.preventDefault();

        const inputField = input.value.trim();
        // Se l'input è vuoto
        if (!inputField) {

            // Riassegno la flag a false
            isValid = false;

            // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
            input.classList.add('is-invalid');
            input.classList.remove('is-valid');

            // Costruisco il messaggio di errore e lo aggiungo all'invalid message
            invalidMessage[i].innerText = 'Il campo è obbligatorio'

        } else {

            // Aggiungo la classe 'is-valid' e rimuovo la classe 'is-invalid'
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');

            // Rimuovo il messaggio di errore
            invalidMessage[i].innerText = '';
        }

    })
})