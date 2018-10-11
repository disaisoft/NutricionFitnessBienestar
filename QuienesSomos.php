<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Quienes Somos</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos_parallax.css">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/main.js"> </script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light barranav">
                <a class="navbar-brand" href="index.php">
                <img src="img/logo.jpg" width="200" height="77">
                </a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="QuienesSomos.php">Quienes Somos</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Servicios
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="Nutricion.php">Nutrición</a>
                                        <a class="dropdown-item" href="Fitness.php">Fitness</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="Bienestar.php">Bienestar</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="Login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="Registro.php">Registro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="Blog.php">Blog</a>
                                </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                </div>
            </nav>
        </header><br>
        
        <footer>
            <div class="container style-footer">
                <h1>&copy Derechos Reservados</h1>        
            </div>
        </footer>
        <?php
        // put your code here
        ?>
        <script src="js/jquery.min.js"> </script>
        <script src="js/popper.min.js"> </script>
        <script src="js/bootstrap.min.js"> </script>
    </body>
</html>
