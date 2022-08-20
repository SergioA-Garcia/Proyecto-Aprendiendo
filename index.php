<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio - Aprendiendo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
</head>

<body>

<!-- Encabezado - Navegacion -->
    <header>
        <a class="logo" href="index.php"><h2>Aprendiendo</h2></a>
        <nav>
            <ul class="nav__links">
               <li><a href="./vistas/curso.php">Cursos</a></li>
               <li><a href="#">¿Quienes somos?</a></li>
               <li><a href="#">Iniciar sesión</a></li>
            </ul>
        </nav>
            <a class="cta" href="#">Registrate</a>
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
    <script type="text/javascript" src="./assets/js/mobile.js"></script>
</body>

</html>