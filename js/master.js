// function hamburgerMenu() {
//     var x = document.getElementById("menu");
//     if (x.style.display === "block") {
//         x.style.display = "none";
//     } else {
//         x.style.display = "block";
//     }
// }
// window.onresize = function(event) {
//     var screensize = $(window).width();
//     if (screensize > 763) {
//     	document.getElementById("menu").style.display = "block";
//     }
//     else{
//     	document.getElementById("menu").style.display = "none";
//     }
// };

function burgerDisplay()
{
    if(window.innerWidth <= 780)
        document.getElementById("collapseable-menu").style.display = "inline-block";
}

var lastWidth = window.innerWidth;

window.addEventListener('resize', ()=>{
    if(window.innerWidth > 780)
    {
        document.getElementById("burger-checkbox").checked = false;
        document.getElementById("collapseable-menu").style.display = "inline-block";
    }
    else if(window.innerWidth <= 780 && lastWidth > 780)
    {
        document.getElementById("collapseable-menu").style.display = "none";
    }

    lastWidth = window.innerWidth;
});