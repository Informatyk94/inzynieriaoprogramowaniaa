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
				<h2>Wstęp</h2>
				
				<p>
				Zaczynamy zajęcia z podstaw 
				inżynierii oprogramowania


				Slajdy na podstawie podręcznika 
				Iana Sommerville’a   
				Inżynieria oprogramowania
				WNT 2003
				</p>
									  
				<h2>Cele</h2> 
				
				<p>
				Zapoznanie się z inżynierią oprogramowania 
				i wyjaśnienie jej znaczenia
				Odpowiedzenie na podstawowe pytania dotyczące inżynierii oprogramowania
				Wprowadzenie do zagadnień etycznych i zawodowych i wyjaśnienie dlaczego one są istotne w inżynierii oprogramowania
				</p>
				
				<h2>Zawartość</h2>
				<p>
				Podstawowe zagadnienie w inżynierii oprogramowania 
				Etyczna i zawodowa odpowiedzialność
				</p>
				
				<h2>Inżynieria oprogramowania </h2>
				
				<p>
				Gospodarki wszystkich rozwiniętych krajów zależą od oprogramowania
				Coraz więcej i więcej systemów wymaga niezawodnego oprogramowania 
				Inżynieria oprogramowania zajmuje się teorią, metodami i narzędziami związanymi z wytwarzaniem oprogramowania    
				Obecnie wytwarzanie oprogramowania jest poważną gałęzią gospodarki narodowej rozwiniętego kraju
				</p>
				
				
				<h2>Koszty oprogramowania </h2>
				<p>
				Koszty oprogramowania są często dominującym składnikiem kosztów całego systemu. Zdarza się, że koszt oprogramowania znacznie przekracza samą wartość sprzętu komputerowego np. komputera osobistego.
				Koszt utrzymania i konserwacji oprogramowania jest większy niż koszt jego wytworzenia. Wieloletnia konserwacja oprogramowania może kosztować wielokrotnie więcej niż  jego zakup. 
				Inżynieria oprogramowania zajmuje się efektywnymi metodami wytwarzania i implementowania oprogramowania. 
				</p>
				<h2>FAQ o inżynierii  oprogramowania</h2>
				<p>
				Co to jest jest oprogramowanie? 
				Co to jest inżynieria oprogramowania ?
				Jaka jest różnica pomiędzy inżynierią oprogramowania a informatyką ?
				Jaka jest różnica pomiędzy inżynierią a inżynierią systemów oprogramowania ?
				Co to jest proces tworzenia oprogramowania ?
				Co to jest model procesu tworzenia oprogramowania ?
				Jakie są koszty inżynierii oprogramowania ?
				Co to jest CASE (Computer-Aided Software Engineering) ?
				Jakie właściwości ma dobre oprogramowanie ?
				Jakie są najistotniejsze wyzwania dla inżynierów oprogramowania ?
				<p/>
				
				<br>
				<button class="btn btn-primary" onclick="window.location.href='lekcja1test.php' ">TEST</button>
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