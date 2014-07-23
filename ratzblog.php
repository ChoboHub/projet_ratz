<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title>Ratz Beat Production</title>
		<link href="ratzblog.css" rel="stylesheet" type="text/css" />
		<script src="themes/1/js-image-slider.js" type="text/javascript"></script>
		</head>
    
    <!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
    <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
    <!--[if IE 8 ]><body class="ie8"><![endif]-->
    <!--[if IE 9 ]><body class="ie9"><![endif]-->
    <!--[if !IE]><!--><body><!--<![endif]-->
        <div id="bloc_page">
			<header>
			
				<img id="imgratzintro" src="images/headerbg2.jpg" alt=""/>
				
				<div id="pub1"></div>
	
				<div id="navmenu">
					<nav>
						<ul>		
							<li><a href="../1.Home/ratzhome.html">Home</a></li>
							<li><a href="../2.Beats/ratzbeats.html">Beats</a></li>
							<li><a href="../1.Home/ratzhome.html">Contest</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="../5.Contact/ratzcontact.html">Contact</a></li>
						</ul>		
					</nav>
				</div>
				
			</header>

			<section>
		
			<div id="info">
				 <h1> What you think of my lastest beat? </h1>
				 <h2> Any suggestion is welcome!</h2>
			</div>		
			
			<form action="ratzblog_post.php" method="post">
				<p>
				<label for="pseudo"> Pseudo : </label> <input type="text" name="pseudo" id="pseudo" /><br>
				</p>
				<p>
				 Message :
				 <textarea name="message" id="message" rows="4" cols="50"></textarea> <br />

				<input type="submit" value="Envoyer" />
			</p>
			</form>
			
			<?php
			// Connexion à la base de données
				require_once("fastConne.php");			

			// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
			$res = mysqli_query($link, "SELECT pseudo, message FROM ratzblog ORDER BY ID DESC LIMIT 0, 8") or die("Echec de la requête lister");			
			while ($donnees = mysqli_fetch_array($res))			
			{
				echo '<div id="commentaire"><p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p></div>';
			}
			
			/* Libération du résultat */
			mysqli_free_result($res);
		
			?>	
			</section>
			
			<footer>
				<h1> Straight from Montreal, in CDN. Can produce beat on demand</h1>
				<p> @2013 - Product and Design by MontrealWebDesigners.com</p>
			</footer>
		</div>
	</body>
</html>

		
