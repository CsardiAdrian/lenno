/////** BLOG **/////
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
}