<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Crypto-Money - Accueil</title>
        <link rel="stylesheet" type="text/css" href="../CSS/accueil.css">
        <link rel="shortcut icon" href="../IMG/logo_site.png">
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
                            <li class="active navbutt"><a href="accueil.php" title="Accueil"><img class="logo2" src="../IMG/accueil.png" alt="logo Accueil" height="20" width="20" />Accueil</a></li>
                            <li class="navbutt"><a href="histoire.php" title="Histoire"><img class="logo2" src="../IMG/histoire.png" alt="logo histoire" height="20" width="20" />Histoire</a></li>
                            <li class="navbutt"><a href="blockchain_minage.php" title="Blockchain / Minage"><img class="logo2" src="../IMG/blockchain-minage.png" alt="logo Minage"  height="20" width="20" />Blockchain / Minage</a></li>
                            <li class="navbutt"><a href="enjeux_economiques.php" title="Enjeux économiques"><img class="logo2" src="../IMG/enjeux_economiques.png" alt="logo Economie "  height="20" width="20" />Enjeux économiques</a></li>
                            <li class="navbutt"><a href="quiz.php" title="Quizz"><img class="logo2" src="../IMG/quiz.png" alt="logo Quizz" height="20" width="20"/>Quiz</a></li>
                            <li class="navbutt"><a href="contact.php" title="Contact"><img class="logo2" src="../IMG/mail.png" alt="logo Contact" height="20" width="20"/>Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <section id="section1">
            <div class="row">
                <div class="col-xs-12">
                    <article class="intro" style='font-size:2.55vw;'>
                        <p>Bienvenue sur <a href="accueil.php">Crypto-Money</a></p>
                        <p><a href="histoire.php">Histoire</a>, <a href="blockchain_minage.php">blockchain</a>, <a href="blockchain_minage.php">minage</a>, <a href="enjeux_economiques.php">enjeux économiques</a> et <a href="enjeux_juridiques.php">juridiques</a>... </p>
                        <p> Avec <a href="accueil.php">Crypto-Money</a>, les crypto-monnaies n'auront bientôt plus(ou presque plus) de secrets pour vous.</p>
                    </article>
                </div>
            </div>
            <a class="scroll" href="#section2"><img id="chevron" src="../IMG/Chevron.png" class="img-responsive center-block"> </a>
        </section>

		<section id="section2">
			<div class="rubrique-1 "><a href='histoire.php'><h1>Histoire des crypto-monnaies</h1><img class="rubrique img-responsive center-block" src="../IMG/Rubrique-1.jpg" alt="image histoire" height="400" width="800"/></a></div>
			<a class="scroll" href="#section3"><img id="chevron" src="../IMG/Chevron.png" class="img-responsive center-block"> </a>
		</section>

		<section id="section3">
			<div class="rubrique-2"><a href='blockchain_minage.php'><h1>Blockchain / Minage</h1><img class="rubrique img-responsive center-block" src="../IMG/Rubrique-2.jpg" alt="image blockchain" height="400" width="800"/></a></div>
			<a class="scroll" href="#section4"><img id="chevron" src="../IMG/Chevron.png" class="img-responsive center-block"> </a>
		</section>

		<section id="section4">
			<div class="rubrique-3"><a href='enjeux_economiques.php'><h1>Enjeux économiques des crypto-monnaies</h1><img class="rubrique img-responsive" src="../IMG/Rubrique-3.jpg" alt="image economie" height="400" width="800"/></a></div>
			<a class="scroll" href="#section5"><img id="chevron" src="../IMG/Chevron.png" class="img-responsive center-block"> </a>
		</section>

		<section id="section5">
			<div class="rubrique-4"><a href='enjeux_juridiques.php'><h1>Enjeux juridiques des crypto-monnaies</h1><img class="rubrique img-responsive center-block" src="../IMG/Rubrique-4.jpeg" alt="image droit" height="400" width="800"/></a></div>
		    <a class="scroll" href="#section6"><img id="chevron" src="../IMG/Chevron.png" class="img-responsive center-block"> </a>
		</section>

	    <section id="section6">
			<div class="rubrique-5"><a href='quiz.php'><h1>Quiz</h1><img class="rubrique img-responsive center-block" src="../IMG/Rubrique-5.jpeg" alt="image quiz" height="400" width="800"/></a></div>
            <a class="scroll" href="#section7"><img id="chevron" src="../IMG/Chevron.png" class="img-responsive center-block"> </a>
        </section>

        <section id="section7">
			<div class="rubrique-6"><a href='contact.php'><h1>Contact</h1><img class="rubrique img-responsive center-block" src="../IMG/Rubrique-6.jpg" alt="image contact" height="400" width="800" /></a></div>
		</section>

        <?php
            include("footer.php");
        ?>

        <script type="text/javascript" src="../JS/jquery.js"></script><script type="text/javascript" src="../JS/scroll.js"></script>

    </body>
</html>
