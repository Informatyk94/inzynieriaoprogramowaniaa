 <?php
 session_start();
 include("../db_login.php");
 
 $imie = $_POST["imie"];
 $nazwisko = $_POST["nazwisko"];
 $user_id = $_SESSION["user_id"];
 
 //Zmiana w bazie danych imie
 if($imie!==''){
	$zapytanie = mysql_query("UPDATE users SET IMIE='$imie' 		   WHERE ID = '$user_id'");
	//Zmiana zniennej w sesji
	$_SESSION["user_imie"] = $imie;
 }
 if($nazwisko!==''){
	$zapytanie = mysql_query("UPDATE users SET NAZWISKO = '$nazwisko' WHERE ID = '$user_id'");
	$_SESSION["user_nazwisko"] = $nazwisko;
 }
 header("Location: index.php");
 ?>