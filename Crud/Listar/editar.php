<?php
require_once '../validation-auth.php';
include("../../conexion.php");

$data = new database();

$traer = $data ->  leer_dato($_GET['cod']);

$producto = mysqli_fetch_object($traer);
$oldnombre = $producto -> pro_nombre;
$oldcod = $producto -> pro_cod;
$oldcategoria = $producto -> pro_categoria;
$oldgenero = $producto -> pro_genero;
$oldtalla = $producto -> pro_talla;
$oldestilo = $producto -> pro_estilo;
$oldcolor = $producto -> pro_color;
$oldimagen = $producto -> pro_imagen;
$oldnovedad = $producto -> pro_novedad;
$oldprecio = $producto -> pro_precio;
$oldstock = $producto -> pro_stock;
$olddescripcion = $producto -> pro_descripcion;

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
    <link rel="stylesheet" href="css/estiloseditar.css">
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
        <div class="imagen">
            <img src="data:image/*;base64,<?php echo base64_encode($oldimagen); ?>" class="img">
        </div>
        <div class="contenido">
            <form method="POST" class="formulario" enctype="multipart/form-data">
                <div class="div-one">
                    <div class="form-floating form-input">
                        <input type="number" class="form-control" id="cod" name="cod" placeholder="cod" value="<?php echo $oldcod; ?>" required disabled>
                        <label for="cod">Código del Producto</label>
                    </div>
                    <div class="form-floating form-input">
                        <input type="text" class="form-control " id="nombre" name="nombre" placeholder="nombre" value="<?php echo $oldnombre; ?>" required autocomplete="off">
                        <label for="nombre">Nombre del Producto</label>
                    </div>
                </div>
                <div class="div-one">
                    <div class="form-floating form-input">
                        <input type="number" class="form-control" id="precio" name="precio" placeholder="precio" value="<?php echo $oldprecio; ?>" required autocomplete="off">
                        <label for="precio">Precio del Producto</label>
                    </div>
                    <div class="form-floating form-input">
                        <select class="form-select" id="genero" name="genero">
                          <option selected value="">Género</option>
                          <option value="hombre">Hombre</option>
                          <option value="mujer">Mujer</option>
                          <option value="niño">Niño</option>
                          <option value="niña">Niña</option>
                        </select>
                        <label for="genero">Escoge el género</label>
                    </div>
                </div>
                <div class="div-one">
                    <div class="form-floating form-input">
                        <select class="form-select" id="categorias" name="categorias">
                          <option selected value="">Categoría</option>
                          <option value="calzado">Calzado</option>
                          <option value="ropa">Ropa</option>
                          <option value="conjuntos">Conjuntos</option>
                          <option value="accesorios">Accesorios</option>
                        </select>
                        <label for="genero">Escoge La categoría</label>
                    </div>
                    <div class="form-floating form-input">
                        <select class="form-select" id="estilos" name="estilos">
                          <option selected value="">Estilos</option>
                        </select>
                        <label for="estilos">Escoge el estilo</label>
                    </div>
                </div>
                <div class="div-one">
                    <div class="form-floating form-input">
                        <input type="number" class="form-control" id="stock" name="stock" placeholder="stock" value="<?php echo $oldstock; ?>" required autocomplete="off">
                        <label for="stock">Cantidad en Stock</label>
                    </div>
                    <div class="form-floating form-input">
                        <input type="color" class="form-control " id="color" name="color" placeholder="color" value="<?php echo $oldcolor; ?>" required autocomplete="off">
                        <label for="color">Color del producto</label>
                    </div>
                </div>
                <div class="div-one">
                    <div class="form-floating form-input">
                        <select class="form-select" id="talla" name="talla">
                          <option selected value="">Talla</option>
                        </select>
                        <label for="genero">Escoge La categoría</label>
                    </div>
                    <div class="form-floating form-input">
                        <input type="file" name="img" id="img" accept="image/*" class="form-control">
                        <label for="img">Imagen del producto</label>
                    </div>
                </div>
                <div class="form-floating comentarios">
                    <textarea name="comentario" id="comentario" class="form-control comentario" placeholder="comentario"><?php echo $olddescripcion; ?></textarea>
                    <label for="comentario">Descripcion del producto</label>
                </div>
                <div class="novedad">
                    <?php
                    if ($oldnovedad != null)
                    {
                    ?>
                    <input type="checkbox" checked name="novedad" id="novedad" value="novedad"><label for="novedad">Producto en Novedad</label>
                    <?php
                    }
                    else
                    {
                    ?>
                    <input type="checkbox" name="novedad" id="novedad" value="novedad"><label for="novedad">Producto en Novedad</label>
                    <?php
                    }
                    ?>
                </div>
                <div class="one">
                    <input type="submit" value="Actualizar" class="btn btn-outline-dark boton">
                    <a href="listar.php" class="btn btn-outline-warning boton">Cancelar</a>
                </div>
                <a href="eliminar.php?cod=<?php echo $oldcod ?>" class="btn btn-outline-danger">Eliminar producto</a>
            </form>
        </div>
        <?php
        
        if (isset($_POST) && !empty($_POST))
        {
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            $color = $_POST['color'];
            $descripcion = $_POST['comentario'];
            if(!empty($_REQUEST['novedad']))
            {
                $novedad = $_REQUEST['novedad'];
            }
            else
            {
                $novedad = null;
            }

            $update = $data -> update($oldcod, $nombre, $precio, $stock, $descripcion, $color, $novedad);

            if(!empty($_REQUEST['genero']))
            {
                $genero = $_REQUEST['genero'];
                $updateg = $data -> update_genero($oldcod, $genero);
            }

            if(!empty($_REQUEST['categorias']))
            {
                $categorias = $_REQUEST['categorias'];
                $updatec = $data -> update_categorias($oldcod, $categorias);
            }
            
            if(!empty($_REQUEST['estilos'])) 
            {
                $estilos = $_REQUEST['estilos'];
                $updatee = $data -> update_estilos($oldcod, $estilos);
            }
            
            if(!empty($_REQUEST['talla'])) 
            {
                $talla = $_REQUEST['talla'];
                $updatet = $data -> update_talla($oldcod, $talla);
            }

            if (!empty($_FILES['img']['tmp_name']))
            {
                $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
                $updatei = $data -> update_imagen($oldcod, $img);
            }

            if ($update)
            {
                //se configura el mensaje en javascript
                echo "<script type='text/javascript'>
                alert('Modificado Correctamente');
                window.location.href='editar.php?cod= $oldcod';
                </script>";
            }
            else
            {
                echo "<script type='text/javascript'>
                alert('Error: Error al modificar la informacion');
                window.location.href='editar.php?cod= $oldcod';
                </script>";
            } 
        }

        ?>
        <script src="js/cambiar.js"></script>
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