CREATE DATABASE ecommerceArtesanias;

USE ecommerceArtesanias;

CREATE TABLE direccion(
    id_direccion integer PRIMARY KEY AUTO_INCREMENT not null ,
    estado varchar(50) not null,
	municipio varchar(50) not null,
	localidad varchar(50) not null,
	calle varchar(50) not null,
	numero varchar(10) not null,
	codigo_postal  varchar(5) not null,
	telefono  varchar(10) not null
);
-- ! insertar un valor 
-- ! INSERT INTO direccion VALUES(null,'Oaxaca','Villa de Zaachila','Col. Guillermo Gonzalez Guardado','Emiliano Zapata','S/n','71318','9515444485');


CREATE TABLE tarjeta(
    id_tarjeta integer PRIMARY KEY AUTO_INCREMENT not null ,
    numero_tarjeta varchar(16) not null,
    nombre_titular varchar(50) not null,
    fecha_caducidad_mes varchar(2) not null,
    fecha_caducidad_anio varchar(2) not null,
    numero_seguridad varchar(3) not null,
    entidad_bancaria varchar(50) not null,
    tipo_tarjeta varchar(7) not null
);
-- ? insertar un valor 
-- ? INSERT INTO  tarjeta VALUES(null,'5522448899776655','luis daniel','02','24','888','Banamex','debito')


CREATE TABLE cliente(
    id_cliente_usuario integer PRIMARY KEY AUTO_INCREMENT not null,
    nombre_cliente varchar(50) not null,
    apellidos_cliente varchar(50) not null,
    correo_electronico  varchar(50) not null,
    img  varchar(50) not null,
    contrasenia_usuario varchar(50) not null,
    id_direccion  integer not null,
    FOREIGN KEY (id_direccion) REFERENCES direccion(id_direccion)
);
-- * insertar un valor
-- * INSERT INTO  cliente VALUES(null, 'luis daniel','solano vargaz','mludan95@gmai.com','sin/Img',MD5('luisdaniel'),1);

CREATE TABLE artesano(
    id_artesano  integer PRIMARY KEY AUTO_INCREMENT not null,
    nombre_artesano varchar(50) not null,
    apellidos_artesano varchar(50) not null,
    correo_electronico varchar(50) not null,
    region varchar(50) not null,
    img varchar(50) not null,
    contrasenia_artesano varchar(50) not null,
    id_direccion integer not null,
    id_tarjeta integer not null,
    FOREIGN KEY (id_direccion) REFERENCES direccion(id_direccion),
    FOREIGN KEY (id_tarjeta) REFERENCES tarjeta(id_tarjeta)
);

CREATE TABLE artesania(
    id_artesania integer PRIMARY KEY AUTO_INCREMENT not null,
    nombre  varchar(50) not null,
    material varchar(25) not null,
    color_predominante varchar(25) not null,
    precio integer not null,
    cantidad_vender integer not null,
    categoria varchar(30) not null,
    img  varchar(50) not null,
    descripcion  varchar(500) not null,
    oferta integer not null
);

CREATE TABLE detalle_artesania(
    id_artesano integer not null,
    id_artesania  integer not null,
    cantidad_agregar  integer not null,
    precio integer not null,
    fecha integer not null,
    FOREIGN KEY (id_artesano) REFERENCES artesano(id_artesano),
    FOREIGN KEY (id_artesania) REFERENCES artesania(id_artesania)

);

CREATE TABLE venta(
    id_venta integer PRIMARY KEY AUTO_INCREMENT not null,
    id_cliente_usuario integer not null,
    id_tarjeta integer not null,
    fecha date not null,
    FOREIGN KEY (id_tarjeta) REFERENCES tarjeta(id_tarjeta),
    FOREIGN KEY (id_cliente_usuario) REFERENCES cliente(id_cliente_usuario)
);

CREATE TABLE detalle_venta(
    id_venta integer not null,
    id_artesania  integer not null,
    cantidad integer not null,
    precio integer not null,
    FOREIGN KEY (id_venta) REFERENCES venta(id_venta),
    FOREIGN KEY (id_artesania) REFERENCES artesania(id_artesania)
);




-- INSERT INTO usuarios VALUES('usuario',MD5('contraseña'));
-- INSERT INTO direccion() VALUES('aOaxaca','Villa de Zaachila','Col. Guillermo Gonzalez Guardado','Emiliano Zapata','S/n','71318','9515444485');