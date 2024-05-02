// Recupero gli elementi
const formCreate = document.getElementById('form-create');
const inputs = document.querySelectorAll('.form-inputs');
const invalidMessage = document.querySelectorAll('.invalid-message');

console.log(formCreate)

// Flag
let isValid = true;

// Regex
const minRegexDecimal = /^\d+(.\d{1})?$/;
const maxRegexDecimal = /^\d+.\d{0,2}$/;

//! Effettiva validazione
formCreate.addEventListener('submit', e => {
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

        // Input name
        if (input.id === 'name') {
            // Se è un numero
            if (!isNaN(inputField) && inputField.length >= 1) {

                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Il nome del ristorante non può avere solo numeri';
            }
        }

        if (input.id === 'price') {
            if (inputField < 0) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Il prezzo non può essere negativo';
            }

            if (inputField.match(minRegexDecimal)) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Il prezzo deve avere 2 decimali';
            } else if (!inputField.match(maxRegexDecimal) && inputField.length >= 1) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Il prezzo non può avere più di 3 decimali';
            }
        }

    })
})