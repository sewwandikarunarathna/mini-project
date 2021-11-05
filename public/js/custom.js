// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
var i;
var x = document.getElementsByClassName("pic");
for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}
x[myIndex-1].style.display = "block";
setTimeout(carousel, 4000);
}
 
//toggle button
$(document).ready(function() {
    $('.nav-button').on('click', function() {
        $('.nav-button').toggleClass('change');
    });
});


