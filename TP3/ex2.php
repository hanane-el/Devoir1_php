<?php
//  NOM: HANANE EL FERDAOUSSI  

    
$Fichier = "text.txt";
$TabFich = file($Fichier);


for($i = 0; $i < count($TabFich); $i++)
{
	echo $TabFich[$i];
}

?>