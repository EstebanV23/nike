<?php 
session_start();
session_destroy();
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
    <link rel="stylesheet" href="Pagina_principal/css/normalize.css">
    <link rel="stylesheet" href="Pagina_principal/css/crok.css">
    <link rel="stylesheet" href="Pagina_principal/css/estilos.css">
    <link rel="shortcut icon" href="Pagina_principal/Pagina_principal/img/LogoN.png" type="image/x-icon">
    <title>Nike</title>
</head>
<body>
  
  <!-- Este head es utilizado para dejar la navegacion arriba -->
    <header class="header">
        <!-- parte del header para una pequeña publicidad -->
        <section class="header-publicidad">
            <div class="publicidad-link">
                <img src="Pagina_principal/img/LogoBlanco.png" alt="Logo" class="publicidad-logo">
                <a href="Pagina_principal/secciones.php"><p>Conoce todos los productos disponibles para ti, entra aquí</p></a>
            </div>
            <div class="publicidad-text">
                <i class="fa-solid fa-dolly car"></i>
                <p>Envios gratis a nivel nacional</p>
            </div>
        </section>
        <!-- fin de la parte del header para la publicidad -->

        <!-- Parte del header con la navegacion y los iconos -->
        <section class="header-main">
            <a href="Pagina_principal/index.php"><img src="Pagina_principal/img/Logo.png" alt="Logo" class="header-logo"></a>

            <!-- Menú de navegacion con links -->
            <nav class="navegacion" id="navegacion">
                <a href="Pagina_principal/secciones.php?genero=hombre" class="navegacion-link heavy" id="hombre">Hombres</a>
                <a href="Pagina_principal/secciones.php?genero=mujer" class="navegacion-link heavy" id="mujer">Mujeres</a>
                <a href="Pagina_principal/secciones.php?genero=niño" class="navegacion-link" id="niño">Niños</a>
                <a href="Pagina_principal/secciones.php?genero=niña" class="navegacion-link" id="niña">Niñas</a>
                <a href="Pagina_principal/secciones.php?novedad=novedad" class="navegacion-link" id="novedad">Novedades</a>
                      
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
                <a href="Crud/Login/login.php"><i class="fa-solid fa-user icons"></i></a>
            </div>
            <!-- Fin de los icons -->
            
          </section>
          <!-- fin de la parte principal del header -->
        </header>
        <!-- fin de head -->
        
        <!-- Creamos un banner para el inicio de la pagina -->
        <section class="banner">
          <div class="banner-contenido">
            <h1 class="banner-tittle">NIKE</h1>
            <h3 class="banner-subtittle">Lo mejor para los mejores</h3>
            <p class="banner-text">Mira todos nuestros productos</p>
            <a href="Pagina_principal/secciones.php" class="banner-button">Ver Mas</a>
        </div>
        <img src="Pagina_principal/img/zapato.png" class="banner-shoe">
    </section>
    <!-- Fin del banner -->

    <!-- Empieza el contenido principal contiene el banner de video con algunos productos -->
    <main class="main">
        <!-- Inicio del banner con video y texto -->
        <section class="main-banner-video">
            <video src="Pagina_principal/img/Video.mp4" muted autoplay loop class="banner-video"></video>
            <div class="banner-video-contenido">
                <img src="Pagina_principal/img/Logo.png" alt="Logo" class="banner-video-logo">
                <h2 class="banner-video-text">JUST DO IT</h2>
            </div>
        </section>
        <!-- Fin del banner con video y texto -->

        <!-- Seccion para los productos destacados -->
        <section class="main-productos">
          <!-- Division para el titulo y el boton -->
          <div class="productos-header">
            <!-- Division para el titulo -->
            <div class="productos-contenido">
              <h2 class="producto-contenido-tittle">LA TENDENCIA DE LA MODA</h2>
              <p class="producto-contenido-text">Estar a la moda siempre es bueno, pero cuando lo haces con Nike, estás en tendencia</p>
                </div>
                <!-- fin de la division del titulo -->

                <a href="Pagina_principal/secciones.php?novedad=novedad">Ver todos</a>   
            </div>
            <!-- fin de la divison del titulo y el boton -->

            <!-- Division para los productos, los cuales irán en cajas, con foto, precio y nombre -->
            <div class="productos">
              <?php
            require_once('conexion.php');

            $data = new database();

            $productos = $data -> leer_dato_novedad();
            $cont = 0;
            while ($producto = mysqli_fetch_object($productos))
            {
                if ($cont < 7){
                    $cod = $producto -> pro_cod;
                    $nombre = $producto -> pro_nombre;
                    $precio = $producto -> pro_precio;
                    $categoria = $producto -> pro_categoria;
                    $estilo = $producto -> pro_estilo;
                    $imagen = $producto -> pro_imagen;
            
            ?>
                <div class="productos-carta">
                    <div class="carta-img">
                    <img src="data:image/*;base64,<?php echo base64_encode($imagen); ?>">
                        <p><?php echo '$ ' . number_format($precio) . 'COP' ?></p>
                    </div>
                    <div class="carta-contenido">
                        <h3><?php echo $nombre ?></h3>
                        <p><?php echo $categoria . ' - ' . $estilo ?></p>
                        <a href="Pagina_principal/comprar.php?cod=<?php echo $cod ?>">Comprar</a>
                    </div>
                </div>
            <?php
                } else {
                  break;
                }
            $cont = $cont + 1;
            }
            ?>
            </div>
            <!-- fin de la division de los productos -->
        </section>
        <!-- fin de la seccion para productos -->

        <!-- Seccion para las categorias -->
        <section class="main-categorias">
            <h2 class="categoria-tittle">¿Que buscas?</h2>
            <div class="categorias-cards">
                <a href="Pagina_principal/secciones.php?genero=hombre" class="categorias ch">
                    <h3>Hombres</h3>
                </a>
                <a href="Pagina_principal/secciones.php?genero=mujer" class="categorias cm">
                    <h3>Mujeres</h3>
                </a>
                <a href="Pagina_principal/secciones.php?genero=niño" class="categorias cno">
                    <h3>Niños</h3>
                </a>
                <a href="Pagina_principal/secciones.php?genero=niña" class="categorias cna">
                    <h3>Niñas</h3>
                </a>
            </div>
        </section>
        <!-- fin de la seccion categorias -->
    </main>
    <!-- Fin del contenido principal -->
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-links">
            <div class="links-column">
                <h3>NOVEDOSO</h3>
                <a href="Pagina_principal/secciones.php?genero=hombre&novedad=novedad">Hombres</a>
                <a href="Pagina_principal/secciones.php?genero=mujer&novedad=novedad">Mujeres</a>
                <a href="Pagina_principal/secciones.php?genero=niño&novedad=novedad">Niños</a>
                <a href="Pagina_principal/secciones.php?genero=niña&novedad=novedad">Niñas</a>
                <a href="Pagina_principal/secciones.php?categoria=calzado& novedad=novedad">Zapatos</a>
            </div>
            <div class="links-column">
                <h3>ESTILO</h3>
                <a href="Pagina_principal/secciones.php?estilo=shorts">Shorts</a>
                <a href="Pagina_principal/secciones.php?estilo=basquetbol">Básquetbol</a>
                <a href="Pagina_principal/secciones.php?estilo=gorros">Gorros</a>
                <a href="Pagina_principal/secciones.php?estilo=life">LifeStyle</a>
                <a href="Pagina_principal/secciones.php?estilo=mochilas">Mochilas</a>
                <a href="Pagina_principal/secciones.php?estilo=gorras">Gorras</a>
                <a href="Pagina_principal/secciones.php?estilo=jordan">Jordan</a>
            </div>
            <div class="links-column">
                <h3>CATEGORIAS</h3>
                <a href="Pagina_principal/secciones.php?categoria=calzado">Calzado</a>
                <a href="Pagina_principal/secciones.php?categoria=conjuntos">Conjuntos</a>
                <a href="Pagina_principal/secciones.php?categoria=ropa">Ropa</a>
                <a href="Pagina_principal/secciones.php?categoria=accesorios">Accesorios</a>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.1025463664337!2d-73.11137918474849!3d7.1141139179878685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e683fe73ca04439%3A0x7fbd724afa96d8f3!2sFair%20Play!5e0!3m2!1ses-419!2sco!4v1654192675358!5m2!1ses-419!2sco" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </footer>
    <!-- fin del footer -->
    <script src="./Pagina_principal/js/banner.js"></script>
    <script src="./Pagina_principal/js/mostrar.js"></script>
</body>
</html>