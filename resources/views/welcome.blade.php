<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería CHUQUILLURI</title>

    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="/css/style_index.css">

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
                        <a href="#home" class="nav__link">Inicio</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">Sobre Nosotros</a>
                    </li>
                    <li class="nav__item">
                        <a href="/productos" class="nav__link">Productos</a>
                    </li>
                    <li class="nav__item">
                        <a href="#recently" class="nav__link">Contáctanos</a>
                    </li>

                    @if (Auth::guest())
                        <li class="nav__item">
                            <a href="/login" class="nav__link">Inicia Sesión</a>
                        </li>
                    @else
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

    <!--=================Main==================-->
    <main class="main">
        <!--=================Inicio==================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <img src="/assets/imagenes_ferreteria/imagen_prin.png" alt="Image__1" class="home__img">

                <div class="home__data">
                    <h1 class="home__title">
                        Disfruta con

                        <div>
                            <img src="/assets/logos/logo.png" alt="logo_2">
                            lo mejor
                        </div>
                    </h1>

                    <p class="home__description">
                        Somos Ferretería CHUQUILLURI distribuidores oficiales de las mejores marcas del mercado de productos para construcción
                    </p>

                    <a href="#" class="button">
                        Ordena ahora
                    </a>
                </div>
            </div>

            <img src="/assets/sombras/sombra_1.png" alt="home image" class="home__leaf-1">
            <img src="/assets/sombras/sombra_2.png" alt="home image" class="home__leaf-2">

        </section>

        <!-- ================= About ===================  -->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <span class="section__subtitle">Sobre Nosotros</span>
                    <h2 class="section__title about__title">
                        <div>
                            Desde 2022
                            <img src="/assets/sombras/sombra.png" alt="logo 3">
                        </div>

                        Con las mejores marcas
                    </h2>

                    <p class="about__description">
                    Somos una ferretería nueva y emocionante que ha llegado a la ciudad para satisfacer todas tus
                    necesidades de herramientas y materiales de construcción. En nuestra ferretería, nos enorgullece
                    ofrecer una amplia variedad de productos de alta calidad, desde herramientas manuales hasta equipos
                    eléctricos, suministros de fontanería, pintura, productos de jardinería y mucho más.
                    </p>
                </div>

                <img src="/assets/imagenes_ferreteria/img_second.png" alt="teclado" class="about__img">
            </div>

            <img src="/assets/sombras/sombra_1.png" alt="bateria" class="about__leaf">
        </section>

        <section class="popular section" id="popular">
            <span class="section__subtitle">Las mejores herramientas</span>
            <h2 class="section__title">Herramientas Populares del Mes</h2>

            <div class="popular__container container grid">
                <article class="popular__card">
                    <img src="/assets/productos/ce_sol.png" alt="logo" class="popular__img">

                    <h3 class="popular__name">Cemento Sol | 42.5 kg</h3>
                    <span class="popular__description">Cementos</span>

                    <span class="popular__price">S/ 29</span>

                    <button class="popular__button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </article>

                <article class="popular__card">
                    <img src="/assets/productos/taladro.png" alt="logo" class="popular__img">

                    <h3 class="popular__name">Taladro 18V + Atornillador de impacto GDX</h3>
                    <span class="popular__description">Taladros</span>

                    <span class="popular__price">S/ 859</span>

                    <button class="popular__button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </article>

                <article class="popular__card">
                    <img src="/assets/productos/cortadora.png" alt="logo" class="popular__img">

                    <h3 class="popular__name">Amoladora 5" Bosch 1700w</h3>
                    <span class="popular__description">Amoladoras</span>

                    <span class="popular__price">S/ 649</span>

                    <button class="popular__button">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </article>
            </div>
        </section>

        <section class="recently section" id="recently">
            <div class="recently__container container grid">
                <div class="recently__data">
                    <span class="section__subtitle">Contáctanos</span>
                    <h2 class="section__title">
                        Tienes una consulta <br>
                        Escríbenos
                    </h2>

                    <p class="form__description">
                        Estamos atentos las 24 horas del día para responder tus dudas
                    </p>

                    <a href="/contacto" class="button button__recently">
                        Contáctanos <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <img src="/assets/iconos/saxofon.png" alt="" class="recently__data-img">
                </div>

                <img src="/assets/imagenes_ferreteria/img_tres.png" alt="logo" class="recently__img">
            </div>

            <img src="/assets/sombras/sombra_1.png" alt="" class="recently__leaf-1">
            <img src="/assets/sombras/sombra_2.png" alt="" class="recently__leaf-2">
        </section>

        <!-- ================ NewsLetter ===================== -->
        <section class="newsletter section">
            <div class="newsletter__container container">
                <div class="newsletter__content grid">
                    <img src="assets/logos/logo.png" alt="piano" class="newsletter__img">

                    <div class="newsletter__data">
                        <span class="section__subtitle">Boletín de noticias</span>
                        <h2 class="section__title">
                            Suscríbete para futuras<br>
                            noticias de tu tienda favorita
                        </h2>

                        <form method="post" action¨="{{route('suscrito')}}" class="newsletter__form">
                            @csrf
                            <input type="email" placeholder="Enter email" name="email" class="newsletter__input">

                            <button class="button newsletter__button">
                                Suscríbete <i class="fa-solid fa-ghost"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <img src="/assets/iconos/violin.png" alt="" class="newsletter__bateria">
            </div>
        </section>
    </main>

    <!---------------Footer---------------->
    <footer class="footer">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">
                    <img src="/assets/logos/logo_b_2.png" alt="" class="logo image">
                    Ferretería CHUQUILLURI
                </a>

                <p class="footer__description">
                    Ofrecemos beneficios adicionales <br>
                    como garantía en todos nuestros  <br>
                    productos, asesoramiento  <br>
                    personalizado y servicios <br>
                    complementarios posteriores a la <br>
                    compra.
                </p>
            </div>

            <div class="footer__content">
                <div>
                    <h3 class="footer__title">Menú Principal</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Conócenos</a>
                        </li>

                        <li>
                            <a href="/productos" class="footer__link">Productos</a>
                        </li>

                        <li>
                            <a href="#" class="footer__link">Ofertas</a>
                        </li>

                        <li>
                            <a href="#" class="footer__link">Eventos</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Information</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Contacto</a>
                        </li>

                        <li>
                            <a href="#" class="footer__link">Ordena</a>
                        </li>

                        <li>
                            <a href="#" class="footer__link">Videos</a>
                        </li>

                        <li>
                            <a href="#" class="footer__link">Pre-venta</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Dirección</h3>

                    <ul class="footer__links">
                        <li class="footer__information">
                            Av. Loreto 1234 <br>
                            Piura 20001, Perú
                        </li>

                        <li class="footer__information">
                            9 AM - 11 PM
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">Social Media</h3>

                    <ul class="footer__social">
                            <a href="#" target="_blank" class="footer__social-link">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="#" target="_blank" class="footer__social-link">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="#" target="_blank" class="footer__social-link">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                    </ul>
                </div>
            </div>


            <img src="/assets/sombras/sombra.png" alt="" class="footer__onion">
            <img src="/assets/iconos/maraca.png" alt="" class="footer__spinach">
            <img src="/assets/sombras/sombra_2.png" alt="" class="footer__leaf">
        </div>

        <div class="footer__info container">
            <div class="footer__card">
                <img src="/assets/tarjetas/visa.jpg" alt="" class="footer image">
                <img src="/assets/tarjetas/mastercard.png" alt="" class="footer image">
                <img src="/assets/tarjetas/paypal.png" alt="" class="footer image">
                <img src="/assets/tarjetas/pagoefectivo.jpg" alt="" class="footer image">
            </div>

            <span class="footer__copy">
                &#169; Copyright Andrew. All rights reserved
            </span>
        </div>
    </footer>

    <!-- =================== Scroll Up =================== -->

    <a href="#" class="scrollup" id="scroll-up">
        <i class="fa-solid fa-arrow-up"></i>
    </a>

    <script src="/js/scrollreveal.min.js"></script>

    <script src="/js/index.js"></script>

    <!-- Scroll Reveal -->

</body>
</html>
