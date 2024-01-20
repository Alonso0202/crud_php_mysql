<?php
include('connection.php');
$con = connection();
$ID=$_GET['ID'];

$sql = "SELECT * FROM users WHERE ID ='$ID'";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body class="body-editar">
    <div class="users-form">
        <form action="edit_user.php" method="post">
            <h1>Editar usuario</h1>
            <input type="text" name="ID" value="<?= isset($row['ID']) ? $row['ID'] : '' ?>">
            <input type="text" name="name" placeholder="producto" value="<?= isset($row['name']) ? $row['name'] : '' ?>">
            <input type="text" name="last_name" placeholder="Apellido" value="<?= isset($row['last_name']) ? $row['last_name'] : '' ?>">
            <input type="text" name="usario_name" placeholder="Nombre usuario" value="<?= isset($row['usario_name']) ? $row['usario_name'] : '' ?>">
            <input type="text" name="pasword" placeholder="Contraseña" value="<?= isset($row['pasword']) ? $row['pasword'] : '' ?>">
            <input type="text" name="email" placeholder="Correo" value="<?= isset($row['email']) ? $row['email'] : '' ?>">

            <input type="submit" value="Actualización de información">
        </form>
    </div>
</body>
</html>