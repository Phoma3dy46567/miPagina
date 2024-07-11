
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> reg_producto
</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
      }
      .container {
        max-width: 600px;
        margin: 40px auto;
        padding: 20px;
        background-color: #beefff;
        border: 1px solid #ddd;
        box-shadow: 0 0 10px rgba(0, 0, 1, 0.1);
        border-radius: 10px;
      }
      .form-group {
        margin-bottom: 20px;
      }
      .form-control {
        width: 100%;
        height: 40px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
      }
      .btn {
        width: 100%;
        height: 40px;
        padding: 10px;
        font-size: 16px;
        background-color: #00ffea86;
        color: #000000;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      .btn:hover {
        background-color: #1afad1;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2><?php
      echo "Registro de Compra de ".$_SESSION['usuario']
     ?></h2>
      <form action="ventas.php" method="post">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" class="form-control" />
        </div>
        <div class="form-group">
          <label for="email">Correo Electrónico:</label>
          <input type="email" id="email" name="email" class="form-control" />
        </div>
        <div class="form-group">
          <label for="phone">Teléfono:</label>
          <input type="tel" id="phone" name="phone" class="form-control" />
        </div>
        <div class="form-group">
          <label for="address">Dirección:</label>
          <input type="text" id="address" name="address" class="form-control" />
        </div>
        <div class="form-group">
          <label for="city">Ciudad:</label>
          <input type="text" id="city" name="city" class="form-control" />
        </div>
        <div class="form-group">
          <label for="state">Pias:</label>
          <input type="text" id="state" name="state" class="form-control" />
        </div>

        <div class="form-group">
          <label for="product">Producto:</label>
          <select id="product" name="product" class="form-control">
            <option value="product1">Product 1</option>
            <option value="product2">Product 2</option>
            <option value="product3">Product 3</option>
          </select>
        </div>
        <div class="form-group">
          <label for="quantity">Cantidad:</label>
          <input
            type="number"
            id="quantity"
            name="quantity"
            class="form-control"
          />
        </div>
        <button type="submit" class="btn">Realizar Compra</button>
      </form>
    </div>
  </body>
</html>
