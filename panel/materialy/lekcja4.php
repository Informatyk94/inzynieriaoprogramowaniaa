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
				<h2>Główne tezy</h2>
				
				<p>
				Inżynieria oprogramowania to dziedzina inżynierii, która obejmuje wszystkie aspekty tworzenia oprogramowania. 
				Produkty programowe składają się z utworzonych programów oraz związanej z nimi dokumentacji. Zasadniczymi atrybutami produktów są zdatność do pielęgnacji, niezawodność, efektywność i użyteczność. 
				Proces tworzenia oprogramowania składa się z czynności prowadzących do utworzenia produktu programowego. Głównymi czynnościami są specyfikacja oprogramowania, tworzenie, zatwierdzenie i ewolucja. 
				Metody to uporządkowane sposoby budowy oprogramowania. Obejmują sugestie wyboru procesu tworzenia, mutacji, reguły określające, jakie opisy systemu opracować, a także wskazówki projektowe. 
				Narzędzia CASE to systemy komputerowe, które są przeznaczone do wspomagania rutynowych czynności procesu tworzenia takich jak praca nad diagramami projektowymi, sprawdzanie poprawności diagramów oraz śledzenie wykonanych testów. 
				Inżynierowie oprogramowania ponoszą odpowiedzialność przed kolegami po fachu i społeczeństwem. Nie powinni zajmować się jedynie aspektami technicznymi. 
				zawodowe publikują kodeksy postępowania , które definiują standardy zachowania oczekiwane od swoich członków. 
				</p>
				
				
				<br>
				<button class="btn btn-primary" onclick="window.location.href='lekcja4test.php' ">TEST</button>
				<button class="btn btn-default" onclick="window.location.href='../index.php' ">Wstecz</button>
				
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
