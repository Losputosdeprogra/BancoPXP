<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi microERP</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"  crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    </head>


    <body>

        <div class="row">
            <div class="col-md-4"></div>

            <!-- INICIA LA COLUMNA -->

            <div class="col-md-4">

                <center><h1>Realizar un extracto</h1></center>

                <form method="POST" action="../../controlador/ControladoresCliente/ClienteInterfazControlador.php" >

                    <div class="form-group">
                        <label for="FechaInicio">Fecha de inicio </label>
                        <input type="date" name="FechaInicio" class="form-control" id="fechaInicio" placeholder="dd/mm/yyy">
                    </div>

                    <div class="form-group">
                        <label for="FechaFinal">Fecha final </label>
                        <input type="date" name="FechaFinal" class="form-control" id="fechaFinal" placeholder="dd/mm/yyy">
                    </div>    

                    <center>

                      <input type="submit" value="Soliciatr extraxto" class="btn btn-primary" name="btn_Solicitar_extracto">

                    </center>

                </form>
            </div>
            <!-- TERMINA LA COLUMNA -->
            <div class="col-md-4"></div>
        </div>
    </body>
</html>