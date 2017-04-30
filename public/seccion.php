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
</head>
<body>
<div class="nava hide-on-med-and-down">
    <section class=" center transparent">
        <h5>Diccionario de la Tierra</h5>
    </section>
    <div class="container div white-text center">
        <h5 class="left"><i class="icon-user small"> </i>Ingresar:</h5><br><br><br>
        <form action="seccion.php" method="post">
            <span class="left small">Id-Usuario:</span><input type="text" name="user" required="" value="<?php if ($_POST){ echo $_POST['user'];} ?>">
            <span class="left">Contraseña:</span><input type="password" name="pass" required="">
            <input type="submit" value="Ingresar" class="btn blue-grey">
        </form>
        <section class="white-text container">
            <a href="registro.php" class="btn-block white-text btn"><i class="icon-user-plus small"></i>Registro de usuario</a>
        </section>
    </div>
    <footer>
        <div class="footer-copyright white-text">
            <div class="container f">
                © 2017 Copyrightv Version de Prueba
            </div>
        </div>
    </footer>
</div>

<!----- adaptacion para moviles en sistema operativos------->
<div class="vaa hide-on-med-and-up">
    <section>
        <h5 class="center">Diccionario De la Tierra</h5>
    </section>
    <div class="center white-text div1">
        <h5 class="left"><i class="icon-user"></i>Ingresar:</h5><br><br><br>
        <form action="seccion.php" method="post">
            <span class="left ">Id-Usuario:</span><input type="text" name="user" required="" value="<?php if ($_POST){ echo $_POST['user'];} ?>">
            <span class="left">Contraseña:</span><input type="password" name="pass" required="">
            <input type="submit" value="Ingresar" class="btn blue-grey">
        </form>
        <section class="">
            <a href="registro.php" class="btn-block btn white-text">
                <i class="icon-user-plus"></i> Registro</a>
        </section>
    </div>
    <footer>
        <div class="footer-copyright white-text">
            <div class="container f">
                © 2017 Copyrightv Version de Prueba
            </div>
        </div>
    </footer>
</div>
<?php
if ($_POST){

    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $r='registro/'.$user.$pass.".txt";
    if ((file_exists($r))){
        header("location:http://ingemiliogaitan.net23.net/");
        session_start();
        $_SESSION['user'] = $user.$pass;
    }else{
        header("location:http://ingemiliogaitan.net23.net/");
    }
}
?>
</body>
<script type="text/javascript" src="js/nuevo.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/personal.js"></script>
</html>