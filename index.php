<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aprendiendo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <script type="text/javascript" src="./assets/js/mobile.js"></script>
        <script src="https://kit.fontawesome.com/eb496ab1a0.js"></script>
    </head>
    <body>
<!-- Encabezado - Navegacion -->
        <header>
            <a class="logo" href="index.php"><h2>Aprendiendo</h2></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="#">Cursos</a></li>
                    <li><a href="#">¿Quienes somos?</a></li>
                    <li><a href="#">Iniciar sesión</a></li>
                </ul>
            </nav>
            <a class="cta" href="./vistas/sign-up.html">Registrate</a>
            <p class="menu cta">Menu</p>
        </header>
        <div id="mobile__menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="#">Cursos</a>
                <a href="#">¿Quienes somos?</a>
                <a href="#">Registrate</a>
            </div>
        </div>
<!-- Presentación -->
        <section id="hero">
            <h1 class="text">Aprende a Programar <br> ¡Totalmente grátis!</h1>
            <button class="text">¡Registrate!</button>
        </section>
<!-- Quienes somos -->
        <section id="somos-proya">
            <div class="container">
                <div class="img-container"></div>
                <div class="texto">

                    <h2 class="somos">Somos, <span class="color-acento">¡Aprendiendo!</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit veritatis a autem sed dignissimos commodi, voluptas incidunt voluptatibus cum, quia neque nulla consequatur laborum accusamus, perspiciatis odio nemo minus vel!</p>
                </div>
            </div>
        </section>
<!-- Pie de pagina -->
        <footer class="footer">
            <div class="group-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="./assets/img/aa.png" alt="logo">
                        </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>Ubicación</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="box">
                    <h2>Contactos</h2>
                    <div class="red-social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-twitter"></a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>