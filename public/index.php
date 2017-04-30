<?php
session_start();
?>
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
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/d.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="buscardor/js/jquery.js"></script>
    <script src="buscardor/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="buscardor/css/estilos.css">
    <title>Earth's Dictionary</title>
</head>
<nav>
    <div class="nav-wrapper z-depth-1 green">
        <a href="#!" class="brand-logo rw">Diccionario de la Tierra</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="noinicio/Video%20Dictionary.php">Video Diccionario</a></li>

            <?php
            if (!isset($_SESSION['user'])) {
                ?>
                <li><a href="seccion.php">Iniciar seccion</a></li>
                <?php
            } else {
                ?>
                <li><a href="cerrarcesion.php">Cerrar Seccion</a></li>
                <?php
            }
            ?>
            <li>
                <form class="white black-text">
                    <div class="input-field gd">
                        <input type="search" id="inputBusqueda" class="black-text" placeholder="Buscar..">
                        <i class="material-icons">close</i>
                        <script src="buscardor/js/buscador.js"></script>
                    </div>
                </form>
            </li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php">Incio</a></li>
            <li><a href="noinicio/Video%20Dictionary.php">Video Diccionario</a></li>
            <?php
            if (!isset($_SESSION['user'])) {
                ?>
                <li><a href="seccion.php">Iniciar seccion</a></li>
                <?php
            } else {
                ?>
                <li><a href="seccion.php">Cerrar Seccion</a></li>
                <?php
            }
            ?>
            <li>
                <form class="white black-text">
                    <div class="input-field gd">
                        <input type="search" id="inputBusqueda" class="black-text" placeholder="Buscar..">
                        <i class="material-icons">close</i>
                        <script src="buscardor/js/buscador.js"></script>
                    </div>
                </form>
            </li>
        </ul>
    </div>
</nav>
<header class="container u">
    <div class="search" id="search">
        <table class="search-table black-text " id="searchTable">
            <thead>
            <tr>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="#" class="white-text">Inicio</a></td>
            </tr>
            <tr>
                <td><a href="#" class="white-text">Ihbfdjdsbf</a></td>
            </tr>
            <tr>
                <td><a href="#" class="white-text">Cursos</a></td>
            </tr>
            </tbody>
        </table>
    </div>
</header>
<br>
<?php
if (isset($_SESSION['user'])) {
    ?>
    <section>
        <script>
            function mostrar(enla) {
                obj = document.getElementById('oculto');
                obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
                enla.innerHTML = (enla.innerHTML == '-') ? '' : '';
            }
        </script>
        <div id="oculto" style="visibility:hidden" class="po left-align">
            <?php
            $nombre = $_SESSION['user'];
            $user = $nombre;
            $r = 'registro/' . $user . ".txt";
            $i = 0;
            $fp = fopen($r, "r");
            while (!feof($fp)) {
                $buffer = fgets($fp, 100);
                $buf[$i] = $buffer;
                $i = $i + 1;
                if ($i == 4) {

                    ?>
                    <div class="left left-align">
                        <p><span>Full name:</span><?php echo $buf[0]; ?></p>
                        <p>Email:<?php echo $buf[1]; ?></p>
                        <p>Password:<?php echo $buf[2]; ?></p>
                        <p>User:<?php echo $buf[3]; ?></p>
                        <div class="center-block">
                            <a href="" class="btn center-block">Editar perfil</a>
                        </div>
                    </div>
                    <?php
                    $i = 0;
                }
            }
            fclose($fp);
            ?>
        </div>
    </section>
    <?php
}
?>
<div class="center-align center hide-on-med-and-down">
    <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/a.php">A</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/b.php">B</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/c.php">C</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/d.php">D</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/e.php">E</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/f.php">F</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/g.php">G</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/h.php">H</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/i.php">I</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/j.php">J</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/k.php">K</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/l.php">L</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/m.php">M</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/n.php">N</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/o.php">O</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/p.php">P</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/g.php">G</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/r.php">R</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/s.php">S</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/t.php">T</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/u.php">U</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/v.php">V</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/x.php">X</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/y.php">Y</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/z.php">Z</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
</div>
<div class=" hide-on-med-and-up r9">
    <ul class="pagination">
        <hr class="z-depth-3">
        <li class="waves-effect"><a href="ingresar/Abecedario/a.php">A</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/b.php">B</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/c.php">C</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/d.php">D</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/e.php">E</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/f.php">F</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/g.php">G</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/h.php">H</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/i.php">I</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/j.php">J</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/k.php">K</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/l.php">L</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/m.php">M</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/n.php">N</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/o.php">O</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/p.php">P</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/g.php">G</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/r.php">R</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/s.php">S</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/t.php">T</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/u.php">U</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/v.php">V</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/x.php">X</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/y.php">Y</a></li>
        <li class="waves-effect"><a href="ingresar/Abecedario/z.php">Z</a></li>
        <hr class="z-depth-3">
    </ul>
</div>
<section class="container center-block center black-text no-pad-top">
    <h5>Registrate y apoya al mundo científico</h5>
    <hr class="z-depth-3 no-pad-top">
    <div class="carousel no-pad-top">
        <a class="carousel-item z-depth-3" href="#one!"><img src="cintificos/1.jpg" class="rs"></a>
        <a class="carousel-item z-depth-3" href="#one!"><img src="cintificos/cientificos.jpg" class="rs"></a>
        <a class="carousel-item z-depth-3" href="#one!"><img src="cintificos/3.jpg" class="rs"></a>
        <a class="carousel-item z-depth-3" href="#one!"><img src="cintificos/2.jpg" class="rs"></a>
        <a class="carousel-item z-depth-3" href="#one!"><img src="cintificos/4.jpg" class="rs"></a>
    </div>
</section>
<section class="container center black-text center-block no-pad-top"><?php
    if (!isset($_SESSION['user'])) {
        ?>
        <h5 class="no-pad-top">Aporta y define</h5>
        <hr class="z-depth-3 no-pad-top">
        <div class="r3 hide-on-med-and-down"><a href="seccion.php" class="btn-large">Aportar</a></div>
        <div class="hide-on-med-and-up r4"><a href="seccion.php" class="btn">Aportar</a></div>
        <div class="r3 hide-on-med-and-down"><a href="seccion.php" class="btn-large">Definir</a></div>
        <div class=" hide-on-med-and-up r4"><a href="seccion.php" class="btn">Definir</a></div>
        <div class="r3 hide-on-med-and-down"><a href="seccion.php" class="btn-large">Compartir</a></div>
        <div class="hide-on-med-and-up r4"><a href="seccion.php" class="btn">Compartir</a></div>
        <br>
        <br>
        <div class="left-align">
            Aprende y comparte terminos cientificos relacionados con la tierra, conviertete en un precursor del
            conocimiento
            aportando nueva informacion que ayudaran a diferentes tipos de personas a enriquecer su conocimiento.
        </div>
        <?php
    } else {
        ?>
        <h5 class="no-pad-top">Aporta  y define</h5>
            Aprende y comparte terminos cientificos relacionados con la tierra, conviertete en un precursor del
            conocimiento
            aportando nueva informacion que ayudaran a diferentes tipos de personas a enriquecer su conocimiento.
        </h5>        <?php
    }
    ?>
    <hr class="z-depth-3 no-pad-top">

</section>
<img src="cintificos/appstore-vs-playstore.jpg" alt="" class="responsive-img hide-on-med-and-up">
<div class="container">
    <img src="cintificos/appstore-vs-playstore.jpg" alt="" class="responsive-img hide-on-med-and-down" width="100%"
         height="50%">
    <hr class="z-depth-3">
    <div class="center-block center">
        <a href="http://www.androidcreator.com/app257808" class="btn">Descargar</a>
    </div>
</div>
<?php
if (isset($_SESSION['user'])) {
    ?>
    <section class=" center center-block  black-text">
        <h5>Publica tus comentarios</h5>
        <hr class="z-depth-3 container">
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9&appId=127111311157364";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <br>
        <section class="center center-block center-align">
            <div class="fb-comments" data-href="https://www.facebook.com/Earth-Dictionary-1713385772297810/"
                 data-width="800*900" data-numposts="5"></div>
        </section>
    </section>
    <?php
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="buscardor/js/buscador.js"></script>
<script src="buscardor/js/jquery.dataTables.min.js"></script>
<script src="buscardor/js/jquery.js"></script>
<footer class="page-footer green">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Diccionario de la Tierra</h5>
                <p class="grey-text text-lighten-4">Ayuda acrear un mundo científico, define palabras y crea el
                    conocimiento.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3"
                           href="https://www.youtube.com/channel/UC-qmV7Ub-0-EUDjVzAGonkA" target="_blank">Youtube</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/Diccionario-de-la-Tierra-1713385772297810/?ref=bookmarks" target="_blank">Facebook</a></li>
                    <li><a class="grey-text text-lighten-3" href="http://www.androidcreator.com/app257808" target="_blank">App Store</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 Copyright Grupo 'León Jodido'
        </div>
    </div>
</footer>
</body>
<script type="text/javascript" src="js/nuevo.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/personal.js"></script>
</html>