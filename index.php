 <html>
 <?php
	session_start();
	ob_start();
 
	//Połącznie pliku head
	include("head.php");
	//Walidacja przed podwójnym zalogowaniu się
	if(@$_SESSION["zalogowany"]== true){
		header("Location: panel/index.php"); 
	}else{
	?>
		<body>
				<!-- Główny kontener-->
				<div id="wrapper" >
					<!-- Grid System -->
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-8">
						<!-- Informacja o wersji Beta -->
							<div class="jumbotron">
								 <h1>Inżynieria oprogramowania</h1>
								 <p>Przystąp do kursu z inżynieri oprogramowania.</p>
								 <p><a class="btn btn-danger btn-lg" href="index.php" role="button" >Zamknięta beta</a></p>
							</div>
						</div>
						<div class="col-xs-6 col-md-4">
							<div class="jumbotron">
									<!-- Formularz logowania -->
								 <h3>Zaloguj się</h3>
								 <form method="post" action="login.php" class="form">
									<input type="text" name="login" placeholder="login" class="form-control" />
									<input type="password" name="password" placeholder="password" class="form-control" />
									<input type="submit" class="btn btn-primary" value="Zaloguj się" class="form-control" name="login_button" />
									<input type="button" class="btn btn-primary" value="Zarejstruj się" class="form-control" id="register_button" onclick="window.location.href='register_page.php' " />
								 </form>
								 
							</div>
						</div>
					</div>
				</div>
		</body>
	</html>
	<?php
	}
	ob_end_flush();
	?>