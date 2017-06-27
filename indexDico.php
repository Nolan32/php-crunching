<?php
	$string= file_get_contents("dictionnaire.txt" );
	$dico = explode("\n", $string);
	$nb15 = [];
	array_push($nb15, $dico);
	echo gettype($nb15);

	echo 'le nombre de mot dans le dictionnaire est de : ', count($dico),'<br />';

	for ($i=0; $i < 336532 ; $i++) { 
		if (strlen($dico[$i])=== 15 ) {
			array_push($nb15, $dico[$i]);
		}
	}
	echo 'il y a : ', count($nb15), ' mot de 15 lettre dans le dictionnaire','<br />';


	echo 'il y a : ',substr_count($string, 'w')," mot ayant un w a l'interieur.",'<br />';
	$q ='q';
	$count= 0;
	foreach ($dico as $string) {
		if (substr($string, -1)=== $q) {
			 $count++;			
		}
	}
		echo 'il y a '.$count.' mot finnisant par Q ';

	

?>