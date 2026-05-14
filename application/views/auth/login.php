<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión - Mimiel</title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background: linear-gradient(to bottom, #F4C542, #F28C28);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            text-align: center;
            position: relative;
        }

        .cerrar {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            color: #aaa;
            transition: color .2s;
        }

        .cerrar:hover { color: #F28C28; }

        .login-container img {
            width: 110px;
            margin-bottom: 10px;
        }

        .login-container h2 {
            margin: 0 0 24px;
            color: #F28C28;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 18px;
            text-align: left;
        }

        .form-group label {
            font-weight: 700;
            font-size: 13px;
            color: #444;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 14px;
            font-family: sans-serif;
            transition: border-color .2s, box-shadow .2s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #F28C28;
            box-shadow: 0 0 0 3px rgba(242,140,40,.1);
        }

        .captcha-container {
            display: flex;
            justify-content: center;
            margin: 14px 0;
            transform: scale(0.92);
            transform-origin: center;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: #F28C28;
            border: none;
            border-radius: 10px;
            color: #fff;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            transition: background .2s;
        }

        .btn-login:hover { background: #d9731f; }

        .registro-link {
            margin-top: 16px;
            font-size: 13px;
            color: #777;
        }

        .registro-link a {
            color: #F28C28;
            font-weight: 700;
            text-decoration: none;
        }

        .registro-link a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="login-container">

    <a href="<?= site_url('principal') ?>" class="cerrar">✕</a>

    <a href="<?= site_url('principal') ?>">
        <img src="<?= base_url($img['logo']->ruta.$img['logo']->nombre_archivo); ?>" alt="Logo Mimiel">
    </a>

    <h2>Iniciar sesión</h2>

    <form method="POST" action="<?= site_url('principal/login') ?>">

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="captcha-container">
            <div class="g-recaptcha" data-sitekey="6Le19MMsAAAAAJ7qVLVuH00y-z0nvRNpJ44hNfB2"></div>
        </div>

        <button type="submit" class="btn-login">Ingresar</button>

    </form>

    <div class="registro-link">
        ¿No tienes cuenta?
        <a href="<?= site_url('principal/registro') ?>">Regístrate aquí</a>
    </div>

</div>

</body>
</html>