/*<script>
document.addEventListener("DOMContentLoaded", function() {
    const botones = document.querySelectorAll('.btn-categoria');

    // Recuperar el botón activo guardado
    const activoGuardado = localStorage.getItem('categoriaActiva');

    if (activoGuardado) {
        botones.forEach(btn => {
            if (btn.href === activoGuardado) {
                btn.classList.add('activo');
            }
        });
    }

    //  Guardar cuando hagan click
    botones.forEach(btn => {
        btn.addEventListener('click', function() {
            localStorage.setItem('categoriaActiva', this.href);
        });
    });
});
</script>
<script>
document.getElementById("menu-toggle").addEventListener("click", function() {
    document.getElementById("navbar").classList.toggle("active");
});
</script>*/

document.addEventListener("DOMContentLoaded", function() {

    //Menú hamburguesa
    const toggle = document.getElementById("menu-toggle");
    const navbar = document.getElementById("navbar");
    if (toggle && navbar) {
        toggle.addEventListener("click", function() {
            navbar.classList.toggle("active");
        });
    }



    // Cerrar navbar al hacer click en link
    const navLinks = document.querySelectorAll('#navbar .nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navbar) navbar.classList.remove("active");
        });
    });

});