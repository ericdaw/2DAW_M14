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
    
        <!-- Contenedor DASHBOARD -->
        <div class="dashboard container-fluid">
            <!-- Primera fila imagen, título y botón de ayuda  -->
            <div class="row justify-content-center align-items-center mr-5">
                <div class="col-1 ml-5"><img src="img/evento.png" alt="imagen" class="logo rounded img-fluid"></div>
                <div class="col-3 mt-2 "><h3>Cultura Mataró <blockquote class="text-light">venda d'entrades</blockquote></h3></div>
                <div class="col-1 offset-4">
                    <button class="btn btn-light" data-toggle="modal" data-target="#ajuda">
                        Ajuda
                    </button>
                </div>
            </div>

        </div>
        <!-- Componente Modal para mostrar mensaje dentro del botón Ayuda -->
        <div class="modal" id="ajuda">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            Título
                            <div class="text-right">
                                <span data-dismiss="modal">X</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                            Contenido de la ventana modal
                    </div>
                    <div class="modal-footer">
                            Pie de la ventana modal
                    </div>
                </div>
            </div>
        </div>
        <!-- Contenedor grande -->
        <div class="container row mx-auto mt-4 mb-5">
            <!-- Contenedor de espectáculos -->
            <div class="container col-9 mt-4">
                <h2>Esdeveniments a la venda</h2>
                <div class="container row align-items-end mt-5">
                    <div class="container col-4">
                        <!-- <figure class="figure" >
                            <img src="img/monologo.jpg" alt="esd1" class="figure-img img-fluid">
                            <figure-caption>Texto imagen</figure-caption>
                        </figure> -->
                    </div>
                    <div class="container col-4">
                        <!--
                        <figure class="figure" >
                            <img src="img/bruce.jpg" alt="esd2" class="figure-img img-fluid">
                            <figure-caption>Texto imagen2</figure-caption>
                        </figure> -->
                    </div>
                </div>
                <div class="container row align-items-end mt-3 mb-3 mx-auto">
                    <div class="container col-3 m-4">
                        <!--
                        <figure class="figure">
                            <img src="img/notas_musicales.jpg" alt="esd3" class="figure-img img-fluid">
                            <figure-caption>Texto imagen3</figure-caption>
                        </figure> -->
                    </div>
                    <div class="container col-3 m-4">
                        <!--
                        <figure class="figure">
                            <img src="img/bob.jpg" alt="esd4" class="figure-img img-fluid">
                            <figure-caption>Texto imagen4</figure-caption>
                        </figure> -->
                    </div>
                    <div class="container col-3 m-4">
                        <!--
                        <figure class="figure">
                            <img src="img/leon.jpg" alt="esd5" class="figure-img img-fluid">
                            <figure-caption>Texto imagen5</figure-caption>
                        </figure> -->
                    </div>
                </div>
            </div>
            <!-- Contenedor de acceso para registrarse -->
            <div class="container col-3 mt-4">
                <h2>Accés</h2>
                <form action="#" method="POST">
                    <div class="form-group mt-4">
                        <label for="usu">Nom d'usuari: </label>
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

    </body>

    <footer>
        <!-- Contenedor FOOTER -->
        <div class="footer container-fluid mt-2 fixed-bottom">
            <!-- Primera fila imagen, título y botón de ayuda  -->
            <div class="row justify-content-around ml-5">
                <div class="col-3 mt-3">
                    <p>
                        Ajuntament de Badalona<br>
                        Direcció de Cultura<br>
                        P-0812000H<br>
                        Cºdel mar 1 Badalona<br>
                        <a href="https://goo.gl/maps/77tJg5sd97tHZJv19">--- Google Maps</a><br>
                        Tel. 93 311 11 11 - Fax 93 758 23 62
                        A/e: <a href="">Cultura@ajbadalona.cat</a>
                    </p>
                </div>
                <div class="col-3 mt-3">
                    <p>
                        Horari d'atenció al públic i venta d'entrades de dilluns a divendres de 9 a 14h <br>
                        De dimecres a divendres de 18 a 20h.
                    </p>
                </div>
                <div class="col-2 mt-3">
                    <p>
                        <a href="">Nota legal</a><br>
                        <a href="">Subscriu-te al butlletí</a><br>
                        <a href="">Contacta</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</html>