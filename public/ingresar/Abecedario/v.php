<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../../img/android-icon-48x48.png"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../css/css.iconos.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="stylesheet" href="../../css/diccionario.css">
    <link rel="stylesheet" href="../../icono/style.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../css/d.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="../../buscardor/js/jquery.js"></script>
    <script src="../../buscardor/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="../../buscardor/css/estilos.css">
    <title>Earth's Dictionary</title>
</head>
<nav>
    <div class="nav-wrapper z-depth-1 green">
        <a href="#!" class="brand-logo rw">Diccionario de la Tierra</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="../../index.php">Inicio</a></li>
            <li><a href="../../noinicio/Video%20Dictionary.php">Video Diccionario</a></li>
            <?php
            session_start();
            ?>
            <?php
            if (!isset($_SESSION['user'])) {
                ?>
                <li><a href="../../seccion.php">Iniciar sesión</a></li>
                <?php
            } else {
                ?>
                <li><a href="../../cerrarcesion.php">Cerrar sesión</a></li>
                <?php
            }
            ?>
            <li>
                <form class="white black-text">
                    <div class="input-field gd">
                        <input type="search" id="inputBusqueda" class="black-text" placeholder="Buscar..">
                        <i class="material-icons">close</i>
                        <script src="../../buscardor/js/buscador.js"></script>
                    </div>
                </form>
            </li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="../../index.php">Incio</a></li>
            <li><a href="../../noinicio/Video%20Dictionary.php">Video Diccionario</a></li>
            <?php
            session_start();
            ?>
            <?php
            if (!isset($_SESSION['user'])) {
                ?>
                <li><a href="../../seccion.php">Iniciar sesión</a></li>
                <?php
            } else {
                ?>
                <li><a href="../../cerrarcesion.php">Cerrar sesión</a></li>
                <?php
            }
            ?>
            <li>
                <form class="white black-text">
                    <div class="input-field gd">
                        <input type="search" id="inputBusqueda" class="black-text" placeholder="Buscar..">
                        <i class="material-icons">close</i>
                        <script src="../../buscardor/js/buscador.js"></script>
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
<div class="center-align center hide-on-med-and-down">
    <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="waves-effect"><a href="a.php">A</a></li>
        <li class="waves-effect"><a href="b.php">B</a></li>
        <li class="waves-effect"><a href="c.php">C</a></li>
        <li class="waves-effect"><a href="d.php">D</a></li>
        <li class="waves-effect"><a href="e.php">E</a></li>
        <li class="waves-effect"><a href="f.php">F</a></li>
        <li class="waves-effect"><a href="g.php">G</a></li>
        <li class="waves-effect"><a href="h.php">H</a></li>
        <li class="waves-effect"><a href="i.php">I</a></li>
        <li class="waves-effect"><a href="j.php">J</a></li>
        <li class="waves-effect"><a href="k.php">K</a></li>
        <li class="waves-effect"><a href="l.php">L</a></li>
        <li class="waves-effect"><a href="m.php">M</a></li>
        <li class="waves-effect"><a href="n.php">N</a></li>
        <li class="waves-effect"><a href="o.php">O</a></li>
        <li class="waves-effect"><a href="p.php">P</a></li>
        <li class="waves-effect"><a href="q.php">Q</a></li>
        <li class="waves-effect"><a href="r.php">R</a></li>
        <li class="waves-effect"><a href="s.php">S</a></li>
        <li class="waves-effect"><a href="t.php">T</a></li>
        <li class="waves-effect"><a href="u.php">U</a></li>
        <li class="waves-effect active"><a href="v.php">v</a></li>
        <li class="waves-effect"><a href="x.php">x</a></li>
        <li class="waves-effect"><a href="y.php">Y</a></li>
        <li class="waves-effect"><a href="z.php">Z</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
</div>
<div class="hide-on-med-and-up">
    <ul class="pagination">
        <hr class="z-depth-3">
        <li class="waves-effect"><a href="a.php">A</a></li>
        <li class="waves-effect"><a href="b.php">B</a></li>
        <li class="waves-effect"><a href="c.php">C</a></li>
        <li class="waves-effect"><a href="d.php">D</a></li>
        <li class="waves-effect"><a href="e.php">E</a></li>
        <li class="waves-effect"><a href="f.php">F</a></li>
        <li class="waves-effect"><a href="g.php">G</a></li>
        <li class="waves-effect"><a href="h.php">H</a></li>
        <li class="waves-effect"><a href="i.php">I</a></li>
        <li class="waves-effect"><a href="j.php">J</a></li>
        <li class="waves-effect"><a href="k.php">K</a></li>
        <li class="waves-effect"><a href="l.php">L</a></li>
        <li class="waves-effect"><a href="m.php">M</a></li>
        <li class="waves-effect"><a href="n.php">N</a></li>
        <li class="waves-effect"><a href="o.php">O</a></li>
        <li class="waves-effect"><a href="p.php">P</a></li>
        <li class="waves-effect"><a href="q.php">Q</a></li>
        <li class="waves-effect"><a href="r.php">R</a></li>
        <li class="waves-effect"><a href="s.php">S</a></li>
        <li class="waves-effect"><a href="t.php">T</a></li>
        <li class="waves-effect"><a href="u.php">U</a></li>
        <li class="waves-effect active"><a href="v.php">v</a></li>
        <li class="waves-effect"><a href="x.php">x</a></li>
        <li class="waves-effect"><a href="y.php">Y</a></li>
        <li class="waves-effect"><a href="z.php">Z</a></li>
        <hr class="z-depth-3">
    </ul>
</div>
<section class="ss hide-on-med-and-down">
    <div class="card ss1">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator responsive-img" src="Hackathon/V/Vacio/Vacio/1-UHMEGxV3XbLVRoZmG2-OnA.jpeg">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Vacio<i
                        class="material-icons right">more_vert</i></span>
            <p><a href="#">Ver más</a></p>
        </div>
        <div class="card-reveal black-text left-align">
            <span class="card-title grey-text text-darken-4">Vacio<i class="material-icons right">close</i></span>
            <p>Vacio:
                ausencia total de material en los elementos, el cual existe dentro de un volumen dado del espacio. La
                existencia de un vacío perfecto en el interior de un espacio cerrado con absolutamente nada adentro, no
                es posible.</p>
            <div class="center center-block i">
                <img src="Hackathon/V/Vacio/Vacio/1-UHMEGxV3XbLVRoZmG2-OnA.jpeg" alt=""
                     class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/Vacio/Vacio/basura-espacial.jpg" alt=""
                     class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/Vacio/Vacio/descarga.jpg" alt="" class="responsive-img z-depth-3 materialboxed">
            </div>
        </div>
    </div>
    <div class="card ss1">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator responsive-img" src="Hackathon/V/vertebrado/vertebrados/vertebrado.jpg">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Vertebrado<i
                        class="material-icons right">more_vert</i></span>
            <p><a href="#">Ver más</a></p>
        </div>
        <div class="card-reveal black-text left-align">
            <span class="card-title grey-text text-darken-4">Vertebrado<i class="material-icons right">close</i></span>
            <p>Vertebrado:
                Un gran grupo taxonómico que consiste de cualquier organismo con un esqueleto interno que contiene una
                columna vertebral segmentada o espina dorsal. Los vertebrados incluyen, los pescados, los anfibios, los
                reptiles, los pájaros y los mamíferos.</p>
            <div class="center center-block i">
                <img src="Hackathon/V/vertebrado/vertebrados/vertebrado.jpg" alt=""
                     class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/vertebrado/vertebrados/CLASIFICACION%20DE%20LOS%20ANIMALES%20vertebrados.jpg"
                     alt="" class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/vertebrado/vertebrados/descarga%20(1).jpg" alt=""
                     class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/vertebrado/vertebrados/gato.JPG" alt=""
                     class="responsive-img z-depth-3 materialboxed">
            </div>
        </div>
    </div>
    <div class="card ss1">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator responsive-img" src="Hackathon/V/Virus/virus/descarga.jpg">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Virus<i
                        class="material-icons right">more_vert</i></span>
            <p><a href="#">Ver más</a></p>
        </div>
        <div class="card-reveal black-text left-align">
            <span class="card-title grey-text text-darken-4">Virus<i class="material-icons right">close</i></span>
            <p></p>
            <div class="center center-block i">
                <img src="Hackathon/V/Virus/virus/descarga.jpg" alt="" class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/Virus/virus/images.jpg" alt="" class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/Virus/virus/virus_In.jpg" alt="" class="responsive-img z-depth-3 materialboxed">
            </div>
        </div>
    </div>
    <?php
    $i = 0;
    $fp = fopen("../definiendo/v.txt", "r") or die('no se pudo conectar');
    while (!feof($fp)) {
        $buffer = fgets($fp, 100);
        $buf[$i] = $buffer;
        $i = $i + 1;
        if ($i == 4) {

            ?>
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator responsive-img" src="<?php echo $buf[0]; ?>">
                </div>
                <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><?php echo $buf[1];
                $r = $buf[1]; ?><i
                        class="material-icons right">more_vert</i></span>
                    <p><a href="#">Ver más</a></p>
                </div>
                <div class="card-reveal black-text left-align">
                    <span class="card-title grey-text text-darken-4"><?php echo $r; ?><i class="material-icons right">close</i></span>
                    <p>Nombre:<?php echo $buf[2]; ?></p>
                    <p><?php echo $buf[3]; ?></p>
                </div>
            </div>
            <?php
            $i = 0;
        }
    }
    fclose($fp);
    ?>
</section>
<section class="ss hide-on-med-and-up">
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator responsive-img" src="Hackathon/V/Vacio/Vacio/1-UHMEGxV3XbLVRoZmG2-OnA.jpeg">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Vacio<i
                        class="material-icons right">more_vert</i></span>
            <p><a href="#">Ver más</a></p>
        </div>
        <div class="card-reveal black-text left-align">
            <span class="card-title grey-text text-darken-4">Vacio<i class="material-icons right">close</i></span>
            <p>Vacio:
                ausencia total de material en los elementos, el cual existe dentro de un volumen dado del espacio. La
                existencia de un vacío perfecto en el interior de un espacio cerrado con absolutamente nada adentro, no
                es posible.</p>
            <div class="center center-block i">
                <img src="Hackathon/V/Vacio/Vacio/1-UHMEGxV3XbLVRoZmG2-OnA.jpeg" alt=""
                     class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/Vacio/Vacio/basura-espacial.jpg" alt=""
                     class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/Vacio/Vacio/descarga.jpg" alt="" class="responsive-img z-depth-3 materialboxed">
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator responsive-img" src="Hackathon/V/vertebrado/vertebrados/vertebrado.jpg">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Vertebrado<i
                        class="material-icons right">more_vert</i></span>
            <p><a href="#">Ver más</a></p>
        </div>
        <div class="card-reveal black-text left-align">
            <span class="card-title grey-text text-darken-4">Vertebrado<i class="material-icons right">close</i></span>
            <p>Vertebrado:
                Un gran grupo taxonómico que consiste de cualquier organismo con un esqueleto interno que contiene una
                columna vertebral segmentada o espina dorsal. Los vertebrados incluyen, los pescados, los anfibios, los
                reptiles, los pájaros y los mamíferos.</p>
            <div class="center center-block i">
                <img src="Hackathon/V/vertebrado/vertebrados/vertebrado.jpg" alt=""
                     class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/vertebrado/vertebrados/CLASIFICACION%20DE%20LOS%20ANIMALES%20vertebrados.jpg"
                     alt="" class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/vertebrado/vertebrados/descarga%20(1).jpg" alt=""
                     class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/vertebrado/vertebrados/gato.JPG" alt=""
                     class="responsive-img z-depth-3 materialboxed">
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
            <img class="activator responsive-img" src="Hackathon/V/Virus/virus/descarga.jpg">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Virus<i
                        class="material-icons right">more_vert</i></span>
            <p><a href="#">Ver más</a></p>
        </div>
        <div class="card-reveal black-text left-align">
            <span class="card-title grey-text text-darken-4">Virus<i class="material-icons right">close</i></span>
            <p></p>
            <div class="center center-block i">
                <img src="Hackathon/V/Virus/virus/descarga.jpg" alt="" class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/Virus/virus/images.jpg" alt="" class="responsive-img z-depth-3 materialboxed">
                <img src="Hackathon/V/Virus/virus/virus_In.jpg" alt="" class="responsive-img z-depth-3 materialboxed">
            </div>
        </div>
    </div>
    <?php
    $i = 0;
    $fp = fopen("../definiendo/v.txt", "r") or die('no se pudo conectar');
    while (!feof($fp)) {
        $buffer = fgets($fp, 100);
        $buf[$i] = $buffer;
        $i = $i + 1;
        if ($i == 4) {

            ?>
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator responsive-img" src="<?php echo $buf[0]; ?>">
                </div>
                <div class="card-content">
            <span class="card-title activator grey-text text-darken-4"><?php echo $buf[1];
                $r = $buf[1]; ?><i
                        class="material-icons right">more_vert</i></span>
                    <p><a href="#">Ver más</a></p>
                </div>
                <div class="card-reveal black-text left-align">
                    <span class="card-title grey-text text-darken-4"><?php echo $r; ?><i class="material-icons right">close</i></span>
                    <p>Nombre:<?php echo $buf[2]; ?></p>
                    <p><?php echo $buf[3]; ?></p>
                </div>
            </div>
            <?php
            $i = 0;
        }
    }
    fclose($fp);
    ?>
</section>
<div class="container center center-block">
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header">Aportaciones a nuevos terminos</div>
            <div class="collapsible-body">
                <form action="v.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="titulo" placeholder="Palabra" required="">
                    <input type="text" name="subtitulo" placeholder="Nombre Cientifico" required="">
                    <input type="text" name="comentario" placeholder="Significado">
                    <p>Imagen:</p>
                    <div>
                        <input type="file" value="Subir Archivo" name="subir" class="btn">
                    </div>
                    <br>
                    <br>
                    <input type="submit" value="Publicar" class="btn">
                </form>
                <?php
                if ($_POST) {
                    $nombre = $_FILES['subir']['name'];
                    $b = '../definiendo/subir/';
                    $titulo = $_POST['titulo'];
                    $subtitulo = $_POST['subtitulo'];
                    $comentario = $_POST['comentario'];
                    $f = '../definiendo/';
                    $archivo = $f . 'v.txt';
                    $fp = fopen($archivo, 'a');
                    fwrite($fp, $b . $nombre . "\r\n");
                    fwrite($fp, $titulo . "\r\n");
                    fwrite($fp, $subtitulo . "\r\n");
                    fwrite($fp, $comentario . "\r\n");
                    fclose($fp);

                    $carpeta = '../definiendo/subir/';
                    opendir($carpeta);
                    $pait = $carpeta . $_FILES['subir']['name'];
                    copy($_FILES['subir']['tmp_name'], $pait);
                    $i = 1;
                }
                ?>
            </div>
        </li>
    </ul>
</div>
<section class="center center-align">
    <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
</section>
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
                           href="https://www.youtube.com/channel/UC-qmV7Ub-0-EUDjVzAGonkA" target="_blank">Youtube</a>
                    </li>
                    <li><a class="grey-text text-lighten-3"
                           href="https://www.facebook.com/Diccionario-de-la-Tierra-1713385772297810/?ref=bookmarks"
                           target="_blank">Facebook</a></li>
                    <li><a class="grey-text text-lighten-3" href="http://www.androidcreator.com/app257808"
                           target="_blank">App Store</a></li>
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
<script type="text/javascript" src="../../js/nuevo.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>
<script type="text/javascript" src="../../js/personal.js"></script>
</html>