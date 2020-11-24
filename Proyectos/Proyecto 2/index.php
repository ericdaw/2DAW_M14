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
    <title>Esdeveniment</title>

</head>

<body>

    <?php
    include_once __DIR__ . "/dinamico/header.php";
    ?>

    <!-- Contenedor grande -->
    <div class="container row mx-auto mt-4 mb-5">
        <!-- Contenedor de espectáculos -->
        <div class="container col-9 mt-4">
            <h2>Esdeveniments a la venda</h2>
       
            <div class="container row align-items-end mt-5">
                <div class="container col-4">
                    <figure class="figure">
                        <img src="img/monologo.jpg" alt="esd1" class="figure-img img-fluid">
                        <figure-caption>Texto imagen</figure-caption>
                    </figure>
                </div>
                <div class="container col-4">

                    <figure class="figure">
                        <img src="img/bruce.jpg" alt="esd2" class="figure-img img-fluid">
                        <figure-caption>Texto imagen2</figure-caption>
                    </figure>
                </div>
            </div>
            <div class="container row align-items-end mt-3 mb-3 mx-auto">
                <div class="container col-3 m-4">

                    <figure class="figure">
                        <img src="img/notas_musicales.jpg" alt="esd3" class="figure-img img-fluid">
                        <figure-caption>Texto imagen3</figure-caption>
                    </figure>
                </div>
                <div class="container col-3 m-4">

                    <figure class="figure">
                        <img src="img/bob.jpg" alt="esd4" class="figure-img img-fluid">
                        <figure-caption>Texto imagen4</figure-caption>
                    </figure>
                </div>
                <div class="container col-3 m-4">

                    <figure class="figure">
                        <img src="img/leon.jpg" alt="esd5" class="figure-img img-fluid">
                        <figure-caption>Texto imagen5</figure-caption>
                    </figure>
                </div>
            </div>
        </div>
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
                if (isset($_POST['enviar'])) {
                    $correo = $_POST['usu'];
                    $contra = md5($_POST['pass']);
                    include_once __DIR__ . "/dinamico/bdd.php";
                    include_once __DIR__ . "/dinamico/validar_email_contra.php";
                }
            }
            ?>

        </div>
    </div>

</body>

<footer>
    <?php
    include_once __DIR__ . "/dinamico/footer.php";
    ?>
</footer>

</html>