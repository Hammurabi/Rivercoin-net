const toggleFAQ = (id) => {
    const x = document.getElementById(id).style.maxHeight; 
    console.log(x); 
    if(x != '0px') { 
        document.getElementById(id + '-sign').classList.add('fa-plus');
        document.getElementById(id + '-sign').classList.remove('fa-minus'); 
        document.getElementById(id).style.maxHeight = '0px'; 
    } else {
        document.getElementById(id + '-sign').classList.remove('fa-plus');
        document.getElementById(id + '-sign').classList.add('fa-minus'); 
        document.getElementById(id).style.maxHeight = '600px'; 
    }

}