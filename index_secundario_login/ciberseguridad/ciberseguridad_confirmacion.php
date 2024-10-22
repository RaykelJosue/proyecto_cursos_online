<?php
session_start();

// Verificar si el usuario no ha iniciado sesión
if (!isset($_SESSION['sesion_exito']) || !isset($_SESSION['username'])) {
  // Redirigir al usuario al archivo de inicio de sesión
  header("Location: ../login.php");
  exit; // Detener la ejecución del script después de la redirección
}

// Incluir el archivo de conexión
include('../../con_db.php');

// Conectar a la base de datos
$conn = conectar();

// Obtener el nombre de usuario que ha iniciado sesión
$nombre_usuario = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmación | Master Education</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="icon" href="../../iconos/favicon.png" type="image/x-icon">
</head>

<body>
  <header>
  <h1 class="titulo-principal"><a href="../index2.php">Master Education</h1></a>
    <?php
    include("../informatica../menu_subcarpetas.php");
    ?>
  </header>
  <main class="contenedor">
    <section id="informacion-curso">
      <h2>¿Cómo desea realizar este curso?</h2>
      <p>
        Realizamos ésta pregunta con el fin de que, si el participante desea un certificado, tiene que terminarlo en una fecha específica. Si lo desea terminar a su tiempo, no tendrá certificado.
      </p>
      <p>Costo: Gratuito</p>
      <ul>
        <li>Curso completo de Ciberseguridad</li>
      </ul>

      <br></br>

      <div class="opcion">
        <input type="radio" id="opcion-fecha" name="opcion" value="fecha">
        <label for="opcion-fecha">Deseo realizar el curso con fecha en específico para obtener el certificado</label>
      </div>

      <br></br>

      <div class="opcion">
        <input type="radio" id="opcion-tiempo" name="opcion" value="tiempo">
        <label for="opcion-tiempo">Deseo realizar el curso a mi tiempo sin obtener el certificado</label>
      </div>

      <br></br>

      <a href="ciberseguridad_curso.php" class="btn disabled">Estoy de acuerdo con la opción que seleccioné</a>
    </section>
  </main>
  <footer>
    <p>&copy; Master Education 2024</p>
  </footer>
</body>

</html>
