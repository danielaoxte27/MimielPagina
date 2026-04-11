<style>

.productos {
    font-family: sans-serif;
    background: #fafaf8;
    padding: 0 0 80px;
    color: #1a1a1a;
}

.productos-hero {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    color: #fff;
    text-align: center;
    padding: 64px 20px 52px;
    position: relative;
    overflow: hidden;
}

.productos-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='92' viewBox='0 0 80 92'%3E%3Cpolygon points='40,2 76,22 76,62 40,82 4,62 4,22' fill='none' stroke='%23ffffff' stroke-width='1.5'/%3E%3C/svg%3E");
    background-size: 80px 92px;
    opacity: 0.13;
    pointer-events: none;
}
.productos-hero::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 60px;
    background: linear-gradient(to bottom, transparent, #F28C28);
}

.productos-hero-badge {
    display: inline-block;
    background: rgba(255,255,255,0.2);
    color: white;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding: 6px 20px;
    border-radius: 50px;
    border: 1px solid rgba(255,255,255,0.35);
    margin-bottom: 18px;
}

.productos-hero h2 {
    font-size: 48px;
    font-weight: 700;
    color: white;
    margin: 0 0 14px;
    line-height: 1.15;
}

.productos-hero > p {
    font-size: 16px;
    color: rgba(255,255,255,0.88);
    max-width: 480px;
    margin: 0 auto 28px;
    line-height: 1.7;
    font-weight: 300;
}

.hero-search {
    display: inline-flex;
    align-items: center;
    background: white;
    border-radius: 50px;
    padding: 6px 8px 6px 22px;
    gap: 10px;
    width: 100%;
    max-width: 480px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.15);
}

.hero-search svg { flex-shrink: 0; opacity: 0.4; }

.hero-search input {
    border: none;
    outline: none;
    font-size: 15px;
    font-family: sans-serif;
    background: transparent;
    color: #333;
    width: 100%;
}

.hero-search input::placeholder { color: #aaa; }

.productos-container {
    max-width: 1500px;
    margin: auto;
    padding: 0 24px;
}

.categorias-nav {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
    margin: 36px 0 28px;
}

.btn-categoria {
    padding: 9px 22px;
    border-radius: 50px;
    border: 2px solid #F28C28;
    color: #F28C28;
    text-decoration: none;
    font-size: 12px;
    font-weight: 700;
    font-family: sans-serif;
    letter-spacing: 0.5px;
    transition: 0.25s;
    background: transparent;
    cursor: pointer;
}

.btn-categoria:hover { background: #fff3e0; transform: translateY(-2px); }

.btn-categoria.activo {
    background: linear-gradient(90deg, #F28C28, #e69d00);
    color: white;
    border-color: transparent;
}

.prod-label {
    display: block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #F28C28;
    margin-bottom: 4px;
}

.prod-count {
    font-size: 13px;
    color: #bbb;
    margin-bottom: 20px;
}


.productos-bloques {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}


.producto-item {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    border: 1px solid #f0ebe0;
    transition: all 0.32s ease;
    position: relative;
    display: flex;
    flex-direction: column;
    /* sin min-width — se estiran al 100% de su columna */
    width: 100%;
}

.producto-item::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #F4C542, #F28C28);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.32s ease;
    z-index: 1;
}

.producto-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 22px 50px rgba(242,140,40,0.16);
}

.producto-item:hover::before {
    transform: scaleX(1);
}

.tag-img-wrap {
    width: 100%;
    height: 280px;
    overflow: hidden;
    background: linear-gradient(180deg, #ffffff 0%, #fffbf2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.tag-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 20px;
    transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.producto-item:hover .tag-img {
    transform: scale(1.1);
}


.categoria-label {
    position: absolute;
    top: 14px;
    left: 14px;
    background: linear-gradient(90deg, #F28C28, #e69d00);
    color: white;
    font-size: 10px;
    padding: 5px 13px;
    border-radius: 20px;
    font-weight: 700;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    z-index: 2;
    box-shadow: 0 2px 10px rgba(242,140,40,0.4);
}


.producto-contenido {
    padding: 18px 20px 22px;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.producto-item h3 {
    font-size: 15px;
    font-weight: 700;
    margin: 0 0 6px;
    color: #1a1a1a;
    line-height: 1.4;
    min-height: 42px;
}

.producto-item .prod-desc {
    font-size: 13px;
    color: #aaa;
    line-height: 1.6;
    margin-bottom: 14px;
    flex: 1;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.prod-divider {
    height: 1px;
    background: #f0ebe0;
    margin: 0 0 14px;
}

.prod-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
}

.precio {
    font-size: 22px;
    font-weight: 700;
    color: #F28C28;
    line-height: 1;
    white-space: nowrap;
}

.precio span {
    font-size: 13px;
    font-weight: 500;
    color: #ccc;
    vertical-align: top;
    margin-top: 3px;
    display: inline-block;
}


.btn-carrito-producto {
    padding: 10px 20px;
    border: none;
    border-radius: 50px;
    background: linear-gradient(90deg, #F28C28, #e69d00);
    color: white;
    font-weight: 700;
    font-family: sans-serif;
    font-size: 13px;
    cursor: pointer;
    transition: 0.3s;
    white-space: nowrap;
    box-shadow: 0 4px 14px rgba(242,140,40,0.3);
}

.btn-carrito-producto:hover { transform: scale(1.05); opacity: 0.92; }
.btn-carrito-producto:active { transform: scale(0.97); }

.btn-carrito-producto.agregado {
    background: linear-gradient(90deg, #2e7d32, #43a047);
    box-shadow: 0 4px 14px rgba(46,125,50,0.3);
}

.no-productos {
    text-align: center;
    color: #bbb;
    grid-column: 1 / -1;
    padding: 80px 0;
    font-size: 15px;
}


@media (max-width: 1200px) {
    .productos-bloques { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 800px) {
    .productos-hero h2 { font-size: 32px; }
    .productos-bloques { grid-template-columns: repeat(2, 1fr); gap: 14px; }
}
@media (max-width: 480px) {
    .productos-hero h2 { font-size: 26px; }
    .productos-bloques { grid-template-columns: 1fr; }
    .prod-footer { flex-direction: column; align-items: stretch; }
    .btn-carrito-producto { text-align: center; }
}

</style>


<div class="productos">

    <div class="productos-hero">
        <div class="productos-hero-badge">Apícola Natural &bull; Hecho en México</div>
        <h2>Nuestros Productos</h2>
        <p>Miel natural, cosmética y productos apícolas de alta calidad</p>

        <div class="hero-search">
          
            <input type="text" id="buscarInput"
                   placeholder="Buscar producto..."
                   value="<?= isset($busqueda) ? $busqueda : '' ?>">
        </div>

        
    </div>

    <div class="productos-container">

        <div class="categorias-nav">
         <!--   TODOS  -->
            <a href="<?= site_url('productos?categoria=0') ?>"
            class="btn-categoria <?= (int)$categoria_actual === 0 ? 'activo' : '' ?>">TODOS</a>
            
            <!--  Categorías  -->
              <?php foreach($categorias as $c): ?>
                <a href="<?= site_url('productos?categoria='.$c->id) ?>"
                class="btn-categoria <?= (int)$categoria_actual === (int)$c->id ? 'activo' : '' ?>">
                <?= $c->nombre ?>
              </a>
              <?php endforeach; ?> 
        </div>

        <span class="prod-label">Explora nuestra colección</span>
        <p class="prod-count" id="prod-count">
            <?= count($productos) ?> producto<?= count($productos) != 1 ? 's' : '' ?> disponibles
        </p>

        <div class="productos-bloques" id="productosGrid">

            <?php if(!empty($productos)): ?>
                <?php foreach ($productos as $p): ?>

                    <div class="producto-item"
                         data-nombre="<?= strtolower(htmlspecialchars($p->nombre)) ?>"
                         data-desc="<?= strtolower(htmlspecialchars($p->descripcion)) ?>"
                         data-cat="<?= strtolower(htmlspecialchars($p->categoria_nombre)) ?>">

                        <div class="categoria-label"><?= $p->categoria_nombre ?></div>

                        <div class="tag-img-wrap">
                            <img src="<?= base_url($p->imagen_ruta . $p->imagen_nombre) ?>"
                                 class="tag-img" alt="<?= $p->nombre ?>">
                        </div>

                        <div class="producto-contenido">
                            <h3><?= $p->nombre ?></h3>
                            <p class="prod-desc"><?= $p->descripcion ?></p>
                            <div class="prod-divider"></div>
                            <div class="prod-footer">
                                <div class="precio">
                                    <span>$</span><?= number_format($p->precio, 2) ?>
                                </div>
                                <button class="btn-carrito-producto"
                                    onclick="
                                        this.classList.add('agregado');
                                        this.innerHTML='✓ Agregado';
                                        let b=this;
                                        setTimeout(()=>{b.classList.remove('agregado');b.innerHTML='+ Agregar';},1500);
                                    ">
                                    + Agregar
                                </button>
                            </div>
                        </div>

                    </div>

                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-productos">No hay productos disponibles</p>
            <?php endif; ?>

        </div>
    </div>
</div>


<script>
(function(){
    var input = document.getElementById('buscarInput');
    if(!input) return;

    var timeout = null;

    input.addEventListener('input', function(){
        clearTimeout(timeout);

        timeout = setTimeout(function(){
            var q = input.value.trim();

            if(q !== ''){
                window.location.href = "<?= site_url('productos?buscar=') ?>" + encodeURIComponent(q);
            }else{
                window.location.href = "<?= site_url('productos') ?>";
            }
        }, 600); 
    });
})();
</script>