<?php 
require_once '../validation-auth.php';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/crok.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="../../Pagina_principal/img/LogoN.png" type="image/x-icon">
    <title>Nike | Administrador</title>
</head>
<body>
    <!-- Este head es utilizado para dejar la navegacion arriba -->
    <header class="header" id="head">

        <!-- Parte del header con la navegacion y los iconos -->
        <section class="header-main">
            <a href="../../../index.php"><img src="../../Pagina_principal/img/Logo.png" alt="Logo" class="header-logo"></a>

            <!-- Menú de navegacion con links -->
            <nav class="navegacion" id="navegacion">
                <a href="../../../index.php" class="navegacion-link heavy">Inicio</a>
                <a href="../Agregar/agregar.php" class="navegacion-link heavy">Insertar</a>
                <a href="../Listar/listar.php" class="navegacion-link heavy">Listar</a>
                      
                <i class="fa-solid fa-xmark salir" id="salir"></i>
            </nav>
            <!-- fin del menú de los links -->

            <!-- Boton para menú en el cel -->
            <i class="fa-solid fa-bars menu_cel" id="menu"></i>

            <!-- Boton para el usuario y un carrito de compras -->
            <div class="header-icons">
                <a href="../Agregar/agregar.php"><i class="fa-solid fa-wrench icons"></i></a>
                <a href="../log-out.php"><i class="fa-solid fa-right-from-bracket icons"></i></a>
            </div>
            <!-- Fin de los icons -->

        </section>
        <!-- fin de la parte principal del header -->
    </header>
    <!-- fin de head -->

    <!-- Empieza el contenido principal -->
    <main class="main">
        <h1 class="tittle">Lista de productos</h1>
        <form action="listar.php" method="POST" class="form">
            <label>Buscar por:</label>
            <select name="genero" id="genero">
                <option selected value="">Género</option>
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
                <option value="niño">Niño</option>
                <option value="niña">Niña</option>
            </select>
            <select id="categorias" name="categorias">
                <option selected value="">Categoría</option>
                <option value="calzado">Calzado</option>
                <option value="ropa">Ropa</option>
                <option value="conjuntos">Conjuntos</option>
                <option value="accesorios">Accesorios</option>
            </select>
            <select id="estilos" name="estilos">
                <option selected value="">Estilos</option>
            </select>
            <input type="search" name="buscar" id="buscar" placeholder="Buscar nombre" autocomplete="off">
            <input type="checkbox" name="novedad" id="novedad" value="novedad"><label for="novedad">|Novedad</label>
            <input type="submit" value="Buscar">
        </form>
        <script src="js/cambiar.js"></script>
        <section class="contenido">
            <?php
            include("../../conexion.php");

            $data = new database();

            if(isset($_POST) && !empty($_POST))
            {
                $cat = $_REQUEST['categorias'];
                $gen = $_REQUEST['genero'];
                $est = $_REQUEST['estilos'];
                $nombre = $_POST["buscar"];
                if(isset($_REQUEST['novedad']))
                {
                    $nov = $_REQUEST['novedad'];
                }
                if(!empty($nombre))
                {
                    $tabla = $data -> leer_direc_nom($nombre);
                }
                else if(!empty($cat) && !empty($gen) && !empty($est) && !empty($nov))
                {
                    $tabla = $data -> leer_direc_full($cat, $gen, $est, $nov);
                }
                else if(!empty($cat) && !empty($gen) && !empty($est) && empty($nov))
                {
                    $tabla = $data -> leer_direc_med($cat, $gen, $est);
                }
                else if(!empty($cat) && !empty($gen) && empty($est) && empty($nov))
                {
                    $tabla = $data -> leer_direc_two($cat, $gen);
                }
                else if(!empty($cat) && empty($gen) && empty($est) && empty($nov))
                {
                    $tabla = $data -> leer_direc_c($cat);
                }
                else if(!empty($cat) && empty($gen) && empty($est) && !empty($nov))
                {
                    $tabla = $data -> leer_direc_cn($cat, $nov);
                }
                else if(empty($cat) && empty($gen) && empty($est) && !empty($nov))
                {
                    $tabla = $data -> leer_direc_n($nov);
                }
                else if(empty($cat) && !empty($gen) && empty($est) && empty($nov))
                {
                    $tabla = $data -> leer_direc_g($gen);
                }
                else if(empty($cat) && !empty($gen) && empty($est) && !empty($nov))
                {
                    $tabla = $data -> leer_direc_gn($cat, $nov);
                }
                else
                {
                    $tabla = $data -> leer_tabla();
                }
            }
            else
            {
                $tabla = $data -> leer_tabla();
            }

            $productos = mysqli_fetch_object($tabla);

            if ($productos != null)
            {
                while ($productos)
                {
                    $nombre = $productos -> pro_nombre;
                    $codigo = $productos -> pro_cod;
                    $precio = $productos -> pro_precio;
                    $genero = $productos -> pro_genero;
                    $categoria = $productos -> pro_categoria;
                    $estilo = $productos -> pro_estilo;
                    $stock = $productos -> pro_stock;
                    $talla = $productos -> pro_talla;
                    $descripcion = $productos -> pro_descripcion;
                    $novedad = $productos -> pro_novedad;
                    $imagen = $productos -> pro_imagen;
                    $productos = mysqli_fetch_object($tabla);

            ?>
            <div class="contenido-card">
                <div class="div-imagen">
                    <img src="data:image/*;base64,<?php echo base64_encode($imagen); ?>"  class="card-imagen">
                </div>
                <div class="card-info">
                    <h4><?php echo $nombre; ?></h4>
                    <h6>Cod: <?php echo $codigo; ?></h6>
                    <h6>Pre: $ <?php echo number_format($precio); ?>COP</h6>
                    <h6>Gen: <?php echo $genero; ?> - <?php echo $categoria; ?> - <?php echo $estilo; ?></h6>
                    <h6>Stock: <?php echo $stock; ?></h6>
                    <h6>Talla: <?php echo $talla; ?></h6>
                    <h6>Des: <?php echo $descripcion; ?></h6>
                    <?php
                    if($novedad != null)
                    {

                    ?>
                    <h6 class="novedad"><?php echo $novedad; ?></h6>
                    <?php
            
                    }
                    ?>
                    <div class="card-botones">
                        <a href="eliminar.php?cod=<?php echo $codigo; ?>"><i class="fa-solid fa-circle-minus red"></i></a>
                        <a href="editar.php?cod=<?php echo $codigo; ?>"><i class="fa-solid fa-pen blue"></i></a>
                    </div>
                </div>
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
    <script src="js/mostrar.js"></script>
</body>
</html>