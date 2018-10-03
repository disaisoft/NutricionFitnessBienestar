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
        <title>Login</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos_index.css">
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
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                </div>
            </nav>
        </header><br>
        
        <section>
                <div class="container">
                 <div class="row">
                   <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                     <div class="card card-signin my-5">
                       <div class="card-body">
                         <h5 class="card-title text-center">Iniciar Sesión</h5>
                         <form class="form-signin">
                           <div class="form-label-group">
                             <label for="inputEmail">Correo Electronico</label>
                             <input type="email" id="inputEmail" class="form-control" placeholder="Direccion de Correo" required autofocus>
                             
                           </div><br>

                           <div class="form-label-group">
                             <label for="inputPassword">Contraseña</label>
                             <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                             
                           </div>

                           <div class="custom-control custom-checkbox mb-3">
                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                             <label class="custom-control-label" for="customCheck1">Recordar Contraseña</label>
                           </div>
                           <button class="btn btn-lg btn btn-success btn-block text-uppercase btncolorboton" type="submit">Iniciar</button>
                           <hr class="my-4">
                           <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                           <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                         </form>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
        </section>
        
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
