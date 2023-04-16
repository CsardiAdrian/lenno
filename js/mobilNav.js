//* mobilNav js *//

const mobilNav = document.getElementById('mobilNav');
const mobilNavOpen = document.getElementById('mobilNavOpen');
const hasChildrenLink = $('.menu-item-has-children > a');
const hasChildren = $('.menu-item-has-children');

let static = true;

// Mobil nav show/hide
mobilNavOpen.onclick = () => {
    if (static == true) {
        mobilNav.classList.add('open');
        mobilNavOpen.classList.add('open');
        static = !static;

    } else {
        mobilNav.classList.remove('open');
        mobilNavOpen.classList.remove('open');
        static = !static;
    }
}

// Mobil sub-menu show/hide
let isOpenState = true;

hasChildrenLink.click(function(event) {
    event.preventDefault();

    let opened = $(event.target).closest(hasChildren).hasClass('is-open');

    if (!opened) {
        isOpenState = true;
    } else {
        isOpenState = false;
    }

    if (isOpenState == true) {
        $(event.target).closest(hasChildren).addClass('is-open');
        isOpenState = !isOpenState;
    } else {
        $(event.target).closest(hasChildren).removeClass('is-open');
        isOpenState = !isOpenState;
    }
});
//* mobilNav js end *//