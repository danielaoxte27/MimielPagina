<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>

.recetasformulario-hero {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    text-align: center;
    padding: 60px 20px 50px;
    position: relative;
    overflow: hidden;
    color: #fff;
}

.recetasformulario-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='92' viewBox='0 0 80 92'%3E%3Cpolygon points='40,2 76,22 76,62 40,82 4,62 4,22' fill='none' stroke='%23ffffff' stroke-width='2'/%3E%3C/svg%3E");
    background-size: 80px 92px;
    opacity: 0.12;
    pointer-events: none;
    z-index: 0;
}

.recetasformulario-hero h1 {
    font-size: 2.4rem;
    font-weight: 800;
    margin: 10px 0 8px;
    position: relative;
    z-index: 1;
    color: #fff;
}

.recetasformulario-hero p {
    color: rgba(255,255,255,0.9);
    font-size: 1rem;
    position: relative;
    z-index: 1;
}

.hero-icono {
    position: relative;
    z-index: 1;
}

.hero-icono svg {
    width: 52px;
    height: 52px;
    stroke: #fff;
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
    margin-bottom: 10px;
}

.recetasformulario-wrapper {
    max-width: 1000px;
    margin: 50px auto;
    padding: 0 20px;
    display: flex;
    gap: 40px;
    flex-wrap: wrap;
    align-items: flex-start;
}

.recetasformulario-form-box {
    flex: 1;
    min-width: 300px;
}

.recetasformulario-form-box h2 {
    font-size: 1.6rem;
    font-weight: 800;
    margin-bottom: 6px;
}

.recetasformulario-form-box > p {
    color: #888;
    font-size: .9rem;
    margin-bottom: 24px;
}

.form-card {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 28px;
}

.form-group {
    margin-bottom: 16px;
}

.form-group label {
    font-size: 16px;
    font-weight: 600;
    display: block;
    margin-bottom: 6px;
    font-family: sans-serif;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: .95rem;
    box-sizing: border-box;
    font-family: sans-serif;
}

.form-group textarea {
    resize: vertical;
}

.f_imagen{
    display: none;
}

.lblimagen{
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: .95rem;
    box-sizing: border-box;
    font-family: sans-serif;
    color:#888;
}

.form-imagen label{
    font-family: sans-serif !important;
    color:#616060;
    font-size: 15px;
    font-weight: normal;
}

.form-botones {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 8px;
}

.btn-regresar {
    flex: 1;
    padding: 13px;
    background: #f5c518;
    border: none;
    border-radius: 8px;
    font-weight: 700;
    font-size: .95rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    text-decoration: none;
    color: #000000;
}

.btn-enviar {
    flex: 1;
    padding: 13px;
    background: #f97316;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-weight: 700;
    font-size: .95rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.btn-regresar svg,
.btn-enviar svg {
    width: 18px;
    height: 18px;
    stroke: currentColor;
    fill: none;
    stroke-width: 2;
}

.msg-respuesta {
    margin-top: 14px;
    font-size: .9rem;
    display: none;
}

</style>

<!-- HERO -->
<section class="recetasformulario-hero">
    <div class="hero-icono">
       <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_15_829)">
            <path d="M19.364 5.05026L3.10051 8.58579L10.8787 13.5355M19.364 5.05026L15.8284 21.3137L10.8787 13.5355M19.364 5.05026L10.8787 13.5355" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
        </svg>
    </div>
    <h1><?= $hero->titulo ?></h1>
    <p><?= $hero->subtitulo ?></p>
</section>

<!-- CONTENIDO -->
<section class="recetasformulario-wrapper">

    <!-- FORMULARIO (no cambia, solo recibe datos del usuario) -->
    <div class="recetasformulario-form-box">
        <h2>Publica tu receta</h2>
        <p>Completa el formulario y cuéntanos cómo preparas tu platillo favorito</p>

        <div class="form-card">
            <div class="form-group">
                <label>Título *</label>
                <input id="f_titulo" type="text" placeholder="Título">
            </div>
            <div class="form-group">
                <label>Descripción *</label>
                <input id="f_descripcion" type="text" placeholder="Breve descripción">
            </div>
            <div class="form-group">
                <label>Ingredientes *</label>
                <input id="f_ingredientes" type="tel" placeholder="Ingredientes">
            </div>
            <div class="form-group">
                <label>Receta *</label>
                <textarea id="f_receta" rows="7.99" placeholder="Escribe el modo de preparación de tu receta aquí..."></textarea>
            </div>
            <div class="form-group">
                <label>Imagen *</label>
                <div class="form-imagen">
                <label for="f_imagen" class="lblimagen">
                    <center>
                    <svg width="60px" height="60px" viewBox="-1 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
    
                    <title>align-top</title>
                    <desc>Created with Sketch Beta.</desc>
                    <defs>

                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                    <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-413.000000, -671.000000)" fill="#888">
                    <path d="M423.732,689.718 L427,685.765 L427,698 C427,698.553 427.447,699 428,699 C428.553,699 429,698.553 429,698 L429,685.727 L432.299,689.718 C432.69,690.111 433.326,690.111 433.719,689.718 C434.11,689.324 434.11,688.688 433.719,688.294 L428.776,682.313 C428.567,682.104 428.289,682.015 428.016,682.029 C427.742,682.015 427.465,682.104 427.256,682.313 L422.313,688.294 C421.921,688.688 421.921,689.324 422.313,689.718 C422.705,690.111 423.341,690.111 423.732,689.718 L423.732,689.718 Z M441,677 L415,677 L415,675 C415,673.896 415.896,673 417,673 L439,673 C440.104,673 441,673.896 441,675 L441,677 L441,677 Z M441,699 C441,700.104 440.104,701 439,701 L417,701 C415.896,701 415,700.104 415,699 L415,679 L441,679 L441,699 L441,699 Z M439,671 L417,671 C414.791,671 413,672.791 413,675 L413,699 C413,701.209 414.791,703 417,703 L439,703 C441.209,703 443,701.209 443,699 L443,675 C443,672.791 441.209,671 439,671 L439,671 Z" id="align-top" sketch:type="MSShapeGroup">

                    </path>
                    </g>
                    </g>
                    </svg>
                    <br>
                    Subir imagen
                    </center>
                </label>
                </div>
                <input id="f_imagen" type="file" placeholder="Seleccionar Imagen" accept="image/png, image/jpg" class="f_imagen">
            </div>

            <div class="form-botones">
                <a href="<?= site_url('recetas') ?>" class="btn-regresar">
                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 12L6 12M6 12L11 17M6 12L11 7" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Regresar
                </a>
                <button class="btn-enviar" onclick="enviarFormulario('receta')">
                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_15_829)">
                        <path d="M19.364 5.05026L3.10051 8.58579L10.8787 13.5355M19.364 5.05026L15.8284 21.3137L10.8787 13.5355M19.364 5.05026L10.8787 13.5355" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                    Enviar receta
                </button>
            </div>
            <p id="msg_respuesta" class="msg-respuesta"></p>
        </div>
    </div>
</section>
   

<!-- JS -->
<script>
function enviarFormulario(tipo) {
    const titulo   = document.getElementById('f_titulo').value.trim();
    const descripcion   = document.getElementById('f_descripcion').value.trim();
    const ingredientes = document.getElementById('f_ingredientes').value.trim();
    const receta  = document.getElementById('f_receta').value.trim();
    const imagen = document.getElementById('f_imagen').value.trim();
    const resp     = document.getElementById('msg_respuesta');

    if (!titulo || !descripcion || !ingredientes || !receta || !mensaje || !imagen) {
        resp.style.display = 'block';
        resp.style.color   = '#dc2626';
        resp.textContent   = 'Por favor completa los campos obligatorios.';
        return;
    }

    const formData = new FormData();
    formData.append('titulo',   titulo);
    formData.append('descripcion', descripcion);
    formData.append('ingredientes', ingredientes);
    formData.append('receta',  receta);
    formData.append('tipo',     tipo);
    formData.append('imagen', imagen);

    fetch('<?= site_url('Recetas/enviar') ?>', {
        method: 'POST',
        body: formData
    })
    .then(r => r.json())
    .then(data => {
        resp.style.display = 'block';
        resp.style.color   = '#16a34a';
        resp.textContent   = 'Mensaje enviado correctamente';
    })
    .catch(() => {
        resp.style.display = 'block';
        resp.style.color   = '#dc2626';
        resp.textContent   = 'Error al enviar. Intenta de nuevo.';
    });
}
</script>