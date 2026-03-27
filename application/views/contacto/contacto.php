<style>
.contacto-hero {
    background: #fffbeb;
    text-align: center;
    padding: 60px 20px 40px;
}
.contacto-hero h1 {
    font-size: 2.2rem;
    font-weight: 800;
    margin: 10px 0 8px;
}
.contacto-hero p {
    color: #666;
    font-size: 1rem;
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
    max-width: 1100px;
    margin: 20px auto 60px;
    padding: 0 20px;
}
.mapa-placeholder {
    background: #f3f4f6;
    border-radius: 16px;
    height: 320px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #9ca3af;
}
.mapa-placeholder svg {
    width: 48px;
    height: 48px;
    stroke: #9ca3af;
    fill: none;
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.mapa-placeholder p { font-weight: 600; margin-top: 10px; }
.mapa-placeholder small { font-size: .85rem; }

.hero-icono svg {
    width: 48px;
    height: 48px;
    stroke: #e69d00;
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
    margin-bottom: 10px;
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
    <h1>Contáctanos</h1>
    <p>Estamos aquí para ayudarte. Escríbenos o visítanos</p>
</section>

<!-- CONTENIDO -->
<section class="contacto-wrapper">

    <!-- FORMULARIO -->
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

        <!-- Teléfono -->
        <div class="tarjeta-contacto">
            <div class="tarjeta-header">
                <div class="tarjeta-icono">
                    <svg viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.8a16 16 0 0 0 6.29 6.29l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                </div>
                <h3>Teléfono</h3>
            </div>
            <p class="telefono-numero">(999) 123-4567</p>
            <p class="horario">
                Lunes a Viernes: 9:00 AM - 6:00 PM<br>
                Sábados: 9:00 AM - 2:00 PM
            </p>
            <a href="tel:9991234567" class="btn-tarjeta">
                <svg viewBox="0 0 24 24">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.8a16 16 0 0 0 6.29 6.29l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                Llamar ahora
            </a>
        </div>

        <!-- Correo -->
        <div class="tarjeta-contacto">
            <div class="tarjeta-header">
                <div class="tarjeta-icono">
                    <svg viewBox="0 0 24 24">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                </div>
                <h3>Correo Electrónico</h3>
            </div>
            <a href="mailto:ventas@mimiel.com.mx" class="correo-link">ventas@mimiel.com.mx</a>
            <p class="horario">Respuesta en menos de 24 horas</p>
            <a href="mailto:info@mimiel.com.mx" class="btn-tarjeta">
                <svg viewBox="0 0 24 24">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
                Enviar correo
            </a>
        </div>

        <!-- WhatsApp -->
        <div class="tarjeta-contacto">
            <div class="tarjeta-header">
                <div class="tarjeta-icono">
                    <svg viewBox="0 0 24 24">
                        <path d="M21 11.5a8.5 8.5 0 0 1-12.9 7.3L3 21l2.3-5.1A8.5 8.5 0 1 1 21 11.5z"/>
                        <path d="M16.2 13.3c-.2-.1-1.3-.6-1.5-.7-.2-.1-.4-.1-.5.1-.1.2-.6.7-.7.8-.1.1-.3.1-.5 0-.2-.1-.9-.3-1.7-1-.6-.5-1-1.1-1.1-1.3-.1-.2 0-.3.1-.4.1-.1.2-.3.3-.4.1-.1.1-.2.2-.3.1-.1 0-.3 0-.4 0-.1-.5-1.2-.7-1.6-.2-.4-.4-.3-.5-.3h-.4c-.1 0-.4.1-.6.3-.2.2-.8.8-.8 2s.8 2.3.9 2.5c.1.2 1.5 2.3 3.7 3.2.5.2.9.3 1.2.4.5.1 1 .1 1.4.1.4-.1 1.3-.5 1.5-1 .2-.5.2-.9.1-1-.1-.1-.3-.2-.5-.3z"/>
                    </svg>
                </div>
                <h3>WhatsApp</h3>
            </div>

            <p class="telefono-numero">+52 1 999 569 6291</p>

            <p class="horario">
                Atención directa por WhatsApp<br>
                Respuesta rápida
            </p>

            <a href="https://wa.me/c/5219995696291" target="_blank" class="btn-tarjeta">
                <svg viewBox="0 0 24 24">
                    <path d="M21 11.5a8.5 8.5 0 0 1-12.9 7.3L3 21l2.3-5.1A8.5 8.5 0 1 1 21 11.5z"/>
                </svg>
                Enviar mensaje
            </a>
        </div>

    </div>
</section>

<!-- MAPA -->
<section class="mapa-section">
    <div class="mapa-placeholder">
        <svg viewBox="0 0 24 24">
            <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"/>
            <line x1="8" y1="2" x2="8" y2="18"/>
            <line x1="16" y1="6" x2="16" y2="22"/>
        </svg>
        <p>Mapa de Google Maps</p>
        <small>Aquí se integrará el mapa interactivo</small>
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
        resp.textContent   = '✅ ' + data.msg;
    })
    .catch(() => {
        resp.style.display = 'block';
        resp.style.color   = '#dc2626';
        resp.textContent   = 'Error al enviar. Intenta de nuevo.';
    });
}
</script>