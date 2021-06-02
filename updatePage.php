<?php 
include("conection.php");

$getIdSelect=$_GET['id'];
$consultaSelect="SELECT * FROM emaildb WHERE ID='$getIdSelect'";
$querySelect=mysqli_query($conex2,$consultaSelect);
$filaSelect=mysqli_fetch_array($querySelect);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Actualizar</title>
        <link rel="icon" href="img/favicon.ico">
        <link rel="stylesheet" href="css/StyleUpdate.css">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- MDB 5 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class="bg-sucess row align-items-center justify-content-center vh-100 mt-4">
            <form class="card container tamaño-container-update px-0" action="update.php" method="POST">
                <div class="bg-dark container-header pt-2">
                    <h1 class="text-center font-weight-bold text-info mt-2 h2">ACTUALIZAR USUARIO</h1>
                    <h2 class="text-center h5 text-white fw-normal">Cambie y actualize el usuario</h2>
                </div>
                <div class="px-5 mt-4">
                    <input type="hidden"  class="form-control" name="id" value="<?php echo $filaSelect['ID']  ?>" >

                    <div class="wrapper mb-5 mt-4">
                        <div class="input-data">
                            <input  type="text" name="email" value="<?php echo $filaSelect['email']  ?>" required>
                            <div class="underline"></div>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="wrapper mb-5">
                        <div class="input-data">
                            <input type="text" name="password" value="<?php echo $filaSelect['password']  ?>" required>
                            <div class="underline"></div>
                            <label for="contraseña">Contraseña</label>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="input-data">
                            <input type="text" name="fecha_reg" value="<?php echo $filaSelect['fecha_reg']  ?>" required>
                            <div class="underline"></div>
                            <label for="contraseña">Fecha</label>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary btn-block font-weight-bold mt-4" value="Actualizar!">
                </div>

            </form>
        </div>
        <!-- Js Bootstrap 4 -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Js MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"> </script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>
