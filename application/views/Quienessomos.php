<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

.qs-page {
    font-family: 'Poppins', sans-serif;
    background: #fafaf8;
    margin: 0;
    color: #1a1a1a;
}


.qs-hero {
    position: relative;
    background: linear-gradient(135deg, #f9a825 0%, #f57c00 60%, #e65100 100%);
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

.qs-stats {
    background: white;
    padding: 0 20px 60px;
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
    padding: 36px 20px;
    text-align: center;
}

.qs-stat-num {
    font-size: 42px;
    font-weight: 700;
    color: #f57c00;
    line-height: 1;
    margin-bottom: 6px;
}

.qs-stat-label {
    font-size: 13px;
    color: #888;
    font-weight: 400;
    letter-spacing: 0.5px;
}

.qs-section {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 20px 90px;
}

.qs-label {
    display: inline-block;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #f57c00;
    margin-bottom: 12px;
}

.qs-title {
    font-size: 38px;
    font-weight: 700;
    color: #1a1a1a;
    margin: 0 0 18px;
    line-height: 1.2;
}

.qs-subtitle {
    font-size: 16px;
    color: #777;
    line-height: 1.8;
    font-weight: 300;
    max-width: 560px;
}


.qs-historia {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 70px;
    align-items: center;
    padding: 70px 0;
}

.qs-historia-img {
    position: relative;
}

.qs-historia-img img {
    width: 100%;
    height: 440px;
    object-fit: cover;
    border-radius: 24px;
}

.qs-historia-img::after {
    content: '';
    position: absolute;
    bottom: -16px;
    right: -16px;
    width: 100%;
    height: 100%;
    border: 2px solid #f9a825;
    border-radius: 24px;
    z-index: -1;
}

.qs-historia-texto {
    font-size: 16px;
    color: #555;
    line-height: 1.9;
    font-weight: 300;
}


.qs-timeline-wrap {
    background: linear-gradient(135deg, #fff8ec, #fff3e0);
    border-radius: 28px;
    padding: 55px 40px;
    margin-bottom: 90px;
}

.qs-timeline-title {
    text-align: center;
    margin-bottom: 45px;
}

.qs-timeline {
    display: flex;
    justify-content: center;
    gap: 0;
    flex-wrap: wrap;
    position: relative;
}

.qs-timeline::before {
    content: '';
    position: absolute;
    top: 28px;
    left: 10%;
    width: 80%;
    height: 2px;
    background: linear-gradient(90deg, #f9a825, #f57c00);
    opacity: 0.3;
}

.qs-timeline-card {
    background: white;
    border-radius: 18px;
    padding: 28px 22px;
    width: 200px;
    text-align: center;
    box-shadow: 0 8px 30px rgba(0,0,0,0.07);
    margin: 10px;
    position: relative;
    transition: 0.3s ease;
}

.qs-timeline-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 40px rgba(245,124,0,0.15);
}

.qs-timeline-dot {
    width: 12px;
    height: 12px;
    background: linear-gradient(135deg, #f9a825, #f57c00);
    border-radius: 50%;
    margin: 0 auto 16px;
    box-shadow: 0 0 0 4px rgba(249,168,37,0.2);
}

.qs-timeline-card h3 {
    font-size: 15px;
    font-weight: 600;
    color: #1a1a1a;
    margin: 0 0 8px;
}

.qs-timeline-card p {
    font-size: 13px;
    color: #888;
    line-height: 1.5;
    margin: 0;
}



.qs-valores-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-top: 50px;
}

.qs-valor-card {
    background: white;
    border-radius: 22px;
    padding: 36px 28px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.05);
    border: 1px solid #f5f0e8;
    transition: 0.3s ease;
    position: relative;
    overflow: hidden;
}

.qs-valor-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, #f9a825, #f57c00);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.35s ease;
}

.qs-valor-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 50px rgba(245,124,0,0.1);
}

.qs-valor-card:hover::before {
    transform: scaleX(1);
}

.qs-valor-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #fff3e0, #ffe0b2);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.qs-valor-icon img {
    width: 34px;
    height: 34px;
    object-fit: contain;
}

.qs-valor-card h3 {
    font-size: 17px;
    font-weight: 600;
    color: #1a1a1a;
    margin: 0 0 10px;
}

.qs-valor-card p {
    font-size: 14px;
    color: #777;
    line-height: 1.7;
    margin: 0;
}


.qs-politicas {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    margin-top: 50px;
}

.qs-politica-card {
    background: white;
    border-radius: 22px;
    padding: 36px 32px;
    box-shadow: 0 8px 30px rgba(0,0,0,0.05);
    border: 1px solid #f5f0e8;
    transition: 0.3s;
}

.qs-politica-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 40px rgba(245,124,0,0.1);
}

.qs-politica-num {
    font-size: 48px;
    font-weight: 700;
    color: #f9a825;
    opacity: 0.25;
    line-height: 1;
    margin-bottom: 12px;
}

.qs-politica-card h2 {
    font-size: 19px;
    font-weight: 600;
    color: #1a1a1a;
    margin: 0 0 12px;
}

.qs-politica-card p {
    font-size: 14px;
    color: #777;
    line-height: 1.8;
    margin: 0;
}

/*  */
.qs-cta {
    background: linear-gradient(135deg, #f9a825, #f57c00);
    margin: 0 20px 90px;
    border-radius: 28px;
    padding: 70px 40px;
    text-align: center;
    max-width: 1060px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    overflow: hidden;
}

.qs-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='70' viewBox='0 0 80 92'%3E%3Cpolygon points='40,2 76,22 76,62 40,82 4,62 4,22' fill='none' stroke='%23ffffff' stroke-width='1.5'/%3E%3C/svg%3E");
    background-size: 60px 70px;
    opacity: 0.07;
    pointer-events: none;
}

.qs-cta h2 {
    font-size: 36px;
    font-weight: 700;
    color: white;
    margin: 0 0 14px;
}

.qs-cta p {
    font-size: 16px;
    color: rgba(255,255,255,0.85);
    margin: 0 0 32px;
    font-weight: 300;
}

.qs-cta-btn {
    display: inline-block;
    background: white;
    color: #f57c00;
    font-size: 15px;
    font-weight: 600;
    padding: 14px 36px;
    border-radius: 50px;
    text-decoration: none;
    transition: 0.3s;
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
}

.qs-cta-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 40px rgba(0,0,0,0.2);
}


@media(max-width: 900px){
    .qs-hero h1 { font-size: 38px; }
    .qs-historia { grid-template-columns: 1fr; gap: 40px; }
    .qs-historia-img::after { display: none; }
    .qs-valores-grid { grid-template-columns: 1fr 1fr; }
    .qs-politicas { grid-template-columns: 1fr; }
    .qs-stats-grid { grid-template-columns: 1fr; }
    .qs-timeline::before { display: none; }
}

@media(max-width: 600px){
    .qs-hero h1 { font-size: 30px; }
    .qs-valores-grid { grid-template-columns: 1fr; }
    .qs-title { font-size: 28px; }
}
.qs-historia-texto,
.qs-valor-card p,
.qs-politica-card p,
.qs-cta p {
    text-align: justify;
    text-justify: inter-word;
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

<section class="qs-section">
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
</section>


<section class="qs-section">
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

</div>