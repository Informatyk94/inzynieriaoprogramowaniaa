<?php

session_start();
include("../db_login.php");
 
//Podpinanie nagłówka
include("../head.php");

$user_imie = $_SESSION["user_imie"];
$user_nazwisko = $_SESSION["user_nazwisko"];


@$blad = $_GET["blad"];
?>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	<div class="jumbotron">
		<h1>Ustawienia konta</h1>
		<!-- Formuloarz ustawienia konta -->
		<form method="post" action="ustawienia.php">
			  <div class="form-group" class="jumbotron">
				<label for="exampleInputLogin">Imię</label>
				<input type="text" class="form-control" id="login" name="imie" placeholder="<?php echo $user_imie; ?>">
			  </div>
			  <div class="form-group" class="jumbotron">
				<label for="exampleInputLogin">Nazwisko</label>
				<input type="text" class="form-control" id="login" name="nazwisko" placeholder="<?php echo $user_nazwisko; ?>">
			  <button type="submit" class="btn btn-success" >Zatwierdź</button>
			  <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Anuluj</button>
		</form>
	</div>
  </div>
  
  <div class="col-md-4"></div>
</div>
