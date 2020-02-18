<ul>
	<li><a href="./index.php">Accueil</a></li>
	<li><a href="./contact.php">Contact</a></li>
	<li><a href="./contacts.php">Liste des contacts mdr</a></li>
	<?php
		if (isset($_SESSION['utilisateur'])) {
			echo "bienvenue"." ".$_SESSION['utilisateur']['prenom'].' '.$_SESSION['utilisateur']['nom'];
		}else{
			echo "<li><a href=\"./seConnecter.php\">se connecter</a></li>";
		}
	
	?>
</ul>