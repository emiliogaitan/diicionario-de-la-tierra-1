<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/android-icon-48x48.png"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/css.iconos.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/diccionario.css">
    <link rel="stylesheet" href="icono/style.css">
    <title>Earth's Dictionary</title>	
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="black-text">
<div class=" navaa hide-on-med-and-down">
    <section class=" center transparent">
        <h5>Diccionario de la Tierra</h5>
    </section>
    <div class="container div white-text center">
        <h5 class="left">User Registration:</h5><br><br><br>
        <form action="registro.php" method="post">
            <span class="left ">ID-Usuario:</span><input type="text" required="" name="user" value="<?php if ($_POST) {
                echo $_POST['user'];
            } ?>">
            <span class="left ">Correo:</span><input type="text" required="" name="email" value="<?php if ($_POST) {
                echo $_POST['email'];
            } ?>">
            <span class="left ">Nombre:</span><input type="text" required="" name="nombre" value="<?php if ($_POST) {
                echo $_POST['nombre'];
            } ?>">
            <span class="left ">Apellido:</span><input type="text" required="" name="apellido"
                                                       value="<?php if ($_POST) {
                                                           echo $_POST['apellido'];
                                                       } ?>">
            <div class="r">
                <div class="r1">
                    <span class="left">Contraseña:</span><input type="password" required="" name="pass1"/>
                </div>
                <div class="r1">
                    <span class="left">Confirmar Contraseña:</span><input type="password" name="pass2" required=""/>
                </div>
            </div>
            <section class="center center-block center-align">
            <div class="g-recaptcha" data-sitekey="6Lfz5h4UAAAAABLO351A23FgLHVHpf8xHpzmjsog"></div>
            </section>
            <hr>
            <input type="submit" value="Registro" class="btn blue-grey">
        </form>
    </div>
    <br>
    <footer>
        <div class="footer-copyright white-text">
            <div class="container f">
                © 2017 Copyrightv Versión de Prueba
            </div>
        </div>
    </footer>
    <br>
</div>

<!----- adaptacion para moviles en sistema operativos------->
<div class="navaa hide-on-med-and-up">
    <section>
        <h5 class="center">Diccionario de la Tierra</h5>
    </section>
    <div class="center white-text div1">
        <h5 class="left">Registro:</h5><br><br><br>
        <form action="registro.php" method="post">
            <span class="left ">Id-Usuario:</span><input type="text" required="" name="user" value="<?php if ($_POST) {
                echo $_POST['user'];
            } ?>">
            <span class="left ">Correo:</span><input type="text" required="" name="email" value="<?php if ($_POST) {
                echo $_POST['email'];
            } ?>">
            <span class="left ">Nombre:</span><input type="text" required="" name="nombre" value="<?php if ($_POST) {
                echo $_POST['nombre'];
            } ?>">
            <span class="left ">Apellido:</span><input type="text" required="" name="apellido"
                                                       value="<?php if ($_POST) {
                                                           echo $_POST['apellido'];
                                                       } ?>">
            <div>
                <span class="left">Contraseña:</span><input type="password" required="" name="pass1"/>
                <span class="left">Confirmar Contraseña:</span><input type="password" name="pass2" required=""/>
            </div>
            <p>
                <input name="group1" type="radio" id="test1"/>
                <label for="test1">Aceptar termino y condiciones.</label>
            </p>
            <input type="submit" value="Registro" class="btn blue-grey">
        </form>
    </div>
    <br>
    <footer>
        <div class="footer-copyright white-text">
            <div class="container f">
                © 2017 Copyrightv version de prueba
            </div>
        </div>
    </footer>
    <br>
</div>
<?php
if ($_POST) {
    if ($_POST['pass1'] == $_POST['pass2']) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $user = $_POST['user'];
        $pass = $_POST['pass1'];
        $correo = $_POST['email'];
        $gaurdar = 'registro/';
        $spacio = ' ';

        $archivo = $gaurdar . $user . $pass . '.txt';
        $fp = fopen($archivo, 'a');
        fwrite($fp, $nombre . $spacio . $apellido . "\r\n");
        fwrite($fp, $correo . "\r\n");
        fwrite($fp, $pass . "\r\n");
        fwrite($fp, $user . "\r\n");
        fclose($fp);
        header("location:http://ingemiliogaitan.net23.net/seccion.php");
    }
}
?>

</body>
<script type="text/javascript" src="js/nuevo.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/personal.js"></script>
</html>