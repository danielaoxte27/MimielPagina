<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Mimiel</title>
 
    <style>
        body{
            margin:0;
            font-family:sans-serif;
            background:linear-gradient(to bottom,#F4C542,#F28C28);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
 
        .registro-container{
            background:#ffffff;
            padding:45px;
            border-radius:20px;
            width:420px;
            box-shadow:0 15px 35px rgba(0,0,0,0.15);
            text-align:center;
            position:relative;
        }

       
        .cerrar{
            position:absolute;
            top:15px;
            right:20px;
            font-size:22px;
            font-weight:bold;
            text-decoration:none;
            color:#555;
            transition:0.3s;
        }

        .cerrar:hover{
            color:#F28C28;
        }
 
        .registro-container img{
            width:130px;
            margin-bottom:15px;
        }
 
        .registro-container h2{
            margin-bottom:25px;
            color:#F28C28;
            font-size:26px;
        }
 
        .form-group{
            margin-bottom:20px;
            text-align:left;
        }
 
        .form-group label{
            font-weight:bold;
            font-size:14px;
            color:#444;
        }
 
        .form-group input{
            width:100%;
            padding:12px;
            margin-top:6px;
            border:1px solid #ddd;
            border-radius:8px;
            outline:none;
            transition:0.3s;
            box-sizing: border-box;
        }
 
        .form-group input:focus{
            border-color:#F28C28;
            box-shadow:0 0 5px rgba(242,140,40,0.4);
        }
 
        .btn-registrar{
            width:100%;
            padding:13px;
            background:#F28C28;
            border:none;
            border-radius:10px;
            color:#fff;
            font-weight:bold;
            font-size:16px;
            cursor:pointer;
            transition:0.3s;
            box-sizing: border-box;
        }
 
        .btn-registrar:hover{
            background:#d9731f;
            transform:scale(1.03);
        }
 
        .login-link{
            margin-top:18px;
            font-size:14px;
        }
 
        .login-link a{
            color:#F28C28;
            font-weight:bold;
            text-decoration:none;
        }
 
        .login-link a:hover{
            text-decoration:underline;
        }
 
    </style>
</head>
<body>
 
<div class="registro-container">

    
    <a href="<?= site_url('Welcome/principal') ?>" class="cerrar">✕</a>
 
    <img src="<?= base_url('assets/imagenes/logo.jpg') ?>" alt="Logo Mimiel">
 
    <h2>Crear cuenta</h2>
 
    <form>
 
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Tu nombre" required>
        </div>
 
        <div class="form-group">
            <label>Correo electrónico</label>
            <input type="email" name="email" placeholder="ejemplo@correo.com" required>
        </div>
 
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" name="password" placeholder="Contraseña" required>
        </div>
 
        <button type="submit" class="btn-registrar">Registrarse</button>
 
    </form>
 
    <div class="login-link">
        ¿Ya tienes cuenta?
        <a href="<?= site_url('Welcome/login') ?>">Inicia sesión aquí</a>
    </div>
 
</div>
 
</body>
</html>