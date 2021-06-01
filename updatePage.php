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
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css"
          rel="stylesheet"
        />
    </head>
    <body>
        <div class="bg-sucess row align-items-center justify-content-center vh-100 mt-4">

            <form class="card container p-5 tamaño-container-update" action="update.php" method="POST">
                <h1 class="text-center font-weight-bold">Actualizar Usuario</h1>

                <input type="hidden"  class="form-control" name="id" value="<?php echo $filaSelect['ID']  ?>" >

                <label for="email">Email</label>
                <input type="text" class="form-control mb-3" name="email" placeholder="Email" value="<?php echo $filaSelect['email']  ?>" required>

                <label for="contraseña">Contraseña</label>
                <input type="text" class="form-control mb-3" name="password" placeholder="Contraseña" value="<?php echo $filaSelect['password']  ?>" required>

                <label for="fecha">Fecha</label>
                <input type="text" class="form-control mb-3" name="fecha_reg" placeholder="Fecha" value="<?php echo $filaSelect['fecha_reg']  ?>" required>

                <input type="submit" class="btn btn-primary btn-block font-weight-bold mt-4" value="Actualizar!">

                <!-- Para una mejora futura del input -->
<!--               <div class="wrapper">
                 <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label>Name</label>
                 </div>
              </div> -->
            </form>
        </div>
        <!-- Js Bootstrap 4 -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Js MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"> </script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>
