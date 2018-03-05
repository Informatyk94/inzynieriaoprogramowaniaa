<?php
//Podpinanie nagłówka
include("css/head.php");

	$optionsRadios1 = $_POST["optionsRadios1"];
	$optionsRadios2 = $_POST["optionsRadios2"];
	$optionsRadios3 = $_POST["optionsRadios3"];
	$optionsRadios4 = $_POST["optionsRadios4"];
	$optionsRadios5 = $_POST["optionsRadios5"];
	
	$wynik = 0;
	$nr = 0;
	
	if($optionsRadios1 == "option1"){
		$wynik++;
	};
		$nr++;
	if($optionsRadios2 == "option1"){
		$wynik++;
	};
		$nr++;
	if($optionsRadios3 == "option1"){
		$wynik++;
	};
		$nr++;
	if($optionsRadios4 == "option1"){
		$wynik++;
	};
		$nr++;
	if($optionsRadios5 == "option1"){
		$wynik++;
	};
		$nr++;
	// test //
	//echo $wynik;
	//echo $nr;
	
?>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	<div class="jumbotron">
		<h1>Twój wynik to: <?php echo $wynik ?></h1>
		<?php 
		if($wynik >= (($nr * 75)/100)){
			echo "<p class='bg-success'>Gratulacje test zaliczony.</p>";
			
		}else{
			echo "<p class='bg-danger'>Niestety nie udało ci sie zaliczyć testu.</p>";
		};
		?>
		<button class="btn btn-primary" onclick="window.location.href='../index.php' ">Wstecz</button>
  <div class="col-md-4"></div>
</div>
