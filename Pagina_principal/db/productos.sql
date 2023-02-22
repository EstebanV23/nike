CREATE TABLE productos(
    pro_cod int primary key,
    pro_nombre varchar(30),
    pro_precio int,
    pro_genero varchar(10),
    pro_categoria varchar(20),
    pro_stock int,
    pro_descripcion varchar(90),
    pro_color varchar(10),
    pro_talla varchar(1),
    pro_imagen longblob,
    pro_novedad varchar(10),
    pro_estilo varchar(15)
);