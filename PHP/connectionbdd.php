<?php 

		$server="localhost";
		$user="root";
		$mdp="oui";
		$bd="com_tech_office_appli";
		
		$connexion=@new mysqli($server,$user,$mdp,$bd,$req);
		

		// verification de la connexion 
		if($connexion->connect_errno){
			printf("pblm %d connexion %s ",$connexion->connect_errno,$connexion->connect_error);
			exit();
		}
		$connexion->set_charset("utf8");
?>	
