<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style_login.css">
    <link rel="icon" href="/assets/logos/logo.ico">
</head>
<body>

    <section class="form_register">
        <h1>Inicia Sesión!</h1>
        <div class="register">
            <form method="POST" action="{{route('inicia-sesion')}}">
                @csrf
                <section>
                    <div class="input-group">
                        <input class="input" autocomplete="off" name="email" type="email" required="">
                        <label class="user-label">Email</label>
                    </div>
                </section>

                <section>
                    <div class="input-group">
                        <input class="input" autocomplete="off" name="password" type="password" required="">
                        <label class="user-label">Contraseña</label>
                    </div>
                </section>

                <div class="mant">
                    <input type="checkbox">
                    <p>Mantener mi sesión iniciada</p>
                </div>

                <p class="p-re">¿Aún no tienes una cuenta?<a href="/register"> Regístrate!</a></p>

                <div class="button-login">
                    <button>
                        <div>
                          <span>
                            <p>Enviar</p><p>:)</p>
                          </span>
                        </div>
                        <div>
                          <span>
                            <p>Gracias</p><p>:D</p>
                          </span>
                        </div>
                      </button>
                </div>
            </form>
        </div>
    </section>

</body>
</html>
