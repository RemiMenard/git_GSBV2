<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Connexion</title>
    <link href="GSBcss.css" rel="stylesheet" type="text/css" />
  </head>


  <body>
		
		<header class="page-header">
			<div class='logo'>
				<a href="page_acceuille.php" class="img"><img src="image/logo_GSB.png" alt="logo"/></a>
			</div>
		</header><br><br><br><br><br><br>
		
		
		<center><img src="image/logo_GSB2.png"/></center>

        <div class="connexion">
            <form action="index.php" method="post" class="form-connexion">
                
                <strong><label for="nom_utilisateur">Entrez votre prénom : </label></strong>
                <input type="text" name="nom_utilisateur" id="nom" required>
                </br>
								
                <strong><label for="pass">Mot de passe :</label></strong>
                <input type="password" name="Mot_de_passe" required>
                       
                    <br/>
                    <br/>	
					<a href="renseignerFicheFrais.php">
						<input type="submit" name="connexion" value="connexion"/>
            </form>
        </div>


		
    <footer class="page-footer">
		</footer>
   
  </body>
</html>