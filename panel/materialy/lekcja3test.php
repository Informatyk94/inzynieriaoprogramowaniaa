<?php
	session_start();
	ob_start();
	//Połącznie pliku head chwilowe rozwiąznie
	include("css/head.php");
	
	if($_SESSION["zalogowany"] == true){
		?>


					
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
	<div style="background-color:#EFEFEF; padding:15px">
				<h1>TEST</h1>
				<h5>1.Pytanie</h5>
				<h6>Czy Inżynierowie nie powinni zawyżać poziomu swoich kompetencji?</h6>
				<form method="post" action="lekcja3testwynik.php">
				<div class="radio">
					  <label>
						<input type="radio" name="optionsRadios1" id="optionsRadios11" value="option1" checked>
						Tak
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="optionsRadios1" id="optionsRadios12" value="option2">
						Nie
					  </label>
					</div>
							
				<br>
				<h5>2.Pytanie</h5>
				<h6>Czy Inżynierowie oprogramowania nie powinni używać swoich umiejętności do niewłaściwego używania cudzych komputerów.</h6>
				<div class="radio">
					  <label>
						<input type="radio" name="optionsRadios2" id="optionsRadios21" value="option1" checked>
						Tak
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="optionsRadios2" id="optionsRadios22" value="option2">
						Nie
					  </label>
					</div>
				<h5>3.Pytanie</h5>
				<h6>Inżynierowie oprogramowania powinni postępować zgodnie z interesami swojego klienta</h6>
				<div class="radio">
					  <label>
						<input type="radio" name="optionsRadios3" id="optionsRadios31" value="option1" checked>
						Tak
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="optionsRadios3" id="optionsRadios32" value="option2">
						Nie
					  </label>
					</div>
					<h5>4.Pytanie</h5>
				<h6>Inżynierowie oprogramowania powinni być uczciwi i chętni do pomocy swoim kolegom</h6>
				<form method="post" action="lekcja1testwynik.php">
				<div class="radio">
					  <label>
						<input type="radio" name="optionsRadios4" id="optionsRadios41" value="option1" checked>
						Tak
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="optionsRadios4" id="optionsRadios42" value="option2">
						Nie
					  </label>
					</div>							
				<br>
				<input type="submit" class="btn btn-success" ></input>
				
	</div class="materialy">
 </div>
  
  <div class="col-md-2"></div>
</div>
<?php
	}else{
		header("Location: ../index.php");		
	}
	ob_end_flush();
 ?>