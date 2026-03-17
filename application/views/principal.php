<main>
 
    <!-- HERO -->
    <section id="inicio" class="hero">
        <div style="position: relative; z-index: 1;">

            <h1><?= $titulos['hero']->titulo ?></h1>
            <p><?= $titulos['hero']->descripcion ?></p>

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
 
            <h2><?= $titulos['mision']->titulo ?></h2>
            <p class="mision-frase">
                <?= $titulos['mision']->descripcion ?>
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
           <h2><?= $titulos['productos']->titulo ?></h2>
            <p class="productos-frase">
                <?= $titulos['productos']->descripcion ?>
            </p>
 
            <div class="productos-bloques">
                <?php if(!empty($tarjetas)): ?>
                    <?php foreach($tarjetas as $item): ?>
                        <div class="producto-item">
                            <img src="<?= base_url($img[$item->imagen_alt]->ruta.$img[$item->imagen_alt]->nombre_archivo); ?>" class="tag-img">
                            <h3><?= $item->nombre ?></h3>
                            <p><?= $item->descripcion ?></p>
                            <a href="#" class="btn-producto">Ver productos</a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
 
        </div>
 
    </section>
    <!-- FIN PRODUCTOS -->
 
    <!-- POR QUÉ ELEGIRNOS -->
    <section class="elegirnos">
 
        <div class="elegirnos-container">
 
            <h2><?= $titulos['elegirnos']->titulo ?></h2>
            <p class="elegirnos-frase">
                <?= $titulos['elegirnos']->descripcion ?>
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