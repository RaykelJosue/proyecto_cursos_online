<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['sesion_exito']) || !isset($_SESSION['username'])) {
  // Redirigir al usuario al archivo de inicio de sesión
  header("Location: ../login.php");
  exit; // Detener la ejecución del script después de la redirección
}

// Incluir el archivo de conexión
include("../../con_db.php");

// Conectar a la base de datos
$conn = conectar();

// Obtener el nombre de usuario
$nombre_usuario = $_SESSION['username'];

// Realizar consulta para obtener los datos del usuario
$query = "SELECT * FROM $tabla_db WHERE Usuario = '$nombre_usuario'";
$resultado = mysqli_query($conn, $query);

if (!$resultado) {
  die("Error al obtener los datos del usuario: " . mysqli_error($conn));
}

// Obtener los datos del usuario
$datos_usuario = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de Python para principiantes | Master Education</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="icon" href="../../iconos/favicon.png" type="image/x-icon">
</head>
<body>
  <header>
    <h1 class="titulo-principal"><a href="../index2.php">Master Education</h1></a>
    <?php
    include("menu_subcarpetas.php");
    ?>
  </header>
  <main class="contenedor">
    <section id="informacion-curso">
      <h2>Curso de Python para principiantes</h2>
      <p>Aprende los fundamentos de la programación con Python, uno de los lenguajes más populares y versátiles del mundo.</p>
      <p>Costo: Gratuito</p>
      <ul>
        <li>Capítulo 1: Introducción a Python</li>
        <li>Capítulo 2: Variables y tipos de datos</li>
        <li>Capítulo 3: Operadores y expresiones</li>
      </ul>
      <a href="python_confirmacion.php" class="btn">Inscribirme ahora</a>
    </section>
  </main>
  <footer>
    <p>&copy; Master Education 2024</p>
  </footer>
</body>
</html>