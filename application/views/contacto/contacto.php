<style>

.contacto-hero {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    text-align: center;
    padding: 60px 20px 50px;
    position: relative;
    overflow: hidden;
    color: #fff;
}

.contacto-hero::before {
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

.contacto-hero h1 {
    font-size: 2.4rem;
    font-weight: 800;
    margin: 10px 0 8px;
    position: relative;
    z-index: 1;
    color: #fff;
}

.contacto-hero p {
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

.contacto-wrapper {
    max-width: 1100px;
    margin: 50px auto;
    padding: 0 20px;
    display: flex;
    gap: 40px;
    flex-wrap: wrap;
    align-items: flex-start;
}

.contacto-form-box {
    flex: 1;
    min-width: 300px;
}

.contacto-form-box h2 {
    font-size: 1.6rem;
    font-weight: 800;
    margin-bottom: 6px;
}

.contacto-form-box > p {
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
    font-size: .85rem;
    font-weight: 600;
    display: block;
    margin-bottom: 6px;
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

.form-botones {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin-top: 8px;
}

.btn-comentario {
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
}

.btn-queja {
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

.msg-respuesta {
    margin-top: 14px;
    font-size: .9rem;
    display: none;
}

.contacto-tarjetas {
    width: 320px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.tarjeta-contacto {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 22px;
}

.tarjeta-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
}

.tarjeta-icono {
    background: #fef9c3;
    border-radius: 10px;
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.tarjeta-icono svg {
    width: 24px;
    height: 24px;
    stroke: #e69d00;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.tarjeta-header h3 {
    font-weight: 700;
    font-size: 1.05rem;
    margin: 0;
}

.tarjeta-contacto .telefono-numero {
    color: #e69d00;
    font-weight: 700;
    font-size: 1.05rem;
}

.tarjeta-contacto .horario {
    color: #666;
    font-size: .85rem;
    margin: 4px 0 14px;
    line-height: 1.6;
}

.tarjeta-contacto .correo-link {
    color: #e69d00;
    font-weight: 600;
    font-size: .95rem;
    display: block;
    margin-bottom: 4px;
    text-decoration: none;
}

.tarjeta-contacto .direccion {
    color: #555;
    font-size: .9rem;
    line-height: 1.6;
    margin-bottom: 14px;
}

.btn-tarjeta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #f5c518;
    padding: 11px 20px;
    border-radius: 8px;
    font-weight: 700;
    font-size: .9rem;
    text-decoration: none;
    color: #222;
    margin-top: 8px;
}

.btn-tarjeta svg {
    width: 16px;
    height: 16px;
    stroke: #222;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.btn-tarjeta:hover {
    background: #e6b800;
}

.mapa-section {
    background: #fffbeb;
    padding: 60px 20px;
}

.mapa-inner {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    gap: 40px;
    align-items: stretch;
    flex-wrap: wrap;
}

.mapa-texto {
    flex: 1;
    min-width: 260px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 16px;
}

.mapa-texto h2 {
    font-size: 1.8rem;
    font-weight: 800;
    color: #222;
}

.mapa-texto p {
    color: #666;
    font-size: .95rem;
    line-height: 1.6;
}

.mapa-direcciones {
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin-top: 8px;
}

a.mapa-dir-item {
    text-decoration: none;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

a.mapa-dir-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.1);
    border-color: #e69d00;
}

a.mapa-dir-item strong {
    color: #222;
}

a.mapa-dir-item span {
    color: #888;
}

.mapa-dir-item {
    display: flex;
    align-items: center;
    gap: 12px;
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    padding: 14px 16px;
}

.mapa-dir-icono {
    background: #fef9c3;
    border-radius: 8px;
    padding: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.mapa-dir-icono svg {
    width: 20px;
    height: 20px;
    stroke: #e69d00;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.mapa-dir-item strong {
    display: block;
    font-size: .95rem;
    color: #222;
    font-weight: 700;
}

.mapa-dir-item span {
    font-size: .85rem;
    color: #888;
}

.mapa-wrapper {
    flex: 2;
    min-width: 300px;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

@media(max-width: 768px) {
    .mapa-inner {
        flex-direction: column;
    }
    .contacto-tarjetas {
        width: 100%;
    }
}
</style>

<!-- HERO -->
<section class="contacto-hero">
    <div class="hero-icono">
        <svg viewBox="0 0 24 24">
            <path d="M3 18v-6a9 9 0 0 1 18 0v6"/>
            <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3z"/>
            <path d="M3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/>
        </svg>
    </div>
    <h1><?= $hero->titulo ?></h1>
    <p><?= $hero->subtitulo ?></p>
</section>

<!-- CONTENIDO -->
<section class="contacto-wrapper">

    <!-- FORMULARIO (no cambia, solo recibe datos del usuario) -->
    <div class="contacto-form-box">
        <h2>Envíanos un mensaje</h2>
        <p>Completa el formulario y nos pondremos en contacto contigo lo antes posible</p>

        <div class="form-card">
            <div class="form-group">
                <label>Nombre completo *</label>
                <input id="f_nombre" type="text" placeholder="Tu nombre">
            </div>
            <div class="form-group">
                <label>Correo electrónico *</label>
                <input id="f_correo" type="email" placeholder="usuario@email.com">
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <input id="f_telefono" type="tel" placeholder="(999) 000-0000">
            </div>
            <div class="form-group">
                <label>Asunto *</label>
                <select id="f_asunto">
                    <option value="">Selecciona un asunto</option>
                    <option value="pedido">Pedido</option>
                    <option value="informacion">Información</option>
                    <option value="queja">Queja</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div class="form-group">
                <label>Mensaje *</label>
                <textarea id="f_mensaje" rows="7.99" placeholder="Escribe tu mensaje aquí..."></textarea>
            </div>

            <div class="form-botones">
                <button class="btn-comentario" onclick="enviarFormulario('comentario')">
                    <svg viewBox="0 0 24 24" style="width:18px;height:18px;stroke:#333;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                    Enviar comentario
                </button>
                <button class="btn-queja" onclick="enviarFormulario('queja')">
                    <svg viewBox="0 0 24 24" style="width:18px;height:18px;stroke:#fff;fill:none;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" y1="8" x2="12" y2="12"/>
                        <line x1="12" y1="16" x2="12.01" y2="16"/>
                    </svg>
                    Enviar queja
                </button>
            </div>
            <p id="msg_respuesta" class="msg-respuesta"></p>
        </div>
    </div>

    <!-- TARJETAS -->
    <div class="contacto-tarjetas">

        <?php foreach($canales as $canal): ?>
        <div class="tarjeta-contacto">
            <div class="tarjeta-header">
                <div class="tarjeta-icono">

                    <?php if($canal->tipo === 'telefono'): ?>
                    <svg viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.8a16 16 0 0 0 6.29 6.29l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>

                    <?php elseif($canal->tipo === 'correo'): ?>
                    <svg viewBox="0 0 24 24">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>

                    <?php elseif($canal->tipo === 'whatsapp'): ?>
                    <svg viewBox="0 0 24 24">
                        <path d="M21 11.5a8.5 8.5 0 0 1-12.9 7.3L3 21l2.3-5.1A8.5 8.5 0 1 1 21 11.5z"/>
                        <path d="M16.2 13.3c-.2-.1-1.3-.6-1.5-.7-.2-.1-.4-.1-.5.1-.1.2-.6.7-.7.8-.1.1-.3.1-.5 0-.2-.1-.9-.3-1.7-1-.6-.5-1-1.1-1.1-1.3-.1-.2 0-.3.1-.4.1-.1.2-.3.3-.4.1-.1.1-.2.2-.3.1-.1 0-.3 0-.4 0-.1-.5-1.2-.7-1.6-.2-.4-.4-.3-.5-.3h-.4c-.1 0-.4.1-.6.3-.2.2-.8.8-.8 2s.8 2.3.9 2.5c.1.2 1.5 2.3 3.7 3.2.5.2.9.3 1.2.4.5.1 1 .1 1.4.1.4-.1 1.3-.5 1.5-1 .2-.5.2-.9.1-1-.1-.1-.3-.2-.5-.3z"/>
                    </svg>
                    <?php endif; ?>

                </div>
                <h3><?= $canal->titulo ?></h3>
            </div>

            <?php if($canal->tipo === 'correo'): ?>
                <a href="<?= $canal->url_accion ?>" class="correo-link"><?= $canal->valor ?></a>
            <?php else: ?>
                <p class="telefono-numero"><?= $canal->valor ?></p>
            <?php endif; ?>

            <p class="horario"><?= nl2br($canal->descripcion) ?></p>

            <a href="<?= $canal->url_accion ?>"
               class="btn-tarjeta"
               <?= ($canal->tipo === 'whatsapp') ? 'target="_blank"' : '' ?>>

                <?php if($canal->tipo === 'telefono'): ?>
                <svg viewBox="0 0 24 24">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.8a16 16 0 0 0 6.29 6.29l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>

                <?php elseif($canal->tipo === 'correo'): ?>
                <svg viewBox="0 0 24 24">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>

                <?php elseif($canal->tipo === 'whatsapp'): ?>
                <svg viewBox="0 0 24 24">
                    <path d="M21 11.5a8.5 8.5 0 0 1-12.9 7.3L3 21l2.3-5.1A8.5 8.5 0 1 1 21 11.5z"/>
                </svg>
                <?php endif; ?>

                <?= $canal->texto_boton ?>
            </a>
        </div>
        <?php endforeach; ?>

    </div>
</section>

<!-- MAPA -->
<section class="mapa-section">
    <div class="mapa-inner">
        <div class="mapa-texto">
            <h2>Nuestras Ubicaciones</h2>
            <p>Visítanos en cualquiera de nuestras sucursales. Estamos para atenderte.</p>
            <div class="mapa-direcciones">

                <?php foreach($sucursales as $suc): ?>
                <a href="<?= $suc->url_maps ?>" target="_blank" class="mapa-dir-item">
                    <div class="mapa-dir-icono">
                        <svg viewBox="0 0 24 24">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <div>
                        <strong><?= $suc->nombre ?></strong>
                        <span><?= $suc->ciudad ?>, <?= $suc->estado ?></span>
                    </div>
                </a>
                <?php endforeach; ?>

            </div>
        </div>

        <div class="mapa-wrapper">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d59587.26209871918!2d-89.643991!3d21.0245267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMimiel!5e0!3m2!1ses-419!2smx!4v1774634462928!5m2!1ses-419!2smx"
                width="100%"
                height="100%"
                style="border:0; display:block; min-height:380px;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<!-- JS -->
<script>
function enviarFormulario(tipo) {
    const nombre   = document.getElementById('f_nombre').value.trim();
    const correo   = document.getElementById('f_correo').value.trim();
    const telefono = document.getElementById('f_telefono').value.trim();
    const asunto   = document.getElementById('f_asunto').value;
    const mensaje  = document.getElementById('f_mensaje').value.trim();
    const resp     = document.getElementById('msg_respuesta');

    if (!nombre || !correo || !asunto || !mensaje) {
        resp.style.display = 'block';
        resp.style.color   = '#dc2626';
        resp.textContent   = 'Por favor completa los campos obligatorios.';
        return;
    }

    const formData = new FormData();
    formData.append('nombre',   nombre);
    formData.append('correo',   correo);
    formData.append('telefono', telefono);
    formData.append('asunto',   asunto);
    formData.append('mensaje',  mensaje);
    formData.append('tipo',     tipo);

    fetch('<?= site_url('Contacto/enviar') ?>', {
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