<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="/css/style_productos.css">

    <!-- Iconos -->
    <link rel="icon" href="/assets/logos/logo.ico">
    <script src="https://kit.fontawesome.com/0aab6181a9.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

</head>
<body>
    <!--_________________-Header---------------->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="/inicio" class="nav__logo">
               <img src="/assets/logos/logo.png" alt="logo_image">
                Ferretería Chuquilluri
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/inicio" class="nav__link">Inicio</a>
                    </li>

                    <li class="nav__item">
                        <a href="/contacto" class="nav__link">Contáctanos</a>
                    </li>

                    @if (Auth::guest())
                        <li class="nav__item">
                            <a href="/login" class="nav__link">Inicia Sesión</a>
                        </li>

                    @else
                        @auth
                        <li class="nav__item">
                            <a href="{{route('logout')}}">Hola! {{Auth::user()->nombre}}</a>
                                <!-- <ul class="nav">
                                    <li class="li">
                                        <a href="{{route('logout')}}" class="a">Cerrar Sesión</a>
                                    </li>
                                </ul> -->
                        </li>
                        @endauth
                    @endif

                    @if (Auth::user()->rol == 'admin')
                        <li class="nav__item">
                            <a href="/administracion" class="nav__link">Administrador</a>
                        </li>

                    @else
                        <li class="nav__item">
                            <a class="nav__link">
                                <i class="ri-shopping-cart-2-fill"></i>
                            </a>
                            <ul class="ul">
                                <li>
                            <div class="container_tabla">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="th_img">Imagen</th>
                                                <th>Producto</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th>Botón</th>
                                                <th class="shoppingCartTotal">S/0</th>
                                            </tr>
                                        </thead>

                                        <tbody class="shopItemContainer">
                                        </tbody>
                                    </table>
                            </div>
                                </li>
                            </ul>
                        </li>
                    @endif
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

    <section class="popular section" id="popular">
            <span class="section__subtitle">Las mejores herramientas para ti</span>

            <div class="popular__container container grid">
            @foreach ($productos as $producto)
                    <article class="popular__card">
                        <img src="/assets/productos/{{$producto->image}}" alt="logo" class="popular__img">

                        <h3 class="popular__name">{{$producto->nombre}}</h3>
                        <span class="popular__description">{{$producto->categoria}}</span>

                        <span class="popular__price">S/{{$producto->costo}}</span>

                        <button class="popular__button add_cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </article>
            @endforeach
            </div>
    </section>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

    <script src="/js/index.js"></script>
    <script src="/js/shopping.js"></script>
</body>
