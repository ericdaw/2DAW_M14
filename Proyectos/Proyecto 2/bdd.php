<?php

$dsn = "mysql:host=mysql;dbname=venta_entrades";
$user = "root";
$pass = "root";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

try {
    echo "<pre>";
    $conexion = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Error " . $e->getMessage();
    die();
}

?>
