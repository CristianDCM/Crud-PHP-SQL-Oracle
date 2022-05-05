<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>

<body>
    <form action="modificar1.php" method="POST">
        <div class="containerall">
            <input type="hidden" name="ID" value="<?php echo $_GET['ID'] ?>">
            <h4>Modificar</h4>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
            <input type="text" id="contraseña" name="contraseña" placeholder="Contraseña">
            <button type="submit" class="btn btn-success">Modificar</button>
            <a href="menu.php"> <button type="button" class="btn btn-secondary">Volver</button></a>
        </div>
    </form>
</body>

</html>