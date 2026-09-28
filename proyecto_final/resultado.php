<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>resultados de datos</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body class="body">
        <div class="dive">
          <div>
            <h1 class="h1">¡Gracias por participar!</h1>
            <h1 class="texto">Resultados</h1>
            <img class="imagen" src="https://c4.wallpaperflare.com/wallpaper/772/105/265/naruto-shippuuden-anime-fox-hatake-kakashi-wallpaper-preview.jpg" alt="Foto de un gato" />
            <br>
          </div>

          <div class="texto">
            <?php 

                $servidor = "sql300.infinityfree.com";
                $usuario = "if0_43026909";
                $contrasena = "hectorariel0";
                $base_de_datos = "if0_43026909_Desarrollo1";
                
                $conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_de_datos);
                if ($conexion->connect_error) {
                    die("Conexión fallida: " . $conexion->connect_error);
                }

                $defecto = 'no hay datos';
                $name = $_POST['nombre'] ?? $defecto;
                $age = $_POST['edad'] ?? $defecto;
                $city = $_POST['ciudad'] ?? $defecto;
                $birthDate = $_POST['fecha_nacimiento'] ?? $defecto;
                $hobby = $_POST['pasatiempo_favorito'] ?? $defecto;
                echo "nombre: " . $name."<br>";
                echo "edad: " . $age."<br>";
                echo "ciudad: " . $city."<br>";
                echo "fecha de nacimiento: " . $birthDate."<br>";
                echo "pasatiempo favorito: " . $hobby."<br>";

                $sql = "INSERT INTO tabla_resultados (nombre, edad, ciudad, fecha_nacimiento, pasatiempo_favorito) 
                        VALUES ('$name', '$age', '$city', '$birthDate', '$hobby')";
                if ($conexion->query($sql)=== TRUE) {
                    echo "Datos guardados correctamente";   
                } else {
                    echo "Error: " . $sql . "<br>" . $conexion->error;
                }
                $conexion->close();
			?>
          </div>

          <div id="popUpOverlay"></div>
          <div id="popUpBox">
            <div id="box">
                <i class="fas fa-question-circle fa-5x"></i>
                <h1>¿volver a ingresar datos?</h1>
                <div id="closeModal"></div>
            </div>
          </div>

          <div>
            <button class="button" onclick="Alert.render('you loock a very pretty today.')" >¡Volver a ingresar!</button>
            <br>
            <script src="app.js"></script>
          </div>

          <div>
            <h2 class="texto">Bien hecho</h2>
          </div>
          <script src="app.js"></script>
        </div>
  </body>
</html>