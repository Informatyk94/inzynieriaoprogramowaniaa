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
				<form method="post" action="lekcja4testwynik.php">
					<h1>TEST</h1>
					<h5>1.Pytanie</h5>
					<h6>Inżynieria oprogramowania to dziedzina inżynierii, która obejmuje wszystkie aspekty tworzenia oprogramowania</h6>
					
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
								
				
					<h5>2.Pytanie</h5>
					<h6>Proces tworzenia oprogramowania składa się z czynności prowadzących do utworzenia produktu programowego.</h6>
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
					<h6>Narzędzia CASE to systemy komputerowe, które są przeznaczone do wspomagania rutynowych czynności procesu tworzenia takich jak praca nad diagramami projektowymi, sprawdzanie poprawności diagramów oraz śledzenie wykonanych testów.</h6>
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
					<h6>Produkty programowe składają się z utworzonych programów oraz związanej z nimi dokumentacji. Zasadniczymi atrybutami produktów są zdatność do pielęgnacji, niezawodność, efektywność i użyteczność.</h6>
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
					<h5>5.Pytanie</h5>
					<h6>Inżynierowie oprogramowania ponoszą odpowiedzialność przed kolegami po fachu i społeczeństwem.</h6>
					<div class="radio">
						  <label>
							<input type="radio" name="optionsRadios5" id="optionsRadios51" value="option1" checked>
							Tak
						  </label>
					</div>
					<div class="radio">
						  <label>
							<input type="radio" name="optionsRadios5" id="optionsRadios52" value="option2">
							Nie
						  </label>
					</div>							
					<br>
					<input type="submit" class="btn btn-success" ></input>
				</form>
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