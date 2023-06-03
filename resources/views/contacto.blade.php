<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos</title>
    <link rel="icon" href="/assets/logos/logo.ico">
    <link rel="stylesheet" href="/css/style_contact.css">
</head>
<body>
    <form method="post" action="{{route('contactanos')}}">
        @csrf
        <h2>Contáctanos</h2>
        <input type="text" name="nombre" placeholder="Enter Name">
        <input type="email" name="email" placeholder="Enter Email">
        <input type="number" name="telefono" placeholder="Teléfono">
        <textarea name="mensaje" placeholder="Escriba su mensaje"></textarea>
        <div class="button">
        <button class="c-button c-button--gooey"> Enviar
            <div class="c-button__blobs">
            <div></div>
            <div></div>
            <div></div>
            </div>
        </button>
            <svg style="display: block; height: 0; width: 0;" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <filter id="goo">
                <feGaussianBlur result="blur" stdDeviation="10" in="SourceGraphic"></feGaussianBlur>
                <feColorMatrix result="goo" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" mode="matrix" in="blur"></feColorMatrix>
                <feBlend in2="goo" in="SourceGraphic"></feBlend>
                </filter>
            </defs>
            </svg>
        </div>
    </form>
</body>
</html>
