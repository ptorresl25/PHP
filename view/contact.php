<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="view/css/contact.css">
        <title>Inicio</title>
    </head>
    <body>
        <h3><br>Empezar suele ser difícil.</br>
            <br>Por eso es mejor hacerlo en compañía.<br>
        </h3>
        <form action="" method="POST">
            <label>Nombre</label><br>
            <input name="nombre" type="text" 
            placeholder="Tu nombre" require><br>

            <label>Correo</label><br>
            <input name="correo" type="mail" 
            placeholder="correo@correo.com" require><br>

            <label>Asunto</label><br>
            <input name="asunto" type="text" 
            placeholder="Asunto" require><br>

            <textarea name="mensaje" placeholder="Aquí deja tu mensaje. Gracias!"
            require></textarea><br>
            <input name="enviar" type="submit"require><br>
        </form>
        <?php
        if(isset($_POST['enviar mensaje'])){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];

            mail($nombre, $correo, $asunto, $mensaje);
            echo "Tu mensaje está en camino";
        }
        ?>
    </body>
</html>