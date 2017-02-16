<?php
session_start();
if(isset($_SESSION['usuario']))
{
      header('Location:perfil.php');
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="C:\Users\jesus\Documents\OCTAVO TRIMESTRE\Desarrollo APM\style.css">
</head>
<body>
    <header id="encabezado">
        <h1>Universidad de Occidente</h1>
        <h3>Unidad Guasave</h3>
    </header>
    <main id="principal">
        <form id="login-form" method="POST" action="login.php">
            <div class="form-control">
                <label for="txtusuario" class="negrita">Usuario:</label>
                <input type="text" name="txtusuario" id="txtusuario">
            </div>
           <div class="form-control"> <label for="txtPasswd" class="negrita">Contraseña:</label>
               <input type="password" name="txtPaswd" id="txtPasswd"> 
           </div>
           <div class="form-control">
                <label for="remember">
               <input type="checkbox" name="remember" id="remember">
                   mantener la sesion iniciada
               </label>
           </div>
            <div class="form-control">
                <button type="submit">Iniciar sesion </button>
            </div>
           <div class="form-control">
                <a href="" class="text-center block">¿Olvidaste la contraseña?</a>
           </div>
    </main>
    <footer>
        <hr>
        <p class="negrita"> todos los derechos reservados &copy; 2017 </p>
    </footer>
    <script href="C:\Users\jesus\Documents\OCTAVO TRIMESTRE\Desarrollo APM\app.js"></script>
</body>

</html>