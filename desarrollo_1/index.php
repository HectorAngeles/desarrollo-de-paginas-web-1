<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Captura de datos</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="body">
        <form method="post" action="resultado.php">
        <div class="dive">
            <h1 class="h1">Captura de datos personales</h1>
            <h2 class="h2">Ingresa los datos que se te piden</h2>
        
            <p class="p">Mi primera encuesta</p>
            <hr>

            <div>
                <label class="label" for="name">Nombre</label>
                <input id="name" name="nombre" type="text" placeholder="ingresa tu nombre">
            </div>
            <hr>

            <div>
                <label class="label" for="age">Edad</label>
                <input id="age" name="edad" type="number" placeholder="ingresa tu edad">
            </div>
            <hr>

            <div>
                <label class="label" for="city">Ciudad donde vives</label>
                <input id="city" name="ciudad" type="text" placeholder="Ingresa tu ciudad donde vive">
            </div>
            <hr>

            <div>
                <label class="label" for="birthDate">Fecha de Nacimiento</label>
                <input id="birthDate" name="fecha_nacimiento" type="date">
            </div>
            <hr>

            <div>
                <label class="label" for="hobby">Pasatiempo favorito</label>
                <input id="hobby" name="pasatiempo_favorito" type="text" placeholder="Ingresa tu pasatiempo favorito">
            </div>
            <hr>
            <br>
            <div>
                <button class="button" type="submit">Enviar</button>
            </div>
        </div>
        </form>
    </body>
</html>