<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Figuras Geometricas</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<?php

session_start(); // Iniciar la sesión para mantener la información del usuario
$error_msg = ""; // Variable para almacenar los mensajes de error

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener las credenciales de registro enviadas por el usuario
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];

  // Validar las credenciales de registro
  if (empty($username) || empty($password) || empty($confirm_password)) {
    $error_msg = "Por favor, complete todos los campos.";
  } elseif ($password != $confirm_password) {
    $error_msg = "Las contraseñas no coinciden. Por favor, inténtelo de nuevo.";
  } else {
    // Conectar con la base de datos y agregar el nuevo usuario
    $db_host = "localhost:3308"; // dirección del servidor de la base de datos
    $db_username = "root"; // nombre de usuario de la base de datos
    $db_password = "root"; // contraseña de la base de datos
    $db_name = "figuras"; // nombre de la base de datos
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $query)) {
      // El usuario ha sido agregado con éxito, iniciar sesión y redirigir al usuario a la página de inicio
      $_SESSION["username"] = $username;
      header("Location: home2.php");
      exit();
    } else {
      // Hubo un error al agregar el usuario, mostrar un mensaje de error
      $error_msg = "Hubo un error al registrar su cuenta. Por favor, inténtelo de nuevo.";
    }
    mysqli_close($conn); // Cerrar la conexión con la base de datos
  }
}

?>


<header>
  <h1>Mi página web</h1>
</header>

<body>

<div class="loader">
  <div class="cubes">
    <div class="cube">
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
    </div>
    <div class="cube">
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
    </div>
    <div class="cube">
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
    </div>
    <div class="cube">
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
    </div>
    <div class="cube">
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
    </div>
    <div class="cube">
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
    </div>
    <div class="cube">
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
      <div class="side"></div>
    </div>
  </div>
</div>

  <button class="modal-trigger">Registrar</button>
  <div class="modal-overlay">
    <div class="modal-content">
      <form method="POST" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <span class="signup">Sign Up</span>
        <input name="username" type="email" id="username" placeholder="Nombre de usuario" class="form--input">
        <input name="password" type="password" id="password" placeholder="Password" class="form--input">
        <input name="confirm_password" type="password" id="confirm_password" placeholder="Confirm password"
          class="form--input">

        <button class="form--submit" type="submit">Registrar</button>

      </form>
    </div>
  </div>

  <button class="modal-trigger2">Iniciar sesion</button>
  <div class="modal-overlay2">
    <div class="modal-content2">
      <form method="POST" class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <span class="signup">Sign Up</span>
        <input name="username" type="email" id="username2" placeholder="Nombre de usuario" class="form--input">
        <input name="password" type="password" id="password2" placeholder="Password" class="form--input">
        <button class="form--submit form--submit2" type="submit">Iniciar Sesion</button>

      </form>
    </div>
  </div>
  
  <footer>

  </footer>
</body>

</html>

<script>
// Boton Registrar
  var modalOverlay = document.querySelector('.modal-overlay');
  var signUpButton = document.querySelector('.form--submit');
  var closeButton = document.createElement('span');
  closeButton.innerHTML = '&times;';
  closeButton.classList.add('modal-close');
  modalOverlay.appendChild(closeButton);

  var modalTrigger = document.querySelector('.modal-trigger');
  modalTrigger.addEventListener('click', function () {
    modalOverlay.style.display = 'block';
  });

  closeButton.addEventListener('click', function () {
    modalOverlay.style.display = 'none';
  });

  modalOverlay.addEventListener('click', function (event) {
    if (event.target == modalOverlay) {
      modalOverlay.style.display = 'none';
    }
  });

// Boton Iniciar Sesion
  var modalOverlay = document.querySelector('.modal-overlay2');
  var signUpButton = document.querySelector('.form--submit2');
  var closeButton = document.createElement('span');
  closeButton.innerHTML = '&times;';
  closeButton.classList.add('modal-close');
  modalOverlay.appendChild(closeButton);

  var modalTrigger = document.querySelector('.modal-trigger2');
  modalTrigger.addEventListener('click', function () {
    modalOverlay.style.display = 'block';
  });

  closeButton.addEventListener('click', function () {
    modalOverlay.style.display = 'none';
  });

  modalOverlay.addEventListener('click', function (event) {
    if (event.target == modalOverlay) {
      modalOverlay.style.display = 'none';
    }
  });
</script>

<!-- Mostrar cualquier mensaje de error -->
<?php if (!empty($error_msg)) { ?>
  <p>
    <?php echo $error_msg; ?>
  </p>
<?php } ?>