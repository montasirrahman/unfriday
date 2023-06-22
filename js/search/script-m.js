// Variables
const search = document.getElementById("search");
const secondary = document.getElementById("secondary-header");
const back = document.getElementById("back-arrow");

//Event Listeners
search.addEventListener('click', () => {
    secondary.style.visibility = 'visible';
});

back.addEventListener('click', () => {
    secondary.style.visibility = 'hidden';
});