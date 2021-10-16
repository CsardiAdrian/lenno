/////** SUBSCRIBE VALIDATE **/////

//DOM
const firstNameField = document.getElementById('firstNameField');
const lastNameField = document.getElementById('lastNameField');
const emailField = document.getElementById('emailField');
const subscribeBtn = document.getElementById('subscribeBtn');

const inputArray = document.getElementsByClassName('form-control');


// Visszajelzés beállító függvény
const setFeedback = (inputId, status) => {
    const field = document.querySelector('#' + inputId);
    switch (status) {
        case 'valid':
            field.classList.remove("is-invalid");
            field.classList.add("is-valid");
            break;

        case 'invalid':
            field.classList.add("is-invalid");
            field.classList.remove("is-valid");
            break;
    }
}

// e-mail ellenőrző függvény
const validateEmail = (email) => {
    // Regular Expression - Regex - Reguláris kifejezés
    // https://en.wikipedia.org/wiki/Regular_expression
    // https://hu.wikipedia.org/wiki/Reguláris_kifejezés

    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

//Űrlap ellenőrző függvény
const validateForm = () => {
    let formValid = true;

    // felhasználónév
    if (firstNameField.value.length < 1) {
        setFeedback('firstNameField', 'invalid');
        formValid = false;
    } else {
        setFeedback('firstNameField', 'valid');
    }

    // felhasználónév
    if (lastNameField.value.length < 1) {
        setFeedback('lastNameField', 'invalid');
        formValid = false;
    } else {
        setFeedback('lastNameField', 'valid');
    }


    // e-mail cím
    if (validateEmail(emailField.value)) {
        setFeedback('emailField', 'valid');
    } else {
        formValid = false;
        setFeedback('emailField', 'invalid');
    }

    //submit gomb kezelése űrlap helyesség tényétől függően
    if (formValid) {
        subscribeBtn.disabled = false;
    } else {
        subscribeBtn.disabled = true;
    }
}

// Eseménykezelés - Minden input elem keyup eseménye során ellenőrzés
for (let input of inputArray) {
    input.onkeyup = validateForm;
    // Böngészős javaslat kikapcsolása az adott input elemhez
    input.setAttribute('autocomplete', 'password');
}

subscribeBtn.onclick = () => {
    validateForm();
}