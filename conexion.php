<?php

    class database
    {
        private $dbequipo = 'containers-us-west-49.railway.app:5899';
        private $dbusuario = 'root';
        private $dbclave = 'ubJztB2A66YTvK1GSszd';
        private $dbnombre = 'railway';
        
        //Método constructor
        function __construct()
        {
            $this->conectar();
        }//fin constructor


        //función para conectarse a la base de datos (localhost, root, contraseña, nombretabla)
        public function conectar()
        {
            $this->con = mysqli_connect($this->dbequipo, $this->dbusuario, $this->dbclave, $this->dbnombre);

            if(mysqli_connect_error())
            {
                die("Error: No se pudo conectar a la base de datos: " . mysqli_connect_error() . mysqli_connect_errno());
            }

        }//fin funcion conectar

        //funcion para leer los datos de la tabla
        public function leer_tabla()
        {
            $sql = 'SELECT * FROM productos;';

            //llamo a la funcion para conectar la base de datos y enviar lo que quiero hacer
            $tabla = mysqli_query($this->con, $sql);

            return $tabla;
        }//fin de leer datos

        //funcion de insertar
        public function insertar($codigo,$nombre,$precio,$genero,$categoria,$stock,$descripcion,$color,$talla,$imagen,$novedad,$estilo)
        {
            $sql = "INSERT INTO productos VALUES ('$codigo','$nombre','$precio','$genero','$categoria','$stock','$descripcion','$color','$talla','$imagen','$novedad','$estilo');";

            //llamo a la funcion para conectar la base de datos y enviar lo que quiero hacer
            $inser = mysqli_query($this->con, $sql);

            return $inser;
        }//fin funcion insertar

        public function leer_dato($cod)
        {
            $sql = "SELECT * FROM productos WHERE pro_cod = '$cod';";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;

        }

        //Metodo para buscar con todos los elementos llenos en listar php
        public function leer_direc_full($categoria, $genero, $estilo, $novedad)
        {
            $sql = "SELECT * FROM productos WHERE (pro_genero = '$genero') && (pro_categoria = '$categoria') && (pro_estilo = '$estilo') && (pro_novedad = '$novedad');";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }
        
        //Metodo para buscar con 3 de los elementos en listar php
        public function leer_direc_med($categoria, $genero, $estilo)
        {
            $sql = "SELECT * FROM productos WHERE (pro_genero = '$genero') && (pro_categoria = '$categoria') && (pro_estilo = '$estilo');";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }
        
        //Metodo para buscar con 2 de los elementos en listar php
        public function leer_direc_two($categoria, $genero)
        {
            $sql = "SELECT * FROM productos WHERE (pro_genero = '$genero') && (pro_categoria = '$categoria');";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }
        
        //Metodo para buscar con solo la categoria de los elementos en listar php
        public function leer_direc_c($categoria)
        {
            $sql = "SELECT * FROM productos WHERE pro_categoria = '$categoria';";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }
        
        //Metodo para buscar con solo la categoria y novedad de los elementos en listar php
        public function leer_direc_cn($categoria, $novedad)
        {
            $sql = "SELECT * FROM productos WHERE (pro_categoria = '$categoria') && (pro_novedad = '$novedad');";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }

        //Metodo para buscar con solo la novedad de los elementos en listar php
        public function leer_direc_n($novedad)
        {
            $sql = "SELECT * FROM productos WHERE pro_novedad = '$novedad';";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }

        //Metodo para buscar con solo el genero de los elementos en listar php
        public function leer_direc_g($genero)
        {
            $sql = "SELECT * FROM productos WHERE pro_genero = '$genero';";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }

        //Metodo para buscar con solo el genero y la novedad de los elementos en listar php
        public function leer_direc_gn($genero, $novedad)
        {
            $sql = "SELECT * FROM productos WHERE (pro_genero = '$genero') && (pro_novedad = '$novedad');";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }

        //Metodo para buscar los generos y la novedad de los elementos
        public function leer_direc_gns($novedad)
        {
            $sql = "SELECT * FROM productos WHERE (pro_genero = 'niño' OR pro_genero = 'niña') && (pro_novedad = '$novedad');";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }

        public function leer_dato_novedad()
        {
            $sql = "SELECT * FROM productos WHERE pro_novedad = 'novedad';";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }
        
        public function leer_direc_nom($nombre)
        {
            $sql = "SELECT * FROM productos WHERE pro_nombre LIKE '%$nombre%';";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }

        //Metodo para buscar con 3 de los elementos en las secciones
        public function leer_direc_cgn($categoria, $genero, $novedad)
        {
            $sql = "SELECT * FROM productos WHERE (pro_genero = '$genero') && (pro_categoria = '$categoria') && (pro_novedad = '$novedad');";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }

        //Metodo para buscar con solo estilos de los elementos
        public function leer_direc_e($estilo)
        {
            $sql = "SELECT * FROM productos WHERE pro_estilo = '$estilo';";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }

        public function update($cod,$nombre,$precio,$stock,$descripcion,$color,$novedad)
        {
            $sql = "UPDATE productos SET pro_nombre = '$nombre', pro_precio = '$precio', pro_stock = '$stock', pro_descripcion = '$descripcion', pro_color = '$color', pro_novedad = '$novedad' WHERE pro_cod = '$cod';";

            $update = mysqli_query($this ->con, $sql);

            return $update;
        }
        
        public function update_genero($cod, $genero)
        {
            $sql = "UPDATE productos SET pro_genero = '$genero' WHERE pro_cod = '$cod';";

            $updates = mysqli_query($this ->con, $sql);

            return $updates;
        }
        
        public function update_categorias($cod, $categorias)
        {
            $sql = "UPDATE productos SET pro_categoria = '$categorias' WHERE pro_cod = '$cod';";
            
            $updates = mysqli_query($this ->con, $sql);
            
            return $updates;
        }
        
        public function update_estilos($cod, $estilos)
        {
            $sql = "UPDATE productos SET pro_estilo = '$estilos' WHERE pro_cod = '$cod';";
            
            $updates = mysqli_query($this ->con, $sql);
            
            return $updates;
        }
        
        public function update_talla($cod, $talla)
        {
            $sql = "UPDATE productos SET pro_talla = '$talla' WHERE pro_cod = '$cod';";

            $updates = mysqli_query($this ->con, $sql);

            return $updates;
        }
        
        public function update_imagen($cod, $imagen)
        {
            $sql = "UPDATE productos SET pro_imagen = '$imagen' WHERE pro_cod = '$cod';";

            $updates = mysqli_query($this ->con, $sql);

            return $updates;
        }

        public function leer_usuario($usuario)
        {
            $sql = "SELECT * FROM usuarios WHERE usu_usuario = '$usuario';";
            
            $dato = mysqli_query($this ->con, $sql);
            
            return $dato;
        }

        public function eliminar($cod)
        {
            $sql = "DELETE FROM productos WHERE pro_cod = '$cod';";

            $dato = mysqli_query($this ->con, $sql);

            return $dato;
        }

    }


    $data_base = new database()
    
?>