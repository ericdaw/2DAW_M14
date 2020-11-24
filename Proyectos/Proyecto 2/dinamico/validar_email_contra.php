<?php
try {
    $consulta = $conexion->prepare("SELECT email, password FROM usuaris WHERE email='$correo'");
    $consulta->execute();
    $row = $consulta->fetch();
    $cont = 0;
    while ($row) {
        if ($row[0] == $correo && $row[1] == $contra) {
            $_SESSION['log'] = true;
?>
            <meta http-equiv="refresh" content="0; url=index.php">
<?php
        }
        $row = $consulta->fetch();
    }
} catch (PDOException $e) {
    echo "Error " . $e->getMessage();
}

?>