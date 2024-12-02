<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/USUARIO/estilos.css">
    <link rel="shortcut icon" href="../IMG/LOGO/logo.png" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CarConnect</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(actual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Enlace</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuario
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <p class="px-4 pt-2 mb-0 text-muted">NombreUsuario</p>
                    <p class="px-4 text-muted mb-0">ID: 12345678</p>
                    <a class="dropdown-item" href="#">Mi Perfil</a>
                    <a class="dropdown-item" href="#">Cerrar Sesión</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Eliminar Cuenta</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <h2 class="my-4">Perfil de Usuario</h2>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="actualizarusuarios.php" method="POST" class="perfil-usuario">
                <div class="form-group">
                    <label for="nombreUsuario">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="nombreUsuario" value="NombreUsuario" readonly>
                </div>
                <div class="form-group">
                    <label for="correo">Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" value="usuario@correo.com" readonly>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" value="Nombre" readonly>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" value="Apellido" readonly>
                </div>
                <div class="form-group">
                    <label for="telefono">Número de Teléfono</label>
                    <input type="text" class="form-control" id="telefono" value="123-456-7890" readonly onclick="confirmarEdicion('telefono')">
                </div>
                <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" value="miContraseña" readonly onclick="confirmarEdicion('contrasena')">
                </div>
                <button type="button" class="btn btn-primary btn-block" id="guardarCambios">Guardar Cambios</button>
                <button type="button" class="btn btn-danger btn-block mt-2" id="eliminarCuenta">Eliminar Cuenta</button>
            </form>
        </div>
    </div>
</div>

<!-- Mensaje de confirmación -->
<div id="confirmacion" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="mensajeConfirmacion">¿Desea modificar este campo?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="confirmarEdicionBtn">Modificar</button>
            </div>
        </div>
    </div>
</div>

<!-- Mensaje de eliminación de cuenta -->
<div id="eliminarConfirmacion" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar Cuenta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro de que desea eliminar su cuenta?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" id="confirmarEliminarBtn">Eliminar Cuenta</button>
            </div>
        </div>
    </div>
</div>
<footer class="footer-distributed">
  <div class="footer-left">
    <img src="IMG/logo.png" alt="">
    <p class="footer-links">
      <a href="#" class="link-1">Home</a>
      <a href="#">Trabajo</a>
      <a href="#">Contacto</a>
      <a href="#">Iniciar Sesión</a>
    </p>
    <p class="footer-company-name">CarConnect © 2024
    </p>
  </div>
  <div class="footer-center">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>Ctra Vallvidrear Tibidabo 2</span>Barcelona, Cataluña</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p>+34 634 97 33 23</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:m.liang.perarnau@gmail.com">soporte@carconnect.com</a></p>
    </div>
  </div>
  <div class="footer-right">
    <p class="footer-company-about">
      <span>CarConnect</span>
      Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
    </p>
    <div class="footer-icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-github"></i></a>
    </div>
  </div>
</footer>
</body>
</html>