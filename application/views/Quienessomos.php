<style>
.qs-page {
    font-family: sans-serif;
    background: #fafaf8;
    margin: 0;
    color: #1a1a1a;
}

/* HERO */
.qs-hero {
    position: relative;
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    padding: 120px 20px 140px;
    text-align: center;
    overflow: hidden;
}

.qs-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='92' viewBox='0 0 80 92'%3E%3Cpolygon points='40,2 76,22 76,62 40,82 4,62 4,22' fill='none' stroke='%23ffffff' stroke-width='1.5'/%3E%3C/svg%3E");
    background-size: 80px 92px;
    opacity: 0.08;
    pointer-events: none;
}

.qs-hero-badge {
    display: inline-block;
    background: rgba(255,255,255,0.2);
    color: white;
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding: 6px 20px;
    border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.35);
    margin-bottom: 24px;
}

.qs-hero h1 {
    font-size: 58px;
    font-weight: 700;
    color: white;
    margin: 0 0 18px;
    line-height: 1.15;
}

.qs-hero p {
    font-size: 18px;
    color: rgba(255,255,255,0.88);
    max-width: 520px;
    margin: 0 auto;
    line-height: 1.7;
    font-weight: 300;
}

.qs-hero-wave {
    position: absolute;
    bottom: -1px;
    left: 0;
    width: 100%;
    line-height: 0;
}

/* STATS */
.qs-stats {
    background: white;
    padding: 0 20px 80px;
    margin-top: -2px;
}

.qs-stats-grid {
    max-width: 900px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1px;
    background: #f0ede8;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.08);
    transform: translateY(-50px);
}

.qs-stat {
    background: white;
    padding: 40px 20px;
    text-align: center;
    transition: background 0.3s;
}

.qs-stat:hover {
    background: #fffbf2;
}

.qs-stat-num {
    font-size: 44px;
    font-weight: 700;
    color: #F28C28;
    line-height: 1;
    margin-bottom: 8px;
}

.qs-stat-label {
    font-size: 13px;
    color: #999;
    font-weight: 400;
    letter-spacing: 0.5px;
}

/* SECCIONES BASE */
.qs-section {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 20px 80px;
}

.qs-section-alt {
    background: #fffbf2;
    padding: 80px 20px;
    margin-bottom: 0;
}

.qs-section-alt-inner {
    max-width: 1100px;
    margin: 0 auto;
}

.qs-label {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #F28C28;
    margin-bottom: 10px;
}

.qs-title {
    font-size: 36px;
    font-weight: 700;
    color: #1a1a1a;
    margin: 0 0 16px;
    line-height: 1.2;
}

/* HISTORIA */
.qs-historia {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
    padding: 60px 0 20px;
}

.qs-historia-img {
    position: relative;
    align-self: stretch;
    display: flex;
    flex-direction: column;
}

.qs-historia-img img {
    width: 100%;
    height: 100%;
    min-height: 300px;
    max-height: 500px;
    object-fit: cover;
    border-radius: 24px;
    display: block;
}

.qs-historia-img::after {
    content: '';
    position: absolute;
    bottom: -16px;
    right: -16px;
    width: 100%;
    height: 100%;
    border: 2px solid #F4C542;
    border-radius: 24px;
    z-index: -1;
}

.qs-historia-texto {
    font-size: 15.5px;
    color: #555;
    line-height: 1.9;
    font-weight: 300;
    text-align: justify;
    text-justify: inter-word;
}

.qs-historia-texto p {
    margin: 0 0 16px;
}

/* VALORES */
.qs-valores-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
    margin-top: 40px;
}

.qs-valor-card {
    background: white;
    border-radius: 20px;
    padding: 32px 26px;
    box-shadow: 0 6px 24px rgba(0,0,0,0.05);
    border: 1px solid #f0ebe0;
    transition: 0.3s ease;
    position: relative;
    overflow: hidden;
}

.qs-valor-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, #F4C542, #F28C28);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.35s ease;
}

.qs-valor-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 44px rgba(242,140,40,0.12);
}

.qs-valor-card:hover::before {
    transform: scaleX(1);
}

.qs-valor-icon {
    width: 56px;
    height: 56px;
    background: linear-gradient(135deg, #fff3e0, #ffe0b2);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
}

.qs-valor-icon img {
    width: 32px;
    height: 32px;
    object-fit: contain;
}

.qs-valor-card h3 {
    font-size: 16px;
    font-weight: 700;
    color: #1a1a1a;
    margin: 0 0 10px;
}

.qs-valor-card p {
    font-size: 13.5px;
    color: #777;
    line-height: 1.7;
    margin: 0;
    text-align: justify;
    text-justify: inter-word;
}

/* POLÍTICA Y FILOSOFÍA */
.qs-politicas {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    margin-top: 40px;
}

.qs-politica-card {
    background: white;
    border-radius: 22px;
    padding: 40px 36px;
    box-shadow: 0 6px 24px rgba(0,0,0,0.05);
    border: 1px solid #f0ebe0;
    transition: 0.3s;
    position: relative;
    overflow: hidden;
}

.qs-politica-card::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, #F4C542, #F28C28);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.35s ease;
}

.qs-politica-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 40px rgba(242,140,40,0.1);
}

.qs-politica-card:hover::after {
    transform: scaleX(1);
}

.qs-politica-num {
    font-size: 56px;
    font-weight: 800;
    color: #F4C542;
    opacity: 0.2;
    line-height: 1;
    margin-bottom: 16px;
    letter-spacing: -2px;
}

.qs-politica-card h2 {
    font-size: 18px;
    font-weight: 700;
    color: #1a1a1a;
    margin: 0 0 12px;
}

.qs-politica-card p {
    font-size: 14px;
    color: #777;
    line-height: 1.8;
    margin: 0;
    text-align: justify;
    text-justify: inter-word;
}

/* RESPONSIVE */
@media(max-width: 900px){
    .qs-hero h1 { font-size: 38px; }
    .qs-historia { grid-template-columns: 1fr; gap: 40px; }
    .qs-historia-img::after { display: none; }
    .qs-valores-grid { grid-template-columns: 1fr 1fr; }
    .qs-politicas { grid-template-columns: 1fr; }
    .qs-stats-grid { grid-template-columns: 1fr; }
}

@media(max-width: 600px){
    .qs-hero h1 { font-size: 30px; }
    .qs-valores-grid { grid-template-columns: 1fr; }
    .qs-title { font-size: 26px; }
    .qs-politica-card { padding: 28px 22px; }
}
</style>

<div class="qs-page">

<!-- HERO -->
<section class="qs-hero">
    <div class="qs-hero-badge">Miel Artesanal 100% Natural</div>
    <h1>Quiénes somos</h1>
    <p>Más de una generación cultivando el amor por la miel pura, natural y sostenible.</p>
    <div class="qs-hero-wave">
        <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0,40 C360,80 1080,0 1440,40 L1440,60 L0,60 Z" fill="#fafaf8"/>
        </svg>
    </div>
</section>

<!-- STATS -->
<section class="qs-stats">
    <div class="qs-stats-grid">
        <div class="qs-stat">
            <div class="qs-stat-num">100%</div>
            <div class="qs-stat-label">Miel pura y natural</div>
        </div>
        <div class="qs-stat">
            <div class="qs-stat-num">+25</div>
            <div class="qs-stat-label">Años de experiencia</div>
        </div>
        <div class="qs-stat">
            <div class="qs-stat-num">♻</div>
            <div class="qs-stat-label">Producción sostenible</div>
        </div>
    </div>
</section>

<!-- HISTORIA -->
<section class="qs-section">
    <div class="qs-historia">
        <div class="qs-historia-img">
            <?php if(isset($img['Historia'])){ ?>
                <img src="<?= base_url($img['Historia']->ruta.'/'.$img['Historia']->nombre_archivo); ?>">
            <?php } ?>
        </div>
        <div>
            <span class="qs-label">Nuestra historia</span>
            <h2 class="qs-title"><?= $historia->nombre ?></h2>
            <div class="qs-historia-texto">
                <?= nl2br($historia->descripcion) ?>
            </div>
        </div>
    </div>
</section>

<!-- VALORES -->
<section class="qs-section-alt">
    <div class="qs-section-alt-inner">
        <span class="qs-label">Lo que nos mueve</span>
        <h2 class="qs-title">Nuestros valores</h2>
        <div class="qs-valores-grid">
            <?php foreach($valores as $v){ ?>
                <div class="qs-valor-card">
                    <div class="qs-valor-icon">
                        <?php if(isset($img[$v->nombre])){ ?>
                            <img src="<?= base_url($img[$v->nombre]->ruta.'/'.$img[$v->nombre]->nombre_archivo); ?>">
                        <?php } ?>
                    </div>
                    <h3><?= $v->nombre ?></h3>
                    <p><?= $v->descripcion ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- POLÍTICA Y FILOSOFÍA -->
<section class="qs-section" style="padding-top: 80px;">
    <span class="qs-label">Nuestra esencia</span>
    <h2 class="qs-title">Política y Filosofía</h2>
    <div class="qs-politicas">
        <?php if($politica){ ?>
        <div class="qs-politica-card">
            <div class="qs-politica-num">P</div>
            <h2><?= $politica->nombre ?></h2>
            <p><?= $politica->descripcion ?></p>
        </div>
        <?php } ?>
        <?php if($filosofia){ ?>
        <div class="qs-politica-card">
            <div class="qs-politica-num">F</div>
            <h2><?= $filosofia->nombre ?></h2>
            <p><?= $filosofia->descripcion ?></p>
        </div>
        <?php } ?>
    </div>
</section>

</div>