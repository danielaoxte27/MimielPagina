
const btn = document.getElementById("btn-accesibilidad");
const panel = document.getElementById("panel-accesibilidad");

btn.addEventListener("click", () => {
    panel.classList.toggle("active");
});

function aumentarTexto() {
    document.body.style.fontSize = "18px";
}

function toggleContraste() {
    document.body.classList.toggle("alto-contraste");
}

function toggleAnimaciones() {
    document.body.classList.toggle("sin-animaciones");
}

function resetAccesibilidad() {
    document.body.removeAttribute("style");
    document.body.className = "";
}
/*function togglePanel() {
    const panel = document.getElementById("panel-accesibilidad");
    const boton = document.getElementById("btn-accesibilidad");

    panel.classList.toggle("activo");
    boton.classList.toggle("mover");
}*/

/*document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("menu-toggle");
    const navbar = document.getElementById("navbar");
    if (toggle && navbar) {
        toggle.addEventListener("click", function () {
            navbar.classList.toggle("active");
        });
    }   
});*/
/*actualización de navbar*/
document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll('#navbar .nav-link');
    function resaltarEnlace(hash) {
        navLinks.forEach(link => {
            link.classList.remove('activo');
            if (link.getAttribute('href').includes(hash)) {
                link.classList.add('activo');
            }
        });
    }

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(l => l.classList.remove('activo'));
            this.classList.add('activo');
        });
    });
    if (window.location.hash) {
        resaltarEnlace(window.location.hash);
    } else {
        resaltarEnlace('#inicio');
    }
    const toggle = document.getElementById("menu-toggle");
    const navbar = document.getElementById("navbar");
    if (toggle && navbar) {
        toggle.addEventListener("click", () => navbar.classList.toggle("active"));
    }
    document.querySelectorAll(".nav-link").forEach(function(link){
        link.addEventListener("click", function(){
            navbar.classList.remove("active");
        });
    });
});