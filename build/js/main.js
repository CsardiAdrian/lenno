$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});;/////** BLOG **/////
const cardCon = document.getElementById('cardCon');

window.onload = () => {
    // XMLHttpRequest osztályból példányosítással létrehozunk egy objektumot
    const xhr = new XMLHttpRequest();

    /* Kérés küldés */
    xhr.open('get', 'data.json');
    xhr.send();

    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            const resultArray = JSON.parse(xhr.responseText);
            let resultHTML = '';
            // A vissza kapott tömböt bejárjuk (minden eleme ugyanolyan szerkezetű objektum)
            for (let item of resultArray) {
                resultHTML +=
                    '<div class="col-12 col-md-6 col-lg-4">' +
                    '<div class="card">' +
                    '<a href="#" class="card-link">' +
                    '<figure class="card-image">' +
                    '<img src="' + item.image + '" alt="blog1">' +
                    '</figure>' +
                    '<div class="card-content">' +
                    '<div class="card-title">' +
                    item.title +
                    '</div>' +
                    '<div class="card-readmore">' +
                    'Read more' +
                    '<img class="card-icon" src="Assets/icons/arrow.svg" alt="arrow" width="13" height="12">' +
                    '</div>' +
                    '</div>' +
                    '</a>' +
                    '</div>' +
                    '</div>'
                '</div>';
                // Ha volt találat, akkor kerül valami a resultHTML-be
                if (resultHTML != '') {
                    cardCon.innerHTML = resultHTML;
                } else {
                    cardCon.innerHTML =
                        'Nincsenek bejegyzések!';
                }
            }

        }
    }
};/////** SUBSCRIBE VALIDATE **/////

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
};//* mobilNav js *//

// DOM 
const mobilNav = document.getElementById('mobilNav');
const mobilNavOpen = document.getElementById('mobilNavOpen');

// Statikus változó
let static = true;

// Mobil menü megjelenítés/elrejtés
mobilNavOpen.onclick = () => {
    if (static == true) {
        mobilNav.style.width = "250px";
        mobilNavOpen.innerHTML = '&#10005;'
        static = !static;

    } else {
        mobilNav.style.width = "0px";
        mobilNavOpen.innerHTML = '&#9776;'
        static = !static;
    }
}

//* mobilNav js end *//