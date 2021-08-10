<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda contactos</title>
    <?php 
    
    require_once "dependencias.php";
    ?>
</head>

<body>
    <div class="container">
        <?php require_once "menu.php";?>
        <div class="jumbotron">
            <h1 class="display-4">Agenda de Contactos</h1>
            <p class="lead">Una simple agenda donde podras agregar a todos tus conocidos.</p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="public/img/chupetin.jpg" class="img-fluid " alt="perfil">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <tr>
                                    <th>Datos de persona, falta1</th>
                                </tr>
                                <tr>
                                    <th>Datos de persona, falta2</th>
                                </tr>
                                <tr>
                                    <th>Datos de persona, falta3</th>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <hr class="my-4">
            <p>Creado con ganas por el grupo de Programación Web 1 </p>

        </div>
    </div>

</body>

</html>