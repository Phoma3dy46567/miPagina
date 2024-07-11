<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="css/navar_style.css">
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
      }

      /* Estilos de la barra de navegación */

      .navbar {
        background-image: linear-gradient(to right, #369aeb, #042d64, #02042a);
        color: #ffffff;
        padding: 10px 0;
      }

      .navbar .logo img {
        border-radius: 25px;
        height: 70px;
        margin-left: 20%;
        vertical-align: middle;
      }
      .navbar-toggler {
        background-color: #31b4f650;
        border: none;
        padding: 10px 20px;
        height: 40px;
        width: 40px;
        font-size: 12px;
        cursor: pointer;
        margin-right: 5%;
      }
      .navbar-toggler-icon {
        font-size: 24px;
        color: #f8f3f3;
      }
      .navbar-nav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        text-align: right;
        margin-left: 80%;
        margin-right: 4%;
      }

      .navbar-nav li {
        display: inline-block;
        margin-left: 20px;
      }

      .navbar-nav li a {
        color: #a40e0e;
        transition: transform 0.3s ease;
        text-decoration: none;
        padding: 10px 15px;
        display: block;
      }
      #ini {
        background-color: #ff6600a9;
        border-radius: 10px;
        color: #fff;
      }
      .navbar-nav li a:hover {
        background-color: #71d5d3a9;
        transform: scale(1.2);
        border-radius: 10px;
      }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
      <div class="logo">
        <img src="media/logo_1.png" alt="Logo de la tienda" class="logo" />
      </div>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" id="ini" href="login.html"
              ><strong>Iniciar</strong></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#productos"><strong>Productos</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto"><strong>Contacto</strong></a>
          </li>
        </ul>
      </div>
    </nav>

    <script src="js/navar_js.js"></script>
</body>
</html>