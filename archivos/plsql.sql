/*

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
/*INICIO DUEÑO*/
DELIMITER $$
CREATE PROCEDURE insertUsuario(OUT ID INT(11), IN tu_ID INT(11),IN us_NOM VARCHAR(20),IN us_APP VARCHAR(32),IN us_USERNAME CHAR(32),IN us_PASSWORD CHAR(32))
  BEGIN
    INSERT INTO usuario values (null,tu_ID,us_NOM,us_APP,MD5(us_USERNAME),MD5(us_PASSWORD));
    SELECT us_ID INTO ID from usuario order by us_ID desc limit 1;
  END $$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE deleteUsuario(IN ID INT(11))
  BEGIN
    DELETE FROM usuario WHERE us_ID = ID;
  END $$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE updateUsuario(IN ID INT(11), IN ntu_ID INT(11),IN nus_NOM VARCHAR(20),IN nus_APP VARCHAR(32),IN nus_USERNAME CHAR(32),IN nus_PASSWORD CHAR(32))
  BEGIN
    UPDATE usuario
    SET tu_ID = ntu_ID, us_NOM = nus_NOM, us_APP = nus_APP, us_USERNAME = MD5(nus_USERNAME), us_PASSWORD = MD5(nus_PASSWORD)
    WHERE us_ID = ID;
  END $$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE getAllUsuario()
  BEGIN
    SELECT * from usuario;
  END $$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE getByIdUsuario(IN ID INT(11))
  BEGIN
    SELECT * from usuario where us_ID = ID;
  END $$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE countUsuario()
  BEGIN
    SELECT count(*) FROM usuario;
  END $$
DELIMITER;
  /*INICIO TIPOUSUARIO*/
    DELIMITER $$
    CREATE PROCEDURE getByIdTipoUsuario(IN ID INT(11))
      BEGIN
        SELECT * from tipousuario where tu_ID = ID;
      END $$
    DELIMITER;
  /*FIN TIPOUSUARIO*/
/*FIN BUENO*/



DROP PROCEDURE login;
DELIMITER $$
CREATE PROCEDURE login( IN USERNAME CHAR(32) , IN PASSWORD char(32) )
  BEGIN
    set @USUARIO = -1;
    select us_ID INTO @USUARIO from usuario where us_USERNAME like MD5(USERNAME) AND us_PASSWORD LIKE MD5(PASSWORD);
    select @USUARIO;
  END
$$
DELIMITER;

DROP PROCEDURE getByIdTipoUsuario;
DELIMITER $$
CREATE PROCEDURE getTipoUsuarioByIdUsuario( IN ID INT(11) )
  BEGIN
    set @TIPO = -1;
    select tu_ID INTO @TIPO from usuario where us_ID = ID;
    select tu_NIV INTO @TIPO from tipousuario where tu_ID = @TIPO;
    select @TIPO;
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