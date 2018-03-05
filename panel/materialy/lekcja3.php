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
				<h2>Odpowiedzialność etyczna i zawodowa</h2>
				
				<p>
				Inżynierowie oprogramowania muszą zaakceptować fakt, że ponoszą znacznie większą odpowiedzialność niż tylko wynikająca z ich technicznych umiejętności
				Muszą postępować etycznie i moralnie, jeśli chcą być uważani za profesjonalistów 
				Zachowywać się etycznie, to więcej niż tylko przestrzegać obowiązujące prawo
 				</p>
									  
			
		
				<h2>Zasady zawodowej odpowiedzialności</h2>
				<p>
				Zachowywanie tajemnicy
				Inżynierowie powinni zawsze dochowywać tajemnic powierzonych przez pracodawców i klientów, niezależnie od tego czy podpisano formalną umowę o ochronie tajemnicy.
				Kompetencje
				Inżynierowie nie powinni zawyżać poziomu swoich kompetencji. Nie powinni świadomie przyjmować prac, które przekraczają ich możliwości.
				Prawo własności intelektualnej
				Inżynierowie powinni znać miejscowe prawo regulujące korzystanie z własności intelektualnej. Powinni szczególnie dbać o poszanowanie intelektualnej własności swoich pracodawców i klientów.
				Niewłaściwe użycie komputera
				Inżynierowie oprogramowania nie powinni używać swoich umiejętności do niewłaściwego używania cudzych komputerów. Niewłaściwe użycie może być dość banalne (np. granie na maszynie pracodawcy) lub skrajnie poważne (rozsiewanie wirusów). 

				</p>
				
				<h2>Kodeksy etyczne i zawodowe</h2>
				
				<p>
				Stowarzyszenia zawodowe w USA współpracują ze sobą przy publikowaniu kodeksów profesjonalnego zachowania i kodeksy etyczne. 
				Omówiony poniżej kodeks zawiera osiem zasad dotyczących zachowania i decyzji profesjonalnych inżynierów oprogramowania oraz nauczycieli, zarządzających, kierowników, strategów, a także studentów. 


				</p>
				
				
				<h2>Kodeks etyki i zawodowej praktyki  (wersja skrócona)</h2>
				<p>
				Preambuła
				Inżynierowie oprogramowania muszą przyjąć na siebie zobowiązanie utwierdzenia analizy, specyfikacji, projektowania, budowy, testowania i pielęgnacji oprogramowania jako zawodu pożytecznego i szanowanego. Zgodnie z tym zobowiązaniem wobec zdrowia, bezpieczeństwa i dobrobytu społeczeństwa, inżynierowie oprogramowanie powinni stosować się do następujących Ośmiu Zasad: 
				1. Społeczeństwo
				Inżynierowie oprogramowania powinni postępować dla dobra społeczeństwa.
				2. Klient i pracodawca
				Inżynierowie oprogramowania powinni postępować zgodnie z interesami swojego klienta lub pracodawcy zgodnymi z dobrem społeczeństwa
				3. Produkt
				Inżynierowie oprogramowania powinni zapewnić, że ich produkty i związane z nimi zmiany spełniają najwyższe standardy profesjonalizmu. 
				4.  Rozsądek
				Inżynierowie oprogramowania powinni zachowywać rozsądek i niezależność swoich sądów. 
				5. Zarządzanie 
				Zarządzający inżynierami oprogramowania i zwierzchnicy powinni przyjąć i promować etykę w zarządzaniu tworzeniem i pielęgnacją oprogramowania.
				6. Profesja
				Inżynierowie oprogramowania powinni podnosić wiarygodność i reputację profesji zgodnie z dobrem społeczeństwa. 
				7. Koleżeństwo
				Inżynierowie oprogramowania powinni być uczciwi i chętni do pomocy swoim kolegom. 
				8. Ja sam 
				Inżynierowie oprogramowania powinni brać udział w długofalowej nauce  praktyki swojego zawodu. Powinni także promować etyczne działania w praktyce swojej profesji. 


				</p>
				<h2>Etyczne dylematy</h2>
				<p>
				Zasadnicza niezgodność z z poglądami przełożonego
				Nieetyczne postępowanie pracodawcy np. przy fałszowaniu dzienników kontroli przy testowaniu krytycznego systemu
				Uczestnictwo w tworzeniu systemów wojskowych i nuklearnych



				<p/>
				
				<br>
				<button class="btn btn-primary" onclick="window.location.href='lekcja3test.php' ">TEST</button>
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
