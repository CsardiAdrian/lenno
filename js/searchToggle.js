//* searchToggle js *//

const searchForm = document.getElementById('search-form');
const searchToggle = document.getElementById('search-toggle');


let searchStatic = true;

// Search form show/hide
searchToggle.onclick = () => {
    if (searchStatic == true) {
        searchForm.classList.add("open");
        searchStatic = !searchStatic;

    } else {
        searchForm.classList.remove("open");
        searchStatic = !searchStatic;
    }
}

//* searchToggle js end *//