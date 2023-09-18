<html lang="en">
      <head>
         <link rel="stylesheet" href="diseno.css">
         <title>Datos del estudiante</title>
      </head>
  <body>
        <h2>DATOS DEL ESTUDIANTE</h2>

    <div class = "cuerpo">
             <!-- <CONTENEDOR> -->
     <div class="contenedor">
             <!-- <LADO IZQUIERDO> -->
      <div class="izquierda">
               <?php
               $id = "0 ";
               $cedula = $_POST["cedula"];
               $nombre = $_POST["nombre"];
               $fechNacimiento = $_POST["fechNacimiento"];
               $edad = $_POST["edad"];
               $carrera = $_POST["carrera"];
               $parcial = $_POST["parcial"];
               echo "<p>cedula: " . htmlentities($cedula) . "</p>";
               echo "<p>Nombre: " . htmlentities($nombre) . "</p>";
               echo "<p>fecha de Nacimiento: " . htmlentities($fechNacimiento) . "</p>";
               echo "<p>Edad: " . htmlentities($edad) . "</p>";
               echo "<p>Carrera: " . htmlentities($carrera) . "</p>";
               echo "<p>Parcial: " . htmlentities($parcial) . "</p>";
               ?>
      </div>
         <!-- <LADO DERECHO> -->
        <div class="derecha">  
         <?php
               $sexo = $_POST["sexo"];
               $nombre_Proyecto = $_POST["nombre_Proyecto"];
               $fechEntrega = $_POST["fechEntrega"];
               $DesProyect = $_POST["DesProyect"];
               $curso = $_POST["curso"];
               echo "<p>sexo: " . htmlentities($sexo) . "</p>";
               echo "<p>fechEntrega: " . htmlentities($fechEntrega) . "</p>";
               echo "<p>nombre_Proyecto: " . htmlentities($nombre_Proyecto) . "</p>";
               echo "<p>DesProyect: " . htmlentities($DesProyect) . "</p>";
               echo "<p>curso: " . htmlentities($curso) . "</p>";
         ?>
        </div>
          <?php
               $servername = "localhost";
               $database = "aplicaciones";
               $user = "root";
               $password = "";
               
               //create connection
               $conn = mysqli_connect ($servername,$user,$password,$database);
               //check conection
               if(!$conn){
               echo "error en la conección";
               die("Connection failed: ".mysql_connect_error());
               }else 
               echo "Connected successfully";
               $sql = "INSERT INTO  datos ( cedula,nombre, fecha_nac,edad, carrera, parcial,sexo,nom_pro,fech_entre,curso,des_pro  ) 
               VALUES ( '$cedula',  '$nombre', '$fechNacimiento', ' $edad ', '$carrera ',  '$parcial', '$sexo', '$nombre_Proyecto','$fechEntrega', '$curso', '$DesProyect')";
               if (mysqli_query($conn, $sql)){
               echo"Se ha insertado un nuevo registro";
               }
          ?>
     </div>
    </div>

  </body>
</html>
