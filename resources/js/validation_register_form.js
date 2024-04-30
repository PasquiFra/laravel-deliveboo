
// Recupero gli elementi
const inputs = document.querySelectorAll('.test');
const invalidMessage = document.querySelectorAll('.invalid-message');
const form = document.getElementById('registration-form');
let isValid = null;


// Giro su tutti gli input
inputs.forEach((input, i) => {

    input.addEventListener('blur', function () {

        const inputField = input.value.trim();

        // Se l'input è vuoto
        if (!input.value.trim()) {

            // Riassegno la flag a false
            isValid = false;

            // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
            input.classList.add('is-invalid');
            input.classList.remove('is-valid');

            // Costruisco il messaggio di errore e lo aggiungo all'invalid message
            invalidMessage[i].innerText = 'Il campo è obbligatorio'

        } else {

            // Riassegno la flag a true
            isValid = true;

            // Aggiungo la classe 'is-valid' e rimuovo la classe 'is-invalid'
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');

            // Rimuovo il messaggio di errore
            invalidMessage[i].innerText = '';
        }

        // Input restaurant_name
        if (input.id === 'restaurant_name') {
            if (inputField.length < 5 && inputField.length >= 1) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Il nome del ristorante deve avere più di 5 caratteri';
            }

            // Se è un numero
            if (inputField.length >= 1 && !isNaN(inputField)) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Il nome del ristorante non può avere solo numeri';
            }
        }

        // Input name
        if (input.id === 'name') {
            if (inputField.length < 2 && inputField.length >= 1) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Il nome deve avere più di 2 caratteri';
            }

            const regex = /\d/;

            // Se è un numero
            if (inputField.length >= 1 && regex.test(inputField)) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Il nome non può contenere numeri';
            }
        }

        // Input lastname
        if (input.id === 'lastname') {
            if (inputField.length < 2 && inputField.length >= 1) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Il cognome deve avere più di 2 caratteri';
            }

            const regex = /\d/;

            // Se è un numero
            if (inputField.length >= 1 && regex.test(inputField)) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Il cognome non può contenere numeri';
            }
        }

        // Input email
    })

});


form.addEventListener('submit', e => {

    // Se isValid è false non faccio partire il form
    if (!isValid) e.preventDefault();
})