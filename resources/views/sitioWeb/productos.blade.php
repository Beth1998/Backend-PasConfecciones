<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/productos.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pagina Web</title>
</head>
<body class="body">
<header class="header">
    <div class="nav">
        <div class="logo">
            <img src="https://placehold.co/100x100" alt="Logo">
            <!-- Botón debajo del logo -->
            <a href="{{ url('/') }}" class="btnlogo">Pagina Principal</a>
        </div>
        <nav class="navegacion">
            <button id="hamburger" class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul id="menu" class="hidden">
                <li><a href="{{ url('/productos') }}">ABRIGOS</a></li>
                <li><a href="{{ url('/blusas') }}">BLUSAS</a></li>
                <li><a href="">CAMISAS</a></li>
                <li><a href="">CAMISETAS</a></li>
                <li><a href="">CHAQUETAS</a></li>
                <li><a href="">CHOMPAS</a></li>
                <li><a href="">CONJUNTOS</a></li>
                <li><a href="">FALDAS</a></li>
                <li><a href="">GORRAS</a></li>
                <li><a href="">HOGAR</a></li>
                <li><a href="">ITEMS TEMPORALES</a></li>
                <li><a href="">LENCERIA</a></li>
                <li><a href="">MOCHILAS</a></li>
                <li><a href="">OVEROLES-MANDILES</a></li>
                <li><a href="">PANTALONES</a></li>
                <li><a href="">PRENDAS HOSPITALARIAS</a></li>
                <li><a href="">VARIOS</a></li>
                <li><a href="">VESTIDOS</a></li>
                <li><a href="">ZAPATOS</a></li>
            </ul>
        </nav>
    </div>
</header>


    <main class="main">
        <h1>PRODUCTOS</h1>
        <section id="Servicios" class="servicios">
            <div class="container">
                <h2>ABRIGOS</h2>
                @foreach($getServicios as $getServicios)
                <div class="row contenedor-tarjetas">
                    <!-- Servicio 1 -->
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="tarjeta card h-100 shadow-sm">
                            <img src="{{asset('sitioWeb/img//Servicio1.jpeg')}}" class="card-img-top" alt="Servicio 1">
                            <div class="contenido card-body">
                                <h3 class="titulo card-title">Abrigo 1</h3>
                                <p class="descripcion card-text">Descripción breve del servicio 1. Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Servicio 2 -->
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="tarjeta card h-100 shadow-sm">
                            <img src="{{asset('sitioWeb/img//Servicio2.jpeg')}}" class="card-img-top" alt="Servicio 2">
                            <div class="contenido card-body">
                                <h3 class="titulo card-title">Abrigo 2</h3>
                                <p class="descripcion card-text">Descripción breve del servicio 2. Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 3 -->
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="tarjeta card h-100 shadow-sm">
                            <img src="{{asset('sitioWeb/img//Servicio3.jpeg')}}" class="card-img-top" alt="Servicio 3">
                            <div class="contenido card-body">
                                <h3 class="titulo card-title">Abrigo 3</h3>
                                <p class="descripcion card-text">Descripción breve del servicio 3. Integer posuere erat a ante venenatis dapibus posuere velit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Servicio 4 -->
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="tarjeta card h-100 shadow-sm">
                            <img src="{{asset('sitioWeb/img//Servicio4.jpeg')}}" class="card-img-top" alt="Servicio 4">
                            <div class="contenido card-body">
                                <h3 class="titulo card-title">Abrigo 4</h3>
                                <p class="descripcion card-text">Descripción breve del servicio 4. Integer posuere erat a ante venenatis dapibus posuere velit.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 4 -->
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="tarjeta card h-100 shadow-sm">
                            <img src="{{asset('sitioWeb/img//Servicio4.jpeg')}}" class="card-img-top" alt="Servicio 4">
                            <div class="contenido card-body">
                                <h3 class="titulo card-title">Abrigo 4</h3>
                                <p class="descripcion card-text">Descripción breve del servicio 4. Integer posuere erat a ante venenatis dapibus posuere velit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>      
    </main>
    <footer>
    <section id="Redes" class="footer">
        <article class="redes">
            <h3>REDES SOCIALES</h3>
            <ul>
                <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100050009486446&mibextid=ZbWKwL">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>Facebook</a></li>
                <li><a target="_blank" href="https://www.instagram.com/pas.confecciones?igsh=MWRqZ2sxaTJ0ejM3NQ==">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>Instagram</a></li>
                <li><a target="_blank" href="https://wa.me/593995585094?text=Hola,%20%C2%BFQue%20servicio%20te%20intereso?.">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>Whatsapp</a></li>
            </ul>
        </article>

        <article class="contacto">
            <h3>CONTACTO</h3>
            <ul>
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>pasconfecciones@gmail.com</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>+593 099 558 5094</li>
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>Fary Antonio Marchena Oe3-44 y Antonio Ulloa</li>
            </ul>
        </article>
        
        <article class="geolocalizacion">
            <h3>GOOGLE MAPS</h3>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.794197025951!2d-78.4994016!3d-0.19924150000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a41ca7e5711%3A0xc79b6bfe149316d!2sP.A.S%20Confecciones!5e0!3m2!1ses!2sec!4v1734367799706!5m2!1ses!2sec" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </article>
    </section>
</footer>
    <script src="{{ asset('sitioWeb/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>