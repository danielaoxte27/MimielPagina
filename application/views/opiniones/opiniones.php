<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>

.op-hero {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    color: #fff;
    text-align: center;
    padding: 64px 20px 52px;
    position: relative;
    overflow: hidden;
}

.op-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='92' viewBox='0 0 80 92'%3E%3Cpolygon points='40,2 76,22 76,62 40,82 4,62 4,22' fill='none' stroke='%23ffffff' stroke-width='2.5'/%3E%3C/svg%3E");
    background-size: 80px 92px;
    opacity: 0.13;
    pointer-events: none;
}

.op-hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 100%; height: 60px;
    background: linear-gradient(to bottom, transparent, #F28C28);
    pointer-events: none;
}

.op-hero-inner {
    position: relative;
    z-index: 1;
}

.op-hero-icon svg {
    width: 54px;
    height: 54px;
    stroke: #fff;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    margin-bottom: 14px;
}

.op-hero h1 {
    font-family: sans-serif;
    font-size: 2.5rem;
    font-weight: 800;
    margin: 0 0 10px;
    color: #fff;
}

.op-hero p {
    font-family: sans-serif;
    font-size: 1.05rem;
    color: rgba(255,255,255,0.9);
    margin: 0;
}

.op-section {
    max-width: 1100px;
    margin: 52px auto 80px;
    padding: 0 20px;
}

.op-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

@media (max-width: 900px) { 
    .op-grid { 
        grid-template-columns: repeat(2,1fr); 
    } 
}
@media (max-width: 580px) { 
    .op-grid {
         grid-template-columns: 1fr; 
        } 
}

.op-card {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 16px;
    padding: 24px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    transition: transform .22s ease, box-shadow .22s ease;
    position: relative;
}

.op-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.09);
}

.op-card::before {
    content: '"';
    position: absolute;
    top: 16px;
    right: 20px;
    font-size: 5rem;
    color: #F5C518;
    opacity: 0.18;
    font-family: Georgia, serif;
    line-height: 1;
}

.op-card-header {
    display: flex;
    align-items: center;
    gap: 12px;
}

.op-avatar {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: linear-gradient(135deg, #F5C518, #F28C28);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-family: sans-serif;
    font-weight: 800;
    font-size: 1.1rem;
    color: #fff;
}

.op-card-info {
    flex: 1;
}

.op-card-nombre {
    font-family: sans-serif;
    font-weight: 700;
    font-size: .95rem;
    color: #1a1a1a;
    margin: 0;
}

.op-fuente {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-family: sans-serif;
    font-size: .75rem;
    font-weight: 600;
    margin-top: 2px;
}

.op-fuente svg {
    width: 13px;
    height: 13px;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    flex-shrink: 0;
}

.op-fuente.google { 
    color: #4285F4; 
}
.op-fuente.google svg { 
    stroke: #4285F4; 
}
.op-fuente.facebook { 
    color: #1877F2; 
}
.op-fuente.facebook svg { 
    stroke: #1877F2; 
}

.op-estrellas {
    display: flex;
    gap: 3px;
}

.op-estrellas svg {
    width: 16px;
    height: 16px;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.op-estrella-llena {
    fill: #F5C518;
    stroke: #F5C518;
}

.op-estrella-vacia {
    fill: none;
    stroke: #ddd;
}

.op-comentario {
    font-family: sans-serif;
    font-size: .9rem;
    color: #555;
    line-height: 1.65;
    margin: 0;
    flex: 1;
    text-align: justify;
}

.op-fecha {
    display: flex;
    align-items: center;
    gap: 5px;
    font-family: sans-serif;
    font-size: .75rem;
    color: #bbb;
    margin-top: 4px;
}

.op-fecha svg {
    width: 13px;
    height: 13px;
    stroke: #ccc;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.op-empty {
    text-align: center;
    padding: 80px 20px;
    color: #bbb;
    font-family: sans-serif;
}

.op-empty svg {
    width: 56px;
    height: 56px;
    stroke: #ddd;
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
    display: block;
    margin: 0 auto 14px;
}
</style>

<!-- HERO -->
<section class="op-hero">
    <div class="op-hero-inner">
        <div class="op-hero-icon">
            <svg viewBox="0 0 24 24">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
            </svg>
        </div>
        <h1>Opiniones</h1>
        <p>Lo que nuestros clientes dicen de Mimiel</p>
    </div>
</section>

<!-- GRID -->
<section class="op-section">

<?php if(!empty($opiniones)): ?>
<div class="op-grid">
<?php foreach($opiniones as $op):
    $inicial = mb_strtoupper(mb_substr($op->nombre, 0, 1));
    $fecha   = !empty($op->registro) ? date('d M Y', strtotime($op->registro)) : '';
    $fuente  = strtolower($op->fuente ?? 'google');
?>

<div class="op-card">

    <!-- cabecera -->
    <div class="op-card-header">
        <div class="op-avatar"><?= $inicial ?></div>
        <div class="op-card-info">
            <p class="op-card-nombre"><?= htmlspecialchars($op->nombre) ?></p>

            <?php if($fuente === 'google'): ?>
            <span class="op-fuente google">
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M12 8v4l3 3"/>
                </svg>
                Google
            </span>
            <?php else: ?>
            <span class="op-fuente facebook">
                <svg viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                </svg>
                Facebook
            </span>
            <?php endif; ?>
        </div>
    </div>

    <!-- estrellas -->
    <div class="op-estrellas">
        <?php for($s = 1; $s <= 5; $s++): ?>
        <svg viewBox="0 0 24 24" class="<?= $s <= $op->estrellas ? 'op-estrella-llena' : 'op-estrella-vacia' ?>">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
        </svg>
        <?php endfor; ?>
    </div>

    <!-- comentario -->
    <p class="op-comentario"><?= htmlspecialchars($op->comentario) ?></p>

    <!-- fecha -->
    <?php if($fecha): ?>
    <div class="op-fecha">
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

<?php endforeach; ?>
</div>

<?php else: ?>
<div class="op-empty">
    <svg viewBox="0 0 24 24">
        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
    </svg>
    <p>No hay opiniones disponibles por el momento.</p>
</div>
<?php endif; ?>

</section>