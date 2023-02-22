<?php
// ucwords();
include("../conexion.php");

$data = new database();

if(!empty($_GET['buscar']))
{
    $nombre = $_GET['buscar'];
    $lista = $data -> leer_direc_nom($nombre);
}
else if(!empty($_GET['genero']) && !empty($_GET['novedad']) && !empty($_GET['categoria']))
{
    $genero = $_GET['genero'];
    $categoria = $_GET['categoria'];
    $novedad = $_GET['novedad'];
    $lista = $data -> leer_direc_cgn($categoria, $genero, $novedad);
}
else if(!empty($_GET['categoria']) && !empty($_GET['genero']) && !empty($_GET['estilo']))
{
    $genero = $_GET['genero'];
    $categoria = $_GET['categoria'];
    $estilo = $_GET['estilo'];
    $lista = $data -> leer_direc_med($categoria, $genero, $estilo);
}
else if(!empty($_GET['genero']) && !empty($_GET['novedad']))
{
    $genero = $_GET['genero'];
    $novedad = $_GET['novedad'];
    $lista = $data -> leer_direc_gn($genero, $novedad);
}
else if(!empty($_GET['generos']) && !empty($_GET['novedad']))
{
    $novedad = $_GET['novedad'];
    $lista = $data -> leer_direc_gns($novedad);
}
else if(!empty($_GET['categoria']) && !empty($_GET['novedad']))
{
    $categoria = $_GET['categoria'];
    $novedad = $_GET['novedad'];
    $lista = $data -> leer_direc_cn($categoria, $novedad);
}
else if(!empty($_GET['genero']) && !empty($_GET['categoria']))
{
    $categoria = $_GET['categoria'];
    $genero = $_GET['genero'];
    $lista = $data -> leer_direc_two($categoria, $genero);
}
else if(!empty($_GET['nombre']))
{
    $nombre = $_GET['nombre'];
    $lista = $data -> leer_direc_nom($nombre);
}
else if(!empty($_GET['categoria']))
{
    $categoria = $_GET['categoria'];
    $lista = $data -> leer_direc_c($categoria);
}
else if(!empty($_GET['estilo']))
{
    $estilo = $_GET['estilo'];
    $lista = $data -> leer_direc_e($estilo);
}
else if(!empty($_GET['categoria']))
{
    $categoria = $_GET['categoria'];
    $lista = $data -> leer_direc_c($categoria);
}
else if(!empty($_GET['genero']))
{
    $genero = $_GET['genero'];
    $lista = $data -> leer_direc_g($genero);
}
else if(!empty($_GET['novedad']))
{
    $novedad = $_GET['novedad'];
    $lista = $data -> leer_direc_n($novedad);
}
else
{
    $lista = $data -> leer_tabla();
}

$productos = mysqli_fetch_object($lista);

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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/crok.css">
    <link rel="stylesheet" href="css/estilosecciones.css">
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
    <main class="maine">
        <section class="seccion">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Hombre
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                <div class="accordion-body">
                <a href='secciones.php?genero=hombre&categoria=calzado'><h5>CALZADO</h5></a><ul><li><a href='secciones.php?genero=hombre&categoria=calzado&estilo=deportivos'>Deportivos</a></li><li><a href='secciones.php?genero=hombre&categoria=calzado&estilo=life'>LifeStyle</a></li><li><a href='secciones.php?genero=hombre&categoria=calzado&estilo=sunning'>Sunning</a></li><li><a href='secciones.php?genero=hombre&categoria=calzado&estilo=jordan'>Jordan</a></li><li><a href='secciones.php?genero=hombre&categoria=calzado&estilo=sandalias'>Sandalias</a></li></ul>
                <a href='secciones.php?genero=hombre&categoria=ropa'><h5>ROPA</h5></a><ul><li><a href='secciones.php?genero=hombre&categoria=ropa&estilo=playeras'>Playeras</a></li><li><a href='secciones.php?genero=hombre&categoria=ropa&estilo=shorts'>Shorts</a></li><li><a href='secciones.php?genero=hombre&categoria=ropa&estilo=polos'>Polos</a></li></ul>
                <a href='secciones.php?genero=hombre&categoria=conjuntos'><h5>CONJUNTOS</h5></a><ul><li><a href='secciones.php?genero=hombre&categoria=conjuntos&estilo=futbol'>Futbol</a></li><li><a href='secciones.php?genero=hombre&categoria=conjuntos&estilo=basquetbol'>Basquetbol</a></li><li><a href='secciones.php?genero=hombre&categoria=conjuntos&estilo=gym'>Gym</a></li></ul>
                <a href='secciones.php?genero=hombre&categoria=accesorios'><h5>ACCESORIOS</h5></a><ul><li><a href='secciones.php?genero=hombre&categoria=accesorios&estilo=mochilas'>Mochilas</a></li><li><a href='secciones.php?genero=hombre&categoria=accesorios&estilo=gorros'>Gorros</a></li><li><a href='secciones.php?genero=hombre&categoria=accesorios&estilo=gorras'>Gorras</a></li><li><a href='secciones.php?genero=hombre&categoria=accesorios&estilo=apple'>Apple watch nike</a></li></ul>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Mujer
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <a href='secciones.php?genero=mujer&categoria=calzado'><h5>CALZADO</h5></a><ul><li><a href='secciones.php?genero=mujer&categoria=calzado&estilo=life'>Lifestyle</a></li><li><a href='secciones.php?genero=mujer&categoria=calzado&estilo=running'>Running</a></li><li><a href='secciones.php?genero=mujer&categoria=calzado&estilo=softball'>Softball</a></li><li><a href='secciones.php?genero=mujer&categoria=calzado&estilo=tenis'>Tenis</a></li></ul>
                <a href='secciones.php?genero=mujer&categoria=ropa'><h5>ROPA</h5></a><ul><li><a href='secciones.php?genero=mujer&categoria=ropa&estilo=pants'>Pants</a></li><li><a href='secciones.php?genero=mujer&categoria=ropa&estilo=leggins'>Leggins</a></li><li><a href='secciones.php?genero=mujer&categoria=ropa&estilo=shorts'>Shorts</a></li><li><a href='secciones.php?genero=mujer&categoria=ropa&estilo=nikep'>Nike Pro</a></li></ul>
                <a href='secciones.php?genero=mujer&categoria=accesorios'><h5>ACCESORIOS</h5></a><ul><li><a href='secciones.php?genero=mujer&categoria=accesorios&estilo=mochilas'>Mochilas</a></li><li><a href='secciones.php?genero=mujer&categoria=accesorios&estilo=gorros'>Gorros - Vandas para el cabello</a></li><li><a href='secciones.php?genero=mujer&categoria=accesorios&estilo=apple'>Apple Watch Nike</a></li></ul>
                <a href='secciones.php?genero=mujer&categoria=conjuntos'><h5>CONJUNTOS</h5></a><ul><li><a href='secciones.php?genero=mujer&categoria=conjuntos&estilo=running'>Running</a></li><li><a href='secciones.php?genero=mujer&categoria=conjuntos&estilo=nikes'>Nike Sportswear</a></li><li><a href='secciones.php?genero=mujer&categoria=conjuntos&estilo=voleibol'>Vóleibol</a></li><li><a href='secciones.php?genero=mujer&categoria=conjuntos&estilo=basquetbol'>Básquetbol</a></li></ul>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Niño
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <a href='secciones.php?genero=niño&categoria=calzado'><h5>CALZADO NIÑO</h5></a><ul><li><a href='secciones.php?genero=niño&categoria=calzado&estilo=futbol'>Fútbol</a></li><li><a href='secciones.php?genero=niño&categoria=calzado&estilo=sandalias'>Sandalias</a></li><li><a href='secciones.php?genero=niño&categoria=calzado&estilo=nikef'>Nike Flyease</a></li><li><a href='secciones.php?genero=niño&categoria=calzado&estilo=running'>Running</a></li></ul>
                <a href='secciones.php?genero=niño&categoria=ropa'><h5>ROPA NIÑO</h5></a><ul><li><a href='secciones.php?genero=niño&categoria=ropa&estilo=preescolar'>Preescolar</a></li><li><a href='secciones.php?genero=niño&categoria=ropa&estilo=nikep'>Nike pro</a></li><li><a href='secciones.php?genero=niño&categoria=ropa&estilo=sudaderas'>Sudaderas</a></li></ul>
                <a href='secciones.php?genero=niño&categoria=conjuntos'><h5>CONJUNTOS</h5></a><ul><li><a href='secciones.php?genero=niño&categoria=conjuntos&estilo=combinados'>Combinados</a></li><li><a href='secciones.php?genero=niño&categoria=conjuntos&estilo=tallas'>Tallas amplias</a></li><li><a href='secciones.php?genero=niño&categoria=conjuntos&estilo=chamarras'>Chamarras</a></li></ul>
                <a href='secciones.php?genero=niño&categoria=accesorios'><h5>ACCESORIOS</h5></a><ul><li><a href='secciones.php?genero=niño&categoria=accesorios&estilo=mochilas'>Mochilas</a></li><li><a href='secciones.php?genero=niño&categoria=accesorios&estilo=gorros'>Gorros</a></li><li><a href='secciones.php?genero=niño&categoria=accesorios&estilo=calcetines'>Calcetines</a></li></ul>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Niña
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                <div class="accordion-body">
                <a href='secciones.php?genero=niña&categoria=calzado'><h5>CALZADO NIÑA</h5></a><ul><li><a href='secciones.php?genero=niña&categoria=calzado&estilo=preescolar'>Preescolar</a></li><li><a href='secciones.php?genero=niña&categoria=calzado&estilo=basquetbol'>Básquetbol</a></li><li><a href='secciones.php?genero=niña&categoria=calzado&estilo=nikef'>Nike Flyease</a></li><a href='secciones.php?genero=niña&categoria=calzado&estilo=running'>Running</a></li></ul>
                <a href='secciones.php?genero=niña&categoria=ropa'><h5>ROPA NIÑA</h5></a><ul><li><a href='secciones.php?genero=niña&categoria=ropa&estilo=preescolar'>Preescolar</a></li><li><a href='secciones.php?genero=niña&categoria=ropa&estilo=bras'>Bras deportivos</a></li><li><a href='secciones.php?genero=niña&categoria=ropa&estilo=faldas'>Faldas</a></li></ul>
                <a href='secciones.php?genero=niña&categoria=conjuntos'><h5>CONJUNTOS</h5></a><ul><li><a href='secciones.php?genero=niña&categoria=conjuntos&estilo=combinados'>Combinados</a></li><li><a href='secciones.php?genero=niña&categoria=conjuntos&estilo=tallas'>Tallas amplias</a></li><li><a href='secciones.php?genero=niña&categoria=conjuntos&estilo=chamarras'>Chamarras</a></li></ul>
                <a href='secciones.php?genero=niña&categoria=accesorios'><h5>ACCESORIOS</h5></a><ul><li><a href='secciones.php?genero=niña&categoria=accesorios&estilo=mochilas'>Mochilas</a></li><li><a href='secciones.php?genero=niña&categoria=accesorios&estilo=gorros'>Gorros</a></li><li><a href='secciones.php?genero=niña&categoria=accesorios&estilo=calcetines'>Calcetines</a></li></ul>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Novedades
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <a href='secciones.php?genero=hombre&novedad=novedad'><h3>HOMBRE</h3></a><ul><li><a href='secciones.php?genero=hombre&categoria=calzado&novedad=novedad'>Calzado</a></li><li><a href='secciones.php?genero=hombre&categoria=ropa&novedad=novedad'>Ropa</a></li><li><a href='secciones.php?genero=hombre&categoria=accesorios&novedad=novedad'>Equipo</a> </ul>
                <a href='secciones.php?genero=mujer&novedad=novedad'><h3>MUJERES</h3></a><ul><li><a href='secciones.php?genero=mujer&categoria=calzado&novedad=novedad'>Calzado</a></li><li><a href='secciones.php?genero=mujer&categoria=ropa&novedad=novedad'>Ropa</a></li><li><a href='secciones.php?genero=mujer&categoria=accesorios&novedad=novedad'>Equipo</a></li></ul>
                <a href='secciones.php?generos=niños&novedad=novedad'><h3>NIÑOS</h3></a><ul><li><a href='secciones.php?genero=niño&categoria=calzado&novedad=novedad'>Calzado niño</a></li><li><a href='secciones.php?genero=niño&categoria=ropa&novedad=novedad'>Ropa niños</a></li><li><a href='secciones.php?genero=niña&categoria=calzado&novedad=novedad'>Calzado niña</a></li><li><a href='secciones.php?genero=niña&categoria=ropa&novedad=novedad'>Ropa niña</a></li></ul>
                <a href='secciones.php?novedad=novedad'><h3>NUEVOS</h3></a><ul><li><a href='secciones.php?nombre=air&novedad=novedad'>Lo mejor de Air</a></li><li><a href='secciones.php?novedad=novedad'>Estilo de temporada</a></li><li><a href='secciones.php?novedad=novedad'>Todas las novedades</a></li></ul>
                </div>
                </div>
            </div>
            </div>
            <form method="get" class="">
                <input type="text" name="buscar" id="buscar" placeholder="Buscar por nombre" class="form-control mt-3" autocomplete="off">
                <input type="submit" value="Buscar" class="btn">
            </form>
        </section>
        <section class="productos">
        <?php
        
        if ($productos != null)
        {
            while($productos)
            {
                $nombre = $productos -> pro_nombre;
                $codigo = $productos -> pro_cod;
                $precio = $productos -> pro_precio;
                $genero = $productos -> pro_genero;
                $categoria = $productos -> pro_categoria;
                $estilo = $productos -> pro_estilo;
                $novedad = $productos -> pro_novedad;
                $imagen = $productos -> pro_imagen;
                $productos = mysqli_fetch_object($lista);
        ?>
            <div class="productos-card">
                <div class="card-imagen">
                    <img src="data:image/*;base64,<?php echo base64_encode($imagen); ?>" class="img">
                </div>
                <div class="card-info">
                    <?php if($novedad != null) echo "<h5 class='novedad'>*Lo ultimo</h5>"; else echo "<h5 class='space'></h5>"?>
                    <h3><?php echo $nombre; ?></h3>
                    <p>$<?php echo number_format($precio); ?>COP</p>
                    <p><?php echo ucwords($genero); ?> - <?php echo ucwords($categoria); ?> - <?php echo ucwords($estilo); ?></p>
                </div>
                <a href="comprar.php?cod=<?php echo $codigo; ?>" class="info-button">Comprar</a>
            </div>
        <?php
            }
        }
        else
        {
            echo "No hay productos";
        }
        
        ?>
        </section>
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
                <a href="secciones.php?categoria=calzado&novedad=novedad">Zapatos</a>
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
    <script src="js/banner.js"></script>
    <script src="js/mostrar.js"></script>
</body>
</html>