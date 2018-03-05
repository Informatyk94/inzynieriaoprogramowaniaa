<?php
//Podpinanie nagłówka
include("head.php");

@$blad = $_GET["blad"];
?>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	<div class="jumbotron">
		<h1>Zarejestruj się</h1>
		<!-- Formuloarz rejestracji -->
		<form method="post" action="register.php">
			  <div class="form-group" class="jumbotron">
				<label for="exampleInputLogin">Login</label>
				<input type="text" class="form-control" id="login" name="login" placeholder="Login">
			  </div>
			  <div class="form-group" class="jumbotron">
				<label for="exampleInputEmail1">E-mail</label>
				<input type="email" class="form-control" id="mail" name="mail" placeholder="Powtórz Login">
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Hasło</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Hasło">
			  </div>
			  <div class="form-group">
				<?php 
					if($blad=="pass"){
						echo '<div class="alert alert-danger" role="alert">Hasła nie są takie same!!</div>';
					};
				?>
				<label for="exampleInputPassword1">Powtórz Hasło</label>
				<input type="password" class="form-control" id="repeat_password" name="repeat_password" placeholder="Powtórz Hasło">
			  </div>
			  <div class="checkbox">
				<label>
				  <input type="checkbox"> Akceptuje regulamin
				</label>
			  </div>
			  <button type="submit" class="btn btn-success">Zarejestruj się</button>
		</form>
	</div>
  </div>
  
  <div class="col-md-4"></div>
</div>
