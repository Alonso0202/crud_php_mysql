<?php
include('connection.php');
$con = connection();
$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql)
?>   

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body class="body-editar">
    <div class="users-form">
        <form action="insert_user.php" method="POST">
            <h1>CREATE USERS</h1>
            <input type="text"name="name" placeholder="Nombre">
            <input type="text"name="last_name"placeholder="Apellido">
            <input type="text"name="usario_name" placeholder="Nombre Usuario">
            <input type="text"name="pasword" placeholder="Contraseña">
            <input type="text"name="email" placeholder="Correo">

            <input type="submit" value="GUARDAR">

        </form>
    </div>
    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Nombre usuario</th>
                <th>Contraseña</th>
                <th>Correo</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= isset($row['ID']) ? $row['ID'] : '' ?></th>
                        <th><?= isset($row['name']) ? $row['name'] : '' ?></th>
                        <th><?= isset($row['last_name']) ? $row['last_name'] : '' ?></th>
                        <th><?= isset($row['usario_name']) ? $row['usario_name'] : '' ?></th>
                        <th><?= isset($row['pasword']) ? $row['pasword'] : '' ?></th>
                        <th><?= isset($row['email']) ? $row['email'] : '' ?></th>
        
                        <th><a href="update.php?ID= <?= $row['ID']?>" class="users-table--Editar">Editar</a></th>
                        <th><a href="delete_users.php?ID= <?= $row['ID']?>" class="users-table--Eliminar">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
