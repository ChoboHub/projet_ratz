	<?php
	// Connexion à la base de données
		require_once("fastConne.php");	
	$pseudo = $_POST['pseudo'];
	$message = $_POST['message'];	
	$sqlCommand = "INSERT INTO ratzblog (id, pseudo, message) VALUES(0, '$pseudo', '$message')"; 
	// Execute the query here now 
	$query = mysqli_query($link, $sqlCommand) or die (mysqli_error()); 
	mysqli_close($link); 
	
	// Insertion du message à l'aide d'une requête préparée

	// Redirection du visiteur vers la page du minichat
	echo '<meta http-equiv="refresh" content="0;url=ratzblog.php" />';	
	?>
