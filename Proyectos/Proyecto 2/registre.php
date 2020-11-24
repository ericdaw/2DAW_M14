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
    <title>Registre</title>

</head>

<body>

    <?php
    include_once __DIR__ . "/dinamico/header.php";
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
                                <label class="col-label">Nom *</label>
                                <input type="text" class="form-control form-control" name="nom" id="nom" required>
                            </div>
                            <div class="form-group">
                                <label class="col-label">Cognom *</label>
                                <input type="text" class="form-control form-control" name="apell" id="apell" required>
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
                            <div class="mt-4">
                                <p class="text-secondary">Els camps amb asterisc són obligatoris (*)</p>
                            </div>
                            <div class="text-left ">
                                <input type="submit" class="btn btn-primary" value="Registrar" name="registro" id="registro" required>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-label">Telèfon fix </label>
                            <input type="number" class="form-control form-control" name="fijo" id="fijo">
                        </div>
                        <div class="form-group">
                            <label class="col-label">Data de naixement *</label>
                            <input type="date" class="form-control form-control" name="naix" id="naix" required>
                        </div>
                        <div class="form-group">
                            <label class="col-label">Correu electrònic *</label>
                            <input type="email" class="form-control form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label class="col-label">Repetir correu electrònic *</label>
                            <input type="email" class="form-control form-control" name="email2" id="email2" required>
                        </div>
                        <div class="form-group">
                            <label class="col-label">Contrasenya *</label>
                            <input type="password" class="form-control form-control" name="pass" id="pass" required>
                        </div>
                        <div class="form-group mt-3">
                            <label class="col-label">Protecció de dades: *</label>
                            <input type="checkbox" class="form-check input" name="check" id="check" required>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php

            if (isset($_POST["registro"])) {
                //Conexión a la BDD
                include_once __DIR__ . "/dinamico/bdd.php";

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
                    $consulta = $conexion->prepare("SELECT email FROM usuaris");
                    $consulta->execute();
                    $row = $consulta->fetch();
                    $cont = 0;
                    while ($row) {
                        if ($row[0] == $email) {
                            $cont++;
                        }
                        $row = $consulta->fetch();
                    }
                } catch (PDOException $e) {
                    echo "Error " . $e->getMessage();
                }

                if ($cont == 1) {
            ?>
                    <script>
                        alert("Error, el email ya existe! ");
                    </script>
                    <meta http-equiv="refresh" content="2; url=registre.php">
                    <?php
                    ?>

                    <?php
                } else {
                    try {
                        $consulta = "INSERT INTO usuaris (nom,cognom,adreca,
                                poblacio,codi_postal,telefono,movil,data_naixement,email,password) VALUES (?,?,?,?,?,?,?,?,?,?)";
                        $sql = $conexion->prepare($consulta);
                        $sql->execute(array(
                            $nom, $apellido, $direccio, $poblacio, $codipostal, $fijo, $mobil, $datanaixement, $email, $password
                        ));
                    ?>
                        <meta http-equiv="refresh" content="0; url=validacio.php">

            <?php
                    } catch (PDOException $e) {
                        echo "Error " . $e->getMessage();
                    }
                }
            }

            ?>
            <!-- Contenedor de acceso para registrarse -->
            <div class="container col-md-3 mt-4">
                <h2>Accés</h2>
                <form action="#" method="POST">
                    <div class="form-group mt-4">
                        <label for="usu">Correu electrònic: </label>
                        <input type="text" class="form-control" id="usu" required>
                    </div>
                    <div class="form-group">
                        <label for="pass">Contrasenya: </label>
                        <input type="password" class="form-control" id="pass" required>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </form>
                <br>
                <div class="op mt-3">
                    <p>No recordes la teva contrasenya ? </p><a href="#">clica aquí</a>
                </div>
                <div class="op mt-4">
                    <p>Registra't per obtenir un compte </p><a href="registre.php">clica aquí</a>
                </div>
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