<?php
require_once '../validation-auth.php';
include("../../conexion.php");

$data = new database();

$eliminar = $data -> eliminar($_GET['cod']);

if($eliminar){
    echo '<script type="text/javascript">
        alert("Eliminado Correctamente");
        window.location.href="listar.php";
        </script>';
}
else
{
    echo '<script type="text/javascript">
        alert("Error: No se pudo elimianr la información, error");
        window.location.href="listar.php";
        </script>';
}

?>