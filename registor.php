<?php
include("conection.php");

if (isset($_POST['send'])) {
	if (strlen($_POST['pass']) >= 1) {
		$password = trim($_POST['pass']);
		$ide = ($_GET['variable1']);
		$resultado = mysqli_select_db($conex3, $db) or die ("error to connect in  registor");
		mysqli_query($conex3,"UPDATE emaildb SET password = '$password' WHERE id = '$ide'");
		if ($resultado) {
			?> 
			
		   <?php
		  
		} else {
			?> 
		
		   <?php

		}
	}   else { 
			?>


			<?php
		}	

}

// Para el while de las tablas
$consulta= "SELECT * FROM emaildb";
mysqli_select_db($conex3 ,"microtable");
$datos = mysqli_query ($conex3 ,$consulta);


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Usuarios Logeados</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="css/StyleThree.css">
		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- MDB 5 -->
		<link
		  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css"
		  rel="stylesheet"
		/>
	</head>
	<body>
		<main class="bg-light m-5 rounded">
			<div class="pt-5 text-center">
				<hgroup>
					<h1 class="font-weight-bolder">USUARIOS LOGEADOS</h1>
					<h2 class="font-weight-italic h4 pt-3 " style="color: #00A4EF;">SELECIONA EL USUARIO QUE DESEES EDITAR</h2>
				</hgroup>
			</div>
			<div class="p-5 text-center mt-5">

				<table class="table table-striped">
					 <thead>
						<tr class="table-color-bg">
							 <th class="text-white font-weight-bold" scope="col">ID</th>
							 <th class="text-white font-weight-bold" scope="col">E-MAIL</th>
							 <th class="text-white font-weight-bold" scope="col">CONTRASEÑA <button class="px-3 button-show btn-primary ms-1" id="button-show"><img src="img/eye.svg"></button></th>
							 <th class="text-white font-weight-bold" scope="col">FECHA</th>
							 <th class="text-white font-weight-bold" scope="col">EDICIÓN</th>
						</tr>
					 </thead>
					 <tbody>
						   <?php
							while ($fila = mysqli_fetch_array($datos)){
							?>

							<tr>
								<th scope="row">
									<?php echo $fila["ID"] ?>
										
								</th>
								<td>
									<?php echo $fila["email"] ?>
								</td>
								<td class="passwrd">
									<?php echo $fila["password"] ?>
								</td>
								<?php echo "<td class= 'hidden-text td-display'> contraseña oculta</td>" ?>
								<td>
									<?php echo $fila["fecha_reg"] ?>
								</td>
								<!-- Para una futura mejora con modal -->
<!-- 								<td>
									<?php echo "<button class= 'btn button-edit bg-succes text-white' data-mdb-toggle='modal' data-mdb-target='#modalEdicion'><img src='img/recycle.svg'></button>" ?>
  									<?php echo "<button class= 'btn button-del bg-danger text-white bi bi-trash'   data-mdb-toggle='modal' data-mdb-target='#modalEliminacion'><img src='img/trash.svg'></button>" ?>
								</td> -->
								<td>

									<a class= 'btn button-edit bg-succes text-white' href="updatePage.php?id=<?php echo $fila['ID'] ?>">
										<img src='img/pencil.svg'>
									</a>

									<a class = "btn button-del bg-danger" href="delete.php?id=<?php echo $fila['ID'] ?>" >
										<img src='img/trash.svg'>
									</a>
								</td>
							</tr>

							<?php
							}
							?>
					 </tbody>
				</table>

				<!-- Para mejora futura con modal -->
				<!-- Modal  Edición-->
				<div class="modal fade vh-100"
						id="modalEdicion"
						tabindex="-1"
						aria-labelledby="exampleModalLabel"
						aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
								  <div class="modal-header">
								    <h5 class="modal-title text-success font-weight-bold" id="exampleModalLabel">EDITAR </h5>
								    <button
								          type="button"
								          class="btn-close bg-danger"
								          data-mdb-dismiss="modal"
								          aria-label="Close"
								        ></button>
								  </div>
								  <h6 class="text-left mx-3 mt-3">Edición de usuario</h6>
								  <div class="modal-body">
								  </div>
								  <div class="modal-footer">
								    <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
								          Cerrar
								    </button>
								    <button type="button" class="btn btn-primary">Guardar cambios</button>
								  </div>
								</div>
						</div>
				</div>
				<!-- Modal de Eliminación-->
				<div
				  class="modal fade vh-100"
				  id="modalEliminacion"
				  tabindex="-1"
				  aria-labelledby="exampleModalLabel"
				  aria-hidden="true"
				>
				  <div class="modal-dialog modal-dialog-centered">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title text-danger font-weight-bold" id="exampleModalLabel">ELIMINAR</h5>
				        <button
				          type="button"
				          class="btn-close bg-danger "
				          data-mdb-dismiss="modal"
				          aria-label="Close"
				        ></button>
				      </div>
				      <h6 class="text-left mx-3 mt-3">Seguro que deseas eliminar este usuario?</h6>
				      <div class="modal-body">
				      	cuerpo
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
				          Cerrar
				        </button>
				        <button type="button" class="btn btn-primary">Aceptar</button>
				      </div>
				    </div>
				  </div>
				</div>

			</div>
		</main>
		<!-- Js Bootstrap 5 -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<!-- Js MDB -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"> </script>
	    <script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>