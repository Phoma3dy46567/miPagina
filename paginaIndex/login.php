
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login principal</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-image: linear-gradient(90deg, #053dae67, #1343c7a1);
        padding: 20px;
      }
      .container {
        max-width: 400px;
        margin: auto;
        background: #02042aef;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(7, 211, 252, 0.733);
        border-radius: 8px;
        border: 1px solid;
      }
      h2 {
        text-align: center;
        color: #fff;
      }
      input[type="text"],
      input[type="password"],
      input[type="email"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ede8e8;
        border-radius: 4px;
        box-sizing: border-box;
      }
      input[type="submit"] {
        background-color: #ff6600;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
      }
      input[type="submit"]:hover {
        background-color: #c23003;
      }
      p {
        color: #fff;
      }
      a {
        color: aqua;
      }
      label {
        color: white;
      }
      #register {
        display: none;
      }
      #login {
        display: block;
      }
    </style>
    <script>
      function login() {
        document.getElementById("login").style.display = "block";
        document.getElementById("register").style.display = "none";
      }
      function register() {
        document.getElementById("register").style.display = "block";
        document.getElementById("login").style.display = "none";
      }
    </script>
  </head>
  <body id="app">
    <div class="container" id="login">
      <h2>Login</h2>
      <form action="control/control.php" method="post">
        <label for="usuario">Usuario:</label>
        <input
          type="text"
          id="usuario"
          name="usuario"
          placeholder="Ingresa tu usuario.."
          required
        />

        <label for="contrasena">Contraseña:</label>
        <input
          type="password"
          id="contrasena"
          name="contrasena"
          placeholder="Ingresa tu contraseña.."
          required
        />

        <input type="submit" value="Iniciar sesión" />
      </form>
      <p>
        No tienes una cuenta?
        <a href="#register" onclick="register()">Register</a>
      </p>
    </div>

    <br />

    <div class="container" id="register">
      <h2>Registro</h2>
      <form action="control/control.php" method="post">
        <label for="reg_username">Usuario:</label>
        <input
          type="text"
          id="reg_username"
          name="reg_username"
          placeholder="Elige un nombre de usuario.."
          required
        />

        <label for="reg_password">Contraseña:</label>
        <input
          type="password"
          id="reg_password"
          name="reg_password"
          placeholder="Elige una contraseña.."
          required
        />

        <label for="reg_email">Correo electrónico:</label>
        <input
          type="email"
          id="reg_email"
          name="reg_email"
          placeholder="Ingresa tu correo electrónico.."
          required
        />

        <input type="submit" value="Registrarse" />
      </form>
      <p>Ya tienes una cuenta? <a href="#login" onclick="login()">Login</a></p>
    </div>
  </body>
</html>
