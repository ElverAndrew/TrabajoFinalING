<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona de pagos</title>
    <link rel="icon" href="/assets/logos/logo.ico">
    <link rel="stylesheet" href="/css/style_admin.css">
</head>
<body>

    <header class="header" id="header">
        <nav class="nav container">
            <a href="/inicio" class="nav__logo">
               <img src="/assets/logos/logo.png" alt="logo_image">
                Ferreteria Chuquilluri
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/inicio" class="nav__link">Inicio</a>
                    </li>

                    <li class="nav__item">
                        <a href="/productos" class="nav__link">Productos</a>
                    </li>

                    @auth
                    <li class="nav__item">
                        <a>Hola! {{Auth::user()->nombre}}</a>
                                <!-- <ul class="nav">
                                    <li class="li">
                                        <a href="{{route('logout')}}" class="a">Cerrar Sesión</a>
                                    </li>
                                </ul> -->
                    </li>
                    @endauth
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>

                <img src="/assets/sombras/sombra_1.png" alt="" class="nav__img-1">
                <img src="/assets/sombras/sombra_2.png" alt="" class="nav__img-2">
            </div>

            <div class="nav__buttons">
                <i class="fa-solid fa-moon" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
            </div>
        </nav>
    </header>

    <form method="post" action="{{ url('/carrito') }}" class="form_p">
        @csrf
        <h2>Carrito de compras</h2>
        <input type="text" name="direccion" placeholder="Dirección de envio">

        <input type="text" name="nombre" placeholder="Nombre en la tarjeta">

        <input type="number" name="tarjeta" min="1111111111111111" max="9999999999999999" placeholder="Tarjeta de Crédito">

        <input type="date" min="2023/01/01" name="fecha" placeholder="Fecha de vencimiento">

        <input type="number" min="100" max="999" name="cvv" placeholder="CVV">

        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
        <input type="hidden" name="name_user" value="{{Auth::user()->nombre}}">

        <div class="button">
        <button>
            <span class="shadow"></span>
            <span class="edge"></span>
            <span class="front text"> Pagar
            </span>
        </button>
        </div>
    </form>

    <!-- <div class="modal">
        <h1>¡Muchas gracias por tu compra!</h1>
        <h2>Se te enviará un correo de contacto sobre tu compra</h2>
    </div>

    <style>
        modal::backdrop{
            background-color: rgba(0,0,0,0.55);
        }

        modal {
            max-width: 300px;
        }
    </style> -->

    <script src="/js/pago.js"></script>
</body>
