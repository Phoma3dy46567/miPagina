<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];


echo "<h2>MOSTRANDO DATOS REGISTRADOS</h2>";
     
echo "<p>Nombre: $name</p>";
echo "<p>Email: $email</p>";
echo "<p>Telefono: $phone</p>";
echo "<p>Direccion: $address</p>";
echo "<p>ciudad: $city</p>";
echo "<p>Pais: $state</p>";
echo "<p>Producto: $product</p>";
echo "<p>cantidad: $quantity</p>";

?>