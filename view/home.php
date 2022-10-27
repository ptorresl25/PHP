<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/styles.css">
    <title>Trabajo Final Integrador</title>
</head>
<body>
    <header>
        <h1 class="tittle">Bienvenides a mi Jardín Digital</h1>
        <nav class="mainMenu">
            <ul>
                <li><a class="" href="Index.php?ruta=Contact">Contacto</a></li>
                <li><a class="" href="Index.php?ruta=Primavera">La Primavera</a></li>
                <li><a class="" href="Index.php?ruta=Verano">El Verano</a></li>
                <li><a class="" href="Index.php?ruta=Otoño">El Otoño</a></li>
                <li><a class="" href="Index.php?ruta=Invierno">El Invierno</a></li>
            </ul>
        </nav>
    </header>
    <h2>La única constante es el cambio</h2>
    <section id="content">
        <?php
            if(isset($_GET["ruta"])){
                if(
                    $_GET["ruta"] == "Contact" ||
                    $_GET["ruta"] == "Primavera" || 
                    $_GET["ruta"] == "Verano" ||
                    $_GET["ruta"] == "Otoño" ||
                    $_GET["ruta"] == "Invierno"
                ){
                    include "Model/" . $_GET["ruta"] . ".php";
                }
            }
        ?>
    </section>
</body>
</html> 