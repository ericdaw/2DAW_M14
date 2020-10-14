<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <title>Esdeveniment</title>
    </head>
    <body>
        <div class="dashboard container-flex bg-secondary mt-2">
            <div class="row justify-content-around align-items-center">
                <div class="col-1"><img src="img/dashboard.png" alt="imagen" class="rounded img-fluid"></div>
                <div class="col-5"><h2>Cultura Mataró venda d'entrades</h2></div>
                <div class="col-1">
                    <div class="modal" id="ajuda">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-tittle">
                                        Título
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
                    <button class="btn btn-info" data-toggle="modal" data-target="#ajuda">
                        Ajuda
                    </button>
                </div>
            </div>  
        </div>
        <div class="container row mx-auto bg-info mt-4">
            <div class="container col-9 bg-success">
                <h2>Esdeveniments a la venda</h2>
                <div class="container row">
                    <div class="container col-4 bg-primary">
                        <figure class="figure">
                            <img src="img/monologo.jpg" alt="esd1" class="figure-img img-fluid">
                            <figure-caption>Texto imagen</figure-caption>
                        </figure>
                    </div>
                    <div class="container col-4 bg-primary">
                        <figure class="figure">
                            <img src="img/bruce.jpg" alt="esd2" class="figure-img img-fluid">
                            <figure-caption>Texto imagen2</figure-caption>
                        </figure>
                    </div>
                </div>
                <div class="container row mt-3 mb-3 mx-auto">
                    <div class="container col-3 bg-primary m-4">
                        <figure class="figure">
                            <img src="img/notas_musicales.jpg" alt="esd3" class="figure-img img-fluid">
                            <figure-caption>Texto imagen3</figure-caption>
                        </figure>
                    </div>
                    <div class="container col-3 bg-primary m-4">
                        <figure class="figure">
                            <img src="img/bob.jpg" alt="esd4" class="figure-img img-fluid">
                            <figure-caption>Texto imagen4</figure-caption>
                        </figure>
                    </div>
                    <div class="container col-3 bg-primary m-4">
                        <figure class="figure">
                            <img src="img/leon.jpg" alt="esd5" class="figure-img img-fluid">
                            <figure-caption>Texto imagen5</figure-caption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="container col-3 bg-warning">
                <h2>Accés</h2>
                <form action="#" method="POST">
                    <div class="form-group">
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
                <div class="mt-3">
                    <p>No recordes la teva contrasenya ? </p><a href="#">clica aquí</a>
                </div>
                <div class="mt-4">
                    <p>Registra't per obtenir un compte </p><a href="#">clica aquí</a>
                </div>
            </div>
        </div>
    </body>
</html>