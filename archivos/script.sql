drop database searchart;
create database searchart;
use searchart

create table TipoUsuario(
  tu_ID int(11) unsigned not null AUTO_INCREMENT COMMENT 'Identificador del Tipo del Usuario',
  tu_NIV int(1) not null COMMENT 'Nivel del usuario',
  tu_NOM varchar(30) not null COMMENT 'Nombre del nivel de Usuario',
  primary key(tu_ID),
  unique(tu_NIV,tu_NOM)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Nivel que tienen los Usuarios';

create table Usuario(
  us_ID int(11) unsigned not null AUTO_INCREMENT COMMENT 'Identificador del Usuario',
  tu_ID int(11) unsigned not null COMMENT 'Identificador del Tipo de Usuario',
  us_NOM varchar(30) not null COMMENT 'Nombre del Usuario',
  us_APP varchar(32) not null COMMENT 'Apellidos del Usuario',
  us_USERNAME char(32) not null COMMENT 'Nombre del Usuario',
  us_PASSWORD char(32) not null COMMENT 'Contraseña del Usuario',
  primary key(us_ID),
  unique(us_USERNAME)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Tabla de los Usuarios';

CREATE TABLE delegacion (
  del_ID int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la delegación',
  del_NOM int(30) NOT NULL COMMENT 'Nombre de la delegación',
  primary key(del_ID),
  unique (del_NOM)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Delegaciones de la Ciudad de Mexico';



CREATE TABLE museo (
  mus_ID int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria del museo',
  del_ID int(11) UNSIGNED NOT NULL COMMENT 'Llave foranea de la delegacion',
  mus_NOM varchar(200) NOT NULL COMMENT 'Nombre del museo',
  mus_MAP varchar(200) NOT NULL COMMENT 'Se registra la ubicación del lugar donde se encuentra el museo',
  mus_FOTO blob NOT NULL COMMENT 'Fachada del museo',
  mus_TEL char(12) NOT NULL COMMENT 'Teléfono del museo ',
  mus_CYN varchar(50) NOT NULL COMMENT 'Se registra la calle y el numero',
  mus_DES varchar(500) NOT NULL COMMENT 'Descripción del museo',
  mus_CP char(5) NOT NULL COMMENT 'Código postal',
  mus_HORI time NOT NULL COMMENT 'Es la hora con la que abren regularmente',
  mus_HORF time NOT NULL COMMENT 'Hora en la que finalizan regularmente',
  mus_COS decimal(5,2) NOT NULL COMMENT 'Costo por entrar al museo',
  mus_ST int(1) NOT NULL COMMENT 'Estado acutal del museo',
  primary key(mus_ID),
  unique(mus_NOM)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registra la informacion mas importante del museo';


CREATE TABLE piso (
  pis_ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador del piso del museo',
  mus_ID INT(11) UNSIGNED NOT NULL COMMENT 'Identificador del museo',
  pis_NOM varchar(50) not null COMMENT 'Nombre del piso',
  pis_FOTO blob not null COMMENT 'Foto del piso',
  pis_ST INT(1) not null COMMENT 'Estado del piso',
  primary key(pis_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registra el piso del museo';

create table sala (
  sal_ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la sala',
  pis_ID INT(11) UNSIGNED NOT NULL COMMENT 'Identificador del piso del museo',
  st_ID int(11) UNSIGNED NOT NULL COMMENT 'Llave foranea del status',
  sal_NOM varchar(30) not null COMMENT 'Nombre de la sala',
  sal_FOTO blob not null COMMENT 'Foto de la sala',
  sal_ST int(1) not null comment 'Estado de la sala',
  primary key(sal_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registran las salas que tienen los pisos';

create table texhibicion (
  tex_ID int(11) unsigned not null auto_increment comment 'Identificador del tipo de exhibicion',
  tex_NOM varchar(45) not null comment 'Nombre de la tipo de exhibicion',
  primary key(tex_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registran los tipos de exposiciones que hay';

create table exhibicion
(
  ex_ID int(11) unsigned not null auto_increment comment 'Identificador de la exhibicion',
  sal_ID int(11) unsigned not null comment 'Identificador de la sala',
  tex_ID int(11) unsigned not null comment 'Identificador del tipo de exhibicion',
  ex_NOM varchar(30) not null comment 'Nombre de la exhibicion',
  ex_DES varchar(30) not null comment 'Descripcion de la exhibicion',
  ex_FI date comment 'Fecha de inicio de la exhibicion',
  ex_FN date comment 'Fecha de fin de la exhibicion', 
  ex_ST int(1) not null comment 'Estado de la exhibicion',
  primary key (ex_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registran las exhibiciones que hay en las salas';

create table autor
(
  au_ID int(11) unsigned not null auto_increment comment 'Identificador del autor',
  au_NOM varchar(30) not null comment 'Nombre del autor',
  au_APODO varchar(30) comment 'Apodo del autor en caso de existir',
  au_APPAT varchar(15) not null comment 'Apellido paterno del autor',
  au_APMAT varchar(15) not null comment 'Apellido materno del autor',
  au_FOTO blob not null comment 'Foto del autor',
  au_DES varchar(500) not null comment 'Descripcion del autor',
  primary key (au_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registran los autores';

create table pintura
(
  pin_ID int(11) unsigned not null auto_increment comment 'Identificador de la pintrua',
  au_ID int(11) unsigned not null comment 'Identificador de los autores',
  ex_ID int(11) unsigned not null comment 'Identificador de las exhibiciones',
  pin_NOM varchar(30) not null comment 'Nombre de la pintura',
  pin_FOTO blob not null comment 'Nombre de la foto',
  pin_ANCHO decimal(3,2) not null comment 'Ancho del cuadro',
  pin_ALTO decimal(3,2) not null comment 'Alto del cuadro',
  primary key (pin_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registran las pinturas de los autores';


/*Creacion de bitacora y triggers de las tablas*/
create table bitacora
(
  bit_ID int(11) unsigned not null auto_increment comment 'identificador de la bitacora',
  bit_USU varchar(30) not null comment 'usuario que hizo alguna modificacion',
  bit_TABLA varchar(30) not null comment 'tabla donde sufrio cambios',
  bit_TRAN varchar(500) not null comment 'Lo que realizo el usuario que accedio',
  bit_DESC varchar(200) not null comment 'Descripción de la transacción',
  bit_FECHA datetime not null comment 'Fecha de la consulta/modificacion',
  primary key(bit_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registran todos los accesos a la base de datos';
