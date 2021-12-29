
let mybutton = document.getElementById("myArrow");

// Rodyti mygtuka, kai paskrolina 15px
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// Kai paklikina - atsidurti virsuje
function topFunction() {
    document.documentElement.scrollTop = 0;
}
