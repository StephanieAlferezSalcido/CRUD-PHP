<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
<form action="validatelog.php" method="post">
   <h1 class="animate__animated animate__backInLeft">Login</h1>
   <p>Usuario <input type="text" placeholder="Ingrese su nombre" name="usuario"></p>
   <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
   <input type="submit" value="Ingresar">
    
</body>
</html>