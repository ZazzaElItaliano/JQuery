<!doctype html>
<html lang="en">


<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="estilos.css">

<!-- Include Bootstrap Icons CSS in the head of your HTML document -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/dist/css/bootstrap-icons.min.css" rel="stylesheet">



</head>


<body>


    <header id="header" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 color border-bottom">
        <div class="col-md-3 mb-2 mb-md-0 ">
            <a class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none ml-5">
                <!-- Ajusta el tamaño y el espacio en blanco alrededor de la imagen -->
                <img src="fotos/lavanda.png" alt="logo" class="img-fluid w-3 p-1" height="50" width="65">
                <p class="display-5">AAI</p>
            </a>
        </div>


        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">


            <li><a href="#seccion1" class="nav-link px-2">¿Quiénes somos?</a></li>
            <li><a href="#seccion2" class="nav-link px-2">Nuestras oficinas</a></li>
            <li><a href="#seccion3" class="nav-link px-2">Contacta con nosotros</a></li>
            <li><a href="#seccion4" class="nav-link px-2">Nuestros servicios</a></li>
        </ul>


        <div class="col-md-3">
            <svg id="github" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-github me-5" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.20-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
            </svg>
            <div id="githubMessage">
                Este es mi GitHub.
            </div>


            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
</svg>
        </div>


    </header>




    <main>



        <section id="seccion1">
            <div class="text-center margen w-100  ">
                <h3>INFORMACIÓN SOBRE NOSOTROS</h3>
                <div class="caja">
                    <div class="mt-5">
                        <h3 id="encabezado">¿Quiénes somos? <button id="btn1"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4" />
                                </svg> </button> </h3>
                        <p id="parrafo">AAI Systems es una empresa consultora de páginas web y sistemas gestión de logística enfocada al pequeño y mediano negocio. Debido a la masificación del mercado electrónico muchas empresas y negocios tradicionales dan el paso a tener su propia tienda online. En AAI Systems diseñamos y creamos páginas web para cada cliente y sus necesidades.
                        </p>
                    </div>
                    <div>
                        <h3>¿A qué nos dedicamos? <button id="btn2"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4" />
                                </svg> </button></h3>
                        <p id="parrafo2">El producto que ofrece AAI Systems son principalmente páginas web y programas de gestión para PYMES. A través de estos productos podremos satisfacer las necesidades de nuestros clientes ofreciéndoles una experiencia y productos personalizados.
                        </p>
                    </div>


                    <div>
                        <h3>Contacta con nosotros <button id="btn3"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4" />
                                </svg> </button></h3>
                        <div id="parrafo3">
                            <p><strong>Email:</strong> AAISystem@gmail.com </p>
                            <p><strong>Teléfono</strong>:+34234567891</p>
                            <p><strong>Dirección:</strong>24 Pl. Pontevedra A Coruña, Galicia</p>




                        </div>
                    </div>


                    <div class="w-100">
                        <h3>Localización <button id="btn4"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4" />
                                </svg> </button></h3>
                        <div id="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2901.343490037183!2d-8.423319422641041!3d43.34892517205567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2e7c9264d01a31%3A0x797570e06c8b9f19!2sAv.%20de%20Arteixo%2C%20La%20Coru%C3%B1a!5e0!3m2!1ses!2ses!4v1705577360768!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                </div>



            </div>
        </section>

        <section id="seccion2">
            <div class="container text-center margen w-100">
                <div class="row">
                    <h3 class="mb-5">NUESTRAS OFICINAS</h3>

                    <div class="col-md-4 mb-4 cambio" data-original-src="fotos/oficina.png" data-original-text="Nuestras oficinas">
                        <img class="img-fluid mb-4" src="fotos/oficina.png" alt="oficina">
                        <div class="overlay-text">Nuestras oficinas</div>
                    </div>

                    <div class="col-md-4 mb-4 cambio" data-original-src="fotos/cafeteria.jpg" data-original-text="La cafetería">
                        <img class="img-fluid mb-4 cafeteria" src="fotos/cafeteria.jpg" alt="Cafeteria">
                        <div class="overlay-text">La cafetería</div>
                    </div>

                    <div class="col-md-4 mb-4 cambio" data-original-src="fotos/zonaJuegos.png" data-original-text="Ludoteca">
                        <img class="img-fluid mb-4" src="fotos/zonaJuegos.png" alt="Zona de juegos">
                        <div class="overlay-text">Ludoteca</div>
                    </div>

                </div>
            </div>

        </section>

        <section class="container " id="seccion3">
            <h3 class="mt-4 mb-4 text-center margen w-100">FORMULARIO DE CONTACTO</h3>
            <form name="contacto" id="contacto" method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre <span id="error-nombre" class="text-danger">Tiene que introducir al menos 4 caracteres</span></label>
                    <input name="nombre" id="nombre" class="form-control" required type="text" />
                </div>

                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input name="apellidos" id="apellidos" class="form-control" size="30" type="text" />
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email <span id="error-email" class="text-danger">Tiene que introducir un email</span></label>
                    <input name="email" id="email" class="form-control" required type="email" size="45" />
                </div>

                <div class="mb-3">
                    <label for="asunto" class="form-label">Asunto </label>
                    <input type="text" name="asunto" id="asunto" class="form-control" cols="40" rows="4"></input>
                </div>

                <div class="mb-3">
                    <label for="comentario" class="form-label">Comentario <span id="error-comentario" class="text-danger">Tiene que escribir un mensaje breve</span></label>
                    <textarea required type="textarea" name="comentario" id="comentario" class="form-control" cols="40" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label for="legal" class="form-label">¿Acepta nuestros términos y condiciones?<span id="error-legal" class="text-danger"> Si no acepta, no podremos ayudarle</span></label>
                    <div class="form-check">
                        <label class="form-check-label" for="legal">Estoy de acuerdo</label>
                        <input type="checkbox" name="legal" id="legal" class="form-check-input" />

                    </div>
                </div>
                <div class="mb-3">
                    <label for="captcha" class="form-label">Captcha: ¿Cuánto es</label>
                    <span id="num1" class="mx-1"></span> + <span id="num2" class="mx-1"></span>?
                    <input type="hidden" name="captcha-suma" id="captcha-suma" />
                    <input type="text" name="captcha-entrada" id="captcha-entrada" class="form-control" required />
                </div>
                <div id="captcha-result" class="mb-3"></div>





                <p id="buttonsubmit">
                    <button class="btn btn-primary" disabled><i class="bi bi-send"></i> ENVIAR</button>
                </p>
            </form>
            <button class="btn btn-warning" id="boton">¿CAPTCHA?</button>
            <p id="explicacion">Para resolver el captcha introduce el resultado correcto de la suma </p>
        </section>

        <section class="container" id="seccion4">
        <div class="row">
            <h3 class="mt-4 mb-4 text-center margen w-100">ALGUNOS DE NUESTROS SERVICIOS</h3>
            <ul id="servicios-lista">
                <li><p>Venta de licencias de diversos software</p></li>
                <li><p>Consultoría para pequeñas y medianas empresas</p></li>
                <li><p>Asesoría a grandes empresas</p></li>
                <li><p>Alquiler de sala de reuniones</p></li>
            </ul>
        </div>
    </section>

    </main>
    <footer>
        <div class="column">
            <h4>Servicios</h4>
            <ul class="lista">
                <li><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
          
            </ul>
        </div>

        <div class="column">
            <h4>Redes sociales</h4>
            <ul class="lista">
                <li><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
                
            </ul>
        </div>

        <div class="column">
            <h4>Otros</h4>
            <ul class="lista">
                <li><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
             
            </ul>
        </div>
        
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>


</html>