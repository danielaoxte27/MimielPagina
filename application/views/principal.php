<main>
 
    <!-- HERO -->
    <section id="inicio" class="hero">
        <div style="position: relative; z-index: 1;">

            <?php foreach($hero as $item): ?>
                <h1><?= $item->titulo ?></h1>
                <p><?= $item->descripcion ?></p>
            <?php endforeach; ?>

            <div class="beneficios">
                <?php foreach($beneficios as $item): ?>
                    <div class="beneficio">
                        <svg class="icono-beneficio" viewBox="0 0 24 24" fill="none" stroke="#FFFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <?= $item->icono ?>
                        </svg>
                        <p><?= $item->descripcion ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
    </section>
    <!-- FIN HERO -->
 
    <!-- MISIÓN -->
    <section id="quienes"class="mision">
 
        <div class="mision-container">
 
            <div class="mision-logo">
               <img src="<?= base_url($img['logo cuadrado']->ruta.$img['logo cuadrado']->nombre_archivo); ?>" alt="Logo">
            </div>
 
            <h2>Nuestra Misión</h2>
 
            <p class="mision-frase">
                Llevar a tu hogar la miel más pura y natural, producida de manera sustentable.
            </p>
 
            <div class="mision-bloques">
                <?php if(!empty($mision)): ?>
                    <?php foreach($mision as $item): ?>
                        <div class="mision-item">
                            <svg class="icono-mision" viewBox="0 0 24 24" fill="none" stroke="#F28C28" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <?= $item->icono ?>
                            </svg>
                            <h3><?= $item->titulo ?></h3>
                            <p><?= $item->descripcion ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                
            </div>
 
        </div>
 
    </section>
    <!-- FIN MISIÓN -->
 
    <!-- PRODUCTOS -->
    <section id="productos" class="productos">
 
        <div class="productos-container">
            <h2>Productos</h2>
            <p class="productos-frase">
                Miel natural, implementos seguros y delicias de temporada
            </p>
 
            <div class="productos-bloques">
 
                <!-- Tarjeta 1 -->
                <div class="producto-item">
                    <img src="<?= base_url($img['miel']->ruta.$img['miel']->nombre_archivo); ?>" class="tag-img">
                    <h3>Productos de miel</h3>
                    <p>Conoce nuestra línea de miel de abeja.</p>
 
                    <a href="#" class="btn-producto">Ver productos</a>
                </div>
 
                <!-- Tarjeta 2 -->
                <div class="producto-item">
                    <img src="<?= base_url($img['implementos']->ruta.$img['implementos']->nombre_archivo); ?>" class="tag-img">
                    <h3>Equipo Apícola</h3>
                    <p>Variedad en implementos apícolas para el campo.</p>
 
                    <a href="#" class="btn-producto">Ver productos</a>
                </div>
 
                <!-- Tarjeta 3 -->
                <div class="producto-item">
                   <img src="<?= base_url($img['belleza']->ruta.$img['belleza']->nombre_archivo); ?>" class="tag-img">
                    <h3>Productos de belleza</h3>
                    <p>Protege tu piel con ingredientes naturales de la colmena.</p>
 
                    <a href="#" class="btn-producto">Ver productos</a>
                </div>
 
                <!-- Tarjeta 4 -->
                <div class="producto-item">
                   <img src="<?= base_url($img['temporada']->ruta.$img['temporada']->nombre_archivo); ?>" class="tag-img">
                    <h3>Productos de temporada</h3>
                    <p>Productos exclusivos que no podrás dejar de probar.</p>
 
                    <a href="#" class="btn-producto">Ver productos</a>
                </div>
 
            </div>
 
        </div>
 
    </section>
    <!-- FIN PRODUCTOS -->
 
    <!-- POR QUÉ ELEGIRNOS -->
    <section class="elegirnos">
 
        <div class="elegirnos-container">
 
            <h2>¿Por qué elegirnos?</h2>
            <p class="elegirnos-frase">
                Calidad, confianza y compromiso en cada producto que ofrecemos.
            </p>
 
            <div class="elegirnos-bloques">
                <?php if(!empty($elegirnos)): ?>
                    <?php foreach($elegirnos as $item): ?>
                        <div class="elegir-item">
                            <div class="icono-circulo">
                                <svg viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <?= $item->icono ?>
                                </svg>
                            </div>
                            <h3><?= $item->titulo ?></h3>
                            <p><?= $item->descripcion ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            
        </div>
 
    </section>
    <!-- FIN POR QUÉ ELEGIRNOS -->
     
</main>