function hamburgerMenu() {
    var x = document.getElementById("menu");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
window.onresize = function(event) {
    var screensize = $(window).width();
    if (screensize > 763) {
    	document.getElementById("menu").style.display = "block";
    }
    else{
    	document.getElementById("menu").style.display = "none";
    }
};