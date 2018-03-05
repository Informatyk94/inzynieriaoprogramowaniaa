 <?php
	session_start();
	ob_start();
	include("../head.php");
	
	if($_SESSION["zalogowany"] == true){
		?>
		
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-8" style="background-color:#EFEFEF; padding:15px">
						<table class="table table-hover">
							<tr>
								<td>#</td>	<td>Nazwa Lekcji</td>
							</tr>
							
							<tr onclick="window.location.href='materialy/lekcja1.php'">
								<td >1</td>	<td>Wstęp</td>
							</tr>
							
							<tr onclick="window.location.href='materialy/lekcja2.php'">
								<td>2</td>	<td>Lekcja 1</td>
							</tr >
							<tr onclick="window.location.href='materialy/lekcja3.php'">
								<td>3</td>	<td>Lekcja 2</td>
							</tr>
							<tr onclick="window.location.href='materialy/lekcja4.php'">
								<td>4</td>	<td>Lekcja 3</td>
							</tr>
						</table>
					</div>
					<div class="col-xs-6 col-md-4">
						<div class="list-group">
							<a href="logout.php"  class="list-group-item active" ><?php  echo "Wyloguj " . $_SESSION["user_login"] ?> </a>
							<a href="konto.php" class="list-group-item">Konto</a>
							<!--<a href="#" class="list-group-item">Porta ac consectetur ac</a>
							<a href="#" class="list-group-item">Vestibulum at eros</a>-->
						</div>
					</div>
				</div>
			</div>
		<?php
	}else{
		header("Location: ../index.php");		
	}
	ob_end_flush();
 ?>