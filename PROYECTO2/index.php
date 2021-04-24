<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="vista/css/estilos.css">
	

</head>  
<body >
    <form class="formulario" action="controlador/usuarios_controlador.php" method="post">
    
    <h1>LOGIN</h1>
     <div class="contenedor">
     
     
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" name="Correo_electronico" required="" autocomplete="off">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="Contraseña" required="">
         
         </div>
         <input type="submit" value="Login" class="button" name="enviar">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿No tienes una cuenta? <a class="link" href="vista/registro.php">Registrate </a></p>
         <a href="vista/principal"></a>
      
        </div>
    </form>
</body>
</html>