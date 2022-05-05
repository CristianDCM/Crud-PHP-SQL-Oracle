<!DOCTYPE html>
<html lang="en">

<head> <!--By Cristian D Cuscue Muñoz-->
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Conexion PHP a Oracle</title>
</head>

<body>
    <div class="containerall">
        <form method="POST" action="login.php" target="request">
            <h3>Login</h3>
            <input type="text" name="nombre" placeholder="Nombre" size="20" required>
            <input type="text" name="password" placeholder="Password" required>
            <input type="submit" class="btn btn-primary" name="btn-enviar" value="Login">
            <input type="submit" class="btn btn-secondary" name="btn-register" value="Register">
        </form>
    </div>
</body>

</html>

<!-- TABLA USADA
    CREATE TABLE  "PRUEBA" 
   (	"ID" NUMBER(*,0) NOT NULL ENABLE, 
	"NOMBRE" VARCHAR2(30), 
	"CONTRASENA" VARCHAR2(30), 
	 PRIMARY KEY ("ID") ENABLE
   ) ;

-----TRIGGER
CREATE OR REPLACE TRIGGER  "TRIGG_PRUEBA" 
BEFORE INSERT ON PRUEBA
for EACH ROW
BEGIN
SELECT UNO.NEXTVAL INTO  :NEW.ID from DUAL ;
END;

--SECUENCIA
CREATE SEQUENCE   "UNO"  MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 85 CACHE 20 NOORDER  NOCYCLE ;
-->