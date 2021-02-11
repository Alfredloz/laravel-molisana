require('./bootstrap');
// variabili
const first = document.getElementById("first_link");
const second = document.getElementById("second_link")

// /variabili
first.addEventListener("click", function () {
    console.log('primo link');
});
second.addEventListener("click", function () {
    console.log('secondo link');
})