<?php
session_start();
if(isset($_SESSION['usuario']))
{
      header('Location:perfil.php');
}
else{
    $usuario = $_SESSION['usuario'];
    var_dump($usuario);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <thead>
    <th>Usuario</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Correo electronico</th>
    </thead>
    <tbody>
       
      <tr>
          <td> <?php echo $usuario->username;?> </td>
    </tr>
     <tr>
          <td> <?php echo $usuario->nombre;?> </td>
    </tr>
     <tr>
          <td> <?php echo $usuario->apellidos;?> </td>
    </tr>
     <tr>
          <td> <?php echo $usuario->correo;?> </td>
    </tr>
    </tbody>
</body>
</html>