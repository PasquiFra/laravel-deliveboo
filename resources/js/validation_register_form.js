
// Recupero gli elementi
const inputs = document.querySelectorAll('.test');
const inputPassword = document.getElementById('password');
const inputPasswordConfirm = document.getElementById('password-confirm');
const invalidMessage = document.querySelectorAll('.invalid-message');
const form = document.getElementById('registration-form');

// Flag
let isValid = null;

// Regex
const regex = /\d/;
const regexEmail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const regexVat = /^(IT)?[0-9]{11}$/;

// Giro su tutti gli input
inputs.forEach((input, i) => {

    input.addEventListener('blur', function () {

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
        if (input.id === 'email') {
            if (inputField.length >= 1 && !input.value.match(regexEmail)) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Email non corretta';
            }
        }

        // Input password
        if (input.id === 'password') {
            if (inputField.length < 8 && inputField.length >= 1) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'La password deve contenere almeno 8 caratteri';
            }
        }

        // Input password-confirm
        if (input.id === 'password-confirm') {
            if (inputPassword.value !== inputPasswordConfirm.value) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Le password non coincidono';
            }
        }

        // Input indirizzo
        if (input.id === 'address') {
            if (inputField.length < 5 && inputField.length >= 1) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'L\'indirizzo deve avere più di 5 lettere';
            }

            // Se è un numero
            if (inputField.length >= 1 && !isNaN(inputField)) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'La via del ristorante non può avere solo numeri';
            }
        }

        // Input VAT
        if (input.id === 'vat') {
            if (inputField.length < 13 && inputField.length >= 1) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'La P.IVA deve avere almeno 11 caratteri dopo IT';
            }

            if (inputField.length >= 1 && !input.value.match(regexVat)) {
                // Riassegno la flag a false
                isValid = false;

                // Aggiungo la classe 'is-invalid' e rimuovo la classe 'is-valid'
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');

                // Costruisco il messaggio di errore e lo aggiungo all'invalid message
                invalidMessage[i].innerText = 'Il formato non è valido';
            }
        }
    });


    form.addEventListener('submit', e => {

        // Se isValid è false non faccio partire il form
        if (!isValid) e.preventDefault();
    })
})