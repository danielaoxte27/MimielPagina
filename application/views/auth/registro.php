<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Mimiel</title>

    <!-- CAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        body{
    margin:0;
    font-family:sans-serif;
    background:linear-gradient(to bottom,#F4C542,#F28C28);
    display:flex;
    justify-content:center;
    align-items:flex-start;
    min-height:100vh;
    padding:15px 0;
}

        .captcha-container{
    display:flex;
    justify-content:center;
    align-items:center;
    margin:10px 0;
    transform:scale(0.88);
}

        .registro-container{
    background:#ffffff;
    padding:22px 28px;
    border-radius:20px;
    width:680px;
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
        }

        .cerrar:hover{
            color:#F28C28;
        }

        .registro-container img{
            width:85px;
            margin-bottom:8px;
        }

        .registro-container h2{
            margin-bottom:18px;
            color:#F28C28;
            font-size: 22px;
        }

        .form-group{
    margin-bottom:12px;
    text-align:left;
}

.row{
    display:flex;
    gap:15px;
}

.row .form-group{
    flex:1;
    margin-bottom:14px;
}

        .form-group label{
            font-weight:bold;
            font-size:13px;
            color:#444;
        }

        .form-group input{
            width:100%;
            padding:10px;
            margin-top:6px;
            border:1px solid #ddd;
            border-radius:8px;
            box-sizing:border-box;
            height: 38px;
            font-size: 13px;
        }

        .form-group label::after{
            content: " *";
            color:#F28C28;
        }

        .form-group input:focus{
            outline:none;
            border-color:#F28C28;
            box-shadow:0 0 0 2px rgba(242,140,40,.12);
        }

        .form-group input.error{
            border-color:#e74c3c;
        }

        .error-message{
            color:#e74c3c;
            font-size:12px;
            margin-top:6px;
            min-height:18px;
            display:block;
        }

        .btn-registrar{
            width:100%;
            padding:10px;
            background:#F28C28;
            border:none;
            border-radius:10px;
            color:#fff;
            font-weight:bold;
            cursor:pointer;
        }

        .btn-registrar:hover{
            background:#d9731f;
        }

        .login-link{
            margin-top:18px;
            font-size:14px;
        }

        .login-link a{
            color:#F28C28;
            font-weight:bold;
        }
    </style>
</head>

<body>

<div class="registro-container">

    <a href="<?= site_url('principal') ?>" class="cerrar">✕</a>

    <a href="<?= site_url('principal') ?>">
        <img src="<?= base_url($img['logo']->ruta.$img['logo']->nombre_archivo); ?>" alt="Logo Mimiel">
    </a>

    <h2>Crear cuenta</h2>

    
    <form method="POST" action="<?= site_url('principal/login') ?>" onsubmit="return validarFormulario()" novalidate>



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

       <div class="captcha-container">
        <div class="g-recaptcha" data-sitekey="6Le19MMsAAAAAJ7qVLVuH00y-z0nvRNpJ44hNfB2"></div>
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
    if (errorEl) {
        errorEl.textContent = message;
    }
    input.classList.add('error');
}

function clearError(input) {
    const errorEl = document.getElementById(`${input.id}-error`);
    if (errorEl) {
        errorEl.textContent = '';
    }
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
        const passwordValue = document.getElementById('password').value;
        if (input.value !== passwordValue) {
            setError(input, 'Las contraseñas no coinciden');
            return false;
        }
    }

    return true;
}

function validarFormulario() {
    let valido = true;

    inputs.forEach((input) => {
        if (!validarCampo(input)) {
            valido = false;
        }
    });

    return valido;
}

inputs.forEach((input) => {
    input.addEventListener('input', () => {
        if (input.id === 'password' && input.value.length > 13) {
            setError(input, 'La contraseña no puede superar 13 caracteres');
            return;
        }

        if (input.id === 'confirm_password') {
            const passwordValue = document.getElementById('password').value;
            if (input.value && input.value !== passwordValue) {
                setError(input, 'Las contraseñas no coinciden');
                return;
            }
        }

        if (input.value.trim()) {
            clearError(input);
        }
    });

    input.addEventListener('blur', () => {
        validarCampo(input);
    });
});
</script>

</body>
</html>