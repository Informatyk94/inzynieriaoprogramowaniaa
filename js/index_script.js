$(function(){
	$("#register_dialog").dialog({			//funkcja która wyswietlala
		autoOpen: false						//w tym miejscu jest wylaczone autouruchamianie sie okienta
	});
	
	$("#register").click(function(){				//po kliknieciu na przycisk zarejstruj sie wlaczy okiento
		$('#register_dialog').dialog("open");
	});
});
