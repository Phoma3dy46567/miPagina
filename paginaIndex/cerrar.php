<?php
session_start();

session_destroy();

//header("location: loggin.php");
echo '<script>window.location="login.php"</script>';
?>