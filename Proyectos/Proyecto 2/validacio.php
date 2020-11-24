<?php
session_start();
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
    <div class="container row mx-auto mt-5 mb-5">
        <!-- Contenedor de acceso para registrarse -->
        <div class="container col-8 mt-4 mb-5">
            <h2>Accés</h2>
            <form action="#" method="POST">
                <div class="form-group mt-4 mb-5">
                    <label for="usu">Correu electrònic: </label>
                    <input type="text" class="form-control" name="usu" id="usu" required>
                </div>
                <div class="form-group mb-5">
                    <label for="pass">Contrasenya: </label>
                    <input type="password" class="form-control" name="pass" id="pass" required>
                </div>
                <button type="submit" class="btn btn-success" name="enviar" id="enviar">Enviar</button>
            </form>
            <br>
            <div class="op mt-3 mb-5">
                <p>No recordes la teva contrasenya ? </p><a href="recuperar_contra.php">clica aquí</a>
            </div>
            <div class="op mt-4 mb-4">
                <p>Registra't per obtenir un compte </p><a href="registre.php">clica aquí</a>
            </div>
        </div>
        <?php
        if (isset($_POST['enviar'])) {
            $correo = $_POST['usu'];
            $contra = md5($_POST['pass']);
            include_once __DIR__ . "/dinamico/bdd.php";
            include_once __DIR__ . "/dinamico/validar_email_contra.php";
        }
        ?>
    </div>

</body>

<footer>
    <?php
    include_once __DIR__ . "/dinamico/footer.php";
    ?>
</footer>

</html>