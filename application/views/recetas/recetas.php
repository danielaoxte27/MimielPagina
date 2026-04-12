<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>

.recetas-hero {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    color: #fff;
    text-align: center;
    padding: 64px 20px 52px;
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

.recetas-hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 100%; height: 60px;
    background: linear-gradient(to bottom, transparent, #F28C28);
    pointer-events: none;
}

.recetas-hero-inner {
    position: relative;
    z-index: 1;
}

.recetas-hero-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0px;
}

.recetas-hero-icon svg {
    width: 65px;
    height: 65px;
    stroke: #fff;
    fill: none;
    stroke-width: 2.2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.recetas-hero h1 {
    font-family: sans-serif;
    font-size: 2.5rem;
    font-weight: 800;
    margin: 0 0 10px;
    color: #fff;
}

.recetas-hero p {
    font-family: sans-serif;
    font-size: 1.05rem;
    color: rgba(255,255,255,0.9);
    margin: 0;
}

.recetas-section {
    max-width: 1100px;
    margin: 52px auto 80px;
    padding: 0 20px;
}

.recetas-grid {
    display: grid;
    grid-template-columns:  repeat(3, 1fr);
    gap: 28px;
}

@media (max-width: 900px) { 
    .recetas-grid { 
        grid-template-columns: repeat(2,1fr); 
    } 
}
@media (max-width: 580px) { 
    .recetas-grid { 
        grid-template-columns: 1fr; 
    } 
}

.recetas-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #e5e7eb;
    display: flex;
    flex-direction: column;
    transition: transform .22s ease, box-shadow .22s ease;
}

.recetas-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.10);
}

.recetas-card-img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    display: block;
    flex-shrink: 0;
}

.recetas-card-placeholder {
    width: 100%;
    height: 220px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.recetas-card-placeholder svg {
    width: 48px;
    height: 48px;
    stroke: rgba(255,255,255,0.6);
    fill: none;
    stroke-width: 2.2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.bg-amber  { 
    background: #F5C518; 
}
.bg-orange { 
    background: #F28C28; 
}
.bg-teal   { 
    background: #5ECFB1; 
}
.bg-salmon { 
    background: #F4875E; 
}
.bg-yellow { 
    background: #F7D000; 
}

.recetas-card-body {
    padding: 14px 16px 16px;
    display: flex;
    flex-direction: column;
    flex: 1;
    gap: 6px;
}

.recetas-card-meta {
    display: flex;
    align-items: center;
    justify-content: justify;
    gap: 5px;
    font-family: sans-serif;
    font-size: .75rem;
    color: #aaa;
}

.recetas-card-meta svg {
    width: 13px;
    height: 13px;
    stroke: #ccc;
    fill: none;
    stroke-width: 2.2;
    stroke-linecap: round;
    stroke-linejoin: round;
    flex-shrink: 0;
}

.recetas-card-title {
    font-family: sans-serif;
    font-size: 1rem;
    font-weight: 800;
    color: #1a1a1a;
    line-height: 1.35;
    margin: 0;
    text-align: justify;
}

.recetas-card-desc {
    font-family: sans-serif;
    font-size: .82rem;
    /*color: #666;*/
    color: #777;
    line-height: 1.55;
    margin: 0;
    flex: 1;
    text-align: justify;
}

.recetas-card-footer {
    margin-top: 10px;
}

.btn-leer-mas {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: #e69d00;
    color: #fff;
    font-family: sans-serif;
    font-weight: 700;
    font-size: .8rem;
    padding: 8px 14px;
    border-radius: 8px;
    text-decoration: none;
    transition: background .18s ease, transform .18s ease;
}

.btn-leer-mas svg {
    width: 16px;
    height: 16px;
    stroke: #fff;
    fill: none;
    stroke-width: 2.4;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: transform .18s ease;
}

.btn-leer-mas:hover {
    background: #e6b800;
}

.btn-leer-mas:hover svg {
    transform: translateX(3px);
}

.recetas-empty {
    text-align: center;
    padding: 80px 20px;
    color: #bbb;
    font-family: sans-serif;
}

.recetas-empty svg {
    width: 58px;
    height: 58px;
    stroke: #ddd;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    display: block;
    margin: 0 auto 16px;
}

/*Buscador*/
.hero-search {
    display: inline-flex;
    align-items: center;
    background: white;
    border-radius: 50px;
    padding: 6px 8px 6px 22px;
    gap: 10px;
    width: 100%;
    max-width: 480px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.15);
    margin-top: 20px;
}

.hero-search svg { flex-shrink: 0; opacity: 0.4; }

.hero-search input {
    border: none;
    outline: none;
    font-size: 15px;
    font-family: sans-serif;
    background: transparent;
    color: #333;
    width: 100%;
}
.hero-search input::placeholder { color: #aaa; }
/*Botón agregar receta*/
.btn-agregar {
    padding: 9px 22px;
    border-radius: 50px;
    border: 2px solid #F28C28;
    color: #F28C28;
    text-decoration: none;
    font-size: 12px;
    font-weight: 700;
    font-family: sans-serif;
    letter-spacing: 0.5px;
    transition: 0.25s;
    background: transparent;
    cursor: pointer;
}
.btn-agregar:hover { 
    background: #fff3e0; transform: translateY(-2px); 
}
.contenedor-agregar {
    display: flex;
    flex-direction: column;
    align-items: center; /* centra TODO */
    margin: 30px 0;
}

.receta-label {
    display: block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #F28C28;
    margin-bottom: 15px;
    align-items: center;
}
</style>

<!-- HERO -->
<section class="recetas-hero">
    <div class="recetas-hero-inner">
        <div class="recetas-hero-icon">
            <!-- libro abierto -->
            <svg fill="#000000" width="800px" height="800px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"><path d="M26.01,15.24H6c-.41,0-.75,.34-.75,.75,0,4.24,2.47,7.91,6.05,9.66v2.35c0,.41,.34,.75,.75,.75h7.92c.41,0,.75-.34,.75-.75v-2.35c3.57-1.75,6.04-5.41,6.04-9.65,0-.41-.34-.75-.75-.75Zm-6.79,12.01h-6.42v-.99c1.01,.32,2.09,.49,3.21,.49s2.2-.17,3.22-.49v.99Zm-3.22-2c-4.13,0-7.63-2.72-8.82-6.47h14.69c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75H6.85c-.03-.18-.05-.36-.07-.54H25.23c-.38,4.75-4.37,8.51-9.23,8.51Z"stroke-width="1"/><path d="M25.55,5.23H14.99v-.13c0-1.02-.83-1.85-1.85-1.85-.41,0-.79,.14-1.1,.37-.31-.23-.69-.37-1.1-.37s-.79,.14-1.1,.37c-.31-.23-.69-.37-1.1-.37s-.79,.14-1.1,.37c-.31-.23-.69-.37-1.1-.37-1.02,0-1.85,.83-1.85,1.85v3.86c0,1.02,.83,1.85,1.85,1.85,.41,0,.79-.14,1.1-.37,.31,.23,.69,.37,1.1,.37s.79-.14,1.1-.37c.31,.23,.69,.37,1.1,.37s.79-.14,1.1-.37c.31,.23,.69,.37,1.1,.37,1.02,0,1.85-.83,1.85-1.85v-.2h10.57c.97,0,1.77-.79,1.77-1.77s-.79-1.77-1.77-1.77ZM6.53,9.32c-.19,0-.35-.16-.35-.35v-3.86c0-.19,.16-.35,.35-.35s.35,.16,.35,.35v3.86c0,.19-.16,.35-.35,.35Zm2.2,0c-.19,0-.35-.16-.35-.35v-3.86c0-.19,.16-.35,.35-.35s.35,.16,.35,.35v3.86c0,.19-.16,.35-.35,.35Zm2.2,0c-.19,0-.35-.16-.35-.35v-3.86c0-.19,.16-.35,.35-.35s.35,.16,.35,.35v3.86c0,.19-.16,.35-.35,.35Zm2.55-.35c0,.19-.16,.35-.35,.35s-.35-.16-.35-.35v-3.86c0-.19,.16-.35,.35-.35s.35,.16,.35,.35v3.86Zm12.07-1.7H14.99v-.53h10.57c.15,0,.27,.12,.27,.27s-.12,.27-.27,.27Z"stroke-width="1"/></svg>
        </div>
        <h1>Recetas</h1>
        <p>Deliciosas recetas hechas con miel de abeja</p>


         <div class="hero-search">
          
            <input type="text" id="buscarInput"
                   placeholder="Buscar receta..."
                   value="<?= isset($busqueda) ? $busqueda : '' ?>">
        </div>
    </div>
    
</section>
<!-- Agregar receta -->

 <div class="contenedor-agregar">
     <span class="receta-label">Comparte tus recetas con nosotros</span>
    <a href="<?= site_url('recetas') ?>" class="btn-agregar">
        Agregar receta
    </a>
 </div>
<!-- LISTADO -->
<section class="recetas-section">

<?php
$paletas = ['bg-amber','bg-orange','bg-teal','bg-salmon','bg-yellow'];

if(!empty($articulos)): ?>

<div class="recetas-grid">
<?php foreach($articulos as $i => $art): ?>
<?php
    $color = $paletas[$i % count($paletas)];
    $fecha = !empty($art->registro) ? date('d M Y', strtotime($art->registro)) : '';
    $desc  = !empty($art->descripcion)
        ? strip_tags($art->descripcion)
        : 'Sin descripción';
?>

<div class="recetas-card">

    <!-- IMAGEN o PLACEHOLDER -->
    <?php if(!empty($art->imagen_ruta)): ?>
        <img src="<?= base_url($art->imagen_ruta . $art->imagen_nombre) ?>"
             alt="<?= htmlspecialchars($art->imagen_alt ?? $art->titulo) ?>"
             class="recetas-card-img">
    <?php else: ?>
        <div class="recetas-card-placeholder <?= $color ?>"></div>
    <?php endif; ?>

    <div class="recetas-card-body">

        <div class="recetas-card-meta">
            <svg viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8"  y1="2" x2="8"  y2="6"/>
                <line x1="3"  y1="10" x2="21" y2="10"/>
            </svg>
            <?= $fecha ?>
        </div>

        <h2 class="recetas-card-title">
            <?= htmlspecialchars($art->nombre ?? 'Sin título') ?>
        </h2>

        <p class="recetas-card-desc">
            <?= htmlspecialchars($desc) ?>
        </p>

        <div class="recetas-card-footer">
            <a href="<?= site_url('recetas/recetasdetalle/'.$art->id) ?>" class="btn-leer-mas">
                Más información
                <svg viewBox="0 0 24 24">
                    <line x1="5" y1="12" x2="19" y2="12"/>
                    <polyline points="12 5 19 12 12 19"/>
                </svg>
            </a>
        </div>

    </div>
</div>

<?php endforeach; ?>
</div>

<?php else: ?>
<div class="blog-empty">
    <svg viewBox="0 0 24 24">
        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
    </svg>
    <p>No hay artículos publicados por el momento.</p>
</div>
<?php endif; ?>



</section>