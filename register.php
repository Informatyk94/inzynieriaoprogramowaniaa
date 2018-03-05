 <?php
 
	//Połączenie z dazą danych
	include("db_login.php");
	
	//Pobieranie danych do zmiennych
	$login = $_POST["login"];
	$mail = $_POST["mail"];
	$password = md5($_POST["password"]);
	$repeat_password = md5($_POST["repeat_password"]);
	
	//System walidacji do zrobienia
	$blad_password = 0;
	$blad_login = 0;
	$blad_mail = 0;
	$walidacja_formularza = "register_page.php?blad=pass";
	
	/*
	//Test przechodzenia danych przez formularz
	echo "Login: " . $login . "<br />" . 
		"Mail: " . $mail . "<br />" .
		"Password: " . $password . "<br />" .
		"Repeat password: " . $repeat_password; 
	*/
	if($password!==$repeat_password){
		header("Location: " . $walidacja_formularza . "");
	}elseif($login == ""){
		
	}
	else{
		//Zapytanie do bazy danych
		$zapytanie = mysql_query("INSERT INTO users(id, login, password, mail ,imie, nazwisko) values ('','$login','$password', '$mail', '', '')");
		//Przekierowanie do strony głównej.
		header("Location: index.php");
	}
	
	
	
 ?>