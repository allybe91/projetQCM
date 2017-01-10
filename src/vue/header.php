<!DOCTYPE html>

PROUT !

<head>
	<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
	<link href="static/css/style_navigation.css" rel="stylesheet" />
	<link href="static/css/style_corps.css" rel="stylesheet" />
	<link href="static/css/style_corps_class.css" rel="stylesheet" />	
</head>

<header>
<div class="container">
	<div><img src="static/img/logo.png" /></div>
	<div><br /><br /><img src="static/img/catch_phrase.png" /></div>
	<div><img src="static/img/logoIUT.png" alt="logo IUT" /></div>
</div>
<ul id ="menu-demo2">
	<!--<li><a href="index.php">Accueil</a></li>
	<li><a href="themes.php">Thèmes</a></li>
	<li><a href="question_reponse.php">Questions/Réponses</a></li>
	<li><a href="vos_qcm.php">Vos QCMs</a></li>
	<li><a href="notes.php">Notes</a></li>-->
	<?php 
	switch($titre){
		//Accueil
		case "accueil" :
			echo '<li><a class="first-child" href="index.php">Accueil</a></li>';
			echo '<li><a href="themes.php">Thèmes</a>';
			echo '<li><a href="question_reponse.php">Questions/Réponses</a></li>';
			echo '<li><a href="vos_qcm.php">Vos QCMs</a></li>';
			echo '<li><a href="groupe.php">Groupe</a></li>';
			echo '<li><a href="notes.php">Notes</a></li>';
			break;
		case "theme" :
			echo '<li><a href="index.php">Accueil</a></li>';
			echo '<li><a class="first-child" href="themes.php">Thèmes</a></li>';
			echo '<li><a href="question_reponse.php">Questions/Réponses</a></li>';
			echo '<li><a href="vos_qcm.php">Vos QCMs</a></li>';
			echo '<li><a href="groupe.php">Groupe</a></li>';
			echo '<li><a href="notes.php">Notes</a></li>';
			break;
		case "question" : 
			echo '<li><a href="index.php">Accueil</a></li>';
			echo '<li><a href="themes.php">Thèmes</a></li>';
			echo '<li><a class="first-child" href="question_reponse">Questions/Réponses</a></li>';
			echo '<li><a href="vos_qcm.php">Vos QCMs</a></li>';
			echo '<li><a href="groupe.php">Groupe</a></li>';
			echo '<li><a href="notes.php">Notes</a></li>';
			break;
		case "qcm" :
			echo '<li><a href="index.php">Accueil</a></li>';
			echo '<li><a href="themes.php">Thèmes</a></li>';
			echo '<li><a href="question_reponse.php">Questions/Réponses</a></li>';
			echo '<li><a class="first-child" href="vos_qcm.php">Vos QCMs</a></li>';
			echo '<li><a href="groupe.php">Groupe</a></li>';
			echo '<li><a href="notes.php">Notes</a></li>';
			break;
		case "groupe" :
			echo '<li><a href="index.php">Accueil</a></li>';
			echo '<li><a href="themes.php">Thèmes</a></li>';
			echo '<li><a href="question_reponse.php">Questions/Réponses</a></li>';
			echo '<li><a href="vos_qcm.php">Vos QCMs</a></li>';
			echo '<li><a class="first-child" href="groupe.php">Groupe</a></li>';
			echo '<li><a href="notes.php">Notes</a></li>';
			break;
		case "notes" :
			echo '<li><a href="index.php">Accueil</a></li>';
			echo '<li><a href="themes.php">Thèmes</a></li>';
			echo '<li><a href="question_reponse.php">Questions/Réponses</a></li>';
			echo '<li><a href="vos_qcm.php">Vos QCMs</a></li>';
			echo '<li><a href="groupe.php">Groupe</a></li>';
			echo '<li><a class="first-child" href="notes.php">Notes</a></li>';
			break;
		
	}
	?>  
</ul>
</header>