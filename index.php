<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuarios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
        
        <!-- Formulario para guardar usuario -->

        <form method="post"  autocomplete="off">
            <h2> Bienbenido a su nube de confianza </h2>

            <div class="input-group"> 

            <div class="input-container"> 
                 <input type="text" name="name" placeholder="Nombre"> 
                 <i class="fa-solid fa-user"> </i> 
            </div> 
        

            <div class="input-container"> 
                 <input type="password" name="password" placeholder="contraseña"> 
                 <i class="fa-solid fa-lock"> </i> 
            </div> 

            <div class="input-container"> 
                 <input type="email" name="email" placeholder="Correo"> 
                 <i class="fa-solid fa-envelope"> </i> 
            </div> 

            <div class="input-container"> 
                 <input type="tel" name="phone" placeholder="Telefono"> 
                 <i class="fa-solid fa-phone"> </i> 
            </div> 
            <a href="#"> Terminos y Condiciones </a> 
            <input type="submint" name="send" class="btn" value="Enviar">  

             </div>
        </form>
        
        <?php
           include("send.php"); 
        ?>


</body>
</html>