var footer = document.getElementById('footer');
var body = document.body


var val = window.scrollY/3000; //3000 pour que ça change sur toute la page
var u = val -30

body.onscroll = function() {
    footer.style.backgroundColor = `rgba(${u},49, 119 , ${window.scrollY/3000})`;
};

