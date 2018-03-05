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
				<h2>Co to jest oprogramowanie </h2>
				
				<p>
				 Są to programy komputerowe, cała związana z nimi dokumentacja i dane konfiguracyjne
					Rodzaje produktów oprogramowania 
					Powszechne 
					Dostosowane (na zamówienie)

				</p>
									  
				<h2>Co to jest inżynieria oprogramowania</h2> 
				
				<p>
				Jest to dziedzina inżynierii, która obejmuje wszystkie aspekty tworzenia oprogramowania od fazy początkowej do jego pielęgnacji
				Inżynierowie oprogramowania pracują w sposób systematyczny i uporządkowany ponieważ jest to najskuteczniejszy sposób tworzenia oprogramowania wysokiej jakości
				</p>
				
				<h2>Jaka jest różnica pomiędzy inżynierią oprogramowania a informatyka </h2>
				<p>
				Zasadniczo informatyka obejmuje teorie i podstawowe zasady działania komputerów. Inżynieria oprogramowania obejmuje praktyczne problemy związane z tworzeniem oprogramowania 
				Byłoby dobrze gdyby inżynier programowania znał teorie informatyczne, z drugiej strony nie zawsze przystają one do rzeczywistości
				</p>
				
				<h2>Jaka jest różnica pomiędzy inżynierią oprogramowania a inżynierią systemów</h2>
				
				<p>
				Inżynieria systemów komputerowych obejmuje wszystkie aspekty tworzenia i ewolucji systemów komputerowych, w których oprogramowanie odgrywa zasadniczą rolę. 
				Inżynierowie systemów biorą udział  w specyfikacji systemu i definiowania jego ogólnej architektury
				</p>
				
				
				<h2>Co to jest proces tworzenia oprogramowania </h2>
				<p>
				Jest to zbiór czynności i związanych z nimi wyników, które zmierzają do opracowania produktu programowego
				Zasadnicze czynności wspólne dla wszystkich procesów
				Specyfikacja oprogramowania 
				Tworzenie oprogramowania 
				Zatwierdzenie oprogramowania 
				Ewolucja oprogramowania
				</p>
				<h2>Co to jest model procesu tworzenia oprogramowania</h2>
				<p>
				Jest to uproszczona prezentacja procesu tworzenia oprogramowania. Modele ze swej natury są uproszczeniami 
				Przykłady takich modeli:
				Model przepływu prac
				Model przepływu danych (lub model czynności)
				Model rola-akcja
				Przykłady ogólnych modeli (paradygmatów) tworzenia oprogramowania 	
				Model kaskadowy
				Tworzenie ewolucyjne
				Formalne przekształcenia
				Składanie systemu z komponentów ponownego użycia
				<p/>
				
				<br>
				<button class="btn btn-primary" onclick="window.location.href='lekcja2test.php' ">TEST</button>
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
