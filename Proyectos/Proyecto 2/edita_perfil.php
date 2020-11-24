<?php
session_start();
if (isset($_POST['usu'])) {
    $correo = $_POST['usu'];
    $_SESSION['usu'] = $correo;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/css.css">
    <title>Editar perfil</title>

</head>

<body>

    <?php
    include_once __DIR__ . "/dinamico/header.php";
    $cor = $_SESSION['usu'];
    ?>

    <!-- Contenedor grande -->
    <div class="container">
        <div class="row mx-auto mt-4 mb-5">
            <!-- Contenedor de REGISTRO -->
            <div class="container col-9 mt-4">
                <h2>Registre d'usuari</h2>
                <div class="container row mt-4">
                    <div class="col-md-6">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label class="col-label">Nom </label>
                                <input type="text" class="form-control form-control" name="nom" id="nom">
                            </div>
                            <div class="form-group">
                                <label class="col-label">Cognom </label>
                                <input type="text" class="form-control form-control" name="apell" id="apell">
                            </div>
                            <div class="form-group">
                                <label class="col-label">Adreça postal </label>
                                <input type="text" class="form-control form-control" name="direc" id="direc">
                            </div>
                            <div class="form-group">
                                <label class="col-label">Població </label>
                                <input type="text" class="form-control form-control" name="poblacio" id="poblacio">
                            </div>
                            <div class="form-group">
                                <label class="col-label">Codi postal </label>
                                <input type="number" class="form-control form-control" name="cp" id="cp">
                            </div>
                            <div class="form-group">
                                <label class="col-label">Telèfon mòbil </label>
                                <input type="number" class="form-control form-control" name="mobil" id="mobil">
                            </div>
                            <div class="text-left ">
                                <input type="submit" class="btn btn-primary" value="Actualizar" name="actualizar" id="registro">
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-label">Telèfon fix </label>
                            <input type="number" class="form-control form-control" name="fijo" id="fijo">
                        </div>
                        <div class="form-group">
                            <label class="col-label">Data de naixement </label>
                            <input type="date" class="form-control form-control" name="naix" id="naix">
                        </div>
                        <div class="form-group">
                            <label class="col-label">Correu electrònic </label>
                            <input type="email" class="form-control form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label class="col-label">Repetir correu electrònic </label>
                            <input type="email" class="form-control form-control" name="email2" id="email2">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php

            if (isset($_POST["actualizar"])) {
                echo "hgola";
                if ($_SESSION['log']) {
                    //Conexión a la BDD
                    include_once __DIR__ . "/dinamico/bdd.php";
                    try {
                        $consulta = $conexion->prepare("SELECT * FROM usuaris WHERE email = $cor");
                        $consulta->execute();
                        var_dump($consulta);
                        $row = $consulta->fetch();
                        while($row){
                            echo "si" .$row;
                            $row = $consulta->fetch();
                            
                        }
                        var_dump($row);
                    } catch (PDOException $e) {
                        echo "Error " . $e->getMessage();
                    }
                    /*
                    $nom = $_POST['nom'];
                    $apellido = $_POST['apell'];
                    $direccio = $_POST['direc'];
                    $poblacio = $_POST['poblacio'];
                    $codipostal = (int) $_POST['cp'];
                    $mobil = (int) $_POST['mobil'];
                    $fijo = (int) $_POST['fijo'];
                    $datanaixement = $_POST['naix'];
                    $email = $_POST['email'];
                    $password = md5($_POST['pass']);

                    try {
                        $consulta = "UPDATE usuaris SET (nom=?,cognom=?,adreca=?,
                                poblacio=?,codi_postal=?,telefono=?,movil=?,data_naixement=?,email=?) WHERE id";
                        $sql = $conexion->prepare($consulta);
                        $sql->execute(array(
                            $nom, $apellido, $direccio, $poblacio, $codipostal, $fijo, $mobil, $datanaixement, $email
                        ));
                    } catch (PDOException $e) {
                        echo "Error " . $e->getMessage();
                    }

                    if ($sql) {
                        echo "Actualizado !";
                    }
                } else {
                    echo " Error - Regístrate primero ";
            ?>
                    <meta http-equiv="refresh" content="0; url=index.php">
            <?php*/
                }
            }

            ?>
            <!-- Contenedor de acceso para registrarse -->
            <div class="container col-3 mt-4">
                <?php
                if ($_SESSION['log']) {
                ?>
                    <h2>Menú d'Usuari</h2>
                    <div class="d-flex justify-content-center btn btn-dark m-2">
                        <a href="edita_perfil.php">
                            <h5>Edita el teu perfil</h5>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center btn btn-dark m-2">
                        <h5>Historial de compres</h5>
                    </div>
                    <div class="d-flex justify-content-center btn btn-dark m-2">
                        <a href="recuperar_contra.php">
                            <h5>Canvi de contrasenya</h5>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center btn btn-dark m-2">
                        <a href="salir.php">
                            <h5>Tanca la sessió</h5>
                        </a>
                    </div>
                    <br>
                <?php
                } else {
                ?>
                    <h2>Accés</h2>
                    <form action="#" method="POST">
                        <div class="form-group mt-4">
                            <label for="usu">Correu electrònic: </label>
                            <input type="text" class="form-control" name="usu" id="usu" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Contrasenya: </label>
                            <input type="password" class="form-control" name="pass" id="pass" required>
                        </div>
                        <button type="submit" class="btn btn-success" name="enviar" id="enviar">Enviar</button>
                    </form>
                    <br>
                    <div class="op mt-3">
                        <p>No recordes la teva contrasenya ? </p><a href="recuperar_contra.php">clica aquí</a>
                    </div>
                    <div class="op mt-4">
                        <p>Registra't per obtenir un compte </p><a href="registre.php">clica aquí</a>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</body>

<footer>
    <?php
    include_once __DIR__ . "/dinamico/footer.php";
    ?>
</footer>

</html>