<style>
    .categorias-nav{
    display:flex;
    justify-content:center;
    gap:12px;
    margin-bottom:35px;
    flex-wrap:wrap;
}

.btn-categoria{
    justify-content:center;
    padding:10px 18px;
    background:#fff;
    border:2px solid #e69d00;
    color:#e69d00;
    border-radius:25px;
    text-decoration:none;
    font-weight:600;
    font-size:14px;

    transition: all 0.3s ease;
    position:relative;
    overflow:hidden;
}

.btn-categoria:hover{
    background:#fff3d6;
    transform:translateY(-2px);
}

.btn-categoria.activo{
    background:#e69d00;
    color:#fff;
    border:2px solid #e69d00;

    box-shadow:none;
    transform:translateY(-1px);

    letter-spacing:0.5px;
}
.btn-categoria{
    transition: all 0.25s ease;
}
.producto-item {
    background:#fff8ec; 
    border:none;
    border-radius:18px;
    padding:0;
    width:23%;
    min-width:240px;
    text-align:left;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
    overflow:hidden;
    display:flex;
    flex-direction:column;
    transition: all 0.3s ease;
    position:relative;
}

.producto-item:hover{
    transform:translateY(-10px) scale(1.02);
    box-shadow:0 20px 35px rgba(0,0,0,0.15);
}
.producto-item img {
    display:block;
    margin:auto;
}


.tag-img {
    width:100%;
    height:200px; 
    object-fit:contain; 
    background:#fff;
    padding:10px;
    border-bottom:1px solid #eee;
}


.producto-contenido{
    padding:15px;
}



.categoria-label{
    font-size:11px;
    color:#c77700;
    font-weight:bold;
    text-transform:uppercase;

    margin-bottom:8px;
    display:block; 
    letter-spacing:0.5px; 
}
.producto-contenido{
    padding:15px;
    display:flex;
    flex-direction:column;
    gap:4px; 
}

.producto-item h3{
    font-size:16px;
    margin:5px 0;
}


.producto-item p{
    font-size:13px;
    color:#666;
    min-height:40px;
}


.precio{
    font-size:18px;
    font-weight:bold;
    color:#e69d00;
    margin-top:10px;
}


.acciones-producto{
    display:flex;
    gap:10px;
    margin-top:15px;
}

.btn-producto {
    flex:1;
    padding:8px;
    background:#eee;
    color:#333;
    border-radius:8px;
    text-decoration:none;
    font-size:13px;
    text-align:center;
}

.btn-producto:hover{
    background:#ddd;
}

.btn-carrito-producto{
    flex:1;
    padding:8px;
    border:none;
    background:#F28C28;
    color:white;
    border-radius:8px;
    cursor:pointer;
}

.btn-carrito-producto:hover{
    background:#d9731f;
}


</style>
<div class="productos">
    <div class="productos-container">

        <h2> Nuestros Productos</h2>
        <p class="productos-frase">
            Descubre nuestra variedad de miel 100% natural, directa del productor.
        </p>

        <!-- BOTONES DE CATEGORÍAS -->
        <?php $categoria_actual = isset($categoria) ? $categoria : 0; ?>
        <div class="categorias-nav">
            <a href="<?= site_url('Productos/todos') ?>" class="btn-categoria <?= $categoria_actual == 0 ? 'activo' : '' ?>">TODOS</a>
            <a href="<?= site_url('Productos/categoria/1') ?>" class="btn-categoria <?= $categoria_actual == 1 ? 'activo' : '' ?>">PRODUCTO DE MIEL</a>
            <a href="<?= site_url('Productos/categoria/2') ?>" class="btn-categoria <?= $categoria_actual == 2 ? 'activo' : '' ?>">EQUIPO APÍCOLA</a>
            <a href="<?= site_url('Productos/categoria/3') ?>" class="btn-categoria <?= $categoria_actual == 3 ? 'activo' : '' ?>">PRODUCTO DE BELLEZA</a>
            <a href="<?= site_url('Productos/categoria/4') ?>" class="btn-categoria <?= $categoria_actual == 4 ? 'activo' : '' ?>">PRODUCTO DE TEMPORADA</a>
        </div>

        <!--  PRODUCTOS -->
        <div class="productos-bloques">

<?php if(!empty($productos)): ?>
    
    <?php foreach ($productos as $p): ?>

        <div class="producto-item">

            <img src="<?= base_url($p->ruta . $p->nombre_archivo) ?>" class="tag-img">

            <div class="producto-contenido">

                <div class="categoria-label">
                    <?= $p->categoria ?>
                </div>

                <h3><?= $p->nombre ?></h3>

                <p><?= $p->descripcion ?></p>

                <div class="precio">
                    $<?= $p->precio ?>
                </div>

                <div class="acciones-producto">
                    <a href="#" class="btn-producto">Ver más</a>
                    <button class="btn-carrito-producto">+ Agregar</button>
                </div>

            </div>

        </div>

    <?php endforeach; ?>

<?php else: ?>
    <p>No hay productos disponibles</p>
<?php endif; ?>

</div>
</div>
</div>