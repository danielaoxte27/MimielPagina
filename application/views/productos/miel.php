<style>
.productos {
    font-family: sans-serif;
    background: #fafaf8;
    padding: 0 0 80px;
    color: #1a1a1a;
    padding-top: 0px;
}

.productos-hero {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    color: #fff;
    text-align: center;
    padding: 64px 20px 80px;
    position: relative;
    overflow: visible;
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

.search-sticky-wrapper {
    position: sticky;
    top: 90px; 
    z-index: 1000;
    width: 100%;
    padding: 8px 0 14px 0; 
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    display: flex;
    justify-content: center;
    margin-top: -65px; 
}

.is-scrolled {
    background: linear-gradient(to bottom, #F4C542, #F28C28);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    margin-top: 0; 
    width: 100%; 
}

.hero-search {
    display: flex;
    align-items: center;
    background: white;
    border-radius: 50px;
    padding: 10px 22px;
    width: 90%;
    max-width: 400px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    border: 1px solid #eee;
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
    margin-top: 40px;
}

.categorias-nav {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
    margin: 60px 0 28px;
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
    grid-template-columns: repeat(5, 1fr);
    gap: 18px;
}

.producto-item {
    background: white;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(0,0,0,0.08);
    border: 1px solid #f0ebe0;
    transition: all 0.28s ease;
    position: relative;
    display: flex;
    flex-direction: column;
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
    transition: transform 0.28s ease;
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
    height: 170px;
    overflow: hidden;
    background: linear-gradient(180deg, #ffffff 0%, #ffffff 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.tag-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 10px;
    transition: transform 0.35s ease;
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
    margin-bottom: 0;
    flex-grow: 1;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.prod-divider {
    height: 1px;
    background: #f0ebe0;
    margin: 0 0 4px;
}


.prod-footer {
    display: flex;
    flex-direction: column;
    align-items: stretch;
    gap: 10px;
    padding-top: 0;
    margin-top: 0;
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
    color: #F28C28;
    vertical-align: top;
    margin-top: 3px;
    display: inline-block;
}



@media (max-width: 520px) {
    .prod-actions {
        flex-wrap: wrap;
    }
    .btn-carrito-producto,
    .btn-ver-mas {
        flex: 1 1 100%;
        min-width: 0;
    }
}

.btn-carrito-producto {
    padding: 9px 14px;
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
    .productos-bloques { grid-template-columns: repeat(4, 1fr); }
}
@media (max-width: 1000px) {
    .productos-bloques { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 900px) {
    .productos-hero h2 { font-size: 32px; }
    .productos-bloques { grid-template-columns: repeat(2, 1fr); gap: 14px; }
}
@media (max-width: 480px) {
    .productos-hero h2 { font-size: 26px; }
    .productos-bloques { grid-template-columns: 1fr; }
    .prod-footer { flex-direction: column; align-items: stretch; }
    .btn-carrito-producto { text-align: center; }
}

.contador {
    display: flex;
    align-items: center;
    justify-content: space-between;
    align-self: center;
    gap: 0;
    margin: 0;
    background: #f9f3e8;
    border-radius: 50px;
    padding: 4px;
    width: 100%;
    flex-shrink: 0;  
}

.contador button {
    width: 34px;
    height: 34px;
    border: none;
    background: transparent;
    color: #F28C28;
    font-size: 20px;
    font-weight: 300;
    border-radius: 50%;
    cursor: pointer;
    transition: 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
     min-width: 34px;      
    flex: 0 0 34px;
}

.contador button:hover {
    background: #F28C28;
    color: #fff;
    background: #d96d0f;
}

.contador input {
    flex: 1;
    width: 36px;
    text-align: center;
    border: none;
    background: transparent;
    font-weight: 700;
    font-size: 15px;
    font-family: sans-serif;
    color: #1a1a1a;
    padding: 0;
    pointer-events: none;
}


.prod-footer {
    display: flex;
    flex-direction: column;
    align-items: stretch;
    gap: 10px;
    padding-top: 10px;
    margin-top: auto; 
}

.prod-actions {
    display: flex;
    flex-direction: column;  
    align-items: stretch;
    gap: 8px;
    width: 100%;
}

.btn-ver-mas {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    background: linear-gradient(90deg, #F28C28, #e69d00);
    color: #fff;
    font-weight: 700;
    font-size: .82rem;
    padding: 10px 0;
    border-radius: 50px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all .22s ease;
    flex: 1;
    min-width: 0;
}

.btn-ver-mas:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(242,140,40,0.35);
}


.btn-carrito-producto,
.btn-ver-mas {
    min-width: unset;
    flex: unset;
}

.btn-ver-mas {
    flex: 1;
}

</style>

<div class="productos">
    <div class="productos-hero">
        <div class="productos-hero-badge">Apícola Natural • Hecho en México</div>
        <h2>Nuestros Productos</h2>
        <p>Miel natural, cosmética y productos apícolas de alta calidad</p>
    </div>

    <div id="search-wrapper" class="search-sticky-wrapper">
        <div class="hero-search">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#aaa" stroke-width="2" style="margin-right: 10px;">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input type="text" id="buscarInput"
                   placeholder="Buscar producto..."
                   value="<?php echo isset($busqueda) ? $busqueda : ''; ?>">
        </div>
    </div>

    <div class="productos-container">
        <div class="categorias-nav">
            <a href="<?php echo site_url('productos?categoria=0'); ?>"
            class="btn-categoria <?php echo $categoria_actual == 0 ? 'activo' : ''; ?>">TODOS</a>
            
            <?php if(!empty($categorias)): ?>
                <?php foreach($categorias as $c): ?>
                    <a href="<?php echo site_url('productos?categoria='.$c->id); ?>"
                    class="btn-categoria <?php echo $categoria_actual == (int)$c->id ? 'activo' : ''; ?>">
                    <?php echo $c->nombre; ?>
                    </a>
                <?php endforeach; ?> 
            <?php endif; ?>
        </div>

        <span class="prod-label">Explora nuestra colección</span>
        <p class="prod-count" id="prod-count">
            <?php 
                $total = isset($productos_por_categoria[$categoria_actual]) 
                    ? $productos_por_categoria[$categoria_actual] 
                    : (isset($productos_por_categoria[0]) ? $productos_por_categoria[0] : 0);
                echo $total . ' productos disponibles' . ($total != 1 ? 's' : '');
            ?>
        </p>

        <div class="productos-bloques" id="productosGrid">
            <?php if(!empty($productos)): ?>
                <?php foreach ($productos as $p): ?>
                    <div class="producto-item">
                        <div class="categoria-label"><?php echo $p->categoria_nombre; ?></div>
                        <div class="tag-img-wrap">
                            <img src="<?php echo base_url($p->imagen_ruta . $p->imagen_nombre); ?>"
                                 class="tag-img" alt="<?php echo $p->nombre; ?>">
                        </div>

                        <div class="producto-contenido">
                            <h3><?php echo $p->nombre; ?></h3>
                            <p class="prod-desc"><?php echo $p->descripcion; ?></p>
                            <div class="prod-footer">
                                <div class="prod-divider"></div>
                                <div class="precio">
                                    <span>$</span><?php echo number_format($p->precio, 2); ?>
                                </div>
                                <div class="prod-actions">
                                    <!-- <button class="btn-carrito-producto"
                                        onclick="
                                            this.classList.add('agregado');
                                            this.innerHTML='✓ Agregado';
                                            let b=this;
                                            setTimeout(()=>{b.classList.remove('agregado');b.innerHTML='+ Agregar';},1500);
                                        ">
                                        + Agregar
                                    </button> -->
                                    
                                        <div class="contador" data-stock="<?php echo $p->stock; ?>">
                                            <button class="btn-menos">-</button>
                                            <input type="text" value="0" class="cantidad" readonly>
                                            <button class="btn-mas">+</button>
                                        </div>
                                    <a href="<?php echo site_url('productos/productosdetalle/'.$p->id); ?>" class="btn-ver-mas">
                                        Ver más
                                    </a>
                                </div>
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
  document.addEventListener("DOMContentLoaded", function(){

    const burbujaCarrito = document.getElementById("contador-carrito");
    let totalCarrito = 0;

    document.querySelectorAll('.contador').forEach(function(contador){
        const btnMas   = contador.querySelector('.btn-mas');
        const btnMenos = contador.querySelector('.btn-menos');
        const input    = contador.querySelector('.cantidad');
        const stockMax = parseInt(contador.dataset.stock) || 0;

        btnMas.addEventListener('click', function(){
            let valor = parseInt(input.value) || 0;
            if(valor < stockMax){
                input.value = valor + 1;
                totalCarrito++;
                burbujaCarrito.textContent = totalCarrito;
            } else {
                // opcional: avisar al usuario
                btnMas.style.opacity = '0.4';
                btnMas.style.cursor  = 'not-allowed';
            }
        });

        btnMenos.addEventListener('click', function(){
            let valor = parseInt(input.value) || 0;
            if(valor > 0){
                input.value = valor - 1;
                if(totalCarrito > 0) totalCarrito--;
                burbujaCarrito.textContent = totalCarrito;
                // restaurar botón + si estaba bloqueado
                btnMas.style.opacity = '1';
                btnMas.style.cursor  = 'pointer';
            }
        });
    });

});

(function(){
    var input = document.getElementById('buscarInput');
    var wrapper = document.getElementById('search-wrapper');
    if(!input) return;

    window.addEventListener('scroll', function() {
        if (window.scrollY > 120) {
            wrapper.classList.add('is-scrolled');
        } else {
            wrapper.classList.remove('is-scrolled');
        }
    });

    var timeout = null;
    input.addEventListener('input', function(){
        clearTimeout(timeout);
        timeout = setTimeout(function(){
            var q = input.value.trim();
            var baseUrl = "<?php echo site_url('productos'); ?>";
            if(q !== ''){
                window.location.href = baseUrl + "?buscar=" + encodeURIComponent(q);
            }else{
                window.location.href = baseUrl;
            }
        }, 600); 
    });
})();
</script>