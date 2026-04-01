<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>

.detalle-hero {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    color: #fff;
    padding: 54px 20px 44px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.detalle-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='92' viewBox='0 0 80 92'%3E%3Cpolygon points='40,2 76,22 76,62 40,82 4,62 4,22' fill='none' stroke='%23ffffff' stroke-width='2.5'/%3E%3C/svg%3E");
    background-size: 80px 92px;
    opacity: 0.13;
    pointer-events: none;
}

.detalle-hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 100%; height: 60px;
    background: linear-gradient(to bottom, transparent, #F28C28);
    pointer-events: none;
}

.detalle-hero-inner {
    position: relative;
    z-index: 1;
}

.detalle-breadcrumb {
    font-family: sans-serif;
    font-size: .82rem;
    margin-bottom: 16px;
    opacity: .88;
}

.detalle-breadcrumb a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.detalle-breadcrumb a:hover { 
    text-decoration: underline; 
}

.detalle-breadcrumb span { 
    margin: 0 6px; 
    opacity: .6; 
}

.detalle-hero h1 {
    font-family: sans-serif;
    font-size: 2rem;
    font-weight: 800;
    margin: 0 auto 14px;
    max-width: 750px;
    line-height: 1.3;
    color: #fff;
}

.detalle-meta {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    font-family: sans-serif;
    font-size: .85rem;
    opacity: .9;
}

.detalle-meta svg {
    width: 15px;
    height: 15px;
    stroke: #fff;
    fill: none;
    stroke-width: 2.2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.detalle-wrapper {
    max-width: 820px;
    margin: 48px auto 80px;
    padding: 0 20px;
}

.detalle-imagen-wrap {
    border-radius: 14px;
    overflow: hidden;
    margin-bottom: 36px;
    box-shadow: 0 8px 28px rgba(0,0,0,0.10);
}

.detalle-imagen-wrap img {
    width: 100%;
    display: block;
    max-height: 420px;
    object-fit: cover;
}

.detalle-placeholder {
    width: 100%;
    height: 260px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #F5C518 0%, #F28C28 100%);
}

.detalle-placeholder svg {
    width: 70px;
    height: 70px;
    stroke: rgba(255,255,255,0.55);
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.detalle-resumen {
    font-family: sans-serif;
    font-size: 1.05rem;
    font-style: italic;
    color: #555;
    line-height: 1.75;
    border-left: 4px solid #F5C518;
    padding-left: 18px;
    margin-bottom: 30px;
    text-align: justify;
}

.detalle-divider {
    border: none;
    border-top: 1px solid #e5e7eb;
    margin: 32px 0;
}

.detalle-content {
    font-family: sans-serif;
    font-size: .98rem;
    color: #333;
    line-height: 1.85;
    text-align: justify;
}

.detalle-content p   { 
    margin-bottom: 20px; 
}
.detalle-content h2,
.detalle-content h3  { 
    font-weight: 800; 
    margin: 28px 0 12px; 
    color: #1a1a1a; 
}
.detalle-content ul,
.detalle-content ol  { 
    padding-left: 22px; 
    margin-bottom: 20px; 
}
.detalle-content li  { 
    margin-bottom: 8px; 
}

.btn-volver {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    background: #e69d00;
    color: #fff;
    font-family: sans-serif;
    font-weight: 700;
    font-size: .95rem;
    padding: 12px 22px;
    border-radius: 10px;
    text-decoration: none;
    margin-top: 10px;
    transition: background .18s ease, transform .18s ease;
}

.btn-volver svg {
    width: 17px;
    height: 17px;
    stroke: #fff;
    fill: none;
    stroke-width: 2.4;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: transform .18s ease;
}

.btn-volver:hover { 
    background: #e6b800; 
}
.btn-volver:hover svg { 
    transform: translateX(-3px); 
}

@media (max-width: 600px) {
    .detalle-hero h1 { 
        font-size: 1.5rem; 
    }
    .detalle-content  { 
        font-size: .93rem; 
    }
}
</style>

<?php $fecha = !empty($articulo->registro) ? date('d M Y', strtotime($articulo->registro)) : ''; ?>

<!-- HERO -->
<section class="detalle-hero">
    <div class="detalle-hero-inner">

        <p class="detalle-breadcrumb">
            <a href="<?= site_url('blog') ?>">Blog</a>
            <span>›</span>
            <?= htmlspecialchars(mb_substr($articulo->titulo ?? '', 0, 55)) ?><?= mb_strlen($articulo->titulo ?? '') > 55 ? '...' : '' ?>
        </p>

        <h1><?= htmlspecialchars($articulo->titulo ?? 'Sin título') ?></h1>

        <?php if($fecha): ?>
        <div class="detalle-meta">
            <svg viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8"  y1="2" x2="8"  y2="6"/>
                <line x1="3"  y1="10" x2="21" y2="10"/>
            </svg>
            <?= $fecha ?>
        </div>
        <?php endif; ?>

    </div>
</section>

<!-- CONTENIDO -->
<div class="detalle-wrapper">

    <!-- imagen destacada -->
    <div class="detalle-imagen-wrap">
        <?php if(!empty($articulo->imagen_ruta)): ?>
            <img src="<?= base_url($articulo->imagen_ruta . $articulo->imagen_nombre) ?>"
                 alt="<?= htmlspecialchars($articulo->imagen_alt ?? $articulo->titulo) ?>">
        <?php else: ?>
            <div class="detalle-placeholder">
                <svg viewBox="0 0 24 24">
                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                </svg>
            </div>
        <?php endif; ?>
    </div>

    <!-- descripción / resumen -->
    <p class="detalle-resumen">
        <?= htmlspecialchars($articulo->descripcion ?? '') ?>
    </p>

    <hr class="detalle-divider">

    <!-- texto completo -->
    <div class="detalle-content">
        <?php if(!empty($articulo->text)): ?>
            <?= $articulo->text ?>
        <?php elseif(!empty($articulo->mas_informacion)): ?>
            <?= $articulo->mas_informacion ?>
        <?php else: ?>
            <p>Contenido no disponible.</p>
        <?php endif; ?>
    </div>

    <hr class="detalle-divider">

    <!-- volver -->
    <a href="<?= site_url('blog') ?>" class="btn-volver">
        <svg viewBox="0 0 24 24">
            <line x1="19" y1="12" x2="5" y2="12"/>
            <polyline points="12 19 5 12 12 5"/>
        </svg>
        Volver al Blog
    </a>

</div>