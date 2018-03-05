<?php

	//Plik odbioru formularza login z index.php

	//Strat SESJI
	session_start();
	//Włączenie buforowanie
	ob_start();
	//Podpięcie nagłówka
	include("head.php");
	//Podpinanie bazy danych
	include("db_login.php");
	


	//Pobieranie danych z formularza do logowania
	$login = $_POST["login"];
	$password = md5($_POST["password"]);
	

	//Sprawdzanie czy login istnieje
	$zapytanie = mysql_query("SELECT Login FROM users WHERE Login = '$login'");
	$wynik_zapytania = mysql_fetch_array($zapytanie);
	
	if($wynik_zapytania[0] != $login){
		//echo "User nie istnieje. Wynik zapytania = " . $wynik_zapytania[0];
		header("Location: index.php");
		
	}else{
		//echo "User istnieje" . $wynik_zapytania[0];
		
		//Zapytanie do bazy odnośnie hasła przypisanego do loginu
		$zapytanie = mysql_query("SELECT PASSWORD FROM users WHERE LOGIN = '$login'");
		$wynik_zapytania = mysql_fetch_array($zapytanie);
		
		//Szybki test wpisanego hasła z bazą danych
		//echo  $wynik_zapytania[0] . " Wynik z bazy. <br />";
		//echo  $password . " wpiasne hasłol: ";
		
		
		//Sprawdzenie zgodności hasła do loginu
		if($password == $wynik_zapytania[0]){
			
			//Pobieranie danych z bazy
			$zapytanie = mysql_query("SELECT ID, LOGIN, IMIE, NAZWISKO FROM users WHERE LOGIN = '$login'");
			$wynik_zapytanie = mysql_fetch_array($zapytanie);
			
			//Przypiasanie do sesji zmiennych
			$_SESSION["zalogowany"] = true;
			$_SESSION["user_id"] = $wynik_zapytanie[0];
			$_SESSION["user_login"] = $wynik_zapytanie[1];
			$_SESSION["user_imie"] = $wynik_zapytanie[2];
			$_SESSION["user_nazwisko"] = $wynik_zapytanie[3];
			
			echo $_SESSION["user_imie"];
			echo $_SESSION["user_nazwisko"];
			
			
			//Przejście do strony głównej.
			header("Location: panel/index.php");
		}else{
			//echo "Błędne hasło";
			header("Location: index.php");
		}
	}
//Zamknięcie buforowania
ob_end_flush();
?>