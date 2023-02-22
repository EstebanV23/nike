<?php
include("../conexion.php");
$data = new database();

if (!empty($_GET['cod']))
{
    $cod = $_GET['cod'];
    $dataproducto = $data -> leer_dato($cod);
    $producto = mysqli_fetch_object($dataproducto);

    $nombre = $producto -> pro_nombre;
    $precio = $producto -> pro_precio;
    $categoria = $producto -> pro_categoria;
    $estilo = $producto -> pro_estilo;
    $genero = $producto -> pro_genero;
    $color = $producto -> pro_color;
    $descripcion = $producto -> pro_descripcion;
    $imagen = $producto -> pro_imagen;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&family=Fjalla+One&family=Indie+Flower&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mukta:wght@200;300;400;500;600;700;800&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&family=Shadows+Into+Light&family=Spline+Sans+Mono:wght@300;400;500;600;700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f4ebeebd17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/crok.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilocomprar.css">
    <link rel="shortcut icon" href="img/LogoN.png" type="image/x-icon">
    <title>Nike</title>
</head>
<body>
    <!-- Este head es utilizado para dejar la navegacion arriba -->
    <header class="header">
        <!-- parte del header para una pequeña publicidad -->
        <section class="header-publicidad">
            <div class="publicidad-link">
                <img src="img/LogoBlanco.png" alt="Logo" class="publicidad-logo">
                <a href="secciones.php"><p>Conoce todos los productos disponibles para ti, entra aquí</p></a>
            </div>
            <div class="publicidad-text">
                <i class="fa-solid fa-dolly car"></i>
                <p>Envios gratis a nivel nacional</p>
            </div>
        </section>
        <!-- fin de la parte del header para la publicidad -->

        <!-- Parte del header con la navegacion y los iconos -->
        <section class="header-main">
            <a href="../index.php"><img src="img/Logo.png" alt="Logo" class="header-logo"></a>

            <!-- Menú de navegacion con links -->
            <nav class="navegacion" id="navegacion">
                <a href="secciones.php?genero=hombre" class="navegacion-link heavy" id="hombre">Hombres</a>
                <a href="secciones.php?genero=mujer" class="navegacion-link heavy" id="mujer">Mujeres</a>
                <a href="secciones.php?genero=niño" class="navegacion-link" id="niño">Niños</a>
                <a href="secciones.php?genero=niña" class="navegacion-link" id="niña">Niñas</a>
                <a href="secciones.php?novedad=novedad" class="navegacion-link" id="novedad">Novedades</a>
                      
                <!-- Div para que salga el menu despegable -->
                <div class="header-menu-despegable" id="div">
                    <i class='fa-solid fa-arrow-left-long arrow' id="arrow"></i>
                    <div class="despegable-cont" id="despegable">
                        
                    </div>
                </div>
                <!-- fin del menu despegable -->
                <i class="fa-solid fa-xmark salir" id="salir"></i>
            </nav>
            <!-- fin del menú de los links -->

            <!-- Boton para menú en el cel -->
            <i class="fa-solid fa-bars menu_cel" id="menu"></i>

            <!-- Boton para el usuario y un carrito de compras -->
            <div class="header-icons">
                <a href="../Crud/Login/login.php"><i class="fa-solid fa-user icons"></i></a>
                <a href="../Crud/Login/login.php"><i class="fa-solid fa-wrench icons"></i></a>
            </div>
            <!-- Fin de los icons -->

        </section>
        <!-- fin de la parte principal del header -->
    </header>
    <!-- fin de head -->

    <!-- Empieza el contenido principal contiene el banner de video con algunos productos -->
    <main class="main">
        <div class="main-header">
            <a href="secciones.php"><i class="fa-solid fa-arrow-left black"></i> Volver atras</a>
        </div>
        <div class="main-contenido">
            <div class="contenido-imagen">
                <img src="data:image/*;base64, <?php echo base64_encode($imagen); ?>" class="contenido-img">
            </div>
            <div class="contenido-info">
                <h2 id="nombre"><?php echo $nombre; ?></h2>
                <p id="precio">$ <?php echo number_format($precio); ?>COP</p>
                <p><?php echo $descripcion; ?></p>
                <p>Genero: <?php echo ucwords($genero); ?></p>
                <p>Categoria: <?php echo ucwords($categoria); ?></p>
                <p>Estilo: <?php echo ucwords($estilo); ?></p>
                <label for="color">Color: <input type="color" id="color" value="<?php echo $color; ?>" disabled></label>
                
            </div>
            <div class="contenido-botton">
                <button class="botton" id="boton">Comprar</button>
            </div>
        </div>
        <div class="video-contenedor">
            <iframe style="width: 100%; height: 400px;" src="https://www.youtube.com/embed/MbjBFMKT6Xs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="video" autoplay></iframe>
        </div>
    </main>
    <!-- Fin del contenido principal -->
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-links">
            <div class="links-column">
                <h3>NOVEDOSO</h3>
                <a href="secciones.php?genero=hombre&novedad=novedad">Hombres</a>
                <a href="secciones.php?genero=mujer&novedad=novedad">Mujeres</a>
                <a href="secciones.php?genero=niño&novedad=novedad">Niños</a>
                <a href="secciones.php?genero=niña&novedad=novedad">Niñas</a>
                <a href="secciones.php?categoria=calzado& novedad=novedad">Zapatos</a>
            </div>
            <div class="links-column">
                <h3>ESTILO</h3>
                <a href="secciones.php?estilo=shorts">Shorts</a>
                <a href="secciones.php?estilo=basquetbol">Básquetbol</a>
                <a href="secciones.php?estilo=gorros">Gorros</a>
                <a href="secciones.php?estilo=life">LifeStyle</a>
                <a href="secciones.php?estilo=mochilas">Mochilas</a>
                <a href="secciones.php?estilo=gorras">Gorras</a>
                <a href="secciones.php?estilo=jordan">Jordan</a>
            </div>
            <div class="links-column">
                <h3>CATEGORIAS</h3>
                <a href="secciones.php?categoria=calzado">Calzado</a>
                <a href="secciones.php?categoria=conjuntos">Conjuntos</a>
                <a href="secciones.php?categoria=ropa">Ropa</a>
                <a href="secciones.php?categoria=accesorios">Accesorios</a>
            </div>
            <div class="links-column">
                <h3>SIGUENOS</h3>
                <a href="https://es-la.facebook.com/nike/" target="_blank"><i class="fa-brands fa-facebook redes"></i></a>
                <a href="https://www.instagram.com/nike/?hl=es" target="_blank"><i class="fa-brands fa-instagram redes"></i></a>
                <a href="https://www.instagram.com/brayanvillamizar23/?hl=es" target="_blank"><i class="fa-solid fa-shoe-prints redes"></i></a>
            </div>
        </div>
        <div class="footer-info">
            <div class="info-column">
                <h3>DATOS</h3>
                <p>Direccion: Cra 17 #6-45</p>
                <p>Tel: 3167324940</p>
                <p>Correo: Info@nike.com</p>
                <p>Desarrolador: Brayan Villamizar</p>
                <h3>¿AYUDA?</h3>
                <p>Servicio al cliente</p>
                <p>Contacto con un asesor</p>
                <p>Saber talla</p>
                <h3>TIENDA</h3>
                <p>Ver tienda física</p>
            </div>
            <div class="footer-mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.1025463664337!2d-73.11137918474849!3d7.1141139179878685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e683fe73ca04439%3A0x7fbd724afa96d8f3!2sFair%20Play!5e0!3m2!1ses-419!2sco!4v1654192675358!5m2!1ses-419!2sco" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </footer>
    <!-- fin del footer -->
    <script src="js/compras.js"></script>
    <script src="js/banner.js"></script>
    <script src="js/mostrar.js"></script>
</body>
</html>

<?php
}
else
{
    echo "Que haces aquí, solo conoces el link, por qué entras?";
}
?>