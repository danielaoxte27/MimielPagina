<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
.recetas-hero {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    color: #fff;
    text-align: center;
    padding: 40px 20px 80px;
    position: relative;
    overflow: hidden;
}

.recetas-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='92' viewBox='0 0 80 92'%3E%3Cpolygon points='40,2 76,22 76,62 40,82 4,62 4,22' fill='none' stroke='%23ffffff' stroke-width='2.5'/%3E%3C/svg%3E");
    background-size: 80px 92px;
    opacity: 0.13;
    pointer-events: none;
}

.recetas-hero-inner {
    position: relative;
    z-index: 1;
}

.recetas-hero h1 {
    font-family: sans-serif;
    font-size: 2.5rem;
    font-weight: 800;
    margin: 0 0 10px;
}

.search-sticky-wrapper {
    position: sticky;
    top: 90px; 
    z-index: 1000;
    width: 100%;
    /* Ajustamos padding para que la barra blanca suba un poco */
    padding: 8px 0 14px 0; 
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    display: flex;
    justify-content: center;
    margin-top: -65px; 
}

.is-scrolled {
    background-color: #F4C542; 
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    margin-top: 0; 
    width: 100%; 
    border-radius: 0;
}

.hero-search {
    display: flex;
    align-items: center;
    background: white;
    border-radius: 50px;
    padding: 10px 22px;
    width: 90%;
    max-width: 400px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    border: 1px solid #eee;
}

.hero-search input {
    border: none;
    outline: none;
    font-size: 15px;
    font-family: sans-serif;
    width: 100%;
}

.recetas-section {
    max-width: 1100px;
    margin: 50px auto 80px;
    padding: 0 20px;
}

.recetas-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
    align-items: stretch;
}

@media (max-width: 900px) { .recetas-grid { grid-template-columns: repeat(2,1fr); } }
@media (max-width: 580px) { .recetas-grid { grid-template-columns: 1fr; } }

.recetas-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #e5e7eb;
    display: flex;
    flex-direction: column;
    transition: all .22s ease;
    height: 100%;
}

.recetas-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.10);
}

.recetas-card-img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.bg-amber  { background: #F5C518; }
.bg-orange { background: #F28C28; }
.bg-teal   { background: #5ECFB1; }
.bg-salmon { background: #F4875E; }
.bg-yellow { background: #F7D000; }

.recetas-card-body {
    padding: 14px 16px 16px;
    display: flex;
    flex-direction: column;
    flex: 1;
    min-height: 0;
}

.recetas-card-body h2 {
    margin-bottom: 10px;
}

.recetas-card-body p {
    flex: 1;
    margin-bottom: 18px;
}

.recetas-card-footer {
    margin-top: auto;
    display: flex;
    justify-content: flex-start;
}

.btn-leer-mas {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #e69d00;
    color: #fff;
    font-weight: 700;
    font-size: .8rem;
    padding: 8px 12px;
    border-radius: 10px;
    text-decoration: none;
    min-height: 38px;
    width: auto;
    transition: transform .18s ease, background .18s ease;
}

.btn-leer-mas:hover {
    background: #d78a00;
    transform: translateY(-1px);
}

.btn-agregar {
    padding: 9px 22px;
    border-radius: 50px;
    border: 2px solid #F28C28;
    color: #F28C28;
    text-decoration: none;
    font-weight: 700;
    transition: 0.25s;
}

.contenedor-agregar {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 40px 0;
}
</style>

<section class="recetas-hero">
    <div class="recetas-hero-inner">
        <div class="recetas-hero-icon">
            <svg fill="#fff" width="65" height="65" viewBox="0 0 32 32"><path d="M26.01,15.24H6c-.41,0-.75,.34-.75,.75,0,4.24,2.47,7.91,6.05,9.66v2.35c0,.41,.34,.75,.75,.75h7.92c.41,0,.75-.34,.75-.75v-2.35c3.57-1.75,6.04-5.41,6.04-9.65,0-.41-.34-.75-.75-.75Z"/></svg>
        </div>
        <h1>Recetas</h1>
        <p>Deliciosas recetas hechas con miel de abeja</p>
    </div>
</section>

<div id="search-wrapper" class="search-sticky-wrapper">
    <div class="hero-search">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#aaa" stroke-width="2" style="margin-right: 10px;">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <input type="text" id="buscarInput" placeholder="Buscar receta..." value="<?= isset($busqueda) ? $busqueda : '' ?>">
    </div>
</div>

<div class="contenedor-agregar">
    <span style="color:#F28C28; font-size:11px; font-weight:700; letter-spacing:3px; text-transform:uppercase; margin-bottom:15px;">Comparte tus recetas</span>
    <a href="<?= site_url('recetas/recetasformulario') ?>" class="btn-agregar">Agregar receta</a>
</div>

<section class="recetas-section">
<?php
$paletas = ['bg-amber','bg-orange','bg-teal','bg-salmon','bg-yellow'];
if(!empty($articulos)): ?>
    <div class="recetas-grid">
    <?php foreach($articulos as $i => $art): ?>
        <?php $color = $paletas[$i % count($paletas)]; ?>
        <div class="recetas-card">
            <?php if(!empty($art->imagen_ruta)): ?>
                <img src="<?= base_url($art->imagen_ruta . $art->imagen_nombre) ?>" class="recetas-card-img">
            <?php else: ?>
                <div class="recetas-card-placeholder <?= $color ?>"></div>
            <?php endif; ?>
            <div class="recetas-card-body">
                <h2 style="font-size: 1rem; font-weight:800; margin:0;"><?= htmlspecialchars($art->nombre ?? 'Sin título') ?></h2>
                <p style="font-size: .82rem; color:#777; line-height:1.5;"><?= htmlspecialchars(strip_tags($art->descripcion ?? '')) ?></p>
                <div class="recetas-card-footer">
                    <a href="<?= site_url('recetas/recetasdetalle/'.$art->id) ?>" class="btn-leer-mas">
                        Más información
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchWrapper = document.getElementById('search-wrapper');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 120) {
            searchWrapper.classList.add('is-scrolled');
        } else {
            searchWrapper.classList.remove('is-scrolled');
        }
    });
});
</script>