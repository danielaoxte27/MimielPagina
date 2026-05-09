<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
.productosdetalle-hero {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    color: #fff;
    padding: 56px 20px 44px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.productosdetalle-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='92' viewBox='0 0 80 92'%3E%3Cpolygon points='40,2 76,22 76,62 40,82 4,62 4,22' fill='none' stroke='%23ffffff' stroke-width='2.5'/%3E%3C/svg%3E");
    background-size: 80px 92px;
    opacity: 0.13;
    pointer-events: none;
}

.productosdetalle-hero-inner {
    position: relative;
    z-index: 1;
    max-width: 820px;
    margin: 0 auto;
}

.productosdetalle-breadcrumb {
    font-family: sans-serif;
    font-size: .85rem;
    margin-bottom: 16px;
    opacity: .88;
}

.productosdetalle-breadcrumb a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.productosdetalle-breadcrumb a:hover {
    text-decoration: underline;
}

.productosdetalle-hero h1 {
    font-family: sans-serif;
    font-size: 2.2rem;
    font-weight: 800;
    margin: 0 auto 12px;
    line-height: 1.2;
    max-width: 700px;
}

.productosdetalle-meta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: sans-serif;
    font-size: .92rem;
    opacity: .9;
}

.productosdetalle-meta span {
    font-weight: 700;
}

.productosdetalle-wrapper {
    max-width: 1100px;
    margin: 48px auto 80px;
    padding: 0 20px;
}

.productosdetalle-grid {
    display: grid;
    grid-template-columns: 1.1fr .9fr;
    gap: 26px;
}

.productosdetalle-imagen-wrap {
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 12px 34px rgba(0,0,0,0.10);
    background: #fff;
}

.productosdetalle-imagen-wrap img {
    width: 100%;
    display: block;
    object-fit: cover;
    min-height: 360px;
}

.productosdetalle-placeholder {
    width: 100%;
    min-height: 360px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #F5C518 0%, #F28C28 100%);
}

.productosdetalle-placeholder svg {
    width: 90px;
    height: 90px;
    stroke: rgba(255,255,255,0.65);
    fill: none;
    stroke-width: 2.5;
}

.productosdetalle-info {
    background: #fff;
    border-radius: 18px;
    padding: 30px;
    box-shadow: 0 12px 34px rgba(0,0,0,0.06);
}

.productosdetalle-info h2 {
    font-size: 1.6rem;
    margin: 0 0 12px;
}

.productosdetalle-info p {
    color: #555;
    line-height: 1.75;
    margin-bottom: 24px;
}

.productosdetalle-table {
    width: 100%;
    border-collapse: collapse;
}

.productosdetalle-table th,
.productosdetalle-table td {
    text-align: left;
    padding: 12px 0;
    border-bottom: 1px solid #f0f0f0;
    vertical-align: top;
}

.productosdetalle-table th {
    width: 160px;
    color: #777;
    font-weight: 700;
    font-size: 0.95rem;
}

.productosdetalle-table td {
    color: #333;
    font-size: 0.95rem;
}

.productosdetalle-summary {
    max-width: 1100px;
    margin: 40px auto 30px;
    padding: 0 20px;
}

.productosdetalle-summary-card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    background: linear-gradient(135deg, #F28C28 0%, #F4C542 100%);
    color: #fff;
    border-radius: 24px;
    padding: 28px 32px;
    box-shadow: 0 24px 80px rgba(242,140,40,0.16);
    border: 1px solid rgba(255,255,255,0.22);
    flex-wrap: wrap;
}

.productosdetalle-category {
    display: inline-flex;
    align-items: center;
    padding: 10px 18px;
    border-radius: 999px;
    background: rgba(255,255,255,0.24);
    color: #fff;
    font-size: .86rem;
    font-weight: 700;
    letter-spacing: .8px;
    text-transform: uppercase;
}

.productosdetalle-price {
    font-size: 2.8rem;
    font-weight: 900;
    color: #fff;
    letter-spacing: -.04em;
    margin-top: 8px;
}

.productosdetalle-subtitle {
    color: rgba(255,255,255,0.95);
    max-width: 560px;
    margin: 0;
    font-size: 1.02rem;
    line-height: 1.8;
}

.productosdetalle-info {
    background: #fff;
    border-radius: 22px;
    padding: 36px;
    box-shadow: 0 24px 80px rgba(0,0,0,0.08);
}

.productosdetalle-info h2 {
    font-size: 1.7rem;
    margin: 0 0 20px;
}

.productosdetalle-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 10px;
}

.productosdetalle-table tr {
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.04);
}

.productosdetalle-table th,
.productosdetalle-table td {
    padding: 16px 18px;
}

.productosdetalle-table th {
    width: 180px;
    color: #333;
    font-weight: 800;
    font-size: .95rem;
    background: #fffdf7;
    border-radius: 14px 0 0 14px;
}

.productosdetalle-table td {
    color: #444;
    font-size: .96rem;
    font-weight: 500;
    line-height: 1.7;
}

.productosdetalle-table tr td:first-child {
    border-radius: 14px 0 0 14px;
}

.productosdetalle-table tr td:last-child {
    border-radius: 0 14px 14px 0;
}

.btn-volver-producto {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    background: #e69d00;
    color: #fff;
    font-weight: 700;
    font-size: .95rem;
    padding: 14px 22px;
    border-radius: 10px;
    text-decoration: none;
    transition: background .18s ease, transform .18s ease;
}

.btn-volver-producto:hover {
    background: #d28a00;
}

.btn-volver-producto svg {
    width: 16px;
    height: 16px;
    stroke: #fff;
    fill: none;
    stroke-width: 2.2;
}

@media (max-width: 860px) {
    .productosdetalle-grid {
        grid-template-columns: 1fr;
    }
    .productosdetalle-hero h1 {
        font-size: 1.75rem;
    }
}
</style>

<?php $fecha = !empty($producto->registro) ? date('d M Y', strtotime($producto->registro)) : ''; ?>

<section class="productosdetalle-hero">
    <div class="productosdetalle-hero-inner">
        <p class="productosdetalle-breadcrumb">
            <a href="<?= site_url('productos') ?>">Productos</a>
            <span>›</span>
            <?= htmlspecialchars($producto->nombre ?? 'Sin título') ?>
        </p>

        <h1><?= htmlspecialchars($producto->nombre ?? 'Sin título') ?></h1>

        <div class="productosdetalle-meta">
            <span><?= htmlspecialchars($producto->categoria_nombre ?? 'General') ?></span>
            <?php if($fecha): ?>
                <span>•</span>
                <span><?= $fecha ?></span>
            <?php endif; ?>
        </div>
    </div>
</section>

<div class="productosdetalle-summary">
    <div class="productosdetalle-summary-card">
        <div>
            <span class="productosdetalle-category"><?= htmlspecialchars($producto->categoria_nombre ?? 'General') ?></span>
            <h2 class="productosdetalle-price">
                $<?= number_format($producto->precio ?? 0, 2) ?>
            </h2>
        </div>
        <p class="productosdetalle-subtitle">Producto apícola premium con datos de empaque, contenido y más detalles técnicos para entender mejor tu compra.</p>
    </div>
</div>

<div class="productosdetalle-wrapper">
    <div class="productosdetalle-grid">
        <div class="productosdetalle-info">
            <h2>Descripción</h2>
            <p><?= nl2br(htmlspecialchars($producto->descripcion ?? 'No hay descripción disponible.')) ?></p>

            <table class="productosdetalle-table">
                <?php if(trim((string)($producto->contenido ?? '')) !== ''): ?>
                    <tr><th>Contenido</th><td><?= htmlspecialchars($producto->contenido) ?></td></tr>
                <?php endif; ?>
                <?php if(trim((string)($producto->envase ?? '')) !== ''): ?>
                    <tr><th>Envase</th><td><?= htmlspecialchars($producto->envase) ?></td></tr>
                <?php endif; ?>
                <?php if(trim((string)($producto->empaque ?? '')) !== ''): ?>
                    <tr><th>Empaque</th><td><?= htmlspecialchars($producto->empaque) ?></td></tr>
                <?php endif; ?>
                <?php if(trim((string)($producto->contenido_caja ?? '')) !== ''): ?>
                    <tr><th>Contenido por caja</th><td><?= htmlspecialchars($producto->contenido_caja) ?></td></tr>
                <?php endif; ?>
                <?php if(trim((string)($producto->peso_caja ?? '')) !== ''): ?>
                    <tr><th>Peso por caja</th><td><?= htmlspecialchars($producto->peso_caja) ?></td></tr>
                <?php endif; ?>
                <?php if(trim((string)($producto->contenido_tarima ?? '')) !== ''): ?>
                    <tr><th>Contenido por tarima</th><td><?= htmlspecialchars($producto->contenido_tarima) ?></td></tr>
                <?php endif; ?>
                <?php if(trim((string)($producto->cajas_base ?? '')) !== ''): ?>
                    <tr><th>Cajas en la base</th><td><?= htmlspecialchars($producto->cajas_base) ?></td></tr>
                <?php endif; ?>
                <?php if(trim((string)($producto->camas ?? '')) !== ''): ?>
                    <tr><th>Camas</th><td><?= htmlspecialchars($producto->camas) ?></td></tr>
                <?php endif; ?>
                <?php if(trim((string)($producto->peso_tarima ?? '')) !== ''): ?>
                    <tr><th>Peso de tarima</th><td><?= htmlspecialchars($producto->peso_tarima) ?></td></tr>
                <?php endif; ?>
                <?php if(trim((string)($producto->piezas_tarima ?? '')) !== ''): ?>
                    <tr><th>Piezas por tarima</th><td><?= htmlspecialchars($producto->piezas_tarima) ?></td></tr>
                <?php endif; ?>
            </table>

            <div style="margin-top:30px;">
                <a href="<?= site_url('productos') ?>" class="btn-volver-producto">
                    <svg viewBox="0 0 24 24">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                    Volver a Productos
                </a>
            </div>
        </div>

        <div class="productosdetalle-imagen-wrap">
            <?php if(!empty($producto->imagen_ruta) && !empty($producto->imagen_nombre)): ?>
                <img src="<?= base_url($producto->imagen_ruta . $producto->imagen_nombre) ?>"
                     alt="<?= htmlspecialchars($producto->imagen_alt ?? $producto->nombre) ?>">
            <?php else: ?>
                <div class="productosdetalle-placeholder">
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
