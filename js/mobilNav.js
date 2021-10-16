//* mobilNav js *//

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