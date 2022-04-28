<!DOCTYPE html>
<?php

$source = "mysql:host=localhost;dbname=gsbv2";
$utilisateur = "admin";
$mot_de_passe= "password";

$db = new PDO($source, $utilisateur, $mot_de_passe);

$etape=$_POST["etape"];
$km=$_POST["km"];
$nuit=$_POST["nuit"];
$repasResto=$_POST["RepasResto"];
$repasRepresentation=$_POST["repasRepresentation"];
$fleuriste=$_POST["fleuriste"];
echo "bonjour $etape";
echo "<br>";
echo "_etape".$etape."_km".$km."RepasResto".$repasResto."repasRepresentation".$repasRepresentation."fleuriste".$fleuriste.

$sql = "INSERT INTO FicheFrais (etape, km, nuit, repasResto, repasRepresentation, fleuriste) VALUES (:P1,P2,:P3,:P4,:P5,:P6)";

?>
    <head>
        <title>gsbV2 - Renseigner fiche frais</title>
        <meta charset="utf-8"/>
        <link href="GSBcss.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
	
		<p><strong>Renseignez votre Fiche frais :</strong></p>
		
		<header class="page-header">
            <div class='logo'>
              <a href="page_acceuille.php" class="img"><img src="image/logo_GSB.png" alt="logo"/></a>
            </div>
		</header><br><br><br><br><br><br>

		<!--Tableau Fiche frais à remplire (php)-->
		<p><strong>Renseignez votre Fiche frais :</strong></p>
        <center>
		<form action="ConsulterFicheFrais.php" methode="POST">
		<div class="formulaires">
		<table>
		<p><strong><u>Frait forfaitaire :</u></strong></p>
				<label for="etape">
					Forfait étape:<input type="post" id="name" name="etape" minlength="1">
				</label>
			</br>
				<label for="km">
					Frais kilométrique :<input type="post" id="name" name="km" minlength="1">
				</label>
			</br>
				<label for="nuit">
					Nuitée hotel: <input type="post" id="name" name="nuit" minlength="1">
				</label>
			</br>
				<label for="repasResto">
					Repas restaurant: <input type="post" id="name" name="repasResto" minlength="1">
				</label>
			</br>
			<p><strong><u>Frait hors forfaitaire :</u></strong></p>
				<label for="repasRepresentation">
					Repas représentation : <input type="post" id="name" name="repasRepresentation" minlength="1">
				</label>
			</br>
				<label for="fleuriste">
					Achat fleuriste soirée "Melidog": <input type="post" id="name" name="fleuriste" minlength="1">
				</label>
			</table>
			<a href="ConsulterFicheFrais.php">
				<input type="submit" value="Confirmer"/>
		</form>	
		<br>
		<br>
			<a href="ConsulterFicheFrais.php">
				<input type="submit" value="Voir les fiches frais"/> 
		</center>
		</div>
	
		
		<footer class="page-footer">
		</footer>
		
		
    </body>
</html>