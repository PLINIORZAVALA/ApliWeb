<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Videoteca</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
    <div id="wrap">
        <div id="masthead">
            <h1>Videoteca </h1>
            <h2><a href="index.php">homepage</a> | <a href="contacto.php">contact</a></h2>
        </div>
        <div id="menucontainer">
            <div id="menunav">
                <ul>
                    <li><a href="index.php"><span>Inicio</span></a></li>
                    <li><a href="consultaInternauta.php"><span>Consulta</span></a></li>
                    <li><a href="registro.php"><span>Registro</span></a></li>
                    <li><a href="acceso.php" class="current"><span>Acceso</span></a></li>
                    <li><a href="contacto.php"><span>Contacto</span></a></li>
                </ul>
            </div>
        </div>
        <div id="container">
            <div id="sidebar">
                <h3>Sidebar</h3>
                <h3>Peliculas Recientes</h3>
                <p>- Venom</p>
                <p>- La sustancia</p>
                <p>- Halloween</p>
                <p>- Sonríe 2</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
            <div id="content">
                <h3>Acceso al sistema</h3>
                <p>Esta pagina provee de las peliculas nacionales e internacionales de mayor exito en taquillas. Te invitamos a ser parte de este sistema registrando tus datos en la opción de "Registro".</p>
                <p>&nbsp;</p>
                <p>Que disfrutes de las peliculas...</p>
                <p>&nbsp;</p>
                
                <!-- Formulario de inicio de sesión -->
                <div class="form-panel">
                    <form action="validarUsuario.php" method="POST">
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" id="email" name="usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="remember-me" name="remember">
                            <label for="remember-me">Recuérdame</label>
                        </div>
                        <button class="submit-btn" type="submit">Iniciar sesión</button>
                        <div class="form-footer">
                            <p>¿Nuevo en usuario? <a href="#">Crea una cuenta</a></p>
                            <p><a href="#">Olvidé mi contraseña</a></p>
                        </div>
                    </form>
                </div>

                <!-- Fin del formulario de inicio de sesión -->

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>.</p>
            </div>
        </div>
        <div id="footer">
            <a href="#">homepage</a> | <a href="mailto:denise@mitchinson.net">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> | <a href="http://jigsaw.w3.org/css-validator">css</a> | &copy; 2007 Anyone | Design by <a href="http://www.mitchinson.net">www.mitchinson.net</a>
        </div>
    </div>
</body>
</html>
