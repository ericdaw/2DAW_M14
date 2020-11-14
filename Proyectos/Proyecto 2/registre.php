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

    <!-- Contenedor DASHBOARD -->
    <div class="dashboard container-fluid">
        <!-- Primera fila imagen, título y botón de ayuda  -->
        <div class="row justify-content-center align-items-center mr-5">
            <div class="col-1 ml-5"><img src="img/evento.png" alt="imagen" class="logo rounded img-fluid"></div>
            <div class="col-3 mt-2 ">
                <h3>Cultura Mataró <blockquote class="text-light">venda d'entrades</blockquote>
                </h3>
            </div>
            <div class="col-1 offset-4">
                <button class="btn btn-light" data-toggle="modal" data-target="#ajuda">
                    Ajuda
                </button>
            </div>
        </div>
    </div>
    <!-- Componente Modal para mostrar mensaje dentro del botón Ayuda -->
    <div class="modal fade" id="ajuda">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <div class="text-right">
                            <span data-dismiss="modal">X</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <h4><strong>Ajuda</strong></h4>
                    <br>
                    <p><strong>Com contactar amb www.entradesculturabadalona.cat?</strong></p>
                    <p>Pots contactar amb nosaltres enviant un correu electrònic a l'adreça cultura@ajbadalona.cat o bé trucant al 93 758 23 61 (de dilluns a divendres de 9 a 14 h i de dimecres a divendres de 18 a 20 h). Agost de 9 a 14 h</p>
                    <p><strong>És segur comprar per internet?</strong></p>
                    <p>Des de www.entradesculturabadalona.cat utilitzem un procés de compra segur, certificat per Thawte SSL CA. Això significa que durant tot el procés de compra la informació viatja xifrada mitjançant protocol SSL i claus de 128 bits. En el moment del pagament sestableix una connexió directa amb CatalunyaCaixa, entitat que alhora es posa en contacte directe amb l'entitat emissora de la targeta per validar l'operació.</p>
                    <p><strong>Puc comprar entrades pagant amb una targeta que no sigui de CatalunyaCaixa?</strong></p>
                    <p>Sí, el pagament el pots efectuar amb una targeta financera de qualsevol entitat. Les que acceptem són Visa, Mastercard, Eurocard, Maestro, Euro-6000 i JCB.</p>
                    <p><strong>Quan vaig a pagar les entrades em diu targeta de crèdit incorrecta</strong></p>
                    <p> A la pantalla de dades del procés de compra s'ha d'introduir el número de la targeta amb els 16 dígits seguits (15 en el cas d'American Express), sense espais en blanc entremig.</p>
                    <p><strong>No puc comprar i la meva targeta és vàlida i té saldo</strong></p>
                    <p> Per internet utilitzem un mètode de pagament basat en un mètode segur. És a dir, en el moment de fer el pagament connectem amb CatalunyaCaixa i aquesta alhora es posa en contacte amb l'entitat emissora de la targeta per tal d'autenticar l'usuari. Si la targeta no està donada d''lta per operar en entorns segurs d'internet, l'entitat no pot acceptar el pagament. Cada entitat utilitza els seus propis sistemes de pagament (demanant un PIN, CIF, coordenada, telèfon mòbil, etc.). Si sorgeix aquest problema hauràs de posar-te en contacte amb la teva entitat financera perquè la teva targeta pugui operar en entorns segurs d'internet.
                        També pot ser que des de lentorn des del qual estàs intentant realitzar loperació del pagament (per exemple xarxes dempresa) restringeixi aquest tipus daccessos per qüestions de seguretat o de política de dempresa.</p>
                    <p><strong> No arribo a la finestra de Visa (Sermepa)</strong></p>
                    <p>Un cop has introduït les teves dades (nom, cognoms, contacte, targeta i la seva caducitat) i cliques al botó Pagar, s'ha d'obrir una finestra més petita que connecta amb Visa Espanya. Si no apareix aquesta finestra pot ser degut a:</p>
                    <p>1.- Lentorn des del qual estàs intentant realitzar loperació del pagament (per exemple xarxes dempresa) restringeixi aquest tipus daccessos per qüestions de seguretat o de política de dempresa.</p>
                    <p>2.- Tens instal·lat algun programa software inhibidor de finestres emergents (pop-up). Pots provar de desactivar aquest programa per realitzar la compra i després tornar-lo a activar.</p>
                    <p><strong>Tinc el CIP, PIN o la targeta bloquejada</strong></p>
                    <p>En el moment del pagament l'entitat emissora de la targeta sol·licita a la persona que realitza loperació un codi per validar-ne la identat com a titular. Cada entitat té els seus propis sistemes d'autenticació: CIP, PIN, missatge al mòbil, etc, i cada entitat decideix el nombre màxim d'intents fallits (normalment entre 3 i 5). En cas de bloqueig només la teva entitat financera podrà desbloquejar la targeta per poder realitzar operacions per internet com el pagament dentrades.</p>
                    <p><strong>No he pogut imprimir les entrades / Com puc tornar a imprimir les entrades?</strong></p>
                    <p>Pots anar a lopció Historial de compres del menú dusuari. També pots recollir les entrades a les oficines de Direcció de Cultura o bé des duna hora abans de lespectacle a la mateixa taquilla. Per recollir les entrades hauràs de presentar a la taquilla el teu DNI que tidentifiqui com a la persona que ha realitzat el pagament de les entrades.</p>
                    <p><strong>L'operació no ha acabat bé però les meves entrades estan reservades</strong></p>
                    <p>Des del moment de la selecció de les butaques, aquestes es pre-reserven durant 15 minuts perquè puguis completar l'operació de pagament. Si per algun motiu aquest procés es veu interromput, lassignació de les butaques no quedarà alliberada fins que no hagin transcorregut aquests 15 minuts.</p>
                </div>
            </div>
        </div>
    </div>
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
                include_once __DIR__ . "/bdd.php";

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
    <!-- Contenedor FOOTER -->
    <div class="footer container-fluid mt-2">
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