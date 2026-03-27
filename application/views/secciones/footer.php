<footer id="contacto" class="footer">

    <div class="footer-container">

        <!-- Columna 1 -->
        <div class="footer-col logo-col">
            <?php if(!empty($img['logo fondo negro'])): ?>
                <img src="<?= base_url($img['logo fondo negro']->ruta.$img['logo fondo negro']->nombre_archivo); ?>"
                alt="Logo Mimiel"
                class="footer-logo-img">
            <?php endif; ?>

            <div class="redes">
                <?php if(!empty($footer['redes'])): ?>
                    <?php foreach($footer['redes'] as $r){ ?>
                        <a href="<?= $r->link ?>" target="_blank" class="icono-circulo-red">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#191816" stroke-width="3">
                                <?= $r->icono ?>
                            </svg>
                        </a>
                    <?php } ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Columna 2 -->
        <div class="footer-col">
            <h4>Contacto</h4>
            <?php if(!empty($footer['contacto'])): ?>
                <?php foreach($footer['contacto'] as $c){ ?>
                    <p>
                        <strong><?= $c->valor ?></strong><br>
                        <span><?= $c->descripcion ?></span>
                    </p>
                <?php } ?>
            <?php endif; ?>
        </div>

        <!-- Columna 3 -->
        <div class="footer-col">
            <h4>Sucursales</h4>
            <?php if(!empty($footer['sucursales'])): ?>
                <?php foreach($footer['sucursales'] as $s){ ?>
                    <a href="<?= $s->link ?>" target="_blank" class="sucursal">
                        <strong><?= $s->nombre ?></strong><br>
                        <span><?= $s->valor ?>, <?= $s->descripcion ?></span>
                    </a>
                <?php } ?>
            <?php endif; ?>
        </div>

        <!-- Columna 4 -->
        <div class="footer-col">
            <h4>Enlaces Rápidos</h4>
            <?php if(!empty($footer['enlaces'])): ?>
                <?php foreach($footer['enlaces'] as $e){ ?>
                    <a href="<?= $e->link ?>" class="<?= ($e->activo == 1) ? 'activo' : '' ?>">
                        <?= $e->nombre ?>
                    </a>
                <?php } ?>
            <?php endif; ?>
        </div>

    </div> 

    <div class="footer-linea"></div>

</footer>