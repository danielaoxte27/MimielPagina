<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    <title>PAGINA MIMIEL</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:sans-serif;
        }

        body{
            background-color:#f5f5f5;
            font-size:15px;
        }

        header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:15px 40px;
            background-color:#ffffff;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
            
            position:sticky;
            top:0;
            z-index:1000;
        }

        .logo img{
            height:70px;
        }

        nav{
            display:flex;
            align-items:center;
            gap:20px;
        }

        .nav-link{
            text-decoration:none;
            color:#000000; 
            font-weight:bold;
            font-size:16px;
            transition:0.3s;
        }

        .nav-link:hover{
            color:#ff7a00;
        }

        .btn-carrito{
            display:flex;
            align-items:center;
            gap:8px;
            background-color:#ff7a00;
            color:#ffffff;
            padding:8px 18px;
            border-radius:8px;
            text-decoration:none;
            font-weight:bold;
            font-size:16px;
            transition:0.3s;
        }

        .btn-carrito:hover{
            background-color:#e66a00;
        }

        .icono-carrito{
            width:1em;
            height:1em;
        }

      @media (max-width:1224px){
            header{
                flex-direction: row;   
                gap: 0;
            }
            nav{
                flex-wrap: nowrap;
            }
        }

        .mision{
            background:#FFF9E6;
            padding:40px 20px;
        }

        .mision-container{
            max-width:1100px;
            margin:auto;
            text-align:center;
        }

        .mision-logo img{
            width:120px;
            height:120px;
            object-fit:cover;
            border-radius:50%;
            margin-bottom:25px;
        }

        .mision h2{
            font-size:32px;
            margin-bottom:15px;
        }

        .mision-frase{
            max-width:650px;
            margin:0 auto 60px auto;
            color:#555;
            line-height:1.6;
        }

        .mision-bloques{
            display:flex;
            justify-content:space-between;
            gap:30px;
            flex-wrap:wrap;
        }

        .mision-item{
            background:#ffffff;
            border-radius:20px;
            padding:20px;
            width:30%;
            min-width:260px;
            text-align:center;
            box-shadow:0 6px 18px rgba(0, 0, 0, 0.05);
            position:relative;

        }
        .mision-item:hover{
            transform: translateY(-5px);
            box-shadow:0 15px 25px rgba(0,0,0,0.05);
        }

        .icono-mision{
            width:50px;
            height: 50px;
            position:center;
            top:10px;
            left:10px;
            fill:none;
            stroke:#F28C28;
            stroke-width:2;
            margin-bottom:10px;
        }

        .mision-item h3{
            margin-top:15px;
            margin-bottom:10px;
            font-size:18px;
        }

        .mision-item p{
            color:#555;
            line-height:1.4;
            margin:0;
        }

        @media(max-width:900px){
            .mision-item{
                width:45%;
            }
        }

        @media(max-width:600px){
            .mision-item{
                width:100%;
            }
        }

        .hero{
            background: linear-gradient(to bottom, #F4C542, #F28C28);
            color:#ffffff;
            padding:60px 5px;
            text-align:center;
            position: relative;
            overflow: hidden; 
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='92' viewBox='0 0 80 92'%3E%3Cpolygon points='40,2 76,22 76,62 40,82 4,62 4,22' fill='none' stroke='%23ffffff' stroke-width='2'/%3E%3C/svg%3E");
            background-size: 80px 92px;
            opacity: 0.12;
            pointer-events: none;
            z-index: 0;
        }

        .hero h1{
            font-size:42px;
            margin-bottom:20px;
            font-weight:bold;
        }

        .hero p{
            font-size:18px;
            max-width:700px;
            margin:0 auto 25px auto;
            line-height:1.6;
        }

        .beneficios{
            display:flex;
            justify-content:center;
            gap: 25px;
            margin-top: 20px;
            flex-wrap:wrap;
        }

        .icono-beneficio{
            width:40px;
            height:40px;
            stroke:#ffffff;
        }

        .beneficio p{
            font-size:16px;
            font-weight:bold;
            margin-top: 8px;
            color:#ffffff;
        }

        @media(max-width:700px){
            .hero h1{
                font-size:32px;
            }
            .hero p{
                font-size:16px;
            }
            .beneficios{
                gap:20px;
            }
        }

        .productos {
            background:#ffffff;
            padding:40px 20px;
        }

        .productos-container {
            max-width:1100px;
            margin:auto;
            text-align:center;
        }

        .productos h2 {
            font-size:32px;
            margin-bottom:15px;
        }

        .productos-frase {
            max-width:650px;
            margin:0 auto 40px auto;
            color:#555;
            line-height:1.6;
        }

        .productos-bloques {
            display:flex;
            justify-content:center;
            gap:20px;
            flex-wrap:wrap;
        }

        .producto-item {
            background:#ffffff;
            border:1px solid #ccc;
            border-radius:8px;
            padding:20px;
            width:23%;
            min-width:220px;
            text-align:center;
            box-shadow:0 4px 12px rgba(0, 0, 0, 0.05);
            display:flex;
            flex-direction:column;
            align-items:center;
            gap:10px;
            justify-content: space-between; 

        }

        .producto-item{
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .producto-item:hover{
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0,0,0,0.12);
        }

        .producto-item h3, 
        .producto-item p { 
            text-align: center;
         }

        .icono-producto {
            width:40px;
            height:40px;
            fill:none;
            stroke:#F28C28;
            stroke-width:2.5;
            margin-bottom:10px;
        }

        .tags {
            display:flex;
            gap:10px;
            margin:10px 0;
        }

        .tag {
            padding:5px 10px;
            border-radius:5px;
            font-size:14px;
            font-weight:bold;
        }

        .tag.naranja {
            background:#F28C28;
            color:#fff;
        }

        .tag.amarillo {
            background:#FFD966;
            color:#333;
        }

        .tag-img {
            width: 100%;         
            height: 180px;        
            object-fit: cover;    
            border-radius: 8px 8px 0 0; 
            border-bottom: 1px solid #ccc; 
        }


        .btn-producto {
            display:inline-block;
            margin-top:auto;
            padding:8px 16px;
            background:#F28C28;
            color:#fff;
            border-radius:6px;
            text-decoration:none;
            font-weight:bold;
            transition:0.3s;
        }

        .btn-producto:hover {
            background:#d9731f;
        }


        @media(max-width:900px){
            .producto-item {
            width:45%;
            height: auto; 
            }
        }

        @media(max-width:600px){
            .producto-item {
            width:100%;
            height: auto; 
            }
        }

        .elegirnos{
            background:#FDF4DC;
            padding:70px 20px;
        }

        .elegirnos-container{
            max-width:1100px;
            margin:auto;
            text-align:center;
        }

        .elegirnos h2{
            font-size:32px;
            margin-bottom:15px;
        }

        .elegirnos-frase{
            max-width:650px;
            margin:0 auto 60px auto;
            color:#555;
            line-height:1.6;
        }

        .elegirnos-bloques{
            display:flex;
            justify-content:space-between;
            gap:40px;
            flex-wrap:wrap;
        }

        .elegir-item{
            width:22%;
            min-width:220px;
            text-align:center;
        }

        .icono-elegir{
            width:70px;
            height:70px;
            background:#F4C542;
            border-radius:50%;
            padding:18px;
            margin-bottom:20px;
        }

        .icono-circulo{
            width:80px;
            height:80px;
            background:#F4C542;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:0 auto 20px auto;
        }

        .icono-circulo svg{
            width:40px;
            height:40px;
        }

        .elegir-item h3{
            font-size:18px;
            margin-bottom:8px;
        }

        .elegir-item p{
            color:#555;
            font-size:14px;
        }

        @media(max-width:900px){
            .elegir-item{
                width:45%;
            }
        }

        @media(max-width:600px){
            .elegir-item{
                width:100%;
            }
        }

        .footer{
            background:#191816;
            color:#ffffff;
            padding:70px 20px 30px 20px;
        }

        .footer-container{
            max-width:1200px;
            margin:auto;
            display:grid;
            grid-template-columns: 1.2fr 1fr 1fr 1fr;
            gap:50px;
        }

        .footer-col{
            min-width:200px;
        }

        .logo-col{
            display:flex;
            flex-direction:column;
            justify-content:space-between;
        }

        .footer-logo-img{
            width:170px;
            margin-bottom:25px;
        }

        .footer-col h4{
            font-size:18px;
            margin-bottom:20px;
            font-weight:600;
        }

        .footer-col p{
            color:#cccccc;
            font-size:14px;
            margin-bottom:15px;
            line-height:1.6;
        }

        .footer-col span{
            color:#aaaaaa;
            font-size:13px;
        }

        .footer-col a{
            display:block;
            text-decoration:none;
            color:#cccccc;
            margin-bottom:10px;
            font-size:14px;
            transition:.3s ease;
        }

        .footer-col a:hover{
            color:#F4C542;
        }


        .redes{
            display:flex;
            gap:12px;
            margin-top:10px;
        }

        .icono-circulo-red{
            width:36px;
            height:36px;
            background:#F4C542;
            border-radius:50%;
            position:relative;
            transition:.3s ease;
        }

        .icono-circulo-red svg{
            width:18px;
            height:18px;
            stroke:#191816;

            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
        }

        .icono-circulo-red:hover{
            transform:translateY(-3px);
            background:#ffcf33;
        }

        .sucursal{
            display:block;
            text-decoration:none;
            margin-bottom:15px;
            transition:.3s ease;
        }

        .sucursal strong{
            color:#ffffff;
            font-size:14px;
        }

        .sucursal span{
            color:#aaaaaa;
            font-size:13px;
        }

        .sucursal:hover strong,
        .sucursal:hover span{
            color:#F4C542;
        }

        @media(max-width:992px){
            .footer-container{
                grid-template-columns:1fr 1fr;
                gap:40px;
            }
        }

        @media(max-width:600px){
            .footer-container{
                grid-template-columns:1fr;
                text-align:center;
            }

            .logo-col{
                align-items:center;
            }

            .redes{
                justify-content:center;
            }
                btn-perfil{
                background:#F28C28;      
                color:white;              
                padding:8px 15px;
                border-radius:20px;        
                text-decoration:none;
                font-weight:bold;
                transition:0.3s;
                display:flex;
                align-items:center;
                gap:6px;
                }
            .btn-perfil:hover{
                background:#d9731f;
            }
        }
    </style>

    <link rel="stylesheet" href="<?= base_url('assets/css/accesibilidad.css'); ?>">
</head>

<body>

<!-- Ícono flotante -->
<div id="btn-accesibilidad">
    <img src="<?= base_url('assets/imagenes/accesibilidad.png'); ?>" alt="Accesibilidad">
</div>

<!-- Panel de accesibilidad -->
<div id="panel-accesibilidad">
    <div class="panel-header">
        <h3>Menú accesible</h3>
    </div>

    <div class="panel-grid">
        <button onclick="toggleVoz()">
           <img src="<?= base_url('assets/imagenes/voz.png'); ?>" class="icono-panel">
            Voz
        </button>
        <button onclick="toggleContraste()">
           <img src="<?= base_url('assets/imagenes/contraste.png'); ?>" class="icono-panel">
            Contrastes 
        </button>
        <button onclick="toggleLinks()">
           <img src="<?= base_url('assets/imagenes/hipervinculo.png'); ?>" class="icono-panel">
            Hipervínculos
        </button>
        <button onclick="aumentarTexto()">
           <img src="<?= base_url('assets/imagenes/tamaño.png'); ?>" class="icono-panel">
            Tamaño texto
        </button>
        <button onclick="toggleEspaciado()">
          <img src="<?= base_url('assets/imagenes/espacios.png'); ?>" class="icono-panel">
            Espacios
        </button>
        <button onclick="toggleAnimaciones()">
            <img src="<?= base_url('assets/imagenes/animaciones.png'); ?>" class="icono-panel">
            Sin animaciones
        </button>
        <button onclick="toggleLegible()">
            <img src="<?= base_url('assets/imagenes/legible.png'); ?>" class="icono-panel">
            Texto legible
        </button>
        <button onclick="cambiarPosicion()">
            <img src="<?= base_url('assets/imagenes/posicion.png'); ?>" class="icono-panel">
            Posición
        </button>
    </div>

    <div class="panel-footer">
        <button onclick="resetAccesibilidad()">Reiniciar</button>
    </div>
</div>
    <header>
        <div class="logo">
            <img src="<?= base_url('assets/imagenes/logo.jpg'); ?>" alt="Logo de la empresa">
        </div>

        <div id="menu-toggle" class="menu-toggle">☰</div>

        <nav id="navbar">   
            <a href="#inicio" class="nav-link">Inicio</a>
            <a href="#quienes" class="nav-link">Quiénes somos</a>
            <a href="#productos" class="nav-link">Productos</a>
            <a href="#blog" class="nav-link">Blog</a>
            <a href="#recetas" class="nav-link">Recetas</a>
            <a href="#opiniones" class="nav-link">Opiniones</a>
            <a href="#contacto" class="nav-link">Contacto</a>

            <a href="" class="btn-carrito">
                Agregar al carrito
                <svg class="icono-carrito" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.6 13.4a2 2 0 0 0 2 1.6h9.7a2 2 0 0 0 2-1.5L23 6H6"></path>
                </svg>
            </a>

            <a href="<?= site_url('Welcome/login') ?>" class="btn-carrito">
                 Iniciar sesión
            </a>


        </nav>
    </header>
    <script src="<?= base_url('assets/js/accesibilidad.js'); ?>"></script>