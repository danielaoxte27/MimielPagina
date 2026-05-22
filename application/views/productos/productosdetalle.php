<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>

.pd-hero {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    color: #fff;
    padding: 52px 20px 42px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.pd-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='92' viewBox='0 0 80 92'%3E%3Cpolygon points='40,2 76,22 76,62 40,82 4,62 4,22' fill='none' stroke='%23ffffff' stroke-width='2.5'/%3E%3C/svg%3E");
    background-size: 80px 92px;
    opacity: 0.13;
    pointer-events: none;
}

.pd-hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 100%; height: 60px;
    background: linear-gradient(to bottom, transparent, #F28C28);
    pointer-events: none;
}

.pd-hero-inner {
    position: relative;
    z-index: 1;
    max-width: 820px;
    margin: 0 auto;
}

.pd-breadcrumb {
    font-family: sans-serif;
    font-size: .83rem;
    margin-bottom: 14px;
    opacity: .85;
}

.pd-breadcrumb a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.pd-breadcrumb a:hover { text-decoration: underline; }

.pd-breadcrumb span {
    margin: 0 6px;
    opacity: .55;
}

.pd-hero h1 {
    font-family: sans-serif;
    font-size: 2.2rem;
    font-weight: 800;
    margin: 0 auto 14px;
    line-height: 1.25;
    max-width: 680px;
}

.pd-hero-meta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: sans-serif;
    font-size: .85rem;
    opacity: .9;
}

.pd-hero-meta svg {
    width: 14px;
    height: 14px;
    stroke: #fff;
    fill: none;
    stroke-width: 2.2;
    stroke-linecap: round;
    stroke-linejoin: round;
    flex-shrink: 0;
}

.pd-wrapper {
    max-width: 1100px;
    margin: 0 auto 80px;
    padding: 0 20px;
}

.pd-grid {
    display: grid;
    grid-template-columns: 1fr 0.82fr;
    gap: 24px;
    align-items: start;
    margin-top: 52px;
}

.pd-img-wrap {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 12px 40px rgba(0,0,0,0.10);
    position: sticky;
    top: 100px;
    background: #fff;
}

.pd-img-wrap img {
    width: 100%;
    display: block;
    object-fit: cover;
    min-height: 400px;
}

.pd-placeholder {
    width: 100%;
    min-height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #F5C518 0%, #F28C28 100%);
}

.pd-placeholder svg {
    width: 80px;
    height: 80px;
    stroke: rgba(255,255,255,0.5);
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.pd-info {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.pd-card {
    background: #fff;
    border-radius: 18px;
    padding: 28px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.06);
    border: 1px solid #f0f0f0;
}

.pd-card-title {
    font-family: sans-serif;
    font-size: .7rem;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: #F28C28;
    margin: 0 0 12px;
}

.pd-desc {
    font-family: sans-serif;
    font-size: .96rem;
    color: #555;
    line-height: 1.85;
    text-align: justify;
    margin: 0;
}

.pd-precio-wrap {
    margin-top: 20px;
    padding-top: 18px;
    border-top: 1px solid #f0f0f0;
}

.pd-precio {
    font-family: sans-serif;
    font-size: 2rem;
    font-weight: 900;
    color: #F28C28;
    letter-spacing: -.03em;
}

.pd-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 6px;
}

.pd-table th,
.pd-table td {
    padding: 11px 14px;
    font-family: sans-serif;
    font-size: .9rem;
    vertical-align: middle;
}

.pd-table th {
    width: 155px;
    color: #999;
    font-weight: 700;
    background: #f8f8f8;
    border-radius: 8px 0 0 8px;
    text-align: left;
    white-space: nowrap;
}

.pd-table td {
    color: #333;
    font-weight: 500;
    background: #f8f8f8;
    border-radius: 0 8px 8px 0;
    text-align: justify;
    line-height: 1.55;
}

.pd-btn-volver {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #e69d00;
    color: #fff;
    font-family: sans-serif;
    font-weight: 700;
    font-size: .92rem;
    padding: 12px 22px;
    border-radius: 10px;
    text-decoration: none;
    transition: background .18s, transform .18s;
}

.pd-btn-volver svg {
    width: 15px;
    height: 15px;
    stroke: #fff;
    fill: none;
    stroke-width: 2.4;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: transform .18s;
}

.pd-btn-volver:hover { background: #d28a00; transform: translateY(-1px); }
.pd-btn-volver:hover svg { transform: translateX(-3px); }

@media (max-width: 860px) {
    .pd-grid {
        grid-template-columns: 1fr;
        margin-top: 36px;
    }
    .pd-img-wrap {
        position: static;
        order: -1;
    }
    .pd-hero h1 { font-size: 1.7rem; }
}

</style>

<?php $fecha = !empty($producto->registro) ? date('d M Y', strtotime($producto->registro)) : ''; ?>

<!-- HERO -->
<section class="pd-hero">
    <div class="pd-hero-inner">

        <p class="pd-breadcrumb">
            <a href="<?= site_url('productos') ?>">Productos</a>
            <span>›</span>
            <?= htmlspecialchars(mb_substr($producto->nombre ?? '', 0, 50)) ?><?= mb_strlen($producto->nombre ?? '') > 50 ? '…' : '' ?>
        </p>

        <h1><?= htmlspecialchars($producto->nombre ?? 'Sin título') ?></h1>

        <?php if($fecha): ?>
        <div class="pd-hero-meta">
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

<!-- WRAPPER -->
<div class="pd-wrapper">
    <div class="pd-grid">

        <!-- COLUMNA IZQUIERDA: info -->
        <div class="pd-info">

            <!-- Descripción + precio -->
            <div class="pd-card">
                <p class="pd-card-title">Descripción</p>
                <p class="pd-desc">
                    <?= nl2br(htmlspecialchars($producto->descripcion ?? 'No hay descripción disponible.')) ?>
                </p>
                <div class="pd-precio-wrap">
                    <span class="pd-precio">$<?= number_format($producto->precio ?? 0, 2) ?></span>
                </div>
            </div>

            <!-- Especificaciones -->
            <?php
            $filas = [
                'contenido'        => 'Contenido',
                'envase'           => 'Envase',
                'empaque'          => 'Empaque',
                'contenido_caja'   => 'Cont. por caja',
                'peso_caja'        => 'Peso por caja',
                'contenido_tarima' => 'Cont. por tarima',
                'cajas_base'       => 'Cajas en base',
                'Material'         => 'Material',
                'peso_tarima'      => 'Peso de tarima',
                'piezas_tarima'    => 'Piezas por tarima',
            ];
            $hay_filas = false;
            foreach($filas as $campo => $label){
                if(trim((string)($producto->$campo ?? '')) !== ''){ $hay_filas = true; break; }
            }
            ?>

            <?php if($hay_filas): ?>
            <div class="pd-card">
                <p class="pd-card-title">Especificaciones</p>
                <table class="pd-table">
                    <?php foreach($filas as $campo => $label): ?>
                        <?php if(trim((string)($producto->$campo ?? '')) !== ''): ?>
                            <tr>
                                <th><?= $label ?></th>
                                <td><?= htmlspecialchars($producto->$campo) ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </table>
            </div>
            <?php endif; ?>

            <a href="<?= site_url('productos') ?>" class="pd-btn-volver">
                <svg viewBox="0 0 24 24">
                    <line x1="19" y1="12" x2="5" y2="12"/>
                    <polyline points="12 19 5 12 12 5"/>
                </svg>
                Volver a Productos
            </a>

        </div>

        <div class="pd-img-wrap">
            <?php if(!empty($producto->imagen_ruta) && !empty($producto->imagen_nombre)): ?>
                <img src="<?= base_url($producto->imagen_ruta . $producto->imagen_nombre) ?>"
                     alt="<?= htmlspecialchars($producto->imagen_alt ?? $producto->nombre) ?>">
            <?php else: ?>
                <div class="pd-placeholder">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 4l8 4-8 4-8-4 8-4z"/>
                        <path d="M4 12l8 4 8-4"/>
                        <path d="M4 16l8 4 8-4"/>
                    </svg>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>