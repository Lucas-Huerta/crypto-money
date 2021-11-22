
<!DOCTYPE html>
<html lang="fr">

	<head>
		<title>Crypto-Money - Quiz</title>
		<link rel="shortcut icon" href="../IMG/logo_site.png">
		<link rel="stylesheet" type="text/css" href="../CSS/quiz.css">
	</head>

	<body>
		<div class="header">
			<nav class="navbar navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
					<button id="nav-toggle-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="accueil.php" title="Crypto-Money"><img src="../IMG/logo_site_navbar.png" class="logo3" alt="logo site">rypto-Money</a>
					</div>


					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="navbutt"><a href="accueil.php"><img class="logo2" src="../IMG/accueil.png" alt="logo Accueil" height="20" width="20" />Accueil</a></li>
							<li class="navbutt"><a href="histoire.php"><img class="logo2" src="../IMG/histoire.png" alt="logo H" height="20" width="20" />Histoire</a></li>
							<li class="navbutt"><a href="blockchain_minage.php" title="Lien actif"><img class="logo2" src="../IMG/blockchain-minage.png" alt="logo Minage"  height="20" width="20" />Blockchain / Minage</a></li>
							<li class="navbutt"><a href="enjeux_economiques.php"><img class="logo2" src="../IMG/enjeux_economiques.png" alt="logo Economie "  height="20" width="20" />Enjeux économiques</a></li>
							<li class="active navbutt"><a href="quiz.php"><img class="logo2" src="../IMG/quiz.png" alt="logo Quizz" height="20" width="20"/>Quiz</a></li>
							<li class="navbutt"><a href="contact.php" title="Contact"><img class="logo2" src="../IMG/mail.png" alt="logo Contact" height="20" width="20"/>Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<img src="../IMG/quizz2.png" class="img-responsive center-block" height="200" width="200">
		<div class="consigne">Bienvenue sur le quiz de Crypto-money. Ce quiz comporte 10 questions à réponse unique. Votre score sera disponible une fois toutes les réponses répondues. Bon quiz et bonne chance !</div>
			<div class="cadre">
				<div class="titre_quiz">
					<form method="post" action="quiz.php" >
						<?php
							$quest[1]="• Question 1 : En quelle année apparaît la première crypto-monnaie ?";
							$choice[1]=array("1989","1999","2001","2009");
							$ans_just[1]=$choice[1][3];

							$quest[2]="• Question 2 : Quelle est la crypto-monnaie dominante aujourd'hui ?";
							$choice[2]=array("Ripple (XRP)","Ethereum (ETH)","Bitcoin (BTC)","Litecoin (LTC)");
							$ans_just[2]=$choice[2][2];

							$quest[3]="• Question 3 : Qui est l'intrus ?";
							$choice[3]=array("NEO","NEM","YUAN","IOTA");
							$ans_just[3]=$choice[3][2];

							$quest[4]="• Question 4 : Combien y a-t-il de générations de crypto-monnaies ?";
							$choice[4]=array("2","3","4","5");
							$ans_just[4]=$choice[4][1];

							$quest[5]="• Question 5 : Quel est l'intervalle d'évolution de la difficulté de minage pour le Bitcoin ? ";
							$choice[5]=array("Tous les jours","Toutes les semaines","Toutes les 2 semaines","Tous les mois");
							$ans_just[5]=$choice[5][2];

							$quest[6]="• Question 6 : Quel est le pool de minage qui à la mi-janvier 2019 s'est fait hacker ? ";
							$choice[6]=array("Cryptopia","Dollarz","Nanopool","Aikapool");
							$ans_just[6]=$choice[6][0];

							$quest[7]="• Question 7 : Combien compte-t-on de crypto-monnaies différentes dans le monde en fin 2019 ?  ";
							$choice[7]=array("150","770","1652","2400");
							$ans_just[7]=$choice[7][3];

							$quest[8]="• Question 8 : Laquelle de ses plateformes n’est pas une plateforme d’échange de crypto-monnaie ? ";
							$choice[8]=array("Bittrex","Gatecoin","Netflix");
							$ans_just[8]=$choice[8][2];

							$quest[9]="• Question 9 : En 2019, la Chine prétend lancer sa cryptomonnaie pour supprimer l'argent liquide. Vrai ou faux ? ";
							$choice[9]=array("Vrai","Faux");
							$ans_just[9]=$choice[9][0];

							$quest[10]="• Question 10 : Est-il possible d’annuler une transaction ? ";
							$choice[10]=array("oui","non");
							$ans_just[10]=$choice[10][1];

							$nbquest=sizeof($quest);
							$score=0;
							
							if (isset($_POST["retour"])){
								echo "<br><center class='corrige'><br>Vous trouverez votre <a class='corrige' href=\"#score\">score</a> au bas de la page</center><br><hr>";
							}
							for ($i=1;$i<$nbquest+1;$i++){
								$rep_donne[$i] = false;
								$nbchoix=sizeof($choice[$i]);
								$no=$i+1;
								echo "<br><div class='taille'><center>$quest[$i]</center></div>";
								if (isset($_POST["retour"])){
									if (isset($_POST["bt"][$i])){
										$bt[$i] = $_POST["bt"][$i];
									}
									else $bt[$i] = "";
									}
								else $bt[$i] = "";
								for ($j=0;$j<$nbchoix;$j++){
									echo "<center><input type=\"radio\" name=\"bt[$i]\" value=\"bt[$j]\" ";
									if ($bt[$i]=="bt[$j]"){
										echo "checked";
										$k=$j;
										$rep_donne[$i]=true;
									}
									echo "></center><center><div class='reponse_check'>".$choice[$i][$j]."</div></center>";
								}
								echo "<br><hr>";
								if ($rep_donne[$i]){
									if ($choice[$i][$k]==$ans_just[$i]){
										$message[$i]="<center><div class='reponsejuste'>"."Réponse correcte ".$i."</div></center>";
										$score++;
									}
									else{
										$message[$i]="<center><div class='reponsefausse'>"."Réponse fausse; la bonne réponse était $ans_just[$i]". $i ."</div></center>";
									}
								echo $message[$i]."<br><hr>";
								}
							}
							if (isset($_POST["retour"])){
								echo "<br><center><a id=\"score\">Score : $score/$nbquest </a></center>";
								echo "<br><center>Cliquez ".'<a href="quizz.php">'."ici"."</a> pour rejouer</center><br><br>";
							}
							else{
								echo "<input type=\"hidden\" name=\"retour\" value=\"1\">";
								echo "<br><br><center><input type=\"submit\" value=\"Validez vos réponses\"></center><br><br>";
							}
						?>
					</form>
				</div>
			</div>
		</div>

		<?php
			include("footer.php");
		?>

	</body>
</html>
