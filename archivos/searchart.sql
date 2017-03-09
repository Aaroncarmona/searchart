drop database searchart;
create database searchart;
use searchart

create table TipoUsuario(
  tu_ID int(11) unsigned not null AUTO_INCREMET COMMENT 'Identificador del Tipo del Usuario',
  tu_NIV int(1) not null COMMENT 'Nivel del usuario',
  tu_NOM varchar(30) not null COMMENT 'Nombre del nivel de usuario',
  primary key(tu_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Nivel que que tienen los usuarios';

create table Usuario(
  us_ID int(11) unsigned not null AUTO_INCREMENT COMMENT 'Identificador del Usuario',
  tu_ID int(11) unsigned not null COMMENT 'Identificador del Tipo de Usuario',
  us_NOM varchar(30) not null COMMENT 'Nombre del usuario',
  us_APP varchar(32) not null COMMENT 'Apellidos del usuario',
  us_USERNAME char(32) not null COMMENT 'Nombre del usuario',
  us_PASSWORD char(32) not null COMMENT 'Contraseña del usuario',
  primary key(us_ID),
  foreign key(tu_ID) references TipoUsuario(tu_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='TABLA DE USUARIOS';

CREATE TABLE delegacion (
  del_ID int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la delegación',
  del_NOM int(30) NOT NULL COMMENT 'Nombre de la delegación',
  primary key(del_ID),
  unique (del_NOM)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Delegaciones de la Ciudad de Mexico';



create table status(
  st_ID int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria del status',
  st_NOM varchar(20) NOT NULL COMMENT 'Nombre del status',
  primary key(st_ID)
)ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Esta tabla representa el status que se le dara a los museos';



CREATE TABLE museo (
  mus_ID int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria del museo',
  del_ID int(11) UNSIGNED NOT NULL COMMENT 'Llave foranea de la delegacion',
  st_ID int(11) UNSIGNED NOT NULL COMMENT 'Llave foranea del status',
  mus_NOM varchar(200) NOT NULL COMMENT 'Nombre del museo',
  mus_MAP varchar(200) NOT NULL COMMENT 'Se registra la ubicación del lugar donde se encuentra el museo',
  mus_FOTO varchar(200) NOT NULL COMMENT 'Fachada del museo',
  mus_TEL char(12) NOT NULL COMMENT 'Teléfono del museo ',
  mus_CYN varchar(50) NOT NULL COMMENT 'Se registra la calle y el numero',
  mus_DES varchar(500) NOT NULL COMMENT 'Descripción del museo',
  mus_CP char(5) NOT NULL COMMENT 'Código postal',
  mus_HORI time NOT NULL COMMENT 'Es la hora con la que abren regularmente',
  mus_HORF time NOT NULL COMMENT 'Hora en la que finalizan regularmente',
  mus_COS decimal(5,2) NOT NULL COMMENT 'Costo por entrar al museo',
  primary key(mus_ID),
  foreign key (del_ID) references delegacion(del_ID),
  foreign key (st_ID) references status(st_ID),
  unique(mus_NOM)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registra la informacion mas importante del museo';


CREATE TABLE piso (
  pis_ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador del piso del museo',
  mus_ID INT(11) UNSIGNED NOT NULL COMMENT 'Identificador del museo',
  pis_NOM varchar(50) not null COMMENT 'Nombre del piso',
  pis_FOTO varchar(30) not null COMMENT 'Foto del piso',
  primary key(pis_ID),
  foreign key (mus_ID) references museo(mus_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registra el piso del museo';

create table sala (
  sal_ID INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la sala',
  pis_ID INT(11) UNSIGNED NOT NULL COMMENT 'Identificador del piso del museo',
  st_ID int(11) UNSIGNED NOT NULL COMMENT 'Llave foranea del status',
  sal_NOM varchar(30) not null COMMENT 'Nombre de la sala',
  sal_FOTO varchar(30) not null COMMENT 'Foto de la sala',
  sal_ST int(1) not null comment 'Estado de la sala',
  primary key(sal_ID),
  foreign key (st_ID) references status(st_ID),
  foreign key (pis_ID) references piso(pis_ID)
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
  primary key (ex_ID),
  foreign key (sal_ID) references sala(sal_ID),
  foreign key (tex_ID) references texhibicion(tex_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registran las exhibiciones que hay en las salas';

create table autor
(
  au_ID int(11) unsigned not null auto_increment comment 'Identificador del autor',
  au_NOM varchar(30) not null comment 'Nombre del autor',
  au_APODO varchar(30) comment 'Apodo del autor en caso de existir',
  au_APPAT varchar(15) not null comment 'Apellido paterno del autor',
  au_APMAT varchar(15) not null comment 'Apellido materno del autor',
  au_FOTO varchar(30) not null comment 'Foto del autor',
  au_DES varchar(500) not null comment 'Descripcion del autor',
  primary key (au_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registran los autores';

create table pintura
(
  pin_ID int(11) unsigned not null auto_increment comment 'Identificador de la pintrua',
  au_ID int(11) unsigned not null comment 'Identificador de los autores',
  ex_ID int(11) unsigned not null comment 'Identificador de las exhibiciones',
  pin_NOM varchar(30) not null comment 'Nombre de la pintura',
  pin_FOTO varchar(30) not null comment 'Nombre de la foto',
  pin_ANCHO decimal(3,2) not null comment 'Ancho del cuadro',
  pin_ALTO decimal(3,2) not null comment 'Alto del cuadro',
  primary key (pin_ID),
  foreign key (au_ID) references autor(au_ID),
  foreign key (ex_ID) references exhibicion(ex_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registran las pinturas de los autores';






/*Creacion de bitacora y triggers de las tablas*/
create table bitacora
(
  bit_ID int(11) unsigned not null auto_increment comment 'identificador de la bitacora',
  bit_USU varchar(30) not null comment 'usuario que hizo alguna modificacion',
  bit_TABLA varchar(30) not null comment 'tabla donde sufrio cambios',
  bit_TRAN varchar(500) not null comment 'Lo que realizo el usuario que accedio',
  bit_FECHA datetime not null comment 'Fecha de la consulta/modificacion',
  primary key(bit_ID)
) ENGINE=MYISAM DEFAULT CHARSET=utf8 COMMENT='Se registran todos los accesos a la base de datos';


/*trigger tabla delegacion*/
DROP TRIGGER delegacion_insertar;
DELIMITER $$
CREATE TRIGGER delegacion_insertar
  AFTER INSERT ON delegacion
  FOR EACH ROW
BEGIN
  INSERT INTO bitacora
  SET bit_USU = CONCAT( USER() , ' > ' , CURRENTUSER() ),
  bit_TABLA = 'delegacion',
  bit_TRAN = CONCAT( 'TIPO DE EVENTO > INSERT\n IDENTIFICADOR ' , NEW.del_ID , '\nNombre ' , NEW.del_NOM ),
  bit_FECHA = CURRENT_TIMESTAMP();
END$$
DELIMITER;

DROP TRIGGER delegacion_eliminar;
DELIMITER //
CREATE TRIGGER delegacion_eliminar
  BEFORE DELETE ON delegacion
  FOR EACH ROW
BEGIN
  INSERT INTO bitacora
  SET bit_USU = CONCAT( USER() , ' > ' , CURRENTUSER() ),
  bit_TABLA = 'delegacion',
  bit_TRAN = CONCAT( 'TIPO DE EVENTO > DELETE\n IDENTIFICADOR ' , OLD.del_ID , '\nNombre ' , OLD.del_NOM ),
  bit_FECHA = CURRENT_TIMESTAMP();
END
//
DELIMITER;

DROP TRIGGER delegacion_actualizar;
DELIMITER $$
CREATE TRIGGER delegacion_actualizar
  AFTER UPDATE ON delegacion
  FOR EACH ROW
BEGIN
  INSERT INTO bitacora
  SET bit_USU = CONCAT( USER() , ' > ' , CURRENTUSER() ),
  bit_TABLA = 'delegacion',
  bit_TRAN = CONCAT( 'TIPO DE EVENTO > UPDATE\n\nANTES\nIDENTIFICADOR ' , OLD.del_ID , '\nNombre ' , OLD.del_NOM , '\n\nDespues\n' , 'IDENTIFICADOR ' , OLD.del_ID , '\nNombre ' , OLD.del_NOM),
  bit_FECHA = CURRENT_TIMESTAMP();
END
$$
DELIMITER;
/*fin de trigger delegacion*/


/*trigger tabla autor*/
DROP TRIGGER autor_insertar;
DELIMITER $$
CREATE TRIGGER autor_insertar 
    AFTER INSERT ON autor
    FOR EACH ROW 
BEGIN
    INSERT INTO bitacora
    SET bit_TRAN = CONCAT('TIPO DE EVENTO > INSERT','\n', 'IDENTIFICADOR' , '  ' , NEW.au_ID,'\n','NOMBRE' , '  ' ,NEW.au_NOM,'\n','APODO' , '  ' , NEW.au_APODO,'\n','PATERNO' , '  ' , NEW.au_APPAT,'\n','MATERNO' , '  ' , NEW.au_APMAT,'\n','FOTO' , '  ' , NEW.au_FOTO,'\n','DESCRIPCION' , '  ' , NEW.au_DES),
     bit_USU = CONCAT( USER() , ' > ' , CURRENT_USER() ),
      bit_TABLA = 'autor',
      bit_FECHA = CURRENT_TIMESTAMP();
END$$
DELIMITER ;

DROP TRIGGER autor_eliminar;
DELIMITER $$
CREATE TRIGGER autor_eliminar 
    BEFORE DELETE ON autor
    FOR EACH ROW 
BEGIN
    INSERT INTO bitacora
    SET bit_TRAN = CONCAT('TIPO DE EVENTO > DELETE','\n', 'IDENTIFICADOR' , '  ' , OLD.au_ID,'\n','NOMBRE' , '  ' ,OLD.au_NOM,'\n','APODO' , '  ' , OLD.au_APODO,'\n','PATERNO' , '  ' , OLD.au_APPAT,'\n','MATERNO' , '  ' , OLD.au_APMAT,'\n','FOTO' , '  ' , OLD.au_FOTO,'\n','DESCRIPCION' , '  ' , OLD.au_DES),
    bit_TABLA = 'autor', 
    bit_USU = CONCAT( USER() , ' > ' , CURRENT_USER() ),
    bit_FECHA = CURRENT_TIMESTAMP();
END$$
DELIMITER ;

DROP TRIGGER autor_modificar;
DELIMITER $$
CREATE TRIGGER autor_modificar 
    AFTER UPDATE ON autor
    FOR EACH ROW 
BEGIN
    INSERT INTO bitacora
    SET bit_TRAN = CONCAT('TIPO DE EVENTO > UPDATE','\n','ANTES\n','IDENTIFICADOR' , '  ' , OLD.au_ID,'\n','NOMBRE' , '  ' ,OLD.au_NOM,'\n','APODO' , '  ' , OLD.au_APODO,'\n','PATERNO' , '  ' , OLD.au_APPAT,'\n','MATERNO' , '  ' , OLD.au_APMAT,'\n','FOTO' , '  ' , OLD.au_FOTO,'\n','DESCRIPCION' , '  ' , OLD.au_DES,'\n\nAHORA','\n', 'IDENTIFICADOR' , '  ' , NEW.au_ID,'\n','NOMBRE' , '  ' ,NEW.au_NOM,'\n','APODO' , '  ' , NEW.au_APODO,'\n','PATERNO' , '  ' , NEW.au_APPAT,'\n','MATERNO' , '  ' , NEW.au_APMAT,'\n','FOTO' , '  ' , NEW.au_FOTO,'\n','DESCRIPCION' , '  ' , NEW.au_DES),
    bit_TABLA = 'autor',
    bit_USU = CONCAT( USER() , ' > ' , CURRENT_USER() ),
    bit_FECHA = CURRENT_TIMESTAMP();
END$$
DELIMITER;

/*

historal triggers
+ delegacion
museo
piso
sala
texhibicion
+ autor
pintura


historial de PL/SQL
delegacion
museo
piso
sala
texhibicion
autor
pintura

*/

/*INICIO PROCEDIMIENTOS ALMACENADOS*/

/*INICIO USUARIO*/
/*
  0 SYSTEMA
  1 ADMINISTRADOR
  2 EMPLEADO
  3 NO REGISTRADO
  4 CONTRASEÑA INCORRECTA
*/
DROP PROCEDURE login;
DELIMITER $$
CREATE PROCEDURE login( OUT TIPO INT(1) , IN USERNAME CHAR(32) , IN PASSWORD char(32) )
  BEGIN
    select tu_ID INTO TIPO from usuario where us_USERNAME like MD5(USERNAME) AND us_PASSWORD LIKE MD5(PASSWORD);
    return TIPO;
  END
$$
DELIMITER;
/*FIN USUARIO*/

  /*INICIO AUTORES*/
DELIMITER $$
CREATE PROCEDURE getAllAutor()
  BEGIN
    SELECT * FROM autor;
  END $$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE getByIdAutor( IN ID INT(11) )
  BEGIN
    SELECT * FROM autor WHERE au_ID = ID ;
  END $$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE countAutor()
  BEGIN 
    SELECT COUNT(*) FROM autor;
  END $$
DELIMITER;


DROP PROCEDURE insertAutor;
DELIMITER $$
CREATE PROCEDURE insertAutor(OUT au_ID int(11), IN au_NOM varchar(30),IN au_APODO varchar(30),IN au_APPAT varchar(15),IN au_APMAT varchar(15),IN au_FOTO varchar(30),IN au_DES varchar(500))
  BEGIN
    INSERT INTO autor values (null,au_NOM,au_APODO,au_APPAT,au_APMAT,au_FOTO,au_DES);
    SELECT au_ID INTO au_ID from autor order by au_ID desc limit 1;
  END $$
DELIMITER;


call insertAutor(@ID,'1','1','1','1','1','1');
  /*FIN AUTORES*/


/*INICIO BITACORA*/
DELIMITER $$
CREATE PROCEDURE getAllBitacora()
  BEGIN
    SELECT * from bitacora order by bit_FECHA desc;
  END $$
DELIMITER;
/*FIN BITACORA*/

/*INICIO TEXHIBICION*/
DELIMITER $$
CREATE PROCEDURE getAllTexhibicion()
  BEGIN
    SELECT * FROM texhibicion;
  END $$
DELIMITER;
/*FIN TEXHIBICION*/

/*INICIO LVLUSER*/
DELIMITER $$
CREATE PROCEDURE getAllLvlUser()
  BEGIN
    SELECT * FROM lvlUser;
  END $$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE getByIdLvlUser( ID INT(11) )
  BEGIN
    SELECT * FROM lvlUser WHERE lvl_ID = ID;
  END $$
DELIMITER; 
/*FIN LVLUSER*/



 /*INICIO MUSEO*/
DELIMITER $$
CREATE PROCEDURE getAllMuseo()
  BEGIN
    SELECT * from museo order by mus_NOM desc;
  END $$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE getByIdMuseo(IN ID INT(11))
  BEGIN
    SELECT * from museo where mus_ID = ID;
  END $$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE countMuseo()
  BEGIN
    SELECT count(*) from museo;
  END $$
DELIMITER;
  /*FIN MUSEO*/





 
  


/*INICIO PISO*/
DELIMITER $$
CREATE PROCEDURE getAllPiso()
  BEGIN
    SELECT * FROM  piso;
  END $$
  DELIMITER;

  CREATE PROCEDURE get
/*FIN PISO*/

/*INICIO SALA*/
DELIMITER $$
CREATE PROCEDURE getAllSala()
  BEGIN
    SELECT * FROM sala;
  END $$
DELIMITER;
/*FIN SALA*/





/*FIN PROCEDIMIENTOS ALMACENADOS*/