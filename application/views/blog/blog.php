<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>

.blog-hero {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    color: #fff;
    text-align: center;
    padding: 64px 20px 52px;
    position: relative;
    overflow: hidden;
}

.blog-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='92' viewBox='0 0 80 92'%3E%3Cpolygon points='40,2 76,22 76,62 40,82 4,62 4,22' fill='none' stroke='%23ffffff' stroke-width='2.5'/%3E%3C/svg%3E");
    background-size: 80px 92px;
    opacity: 0.13;
    pointer-events: none;
}

.blog-hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 100%; height: 60px;
    background: linear-gradient(to bottom, transparent, #F28C28);
    pointer-events: none;
}

.blog-hero-inner {
    position: relative;
    z-index: 1;
}

.blog-hero-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 14px;
}

.blog-hero-icon svg {
    width: 54px;
    height: 54px;
    stroke: #fff;
    fill: none;
    stroke-width: 2.2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.blog-hero h1 {
    font-family: sans-serif;
    font-size: 2.5rem;
    font-weight: 800;
    margin: 0 0 10px;
    color: #fff;
}

.blog-hero p {
    font-family: sans-serif;
    font-size: 1.05rem;
    color: rgba(255,255,255,0.9);
    margin: 0;
}

.blog-section {
    max-width: 1100px;
    margin: 52px auto 80px;
    padding: 0 20px;
}

.blog-grid {
    display: grid;
    grid-template-columns:  repeat(3, 1fr);
    gap: 28px;
}

@media (max-width: 900px) { 
    .blog-grid { 
        grid-template-columns: repeat(2,1fr); 
    } 
}
@media (max-width: 580px) { 
    .blog-grid { 
        grid-template-columns: 1fr; 
    } 
}

.blog-card {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid #e5e7eb;
    display: flex;
    flex-direction: column;
    transition: transform .22s ease, box-shadow .22s ease;
}

.blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.10);
}

.blog-card-img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    display: block;
    flex-shrink: 0;
}

.blog-card-placeholder {
    width: 100%;
    height: 220px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.blog-card-placeholder svg {
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

.blog-card-body {
    padding: 14px 16px 16px;
    display: flex;
    flex-direction: column;
    flex: 1;
    gap: 6px;
}

.blog-card-meta {
    display: flex;
    align-items: center;
    justify-content: justify;
    gap: 5px;
    font-family: sans-serif;
    font-size: .75rem;
    color: #aaa;
}

.blog-card-meta svg {
    width: 13px;
    height: 13px;
    stroke: #ccc;
    fill: none;
    stroke-width: 2.2;
    stroke-linecap: round;
    stroke-linejoin: round;
    flex-shrink: 0;
}

.blog-card-title {
    font-family: sans-serif;
    font-size: 1rem;
    font-weight: 800;
    color: #1a1a1a;
    line-height: 1.35;
    margin: 0;
    text-align: justify;
}

.blog-card-desc {
    font-family: sans-serif;
    font-size: .82rem;
    /*color: #666;*/
    color: #777;
    line-height: 1.55;
    margin: 0;
    flex: 1;
    text-align: justify;
}

.blog-card-footer {
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

.blog-empty {
    text-align: center;
    padding: 80px 20px;
    color: #bbb;
    font-family: sans-serif;
}

.blog-empty svg {
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
</style>

<!-- HERO -->
<section class="blog-hero">
    <div class="blog-hero-inner">
        <div class="blog-hero-icon">
            <!-- libro abierto -->
            <svg viewBox="0 0 24 24">
                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
            </svg>
        </div>
        <h1>Blog Mimiel</h1>
        <p>Artículos sobre miel y apicultura</p>
    </div>
    
</section>
<!-- LISTADO -->
<section class="blog-section">

<?php
$paletas = ['bg-amber','bg-orange','bg-teal','bg-salmon','bg-yellow'];

if(!empty($articulos)): ?>

<div class="blog-grid">
<?php foreach($articulos as $i => $art): ?>
<?php
    $color = $paletas[$i % count($paletas)];
    $fecha = !empty($art->registro) ? date('d M Y', strtotime($art->registro)) : '';
    $desc  = !empty($art->descripcion)
        ? strip_tags($art->descripcion)
        : 'Sin descripción';
?>

<div class="blog-card">

    <!-- IMAGEN o PLACEHOLDER -->
    <?php if(!empty($art->imagen_ruta)): ?>
        <img src="<?= base_url($art->imagen_ruta . $art->imagen_nombre) ?>"
             alt="<?= htmlspecialchars($art->imagen_alt ?? $art->titulo) ?>"
             class="blog-card-img">
    <?php else: ?>
        <div class="blog-card-placeholder <?= $color ?>"></div>
    <?php endif; ?>

    <div class="blog-card-body">

        <div class="blog-card-meta">
            <svg viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8"  y1="2" x2="8"  y2="6"/>
                <line x1="3"  y1="10" x2="21" y2="10"/>
            </svg>
            <?= $fecha ?>
        </div>

        <h2 class="blog-card-title">
            <?= htmlspecialchars($art->titulo ?? 'Sin título') ?>
        </h2>

        <p class="blog-card-desc">
            <?= htmlspecialchars($desc) ?>
        </p>

        <div class="blog-card-footer">
            <a href="<?= site_url('blog/detalle/'.$art->id) ?>" class="btn-leer-mas">
                Leer más
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