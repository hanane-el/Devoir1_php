<!DOCTYPE html>
<html>
    <!--   NOM: HANANE EL FERDAOUSSI    -->
<head>
	<title>TP3</title>
</head>
<body>
		<table border=0>
    <tr style="background:#00FFFF;">
        <th>numéro de commande</th>   <th>numéro de client</th>
        <th>Date de commande</th>    <th>Désignation d'article</th>  
        <th>Quantité de commande</th>  <th>prix unitaire</th>      
        <th>Date de livraison</th>    <th>Adresse du client</th>
        
    </tr>
<?php
try{
$fic=fopen("text.txt","r");
}catch(exception $e){
    die("erreur!!:".$e);
}

while($lignes=fgets($fic)){
    echo"<tr>";
    $var=explode("|",$lignes);
    
    foreach($var as $td){
        echo "<td>".$td."</td>";
    }
    echo"</tr>";
}
?>
</table>
</body>
</html>