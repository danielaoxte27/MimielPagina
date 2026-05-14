<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Mimiel</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background: linear-gradient(to bottom, #F4C542, #F28C28);
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 40px 20px;
            box-sizing: border-box;
        }

        .registro-container {
            background: #fff;
            padding: 36px 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 480px;
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

        .registro-container img {
            width: 80px;
            margin-bottom: 8px;
        }

        .registro-container h2 {
            margin: 0 0 24px;
            color: #F28C28;
            font-size: 22px;
        }

        .form-group {
            margin-bottom: 14px;
            text-align: left;
        }

        .row {
            display: flex;
            gap: 14px;
        }

        .row .form-group {
            flex: 1;
        }

        .form-group label {
            font-weight: 700;
            font-size: 13px;
            color: #444;
            display: block;
            margin-bottom: 5px;
        }

        .form-group label::after {
            content: " *";
            color: #F28C28;
        }

        .form-group input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 13px;
            font-family: sans-serif;
            transition: border-color .2s, box-shadow .2s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #F28C28;
            box-shadow: 0 0 0 3px rgba(242,140,40,.1);
        }

        .form-group input.error {
            border-color: #e74c3c;
        }

        .error-message {
            color: #e74c3c;
            font-size: 11px;
            margin-top: 4px;
            min-height: 16px;
            display: block;
        }

        .btn-registrar {
            width: 100%;
            padding: 12px;
            background: #F28C28;
            border: none;
            border-radius: 10px;
            color: #fff;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            margin-top: 6px;
            transition: background .2s;
        }

        .btn-registrar:hover { background: #d9731f; }

        .login-link {
            margin-top: 16px;
            font-size: 13px;
            color: #777;
        }

        .login-link a {
            color: #F28C28;
            font-weight: 700;
            text-decoration: none;
        }

        .login-link a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="registro-container">

    <a href="<?= site_url('principal') ?>" class="cerrar">✕</a>

    <a href="<?= site_url('principal') ?>">
        <img src="<?= base_url($img['logo']->ruta.$img['logo']->nombre_archivo); ?>" alt="Logo Mimiel">
    </a>

    <h2>Crear cuenta</h2>

    <form method="POST" action="<?= site_url('principal/registro') ?>" onsubmit="return validarFormulario()" novalidate>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
            <span class="error-message" id="nombre-error"></span>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="apellido_paterno">Apellido paterno</label>
                <input type="text" name="apellido_paterno" id="apellido_paterno" required>
                <span class="error-message" id="apellido_paterno-error"></span>
            </div>
            <div class="form-group">
                <label for="apellido_materno">Apellido materno</label>
                <input type="text" name="apellido_materno" id="apellido_materno" required>
                <span class="error-message" id="apellido_materno-error"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" required>
            <span class="error-message" id="email-error"></span>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password" required>
            <span class="error-message" id="password-error"></span>
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirmar contraseña</label>
            <input type="password" name="confirm_password" id="confirm_password" required>
            <span class="error-message" id="confirm_password-error"></span>
        </div>

        <button type="submit" class="btn-registrar">Registrarse</button>

    </form>

    <div class="login-link">
        ¿Ya tienes cuenta?
        <a href="<?= site_url('principal/login') ?>">Inicia sesión aquí</a>
    </div>

</div>

<script>
const form = document.querySelector('form');
const inputs = form.querySelectorAll('input[required]');

function setError(input, message) {
    const errorEl = document.getElementById(`${input.id}-error`);
    if (errorEl) errorEl.textContent = message;
    input.classList.add('error');
}

function clearError(input) {
    const errorEl = document.getElementById(`${input.id}-error`);
    if (errorEl) errorEl.textContent = '';
    input.classList.remove('error');
}

function validarCampo(input) {
    clearError(input);

    if (!input.value.trim()) {
        setError(input, 'Este campo es obligatorio');
        return false;
    }

    if (input.id === 'password' && input.value.length > 13) {
        setError(input, 'La contraseña no puede superar 13 caracteres');
        return false;
    }

    if (input.id === 'confirm_password') {
        if (input.value !== document.getElementById('password').value) {
            setError(input, 'Las contraseñas no coinciden');
            return false;
        }
    }

    return true;
}

function validarFormulario() {
    let valido = true;
    inputs.forEach(input => { if (!validarCampo(input)) valido = false; });
    return valido;
}

inputs.forEach(input => {
    input.addEventListener('input', () => {
        if (input.id === 'password' && input.value.length > 13) {
            setError(input, 'La contraseña no puede superar 13 caracteres');
            return;
        }
        if (input.id === 'confirm_password' && input.value &&
            input.value !== document.getElementById('password').value) {
            setError(input, 'Las contraseñas no coinciden');
            return;
        }
        if (input.value.trim()) clearError(input);
    });
    input.addEventListener('blur', () => validarCampo(input));
});
</script>

</body>
</html>