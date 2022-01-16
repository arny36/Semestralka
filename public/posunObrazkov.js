
var slideIndex = 1;
showDivs(slideIndex);
<!--funkcia umoznuje posuvat sipkami-->
function plusDivs(n) {
showDivs(slideIndex += n);
}
<!--funkcia umoznuje posuvat gulickami-->
function currentDiv(n) {
showDivs(slideIndex = n);
}

function showDivs(n) {
<!--premenna x uchovanie slajdov premenna dots bodiek-->
var i;
var x = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("demo");


<!--zadelovanie indexov-->
if (n > x.length) {slideIndex = 1}
if (n < 1) {slideIndex = x.length}


<!--cyklus zmaze vsetky obrazky ktore su zobrazene-->
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}

<!--cyklus zmaze vsetky farby ktore svietia na gulickach-->
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" w3-white", "");
}
<!--vykreslenie obrazku-->
x[slideIndex-1].style.display = "block";
<!--zafarbenie aktualnej gulicky-->
dots[slideIndex-1].className += " w3-white";
}
